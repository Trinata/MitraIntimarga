<?php
class field_training_m extends Database {

	public function field_training_frame_kiri(){
		/*$query= "SELECT * FROM mitra_news_content WHERE 1  ";*/
		$query= "SELECT * FROM mitra_news_content WHERE categoryid='5221' and n_status='1' " ;
		$result= $this->fetch($query,1);
		// pr($result);
		return $result;
	
		// $result = $this->fetch($query,0);
		
		// return $result;
	}

	public function field_training_frame_kanan(){
		/*$query= "SELECT * FROM mitra_news_content WHERE 1  ";*/
		$query= "SELECT * FROM mitra_news_content WHERE categoryid='5222' and n_status='1' " ;
		$result= $this->fetch($query,1);
		// pr($result);
		return $result;
	
		// $result = $this->fetch($query,0);
		
		// return $result;
	}
}
?>
