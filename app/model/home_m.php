<?php
class home_m extends Database {

	var $prefix = "mitra";
	public function home_content(){
		$query= "SELECT * FROM mitra_news_content WHERE categoryid= '2' and articleType='0' and n_status='1' " ;
		$result= $this->fetch($query,1);
		 pr($result);
		return $result;		
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
	
	
}
?>
