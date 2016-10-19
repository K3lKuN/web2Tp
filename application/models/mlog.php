<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mLog extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}

	public function signup($dataSign)
	{
		$this->db->insert('T_UTILISATEUR_UTI',$dataSign);
	}

	public function checkLog($login, $pwd){
		return $this->db->get_where('T_UTILISATEUR_UTI', array('UTI_LOGIN' => $login, 'UTI_PASS' => $pwd))->num_rows();
	}

	public function findUserId($login, $pwd)
	{
		$this->db->select('UTI_ID');
		$query = $this->db->get_where('T_UTILISATEUR_UTI', array('UTI_LOGIN' => $login, 'UTI_PASS' => $pwd))->row();
		return $query;
	}

	public function test(){
		return 'ceci est un test';
	}
}