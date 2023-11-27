

<?php

      class Users_mdl extends CI_Model{

            public function __construct(){
                parent:: __construct();
                $this->load->database();
            }

            public function register_user($password_encryption){
                // Creating a data array that will insert our data into the database
                $data = array(
                    'full_name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'username' => $this->input->post('username'),
                    'zip_code' => $this->input->post('zip_code'),
                    'password' => $password_encryption
                );
                $this->db->insert('users', $data);
                return true;
            }

            // Create a login Method
            public function login($username, $password){
                // validate
                $this->db->where('username', $username);
                $this->db->where('password', $password);
                
                $results = $this->db->get('users');

                    if ($results->num_rows() == 1) {
                        return $results->row(0)->user_id;
                    }
                    else{
                        return false;
                    }
            }

            // Check if username exists
            public function check_username($username){
                $query = $this->db->get_where('users', array('username' => $username));

                    if(empty($query->row_array())){
                        return true;
                    }else{
                        return false;
                    }
            }
      }