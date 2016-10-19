<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cAccount extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		//printf("<pre>%s</pre>",print_r($this->data, true));
		$this->load->view('vIndex');
	}

	public function createProfil(){
		$this->load->view('vCreateProfil');
	}

	public function profil(){
		if($this->session->userdata('logged')){
			$data['logged'] = $this->session->userdata('logged');
			$this->load->view('vProfil', $data);
		}
		else{
			$this->load->view('vIndex');
		}
	}

	function login(){
		$dataLog = array('login'=> 'log', 'logged'=>true);
	    $this->session->set_userdata('login', 'test');
		$this->session->set_userdata('logged', true);
		$data['logged'] = $this->session->userdata('logged');
	    $this->load->view('vIndex', $data);
	}

	function logout(){
		$this->session->unset_userdata('logged');
		$this->session->sess_destroy();
		$this->load->view('vIndex');
	}
}