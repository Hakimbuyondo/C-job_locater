
<?php
     
        class Dashboard_mdl extends CI_Model{
            public function __construct(){
                parent:: __construct();
                // $this->load->database();
            }

            // getting all the data from companies tabel and return number of rows
            public function get_companies(){
                $this->db->select('*');
                $this->db->from('companies');
                $query = $this->db->get();
                return $query;
            }

            // getting all the data from jobs tabel and return number of rows
            public function get_jobs_count(){
                $this->db->select('*');
                $this->db->from('jobs');
                $query = $this->db->get();
                return $query->num_rows();
            }

            // note: getting jobs from jobs table
            public function get_jobs(){
                $this->db->select('*');
                $this->db->from('jobs');
                $this->db->join('jobs_holder_1', 'jobs_holder_1.holder1_id = jobs.holder1_id', 'left');
                $this->db->join('companies', 'companies.company_id = jobs.company_id', 'left');
                $this->db->join('categories', 'categories.category_id = jobs_holder_1.category_id', 'left');
                $this->db->limit(10);
                $query = $this->db->get();
                return $query;
            }

            // getting all the data from persons tabel and return number of rows
            public function get_workers(){
                $this->db->select('*');
                $this->db->from('workers');
                $query = $this->db->get();
                return $query->num_rows();
            }

            // getting all the data from categories tabel and return number of rows
            public function get_categories(){
                $this->db->select('*');
                $this->db->from('categories');
                $query = $this->db->get();
                return $query->num_rows();
            }
        }