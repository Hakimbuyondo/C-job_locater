<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Templates extends C_Controller{

		public function __construct(){
			parent:: __construct();
		}

		public function index(){

			$this->load->model('templates_mdl');
			$data['categories'] = $this->templates_mdl->get_categories();

			$this->load->view('templates/header', $data);
			$this->load->view('templates', $data);
			$this->load->view('templates/footer');
		}

}
