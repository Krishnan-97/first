<?php 
class Pages extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('insert_model');
	}
	public function view($page = 'page_1'){
		if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
			show_404();
		}

		$data['title'] = ucfirst($page);
		
		$this->load->view('templates/header');
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer');
	}

	public function create(){
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('age','Age','required');
		if($this->form_validation->run() === FALSE){
			echo('Error');
		}else{
			
			
			$this->load->view('templates/header');
		    $this->load->view('pages/page_1');
			$this->load->view('templates/footer');
			$this->insert_model->create_file();
		}
		
			
			
		
	}

	public function dispdata(){
		$result['data']=$this->insert_model->displayrecords();
		$result1['data']=$this->insert_model->displayrecords1();
		$result2['data']=$this->insert_model->displayrecords2();
		$this->load->view('templates/header');
		$this->load->view('pages/page_2',$result);
		$this->load->view('pages/page_3',$result1);
		$this->load->view('pages/page_4',$result2);
		$this->load->view('templates/footer');
	}

	public function brian(){


		$this->load->view('templates/header');
		$this->load->view('pages/brian');
		$this->load->view('templates/footer');
		
	}

	public function stewie(){


		$result['data']=$this->insert_model->displayrecords3();
		$this->load->view('templates/header');
		$this->load->view('pages/stewie',$result);
		$this->load->view('templates/footer');
		
	}
	public function another(){
		
		$this->form_validation->set_rules('name','A','required');
		$this->form_validation->set_rules('age','B','required');
		$this->form_validation->set_rules('salary','Salary','required');
		if($this->form_validation->run() === FALSE){
			echo('Error');
		}else{
			
			$this->insert_model->create_file2();
			$this->stewie();
			
		}
		
			
			
		
	}

	public function another1(){
		
		$this->form_validation->set_rules('lw3','I','required');
		$this->form_validation->set_rules('st3','J','required');
		$this->form_validation->set_rules('rw3','C','required');
		$this->form_validation->set_rules('lcb3','D','required');
		$this->form_validation->set_rules('cb3','E','required');
		$this->form_validation->set_rules('rcb3','F','required');
		$this->form_validation->set_rules('gk3','G','required');
		$this->form_validation->set_rules('plr','H','required');
		if($this->form_validation->run() === FALSE){
			echo('Error');
		}else{
			
			$this->insert_model->create_file3();
			echo('ok');
		}
	}


	}

	


