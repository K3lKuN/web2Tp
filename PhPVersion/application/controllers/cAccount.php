<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cAccount extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		//printf("<pre>%s</pre>",print_r($this->data, true));
		redirect('/welcome/index');
	}

	public function createProfil(){
		$this->load->view('vCreateProfil');
	}

	//Affiche le profil si connecté
	public function profil(){
		if($this->session->userdata('logged')){
			$data['logged'] = $this->session->userdata('logged');
			$this->load->view('vProfil', $data);
		}
		else{
			redirect('/welcome/index');
		}
	}

	//Permet d'afficher la page de connection, et de ce connecter
	function login(){
		//Si déjà connecté on renvoie au controller d'acceuil
		if($this->session->userdata('logged'))
		{
			redirect('/welcome/index');
		}
		//Si le formulaire est envoyé
		if($this->input->post('action') =="login"){
			$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
			$this->form_validation->set_rules('pass', 'mdp', 'trim|required|xss_clean');
			//Si le formulaire est validé
			if($this->form_validation->run()){
				$log = $this->input->post('email');
				$pass = sha1($this->input->post('pass'));
				$this->load->model('mAccount');
				//Si les login et mdp correspondent
				if($this->mAccount->checkLog($log, $pass) >0){
					$dataLog = array('login'=> $log, 'logged'=>true);
		        	$this->session->set_userdata('login', $log);
					$this->session->set_userdata('logged', true);
		        	redirect('/welcome/index');
				}
				else{
					$this->load->view('vLogin');
				}
			}
			else{
				$this->load->view('vLogin');
			}
		}
		else{
			$this->load->view('vLogin');
		}
	}
	//Deconnection du compte
	function logout(){
		$this->session->unset_userdata('logged');
		$this->session->sess_destroy();
		redirect('/welcome/index');
	}
	//Enregistrement d'un nouveau compte
	function signUp(){
		if($this->input->post('action') == "Valider"){
			//Chargement library validation de formulaire de CI
			$this->load->library('form_validation');
			//Règle de vérification
			$this->form_validation->set_rules('prenom', 'Prenom', 'trim|required|xss_clean');
			$this->form_validation->set_rules('nom', 'Nom', 'trim|required|xss_clean');
			$this->form_validation->set_rules('filiaire', 'Filiaire', 'trim|required|xss_clean');
			$this->form_validation->set_rules('ville', 'Ville', 'trim|required|xss_clean');
			$this->form_validation->set_rules('telephone', 'Telephone', 'trim|required|xss_clean');
			$this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required|xss_clean');
			$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required|xss_clean|is_unique[etudiants.Email]');
			$this->form_validation->set_rules('pass', 'Password', 'trim|required|xss_clean|matches[cPass]');
			$this->form_validation->set_rules('cPass', 'Confirmation password', 'trim|required|xss_clean');
			//Si le formulaire n'est pas valide
			if($this->form_validation->run()==FALSE){
				$this->load->view('vCreateProfil');
			}
			//Sinon si formulaire valide
			else{
				//Formatage du tableau d'insert
				$dataSign = array(
					'Prenom' => $this->input->post('prenom'),
					'Nom' => $this->input->post('nom'),
					'Filiaire' => $this->input->post('filiaire'),
					'Ville' => $this->input->post('ville'),
					'Telephone' => $this->input->post('telephone'),
					'Naissance' => $this->input->post('dob'),
					'Email' => $this->input->post('email'),
					'Pass' => sha1($this->input->post('pass'))
				);
				$this->load->model('mAccount');
				$this->mAccount->signUp($dataSign);
				redirect('welcome/index');
			}
		}
		else{
			die("valider");
			redirect('cAccount/createProfil');
		}
	}
}