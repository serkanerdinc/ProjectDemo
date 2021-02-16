<?php
class Page extends Site_Controller
{
	function __construct()
	{
		parent::__construct();
		global $data;
	}
	
	public function detay($page_type="page",$alias="")
	{
		global $data;
		$this->load->model("Site/Pages_Model");
		$page = $this->Pages_Model->getPageAlias($page_type,$alias);

		$data["page"] = $page;
		if($page===null)
		{
			$this->output->set_status_header('404');

			$this->load->view('errors/html/error_404');
			exit;
		}
		
		$data["title"] 			= $data["page"]->title;
		$data["description"] 	= $data["page"]->description;	
		$data["keywords"] 		= $data["page"]->keywords;	
		echo $this->project_smarty->fetch($data["theme"]."/page_detail.tpl",$data);
	}

	public function nextPage($pageType="",$pageId="")
	{
		$this->load->model("Site/Pages_Model");
		$nextPage = $this->Pages_Model->nextPage($pageType,$pageId);

		echo json_encode($nextPage);
	}
}
