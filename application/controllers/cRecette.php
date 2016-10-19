<?php

class cRecette extends CI_Controller {

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
			$this->load->model('mMember');
			$this->data['userInfo'] = $this->mMember->getUserInfo($id->UTI_ID);
			$this->data['recette'] = $this->mMember->getUserRct($id->UTI_ID);
		}
	}

	function addRct()
	{
		$config['upload_path'] = './res/images/uploads/rct';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$this->data['error'] = $this->upload->display_errors();
			//printf("<pre>%s</pre>",print_r($this->data, true));
			$this->load->view('vMesRecettes',$this->data);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('upload_success', $data);
		}
	}
}
?>