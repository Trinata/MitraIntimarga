<?php
class contentHelper extends Database {
	
	var $db_coll;
	var $db;

	function __construct()
	{
		global $DBCOLL,$DBAPP;
		$this->db_coll = $DBCOLL;
		$this->db = new Database;
		$this->prefix = "mitra";
	}
	
	function getNews()
	{
		
		$sql = "SELECT n.title, cr.friendlyUrl FROM tbl_news n LEFT JOIN code_url_redirect cr ON n.id = cr.articleId
				WHERE cr.n_status = 1";
		$res = $this->fetch($sql,1);
		if ($res) return $res;
		return false;
	}
	
	function readNews($url=false)
	{
		if(!$url) return false;
		
		$urlArticle = clean($url);
		global $CONFIG;
		
		if ($CONFIG['uri']['short']) $field = " shortUrl ";
		if ($CONFIG['uri']['friendly']) $field = " friendlyUrl ";
		
		
		$sql = "SELECT n.* FROM tbl_news n LEFT JOIN code_url_redirect cr 
				ON n.id = cr.articleId WHERE cr.{$field} = '{$urlArticle}' LIMIT 1";
		// pr($sql);
		$res = $this->fetch($sql);
		if ($res) return $res;
		return false;
		
	}
	
	function test()
	{
		$sql = "SELECT * FROM coll";
		// pr($sql);
		$res = $this->fetch($sql,1);
		// pr($res);
		$sqlapp = "SELECT * FROM user_member";
		// pr($sqlapp);
		$resapp = $this->fetch($sqlapp,1,1);
		
		$data = array('coll'=>$res, 'app'=>$resapp);
		
		if ($data) return $data;
		return false;
	}
	
	function getContent($id=false, $type=1,$cat=1, $debug=false)
	{

		$filter = "";
		if ($id) $filter .= " AND id = {$id} ";
		
		$sql = array(
                'table'=>"{$this->prefix}_news_content",
                'field'=>"*",
                'condition' => "categoryid= {$type} AND articleType = {$cat} AND n_status = 1 {$filter} ",
                );

		$res = $this->db->lazyQuery($sql,$debug);
		if ($res) return $res;
		return false;
	}

	function getRepo($id=false, $typealbum=1, $gallerytype=1, $otherid=false, $debug=false)
	{

		$filter = "";
		if ($id) $filter .= " AND id = {$id} ";
		if ($otherid) $filter .= " AND otherid = {$otherid} ";
		$sql = array(
                'table'=>"{$this->prefix}_news_content_repo",
                'field'=>"*",
                'condition' => "typealbum= {$typealbum} AND gallerytype = {$gallerytype} AND n_status = 1 {$filter} ",
                );

		$res = $this->db->lazyQuery($sql,$debug);
		if ($res) return $res;
		return false;
	}
	//----------------------tambahan maraoks---------------//
	public function civil(){

		$query= "SELECT * FROM mitra_news_content WHERE  categoryid='3' and articleType='3'  and parentid='' and n_status != '2'  " ;
		//pr($query);
		$result= $this->fetch($query,1);
		//	pr($result);
		return $result;

	}
		public function scientifics(){

		$query= "SELECT * FROM mitra_news_content WHERE  categoryid='3' and articleType='2'  and parentid='' and n_status != '2'  " ;
		//pr($query);
		$result= $this->fetch($query,1);
			//pr($result);
		return $result;

	}
	public function geophysics(){

		$query= "SELECT * FROM mitra_news_content WHERE  categoryid='3' and articleType='1' and parentid='' and n_status != '2'  " ;
		//pr($query);
		$result= $this->fetch($query,1);
			//pr($result);
		return $result;

	}
	function getShowmenu($menu){

		$query = "SELECT * FROM {$this->prefix}_news_content WHERE n_status = '1' AND title='".$menu."'";
		
		$result = $this->fetch($query,0);

		return $result;

		}
	
}
?>