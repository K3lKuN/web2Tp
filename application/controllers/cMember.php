<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cMember extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		if($this->session->userdata('logged'))
		{
			$this->data['login'] = $this->session->userdata('login');
			$this->data['logged'] = $this->session->userdata('logged');
			$this->data['userId'] = $this->session->userdata('userId');

			$id = $this->session->userdata('userId');
			$this->load->model('mmember');
			$this->data['userInfo'] = $this->mmember->getUserInfo($id->UTI_ID);
			$this->data['recette'] = $this->mmember->getUserRct($id->UTI_ID);
		}
	}

	public function viewMember()
	{	
		//ligne de test de tableau
		//printf("<pre>%s</pre>",print_r($this->data, true));
		$this->load->view('vMember.tpl', $this->data);
	}

	public function mesRecette(){	
		//fichier de langue pour internationalisation (voir comment changer de langue)
		$this->load->view('vMesRecettes.tpl', $this->data);
	}

	public function updateProfil(){
		$this->load->view('vUpdateProfil.tpl', $this->data);
	}

	public function upProfil(){
		if($this->input->post('action')=="Valider")
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('login', 'Login', 'trim|required|xss_clean');
			$this->form_validation->set_rules('nom', 'Nom', 'trim|required|xss_clean');
			$this->form_validation->set_rules('prenom', 'Prénom', 'trim|required|xss_clean');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email');

			if ($this->form_validation->run()==FALSE){
				$this->load->view('vUpdateProfil.tpl', $this->data);}
			else
			{
				$dataUpdate = array(
					'UTI_LOGIN'=>$this->input->post('login'),
					'UTI_MAIL'=>$this->input->post('email'),
					'UTI_NOM'=>$this->input->post('nom'),
					'UTI_PRENOM'=>$this->input->post('prenom'),
				);
				$id = $this->session->userdata('userId');
				$this->load->model('mmember');
				$this->mmember->updateProfil($dataUpdate, $id->UTI_ID);

				redirect(site_url());
			}
		}
		else
	    {
	    	$this->data['error'] = $this->upload->display_errors();
	    	$data['titre'] = 'Inscription';
	    	redirect('cMember/updateProfil');
	    }
	}
	public function upAvatar(){
		//récupéer le nom du fichier !!!
		$config['upload_path'] = './res/images/uploads/avatar';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$this->data['error'] = $this->upload->display_errors();
			//printf("<pre>%s</pre>",print_r($this->data, true));
			$this->load->view('vUpdateProfil',$this->data);
		}
		else
		{
			$id = $this->session->userdata('userId');
			$upload_data = $this->upload->data();
			$this->data['upload'] = $upload_data;

			$avatName = $this->mmember->findOldAvatar($id->UTI_ID)->UTI_AVATAR;
			$this->mmember->upAvatar($upload_data['file_name'], $id->UTI_ID);
			if($avatName != 'default.png'){
				$this->load->helper("file");
				$path="./res/images/uploads/avatar/$this->data['login']";
				delete_files($path);}

			$this->data['file'] = $path;
			printf("<pre>%s</pre>",print_r($this->data, true));
			$this->load->view('upload_success', $this->data);
		}

	}

	public function upPass(){
		if($this->input->post('action')=="Valider")
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('oldPwd', 'Password', 'trim|required|xss_clean|min_length[5]');
			$this->form_validation->set_rules('pwd', 'Password', 'trim|required|xss_clean|min_length[5]|matches[passconf]');
			$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required');

			if ($this->form_validation->run()==FALSE){
				$this->load->view('vUpdateProfil.tpl', $this->data);}
			else
			{
				$id = $this->session->userdata('userId');
				$this->load->model('mmember');
				if($this->mmember->checkCpt(sha1($this->input->post('pwd')),$id->UTI_ID)>0){
					$dataUpdate = array(
						'UTI_PASS'=>sha1($this->input->post('pwd')),
					);
					$this->load->model('mmember');
					$this->mmember->updateProfil($dataUpdate, $id->UTI_ID);
					$this->data['log']='Mot de passe modifié !!!';
					$this->load->view('vUpdateProfil',$this->data);
				}
				else
					$this->data['log']='L\'ancien mot de passe est incorrecte';
					$this->load->view('vUpdateProfil',$this->data);
			}
		}
		else
	    {
	    	$this->data['error'] = $this->upload->display_errors();
	    	$data['titre'] = 'Inscription';
	    	redirect('cMember/updateProfil');
	    }
	}
}