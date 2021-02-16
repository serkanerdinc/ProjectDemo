<?php
class Site_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		global $data;
		$data["theme"] = "site";

		$this->load->model("Site/Settings_Model");
		$this->load->model("Site/Menus_Model");
		$this->load->model("Site/Pages_Model");

		$data["settings"] = $this->Settings_Model->getSettings(1);

		$menus = $this->Menus_Model->getMenus();
		foreach($menus as $key => $value)
		{
			if($value->menu_type==2)
			{
				$page = $this->Pages_Model->getPage($value->content_id);
				$value->url = base_url().$page->page_type."/".$page->alias;
			}
			$data["menus"][$value->parent][] = $value;
		}

		return $data;
	}
}
