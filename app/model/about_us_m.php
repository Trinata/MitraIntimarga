<?php
class about_us_m extends Database {
	
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
	public function about(){
		/*$query= "SELECT * FROM mitra_news_content WHERE 1  ";*/
		$query= "SELECT * FROM mitra_news_content WHERE  categoryid='3' and n_status = '1' " ;
		$result= $this->fetch($query,1);
		// pr($result);
		return $result;
	
		// $result = $this->fetch($query,0);
		
		// return $result;
	}
	public function about_content(){
		$query= "SELECT * FROM mitra_news_content WHERE categoryid= '2' and articleType='0' and n_status='1' " ;
		$result= $this->fetch($query,1);
		// pr($result);
		return $result;
	
		
	}
	public function partner($id){
	pr($id);
		// $query= "SELECT * FROM mitra_news_content WHERE categoryid= '3' and articleType='1' and n_status='1' " ;
		 //$query= "SELECT  title.mitra_news_content, files.mitra_news_content_repo
					// FROM mitra_news_content
					// RIGHT JOIN mitra_news_content_repo
					// ON id.$id=otherid.$id ";
		$query = "SELECT *
						FROM mitra_news_content m, mitra_news_content_repo md
						WHERE m.id=$id";
					
		$result= $this->fetch($query,1);
		pr($query);
		 pr($result);
		 exit;
		return $result;
	
		
	}
}
?>
