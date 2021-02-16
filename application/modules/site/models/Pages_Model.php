<?php
class Pages_Model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getPage($pageId)
	{
		$pageQ 	= $this->db->get_where('pages', array('page_id' =>$pageId), 1, 0);
		$page 	= $pageQ->result();

		if($pageQ->num_rows()>0)
			return $page[0];
		else
			return null;
	}
	public function getPageAlias($pageType,$pageAlis)
	{
		$pageQ 	= $this->db->get_where('pages', array('alias' =>$pageAlis,'page_type'=>$pageType), 1, 0);
		$page 	= $pageQ->result();

		if($pageQ->num_rows()>0)
			return $page[0];
		else
			return null;
	}

	public function nextPage($pageType="news",$pageId="")
	{
		$pageQ = $this->db->from("pages")->where("page_type",$pageType)->order_by("order","ASC");

		if($pageId<>"")
			$pageQ->where("page_id",$pageId);

		$page = $pageQ->limit(1)->get()->result()[0];

		$nextPageQ = $this->db->from("pages")->where("page_type",$pageType)->where("order >=",$page->order)->order_by("order","ASC");
		if($pageId<>"")
			$nextPageQ = $nextPageQ->where_not_in("page_id",[$page->page_id]);

		if($nextPageQ->get()->num_rows()==0){
			$order = 0;
		}
		else{
			$order = $page->order;
		}

		$nextPageQ = $this->db->from("pages")->where("page_type",$pageType)->where("order >=",$order)->order_by("order","ASC")->limit(1);
		if($pageId<>"")
			$nextPageQ = $nextPageQ->where_not_in("page_id",[$page->page_id]);
		$nextPage = $nextPageQ->get()->result_array()[0];

		return $nextPage;
	}
}
