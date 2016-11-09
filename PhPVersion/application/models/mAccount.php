<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mAccount extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}

	//Inser un nouvelle utilisateur
	public function signup($dataSign)
	{
		$this->db->insert('etudiants',$dataSign);
	}
	//Récupère tout les profiles
	public function allProfile(){
		return $this->db->get('etudiants')->result();
	}
	//Vérifie le couple login et mot de pass
	public function checkLog($log, $pass){
		return $this->db->get_where('etudiants', array('Email' => $log, 'Pass' => $pass))->num_rows();
	}
}