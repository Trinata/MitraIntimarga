<?php
/* contoh models */

class m_about_us extends Database {
	var $prefix = "mitra";
	public function getDataDesc(){
		$query = "SELECT * FROM tests ORDER BY ID DESC";
		//pr($query);
		/* 
			fetch parameternya ($query, boolean)
			boolean true : looping data
			boolean false : single data
		*/
		 $result = $this->fetch($query,1);
		
		 return $result;
	}
	function inputData($id, $nama, $alamat){
            $query = "call testsInputProcedure(".$id.",'".$nama."','".$alamat."')";
            
            $result = $this->query($query);
            
            return $result;
        }
        
	public function get_article_asc(){
		$query = "SELECT * FROM Aset ORDER BY Aset_ID ASC LIMIT 2";
		pr($query);
		// $result = $this->fetch($query,0);
		
		// return $result;
	}
	public function about(){
		/*$query= "SELECT * FROM mitra_news_content WHERE 1  ";*/
		$query= "SELECT * FROM mitra_news_content WHERE categoryid= '2' and articleType='1' and n_status='1' " ;
		$result= $this->fetch($query,1);
		// pr($result);
		return $result;
	}
	public function visi(){
		/*$query= "SELECT * FROM mitra_news_content WHERE 1  ";*/
		$query= "SELECT * FROM mitra_news_content WHERE categoryid= '10' and articleType='1' and n_status='1' " ;
		$result= $this->fetch($query,1);
		// pr($result);
		return $result;
	}
	public function about_us(){
		/*$query= "SELECT * FROM mitra_news_content WHERE 1  ";*/
		$query= "SELECT * FROM mitra_news_content WHERE lid= '1' " ;
		$result= $this->fetch($query,1);
		// pr($result);
		return $result;
	
		// $result = $this->fetch($query,0);
		
		// return $result;
	}
	public function geophysics(){
		$query = "SELECT * FROM {$this->prefix}_news_content WHERE  categoryid='3' and articleType='1' and n_status != '2'  ORDER BY created_date DESC";
		
		$result = $this->fetch($query,1);
		// pr($result);
		return $result;
	
		
	}
	public function scientifics(){
	$query = "SELECT * FROM {$this->prefix}_news_content WHERE  categoryid='3' and articleType='2' and n_status != '2'  ORDER BY created_date DESC";
		
		$result = $this->fetch($query,1);
		// pr($result);
		return $result;
	}
	public function civil(){

		$query= "SELECT * FROM mitra_news_content WHERE  categoryid='3' and articleType='3'  and parentid='' and n_status != '2'  " ;
		//pr($query);
		$result= $this->fetch($query,1);
			//pr($result);
		return $result;

	}
	function getContent($id=false, $type=1,$cat=1, $debug=false)
	{
		
		$filter = "";
		if ($id) $filter .= " AND id = {$id} ";
		
		$sql = array(
                'table'=>"{$this->prefix}_news_content",
                'field'=>"*",
                'condition' => "categoryid= {$type} AND articleType = {$cat} AND n_status='1' {$filter} ",
                );

		$res = $this->lazyQuery($sql,$debug);
		if ($res) return $res;
		return false;

	}
	function getContentSlider($id=false, $type=1,$cat=1, $debug=false)
	{
		
		$filter = "";
		if ($id) $filter .= " AND id = {$id} ";
		
		$sql = array(
                'table'=>"{$this->prefix}_news_content",
                'field'=>"*",
                'condition' => "slider_image='1' AND categoryid= {$type} AND articleType = {$cat} AND n_status='1' {$filter} ORDER BY thumbnail_image ASC",
                );

		$res = $this->lazyQuery($sql,$debug);
		if ($res) return $res;
		return false;

	}
}
?>
