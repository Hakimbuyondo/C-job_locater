<?php

      class Jobs extends C_Controller{
        public function __construct(){
            parent:: __construct();
        }

        // Getting all jobs and display on the dashboard
        public function index(){
            
            $data['title'] = "Jobs List";
            $this->load->model('jobs_mdl');
            $data['jobs'] = $this->jobs_mdl->get_jobs();

            $data['link'] = "jobs/add";  // Use this in page header only
            $data['add'] = "Post a Job"; // Use this in page header only

            $this->load->view('templates/header', $data);
            $this->load->view('jobs', $data);
            $this->load->view('templates/footer');

        }

        public function job_view($id){

            // If you are not logged in you can not paypass and do anything risky to the system
            if(!$this->session->userdata('logged_in')){

                // Set flash Message
                $this->session->set_flashdata('login_needed', 'To perform any action in this system you need to be logged in ');
                redirect('users/login');
            }

            $this->load->model('jobs_mdl');
            $data['job'] = $this->jobs_mdl->get_jobs($id);
            $data['workers'] = $this->jobs_mdl->get_workers();

                if(empty($data['job'])){
                    echo "False";
                }
                // echo "True";

                $data['title'] = $data['job']['title_1'];

                $data['link'] = "#application_form";  // Use this in page header only
                $data['add'] = "Apply Now";  // Use this in page header only

                $this->load->view('templates/header', $data);
                $this->load->view('jobs/job_view', $data);
                $this->load->view('templates/footer');


        }

        public function apply(){

                // If you are not logged in you can not paypass and do anything risky to the system
                if(!$this->session->userdata('logged_in')){

                    // Set flash Message
                    $this->session->set_flashdata('login_needed', 'To perform any action in this system you need to be logged in ');
                    redirect('users/login');
                }

            $this->form_validation->set_rules('message', "Message", 'required');

            if($this->form_validation->run() === FALSE){

                $this->load->view('templates/header', $data);
                $this->load->view('jobs/job_view', $data);
                $this->load->view('templates/footer');

            }else{
                // Upload CV
                $config['upload_path'] = "./assets/cv/workers_cv";
                $config['allowed_types'] = "jpg|gif|png|pdf";
                $config['max_size'] = "5000";
                $config['max_width'] = "0";
                $config['max_height'] = "0";

                $this->load->library('upload', $config);
                if(!$this->upload->do_upload()){

                    $errors = array('error' => $this->upload->display_errors());
                    $cv = "No attached file";

                }else{
                    $data = array('upload_data' => $this->upload->data());
                    $cv = $_FILES['userfile']['name'];
                }

                $this->load->model('jobs_mdl');
                $this->jobs_mdl->apply_job($cv);

                $this->session->set_flashdata('application_sent', 'Application was sent Successfuly'); // Flash message
                redirect('jobs');
            }
        }

        public function categories(){

            $this->load->model('jobs_mdl');
            $data['categories'] = $this->jobs_mdl->get_categories('category_name');
            $data['title'] = "Job Categories";

            $data['link'] = "";
            $data['add'] = "";

            $this->load->view('templates/header', $data);
            $this->load->view('categories', $data);
            $this->load->view('templates/footer', $data);
        }

        // Add job to jobs table
        public function add(){

            
                // If you are not logged in you can not paypass and do anything risky to the system
                if(!$this->session->userdata('logged_in')){

                    // Set flash Message
                    $this->session->set_flashdata('login_needed', 'To perform any action in this system you need to be logged in ');
                    redirect('users/login');
                }

            $data['title'] = "Post a Job Here";
            $this->load->model('jobs_mdl');
            $data['company_list'] = $this->jobs_mdl->get_company_list();
            $data['job_list'] = $this->jobs_mdl->get_jobs(); // getting jobs list from the model

            $data['jobs_holder1'] = $this->jobs_mdl->get_jobs_holder1(); // Getting list of jobs from jobs_holder1

                $this->form_validation->set_rules('job_description', 'Job Description should not be empty ---!!!', 'required');
                    if($this->form_validation->run() === FALSE){

                        $data['link'] = ""; // Use this in page header only
                        $data['add'] = ""; // Use this in page header only
            
                        $this->load->view('templates/header', $data);
                        $this->load->view('jobs/add', $data);
                        $this->load->view('templates/footer');

                    }else{
                        $this->jobs_mdl->add_job();

                        $this->session->set_flashdata('job_added', 'Your Job was Posted successfuly'); // Flash message
                        redirect('jobs');
                    }
        }

        // Delete a row from jobs table
        public function delete($id){

            
                // If you are not logged in you can not paypass and do anything risky to the system
                if(!$this->session->userdata('logged_in')){

                    // Set flash Message
                    $this->session->set_flashdata('login_needed', 'To perform any action in this system you need to be logged in ');
                    redirect('users/login');
                }
                
            $this->load->model('jobs_mdl');
            $this->jobs_mdl->delete_job($id);

            $this->session->set_flashdata('job_deleted', 'Job was Deleted'); // Flash message
            redirect('jobs');
        }
    }