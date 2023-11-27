

<?php

      class Workers extends C_Controller{
            public function __construct(){
                parent:: __construct();
            }

            public function index(){

                $data['title'] = "Other People";
                $this->load->model('workers_mdl');
                $data['workers'] = $this->workers_mdl->get_workers();

                $data['link'] = "workers/register";  // Use this in page header only
                $data['add'] = "Register Now";  // Use this in page header only

                $this->load->view('templates/header', $data);
                $this->load->view('workers', $data);
                $this->load->view('templates/footer');

            }

            public function register(){

                
                    // If you are not logged in you can not paypass and do anything risky to the system
                    if(!$this->session->userdata('logged_in')){

                        // Set flash Message
                        $this->session->set_flashdata('login_needed', 'To perform any action in this system you need to be logged in ');
                        redirect('users/login');
                    }

                $this->load->model('workers_mdl');

                $data['title'] = "Register Worker";

                    $this->form_validation->set_rules('name', 'Name', 'required');
                    $this->form_validation->set_rules('age', 'Age', 'required');
                    $this->form_validation->set_rules('gender', 'Gender', 'required');
                    $this->form_validation->set_rules('contacts', 'Contacts', 'required');
                    $this->form_validation->set_rules('description', 'Description', 'required');
                        
                        if($this->form_validation->run() === FALSE){

                            $this->load->model('workers_mdl');
            
                            $data['title'] = "Register Worker";
                            $data['link'] = "";  // Use this in page header only
                            $data['add'] = "";  // Use this in page header only

                            $this->load->view('templates/header', $data);
                            $this->load->view('workers/register', $data);
                            $this->load->view('templates/footer');

                        }else{

                            // Upload Image here
                            $config['upload_path'] = "./assets/images/img/workers_images";
                            $config['allowed_types'] = "gif|jpg|png";
                            $config['max_size'] = "4090";
                            $config['max_width'] = "1200";
                            $config['max_height'] = "1200";

                            $this->load->library('upload', $config);

                                if(!$this->upload->do_upload()){
                                    $errors = array('error' => $this->upload->display_errors());
                                    $personal_image = 'avatar.png';
                                }else{
                                    $data = array('upload_data' => $this->upload->data());
                                    $personal_image = $_FILES['userfile']['name'];
                                }

                                $this->load->model('workers_mdl');
                                $this->workers_mdl->register_worker($personal_image);

                                $this->session->set_flashdata('worker_registered', 'Your Information was successfuly inserted'); // Flash message
                                redirect('workers');

                        }


            }
            
            public function delete($id){

                
                // If you are not logged in you can not paypass and do anything risky to the system
                if(!$this->session->userdata('logged_in')){

                    // Set flash Message
                    $this->session->set_flashdata('login_needed', 'To perform any action in this system you need to be logged in ');
                    redirect('users/login');
                }

                $this->load->model('workers_mdl');
                $this->workers_mdl->delete_worker($id);

                $this->session->set_flashdata('worker_deleted', 'Worker Information deleted'); // Flash message
                redirect('workers');
            }
      }