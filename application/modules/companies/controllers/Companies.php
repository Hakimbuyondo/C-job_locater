

<?php

      class Companies extends C_Controller{
            public function __construct(){
                parent:: __construct();
            }

            public function index(){

                $data['title'] = "Companies and Industries";
                $this->load->model('companies_mdl');
                $data['companies'] = $this->companies_mdl->get_companies();

                $data['link'] = "companies/add"; // Use this in page header only
                $data['add'] = "Add Company";// Use this in page header only

                $this->load->view('templates/header', $data);
                $this->load->view('companies', $data);
                $this->load->view('templates/footer');
                
            }

            public function add(){

                
                    // If you are not logged in you can not paypass and do anything risky to the system
                    if(!$this->session->userdata('logged_in')){

                        // Set flash Message
                        $this->session->set_flashdata('login_needed', 'To perform any action in this system you need to be logged in ');
                        redirect('users/login');
                    }

                $data['title'] = "Add Company Here";
                //$this->load->model('companies_mdl');
                //$this->companies_mdl->add_company();

                $this->form_validation->set_rules('company_name', 'Company_name', 'required');
                $this->form_validation->set_rules('company_address', 'Company_address', 'required');
                $this->form_validation->set_rules('number_of_employees', 'Number_of_employees', 'required');
                $this->form_validation->set_rules('company_contacts', 'Company_contacts', 'required');
                $this->form_validation->set_rules('company_emails', 'Company_emails', 'required');
                $this->form_validation->set_rules('company_description', 'Company_description', 'required');
                $this->form_validation->set_rules('company_websites', 'Company_websites', 'required');
                // $this->form_validation->set_rules('userfile', 'Company Image', 'required');

                    if($this->form_validation->run() === FALSE){

                        $data['title'] = "Add Company Here";

                        $data['link'] = ""; // Use this in page header only
                        $data['add'] = "";  // Use this in page header only
        
                        $this->load->view('templates/header', $data);
                        $this->load->view('companies/add', $data);
                        $this->load->view('templates/footer');
                    }else{



                        // Upload the image here
                        $config['upload_path'] = './assets/images/img/company_images';
                        $config['allowed_types'] = 'gif|jpg|png';
                        $config['max_size'] = '4090';
                        $config['max_width'] = '1200';
                        $config['max_height'] = '1200';

                        $this->load->library('upload', $config);

                        if(!$this->upload->do_upload()){
                            $errors = array('error' => $this->upload->display_errors());
                            $post_image = "company.png";
                        }else{

                            $data = array('upload_data' => $this->upload->data());
                            $post_image = $_FILES['userfile']['name'];
                        }

                        // Upload the image here


                        $this->load->model('companies_mdl');
                        $this->companies_mdl->add_company($post_image);

                        $this->session->set_flashdata('company_registered', 'Your Company was added Successfuly'); // Flash message
                        redirect('companies');
                    }
            }


            public function delete($id){

                
                    // If you are not logged in you can not paypass and do anything risky to the system
                    if(!$this->session->userdata('logged_in')){

                        // Set flash Message
                        $this->session->set_flashdata('login_needed', 'To perform any action in this system you need to be logged in ');
                        redirect('users/login');
                    }
                
                $this->load->model('companies_mdl');
                $this->companies_mdl->delete_company($id);

                $this->session->set_flashdata('company_deleted', 'Company was Deleted'); // Flash message
                redirect('companies');
            }


            public function edit($id){

                
                    // If you are not logged in you can not paypass and do anything risky to the system
                    if(!$this->session->userdata('logged_in')){

                        // Set flash Message
                        $this->session->set_flashdata('login_needed', 'To perform any action in this system you need to be logged in ');
                        redirect('users/login');
                    }

                $data['title'] = "Edit Company Info";
                $this->load->model('companies_mdl');
                $data['edit'] = $this->companies_mdl->get_companies($id);

                    if(empty($data['edit'])){

                        echo "Error";

                    }else{

                        $data['link'] = ""; // Use this in page header only
                        $data['add'] = ""; // Use this in page header only
        
                        $this->load->view('templates/header', $data);
                        $this->load->view('companies/edit', $data);
                        $this->load->view('templates/footer');

                    }

            }

            public function update(){

                
                    // If you are not logged in you can not paypass and do anything risky to the system
                    if(!$this->session->userdata('logged_in')){

                        // Set flash Message
                        $this->session->set_flashdata('login_needed', 'To perform any action in this system you need to be logged in ');
                        redirect('users/login');
                    }

                // Update Image from Here
                $config['upload_path'] = './assets/images/img/company_images';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '40680';
                $config['max_width'] = '1200';
                $config['max_height'] = '1200';

                $this->load->library('upload', $config);

                if(!$this->upload->do_upload()){
                    $errors = array('error' => $this->upload->display_errors());
                    $update_image = "company.png";
                }else{
                    $data = array('upload_data' => $this->upload->data());
                    $update_image = $_FILES['userfile']['name'];
                }
                // Update Image ends here


                $this->load->model('companies_mdl');
                $this->companies_mdl->edit_company_info($update_image);

                $this->session->set_flashdata('company_edited', 'Company info was edited'); // Flash message
                redirect('companies');
            }
      }