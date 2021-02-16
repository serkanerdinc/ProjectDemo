<?php
class Sliders_Model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function allSliders()
	{
		$slidersQ	= $this->db->from("sliders")->order_by("order","asc")->get();
		$sliders 	= $slidersQ->result();

		return $sliders;
	}
}
