<?php
class produk_m extends Database {
	public function getDataDesc(){
		$query = "SELECT * FROM tests ORDER BY ID DESC";
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
		//pr($query);
	}
	public function geophsics(){
		
		$query= " SELECT * FROM mitra_news_content WHERE  categoryid='3' and articleType='1' and n_status = '1' ORDER BY created_date DESC" ;
		$result= $this->fetch($query,1);
		// pr($result);
		// exit;
		return $result;
	
	}
	public function geophsics_file(){
		
		$query= "SELECT * FROM mitra_news_content_repo WHERE typealbum='3' and gallerytype='1' " ;
		$result= $this->fetch($query,1);
		pr($result);
	
		return $result;
	
	}
	public function scientifics_file (){
		
		$query= "SELECT * FROM mitra_news_content_repo WHERE typealbum='3' and gallerytype='2' " ;
		$result= $this->fetch($query,1);
		
		return $result;
	
	}
	public function scientifics (){
		
		$query= "SELECT * FROM mitra_news_content WHERE categoryid='3' and articleType='2' and n_status='1' " ;
		$result= $this->fetch($query,1);
		 //pr($result);
		return $result;
	
	}
	public function partnergeophysics ($id){
		$query= "SELECT * FROM mitra_news_content WHERE parentid=$id " ;
		$result= $this->fetch($query,1);
		 //pr($result);
		
		return $result;
	}
	public function partnerscientifics ($id){
		$query= "SELECT * FROM mitra_news_content WHERE parentid=$id " ;
		$result= $this->fetch($query,1);
		
		return $result;
	}
}
?>




