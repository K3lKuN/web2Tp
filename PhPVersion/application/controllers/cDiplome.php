<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cDiplome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		//printf("<pre>%s</pre>",print_r($this->data, true));
		$this->load->view('vIndex');
	}

	public function createDiplome(){
		if($this->session->userdata('logged'))
		{
			$data['logged'] = $this->session->userdata('logged');
		}
		$this->load->view('vCreateDiplome', $data);
	}
}