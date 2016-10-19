<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mMember extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}

	public function getUserInfo($userId){
		$this->db->select('UTI_LOGIN, UTI_MAIL, UTI_NOM, UTI_PRENOM, UTI_AVATAR, UTI_ADMIN');
		$this->db->where('UTI_ID', $userId);
		$query = $this->db->get('T_UTILISATEUR_UTI')->row();
		return $query;
	}

	public function getUserRct($userId){
		return $this->db->get('T_RECETTE_RCT')->result();
	}

	public function updateProfil($data, $id){
		$this->db->where('UTI_ID', $id);
		$this->db->update('t_utilisateur_uti', $data);
	}

	public function upAvatar($fileName, $id){
		$this->db->where('UTI_ID', $id);
		$this->db->update('t_utilisateur_uti', array('UTI_AVATAR' => "$fileName"));
	}

	public function findOldAvatar($id){
		$this->db->select('UTI_AVATAR');
		$this->db->where('UTI_ID', $id);
		return $this->db->get('T_UTILISATEUR_UTI')->row();
	}
}