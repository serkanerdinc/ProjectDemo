<?php
class Main extends Site_Controller
{
	function __construct()
	{
		parent::__construct();
		global $data;
	}
	
	public function index()
	{
		global $data;

		$this->load->model("Site/Sliders_Model");
		$this->load->model("Site/Pages_Model");

		$data["sliders"]	= $this->Sliders_Model->allSliders();
		$data["page"]		= $this->Pages_Model->getPage(1);
		$data["news"]		= $this->Pages_Model->nextPage("news");

		$data["description"] 	= $data["settings"]->description;	
		$data["keywords"] 		= $data["settings"]->keywords;

		echo $this->project_smarty->fetch($data["theme"]."/main.tpl",$data);
	}
}
