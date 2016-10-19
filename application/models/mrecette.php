<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mrecette extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function lastRct($cat){
		$this->db->select('*');
		$this->db->join('TJ_CAT_RCT', 'T_RECETTE_RCT.RCT_ID = TJ_CAT_RCT.RCT_ID');
		$this->db->where('CAT_ID', $cat); 
		return $this->db->get('T_RECETTE_RCT', 1)->row();
	}

}