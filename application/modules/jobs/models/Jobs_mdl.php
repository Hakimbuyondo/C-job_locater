

<?php

      class Jobs_mdl extends CI_Model{
            public function __construct(){
                parent:: __construct();
                // $this->load->database();
            }

            // Getting companies data from the companies table
            public function get_company_list(){
                $this->db->select('*');
                $this->db->from('companies');
                $query = $this->db->get();
                return $query;
            }

            // note: getting jobs list from the sub_categories table
            public function get_jobs($id = FALSE){

                if($id === FALSE){

                    $this->db->select('*');
                    $this->db->from('jobs');
                    $this->db->order_by('jobs.job_id');
                    $this->db->join('jobs_holder_1', 'jobs_holder_1.holder1_id = jobs.holder1_id', 'left');
                    $this->db->join('companies', 'companies.company_id = jobs.company_id', 'left');
                    $this->db->join('categories', 'categories.category_id = jobs_holder_1.category_id', 'left');
                    $this->db->join('workers', 'workers.worker_id = jobs.worker_id', 'left');
                    $this->db->join('users', 'users.user_id = jobs.user_id', 'left');
                    $query = $this->db->get();
                    return $query;

                }else{
                    
                    $this->db->join('jobs_holder_1', 'jobs_holder_1.holder1_id = jobs.holder1_id', 'left');
                    $this->db->join('companies', 'companies.company_id = jobs.company_id', 'left');
                    $this->db->join('categories', 'categories.category_id = jobs_holder_1.category_id', 'left');
                    $this->db->join('workers', 'workers.worker_id = jobs.worker_id', 'left');
                    $this->db->join('users', 'users.user_id = jobs.user_id', 'left');


                    $query = $this->db->get_where('jobs', array('job_id' => $id));
                    return $query->row_array();
                }


            }

            public function apply_job($cv){
                $data = array(
                    'message' => $this->input->post('message'),
                    'job_id' => $this->input->post('job_id'),
                    'company_id' => $this->input->post('company_id'),
                    'worker_id' => $this->input->post('worker_id'),
                    'cv_document' => $cv
                );
                $this->db->insert('job_applications', $data);
                return true;
            }

            // getting all the data from jobs table
        //     public function get_jobs($id = FALSE){

        //         if($id === FALSE){
                
        //             $this->db->order_by('jobs.job_title');
        //             $this->db->join('companies', 'companies.company_id = jobs.company_id');
        //             $this->db->join('categories', 'categories.category_id = jobs.category_id');

        //             $query = $this->db->get('jobs');
        //             return $query->result_array();
        //         }
        //             $query = $this->db->get_where('jobs', array('job_id' => $id));
        //             return $query->row_array();
        // }

            // Adding a job to jobs table
            public function add_job(){

                $data = array(
                    'holder1_id' => $this->input->post('holder1'),
                    'job_description' => $this->input->post('job_description'),
                    'user_id' => $this->session->userdata('user_id'),
                    'company_id' => $this->input->post('company_id')
                );
                $this->db->insert('jobs', $data);
                return true;
            }

            public function get_workers(){
                $this->db->select('*');
                $this->db->from('workers');
                $this->db->order_by('name');
                $query = $this->db->get();
                return $query;
            }

            // Getting all job categories
            public function get_categories($category_name){
                $this->db->select('*');
                $this->db->from('categories');
                $this->db->order_by($category_name);
                $query = $this->db->get();
                return $query;
            }

            // Delete a Row from jobs table
            public function delete_job($id){
                $this->db->where('job_id', $id);
                $this->db->delete('jobs');
                return true;
            }


            // Getting all the jobs fron jobs_holder_1 table
            public function get_jobs_holder1(){
                $this->db->select('*');
                $this->db->from('jobs_holder_1');
                $this->db->order_by('title_1');
                $query = $this->db->get();
                return $query;
            }

      }