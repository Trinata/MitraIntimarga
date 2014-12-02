<?php
class company_link_m extends Database {

	public function company_profile(){
		$query = "SELECT * FROM mitra_news_content WHERE  categoryid='2' and articleType ='1' and n_status = '1'  ORDER BY created_date DESC";
		$result= $this->fetch($query,1);
		return $result;

	}
	public function company_profile_file(){
		$query= "SELECT * FROM mitra_news_content_repo WHERE typealbum='2' and gallerytype='1' and n_status='1'" ;
		$result= $this->fetch($query,1);
		return $result;

	}
	public function company_division(){

		$query= "SELECT * FROM mitra_news_content WHERE  categoryid='2' and articleType ='2' and n_status = '1'  ORDER BY created_date DESC" ;
		$result= $this->fetch($query,1);
		return $result;
	
	}
	public function company_division_file(){

		$query= "SELECT * FROM mitra_news_content_repo WHERE typealbum='2' and gallerytype='2' and n_status = '1'" ;
		$result= $this->fetch($query,1);
		return $result;
	
	}
	
	public function company_organization(){

		$query= "SELECT * FROM mitra_news_content WHERE  categoryid='2' and articleType ='3' and n_status = '1' " ;
		$result= $this->fetch($query,1);
		return $result;

	}
	public function company_organization_file(){

		$query= "SELECT * FROM mitra_news_content_repo WHERE typealbum='2' and gallerytype='3' and n_status = '1' " ;
		$result= $this->fetch($query,1);
		return $result;

	}
	public function company_marketing(){

		$query= "SELECT * FROM mitra_news_content WHERE  categoryid='2' and articleType ='4' and n_status = '1' " ;
		$result= $this->fetch($query,1);
		return $result;

	}
	public function company_customerlist(){
		$query= "SELECT * FROM mitra_news_content WHERE  categoryid='2' and articleType ='5' and n_status = '1' " ;
		$result= $this->fetch($query,1);
		return $result;

	}
	public function company_customerlist_file(){

		$query= "SELECT * FROM mitra_news_content_repo WHERE typealbum='2' and gallerytype='5' and n_status = '1' " ;
		$result= $this->fetch($query,1);
		return $result;

	}
	public function customer_location(){

		$query= "SELECT * FROM mitra_news_content WHERE  categoryid='2' and articleType ='6' and n_status = '1' " ;
		$result= $this->fetch($query,1);
		
		return $result;

	}
		public function overseas(){
	
		$query= "SELECT * FROM mitra_news_content WHERE  categoryid='3' and articleType='1' and n_status='1' " ;
		$result= $this->fetch($query,1);
		return $result;

	}
	public function overseas1(){

		$query= "SELECT * FROM mitra_news_content WHERE categoryid='3' and articleType='2' and n_status='1' " ;
		$result= $this->fetch($query,1);
		return $result;

	}
	public function pdfgeophysics(){

		$query= "SELECT * FROM mitra_news_content WHERE  categoryid='3' and articleType='1' and parentid='' and n_status != '2'  " ;
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
	
	public function scientifics(){

		$query= "SELECT * FROM mitra_news_content WHERE  categoryid='3' and articleType='2'  and parentid='' and n_status != '2'  " ;
		//pr($query);
		$result= $this->fetch($query,1);
			//pr($result);
		return $result;

	}
	public function pdfscientifics(){

		$query= "SELECT * FROM mitra_news_content WHERE  categoryid='3' and articleType='2'  and parentid='' and n_status != '2'  " ;
		//pr($query);
		$result= $this->fetch($query,1);
			//pr($result);
		return $result;

	}
	public function civil(){

		$query= "SELECT * FROM mitra_news_content WHERE  categoryid='3' and articleType='3'  and parentid='' and n_status != '2'  " ;
		//pr($query);
		$result= $this->fetch($query,1);
			//pr($result);
		return $result;

	}


}
?>
