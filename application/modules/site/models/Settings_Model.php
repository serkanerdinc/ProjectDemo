<?php
class Settings_Model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getSettings($settingId)
	{
		$settingsQ 	= $this->db->get_where('settings', array('setting_id' =>$settingId), 1, 0);
		$settings 	= $settingsQ->result();

		if($settingsQ->num_rows()>0)
			return $settings[0];
		else
			return null;
	}
}
