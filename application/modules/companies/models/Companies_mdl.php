

<?php

       class Companies_mdl extends CI_Model{
            public function __construct(){
                parent:: __construct();
                // $this->load->database();
            }

            public function get_companies($id = FALSE){

                if($id === FALSE){

                    $this->db->order_by('company_name');
                    $query = $this->db->get('companies');
                    return $query->result_array();
                }
                    $query =  $this->db->get_where('companies', array('company_id' => $id ));
                    return $query->row_array();
            }

            // public function get_companies($id = FALSE){
            //     $this->db->select('*');
            //     $this->db->from('companies');
            //     $query = $this->db->get();
            //     return $query;
            // }

            public function add_company($post_image){
                
                $data = array(

                    'company_name' => $this->input->post('company_name'),
                    'company_address' => $this->input->post('company_address'),
                    'company_phones' => $this->input->post('company_contacts'),
                    'number_of_employees' => $this->input->post('number_of_employees'),
                    'company_emails' => $this->input->post('company_emails'),
                    'company_description' => $this->input->post('company_description'),
                    'user_id' => $this->session->userdata('user_id'),
                    'company_website' => $this->input->post('company_websites'),
                    'company_logo' => $post_image

                );

                $this->db->insert('companies', $data);
                return true;
            }


            public function delete_company($id){
                $this->db->where('company_id', $id);
                $this->db->delete('companies');
                return true;
            }


            public function edit_company_info($update_image){

                $data = array(

                    'company_name' => $this->input->post('company_name'),
                    'company_address' => $this->input->post('company_address'),
                    'company_phones' => $this->input->post('company_contacts'),
                    'number_of_employees' => $this->input->post('number_of_employees'),
                    'company_emails' => $this->input->post('company_emails'),
                    'company_description' => $this->input->post('company_description'),
                    'company_website' => $this->input->post('company_websites'),
                    'company_logo' => $update_image

                );

                $this->db->where('company_id', $this->input->post('id'));
                $this->db->update('companies', $data);
                return true;
            }
            
       }