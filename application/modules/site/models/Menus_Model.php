<?php

class Menus_Model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getMenus(){
		$whe["is_active"] = 1;
		$menusQ = $this->db->from("menus")->where($whe)->order_by("order","asc")->get();
		$menus	= $menusQ->result();

		return $menus;
	}
}
