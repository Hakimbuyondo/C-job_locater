

<?php

      class Users extends C_Controller{

            // Register User
            public function register(){

                $data['title'] = " SIGN UP";
                $this->load->model('users_mdl');

                $this->form_validation->set_rules('name', "Name", 'required');
                $this->form_validation->set_rules('email', "Email", 'required');
                $this->form_validation->set_rules('username', "Username", 'required'); // |callback_check_username not on
                $this->form_validation->set_rules('password', "Password", 'required');
                $this->form_validation->set_rules('password2', "Confirm Password", 'matches[password]');



                    if($this->form_validation->run() === FALSE){

                        $this->load->view('templates/user_templates/users_header');
                        $this->load->view('users/register', $data);
                        $this->load->view('templates/user_templates/users_footer');

                    }else{

                        // Password Encryption
                        $password_encryption = md5($this->input->post('password'));

                        $this->load->model('users_mdl');
                        $this->users_mdl->register_user($password_encryption); // pass the password to the users model

                        // Set flash Message
                        $this->session->set_flashdata('user_registered', 'Registration Was Successfull');
                        redirect('users/login');
                        
                    }
                

            }


            // Login User
            public function login(){

                $data['title'] = " SIGN IN";
                $this->load->model('users_mdl');

                $this->form_validation->set_rules('username', "Username", 'required');
                $this->form_validation->set_rules('password', "Password", 'required');



                    if($this->form_validation->run() === FALSE){

                        $this->load->view('templates/user_templates/users_header');
                        $this->load->view('users/login', $data);
                        $this->load->view('templates/user_templates/users_footer');

                    }else{
                        
                        $username = $this->input->post('username');  // Getting the username
                        $password = md5($this->input->post('password'));  //Getting and encrypt the password

                            // Login User
                            $user_id = $this->users_mdl->login($username, $password);

                                if($user_id){
                                    // create session
                                    $user_data = array(
                                        'user_id' => $user_id,
                                        'username' => $username,
                                        'logged_in' => true
                                    );

                                    $this->session->set_userdata($user_data);
                                    // Set flash Message
                                    $this->session->set_flashdata('user_loggedin', 'You are now logged in');
                                    redirect('dashboard');

                                }else{
                                    // Set flash Message
                                    $this->session->set_flashdata('login_failed', 'Invalid Login Details');
                                    redirect('users/login');
                                }
                        
                    }
                

            }

            // Log out function
            public function logout(){
                // unset user data
                $this->session->unset_userdata('logged_in');
                $this->session->unset_userdata('user_id');
                $this->session->unset_userdata('username');

                // Set flash Message
                $this->session->set_flashdata('logged_out', 'You are now logged out');
                redirect('users/login');

            }

            // Check if Username exists or not
            function check_username($username){
                $this->form_validation->set_message('check_username', '<p style="color: red;">That name is Already Taken</p>');

                    if ($this->users_mdl->check_username($username)) {
                        return true;
                    }
                    else{
                        return false;
                    }
            }

      }