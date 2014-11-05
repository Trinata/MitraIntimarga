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
	function inputData($id, $nama, $alamat){
            $query = "call testsInputProcedure(".$id.",'".$nama."','".$alamat."')";
            
            $result = $this->query($query);
            
            return $result;
        }
        
	public function about(){
		/*$query= "SELECT * FROM mitra_news_content WHERE 1  ";*/
		$query= "SELECT * FROM mitra_news_content WHERE lid= '1' " ;
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
}
?>
