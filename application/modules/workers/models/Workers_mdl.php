

<?php

      class Workers_mdl extends CI_Model{

            public function __construct(){
                parent:: __construct();
                // $this->load-<database();
            }

            // getting data from the workers table
            public function get_workers(){
                $this->db->select('*');
                $this->db->from('workers');
                $this->db->join('users', 'users.user_id = workers.user_id', 'left');
                $this->db->order_by('workers.name');
                $query = $this->db->get();
                return $query;
            }

            public function register_worker($personal_image){
                
                $data = array(
                    'name' => $this->input->post('name'),
                    'age' => $this->input->post('age'),
                    'gender' => $this->input->post('gender'),
                    'user_id' => $this->session->userdata('user_id'),
                    'contacts' => $this->input->post('contacts'),
                    'description' => $this->input->post('description'),
                    'image' => $personal_image
                );

                $this->db->insert('workers', $data);
                return true;
            }

            public function delete_worker($id){
                $this->db->where('worker_id', $id);
                $this->db->delete('workers');
                return true;
            }
      }