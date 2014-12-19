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
	public function geophysics(){
		
		$query= " SELECT * FROM mitra_news_content WHERE  categoryid='3' and articleType='1' and n_status = '1' ORDER BY created_date DESC" ;
		$result= $this->fetch($query,1);
		$i=0;
		foreach($result as $val){
			//pr($val);
			$query2= "SELECT * FROM mitra_news_content_repo WHERE typealbum='3' and gallerytype='1' and n_status='1' and otherid='$val[id]'" ;
			
			$result2= $this->fetch($query2,0);
			$result[$i]['files']=$result2['files'];		
		$i++;
		}
		//pr($result);
		// exit;
		return $result;
	
	}
	////
	/*
	
	public function geophysics(){
		
		$query= " SELECT * FROM mitra_news_content WHERE  categoryid='3' and articleType='1' and n_status = '1' ORDER BY created_date DESC" ;
		$result= $this->fetch($query,1);
		 //pr($result);
		// exit;
		return $result;
	
	}
	*/
	

	public function geophsics_file(){
		
		$query= "SELECT * FROM mitra_news_content_repo WHERE typealbum='3' and gallerytype='1' and n_status='1' " ;
		$result= $this->fetch($query,1);
		//pr($result);
	
		return $result;
	
	}
	public function geophsicschild_file($id){
		
		$query= "SELECT * FROM mitra_news_content_repo WHERE typealbum='3' and gallerytype='11' and otherid='$id'  and n_status='1'" ;
		$result= $this->fetch($query,1);
	
		return $result;
	
	}
	public function scientifics_file (){
		
		$query= "SELECT * FROM mitra_news_content_repo WHERE typealbum='3' and gallerytype='2' and n_status='1' " ;
		$result= $this->fetch($query,1);
		
		return $result;
	
	}
	public function scientificschild_file ($id){
		
		$query= "SELECT * FROM mitra_news_content_repo WHERE typealbum='3' and gallerytype='21' and otherid='$id' and n_status='1' " ;
		$result= $this->fetch($query,1);
		return $result;
	
	}
	public function scientifics (){
		/*
		$query= "SELECT * FROM mitra_news_content WHERE categoryid='3' and articleType='2' and n_status='1' " ;
		$result= $this->fetch($query,1);
		 //pr($result);
		return $result;
*/
		$query= " SELECT * FROM mitra_news_content WHERE  categoryid='3' and articleType='2' and n_status = '1' ORDER BY created_date DESC" ;
		$result= $this->fetch($query,1);
		$i=0;
		foreach($result as $val){
			//pr($val);
			$query2= "SELECT * FROM mitra_news_content_repo WHERE typealbum='3' and gallerytype='2' and n_status='1' and otherid='$val[id]'" ;
			
			$result2= $this->fetch($query2,0);
			$result[$i]['files']=$result2['files'];		
		$i++;
		}
		//pr($result);
		// exit;
		return $result;
	
	}
	public function civil (){
		
		/*$query= "SELECT * FROM mitra_news_content WHERE categoryid='3' and articleType='3' and n_status ='1' " ;
		$result= $this->fetch($query,1);
		 //pr($result);
		return $result;
*/
		$query= " SELECT * FROM mitra_news_content WHERE  categoryid='3' and articleType='3' and n_status = '1' ORDER BY created_date DESC" ;
		$result= $this->fetch($query,1);
		$i=0;
		foreach($result as $val){
			//pr($val);
			$query2= "SELECT * FROM mitra_news_content_repo WHERE typealbum='3' and gallerytype='3' and n_status='1' and otherid='$val[id]'" ;
			
			$result2= $this->fetch($query2,0);
			$result[$i]['files']=$result2['files'];		
		$i++;
		}
		//pr($result);
		// exit;
		return $result;
	
	}
	public function civilchild_file($id){
		
		$query= "SELECT * FROM mitra_news_content_repo WHERE typealbum='3' and gallerytype='31' and otherid='$id' and n_status='1'" ;
		$result= $this->fetch($query,1);
		return $result;
	
	}
	public function civil_file (){
		
		$query= "SELECT * FROM mitra_news_content_repo WHERE typealbum='3' and gallerytype='3' and n_status='1' " ;
		$result= $this->fetch($query,1);
		
		return $result;
	
	}
	public function partnergeophysics ($id){
	
		$query= " SELECT * FROM mitra_news_content WHERE  categoryid='3' and articleType='11' and n_status = '1' and authorid=$id ORDER BY created_date DESC" ;
		$result= $this->fetch($query,1);
		$i=0;
	

		foreach($result as $val){

			//$query2= "SELECT * FROM mitra_news_content_repo WHERE n_status='1' and otherid='$id'" ;
			$query2= "SELECT * FROM mitra_news_content_repo WHERE typealbum='3' and gallerytype='11' and otherid='$val[id]'  and n_status='1'" ;
			$result2= $this->fetch($query2,0);
			$result[$i]['files']=$result2['files'];		
		$i++;
		}
		//pr($result);
		// exit;
		return $result;

	}
	public function geophysicsDetail ($id){
		$query= "SELECT * FROM mitra_news_content WHERE id=$id  and n_status='1'" ;
		$result= $this->fetch($query,0);
		 //pr($result);
		
		return $result;
	}
	public function scientificsDetail ($id){
		$query= "SELECT * FROM mitra_news_content WHERE id=$id  and n_status='1'" ;
		$result= $this->fetch($query,0);
		 //pr($result);
		
		return $result;
	}
	public function civilDetail ($id){
		$query= "SELECT * FROM mitra_news_content WHERE id=$id  and n_status='1'" ;
		$result= $this->fetch($query,0);
		 //pr($result);
		
		return $result;
	}
	
	public function partnerscientifics ($id){
		/*$query= "SELECT * FROM mitra_news_content WHERE authorid=$id  and n_status='1'" ;
		
		$result= $this->fetch($query,1);
		
		return $result;
		*/
		$query= " SELECT * FROM mitra_news_content WHERE  categoryid='3' and articleType='21' and n_status = '1' and authorid=$id ORDER BY created_date DESC" ;
		$result= $this->fetch($query,1);
		$i=0;
	

		foreach($result as $val){

			//$query2= "SELECT * FROM mitra_news_content_repo WHERE n_status='1' and otherid='$id'" ;
			$query2= "SELECT * FROM mitra_news_content_repo WHERE typealbum='3' and gallerytype='21' and otherid='$val[id]'  and n_status='1'" ;
			$result2= $this->fetch($query2,0);
			$result[$i]['files']=$result2['files'];		
		$i++;
		}
		return $result;
	}
	public function partnercivil ($id){
			$query= " SELECT * FROM mitra_news_content WHERE  categoryid='3' and articleType='31' and n_status = '1' and authorid=$id ORDER BY created_date DESC" ;
		$result= $this->fetch($query,1);
		$i=0;
	

		foreach($result as $val){

			//$query2= "SELECT * FROM mitra_news_content_repo WHERE n_status='1' and otherid='$id'" ;
			$query2= "SELECT * FROM mitra_news_content_repo WHERE typealbum='3' and gallerytype='31' and otherid='$val[id]'  and n_status='1'" ;
			$result2= $this->fetch($query2,0);
			$result[$i]['files']=$result2['files'];		
		$i++;
		}
		//pr($result);
		// exit;
		return $result;

		/*
		$query= "SELECT * FROM mitra_news_content WHERE authorid=$id  and n_status='1'" ;
		$result= $this->fetch($query,1);
		 //pr($result);	
		return $result;
		*/
	}
	public function geophysicsa(){
		$query = "SELECT * FROM mitra_news_content WHERE  categoryid='3' and articleType='1' and n_status = '1'  ORDER BY created_date DESC";
	
		$result = $this->fetch($query,1);	

		return $result;
	
		
	}
	public function scientificsa(){
	$query = "SELECT * FROM mitra_news_content WHERE  categoryid='3' and articleType='2' and n_status = '1'  ORDER BY created_date DESC";
		
		$result = $this->fetch($query,1);
		// pr($result);
		return $result;
	
		
	}
	
}
?>




