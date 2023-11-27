

<?php

     class Dashboard extends C_Controller{
        public function __construct(){
            parent:: __construct();
        }

        // Dashboard is here
        public function index(){

            $data['title'] = "Dashboard";
            $this->load->model('dashboard_mdl');
            $data['companies'] = $this->dashboard_mdl->get_companies()->num_rows(); // getting the number of rows from companies table
            $data['company_data'] = $this->dashboard_mdl->get_companies(); // getting the company name

            $data['jobs_count'] = $this->dashboard_mdl->get_jobs_count(); //->num_rows(); // you can count the table rows from here
            $data['jobs'] = $this->dashboard_mdl->get_jobs(); // getting all data from jobs table
            $data['workers'] = $this->dashboard_mdl->get_workers(); // getting the number of rows from workers table
            $data['categories'] = $this->dashboard_mdl->get_categories(); // getting the number of rows from categories tatbe
            //$data['companies'] = $this->dashboard_mdl->get_companies();

            $data['link'] = ""; // Use this in page header only
            $data['add'] = ""; // Use this in page header only

            $this->load->view('templates/header', $data);
            $this->load->view('dashboard', $data);
            $this->load->view('templates/footer');
        }
     }