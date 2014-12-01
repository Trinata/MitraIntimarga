<?php
class monthsnews_m extends Database {

	public function monthsnews(){
		/*$query= "SELECT * FROM mitra_news_content WHERE 1  ";*/
		$query= "SELECT * FROM mitra_news_content WHERE categoryid='412' and n_status='1' " ;
		$result= $this->fetch($query,1);
		// pr($result);
		return $result;
	
		// $result = $this->fetch($query,0);
		
		// return $result;
	}
	public function civil(){

		$query= "SELECT * FROM mitra_news_content WHERE  categoryid='3' and articleType='3'  and parentid='' and n_status != '2'  " ;
		//pr($query);
		$result= $this->fetch($query,1);
			//pr($result);
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

}
?>
