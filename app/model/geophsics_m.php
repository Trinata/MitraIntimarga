<?php
class geophsics_m extends Database {
	
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
	public function geophsics(){
		/*$query= "SELECT * FROM mitra_news_content WHERE 1  ";*/
		$query= "SELECT * FROM mitra_news_content WHERE lid= '1' " ;
		$result= $this->fetch($query,1);
		// pr($result);
		return $result;
	
		// $result = $this->fetch($query,0);
		
		// return $result;
	}
}
?>
