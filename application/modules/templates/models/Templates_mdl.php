

<?php

      class Templates_mdl extends CI_Model{
            public function __construct(){
                parent:: __construct();
                // $this->load->database();
            }

            public function get_categories($id = FALSE){
                if($id === FALSE){

                    $query = $this->db->get('categories');
                    return $query->result_array();
                }
                    $query = $this->db->get_where('cotegories', array('category_id' => $id));
                    return $query->row_array();
            }


            // public function get_categories(){
            //     $this->db->select('*');
            //     $this->db->from('categories');
            //     $query = $this->db->get();
            //     return $query;
            // }
      }