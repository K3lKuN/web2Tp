<?php
class cLog extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	function viewSignup(){
		$this->data['titre'] = 'Inscription';
		$this->load->view('vSignup.tpl', $this->data);
	}

	function viewLogin(){
		$data['titre'] = 'Login';
		$this->load->view('vLogin.tpl', $data);
	}

	//fail
	function viewSignupFail(){
		$data['titre'] = 'Inscription';
		$data['errorSignup'] = "un champ n'a pas été correctement remplie";
		$this->load->view('vSignup.tpl', $data);
	}

	//permet l'inscription
	function signup(){
		if($this->input->post('action')=="Valider")
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('login', 'Login', 'trim|required|xss_clean|is_unique[T_UTILISATEUR_UTI.UTI_LOGIN]');
			$this->form_validation->set_rules('pwd', 'Password', 'trim|required|xss_clean|min_length[5]|matches[passconf]');
			$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required');

			if ($this->form_validation->run()==FALSE){redirect('cLog/viewSignup');}
			else
			{
				$dataSign = array(
					'login'=>$this->input->post('login'),
					'password'=>sha1(sha1($this->input->post('pwd').$this->input->post('login')),
					'id_rank'=>2
				);
				$this->load->model('mLog');
				$this->mLog->signup($dataSign);

				redirect(site_url());
			}
		}
		else
	    {
	    	$data['titre'] = 'Inscription';
	    	redirect('cLog/viewSignup');
	    }
	}

	//permet à l'utilisateur de ce connecter
	function login(){
	    $this->form_validation->set_rules('login','Pseudo','trim|required|xss_clean');
	    $this->form_validation->set_rules('pwd','Mot de passe','trim|required|xss_clean');
	    
	    if($this->form_validation->run())
	    {
	    	$log = $this->input->post('login');
	    	$pwd = sha1($this->input->post('pwd'));
	    	$this->load->model('mLog');
	      	if($this->mLog->checkLog($log ,$pwd )>0)
	      	{
	        	$dataLog = array('login'=> $log, 'logged'=>true);
	        	$this->session->set_userdata('login', $log);
				$this->session->set_userdata('logged', true);
				$this->session->set_userdata('userId', $this->mLog->findUserId($log ,$pwd));
	        	redirect('/welcome/vIndex');
	      	}
	      	else
	      	{
	        	$data['error'] = 'Mauvais identifiants';
	     		$data['titre'] = 'Connexion';
	      		redirect('/welcome/vIndex');
	    	}
	    }
	    else
	    {
	    	redirect('/welcome/vIndex');
	    }
	}

	//ce déconnecté
	function logout(){
		$this->session->unset_userdata('login');
		$this->session->unset_userdata('logged');
		$this->session->sess_destroy();
		redirect(site_url());
	}
}