<?php
class contact_m extends Database {
	

	public function contact (){
		/*$query= "SELECT * FROM mitra_news_content WHERE 1  ";*/
		$query= "SELECT * FROM mitra_news_content WHERE lid= '1' and categoryid='2' and n_status='1' " ;
		$result= $this->fetch($query,1);
		// pr($result);
		return $result;
	
		// $result = $this->fetch($query,0);
		
		// return $result;
	}

	public function insert_contact(){

		// pr($_POST);
		$create_date=date("Y-m-d H:i:s");
		$query = "INSERT INTO  
						mitra_contact (nama, alamat, kota, institusi, telp, fax, email, subjek, komentar, create_date, n_status)
					VALUES
						('".$_POST['nama']."','".$_POST['alamat']."','".$_POST['kota']."','".$_POST['institusi']."','".$_POST['telp']."','".$_POST['fax']."','".$_POST['email']."','".$_POST['subjek']."','".$_POST['komentar']."','".$create_date."','1')";
		// pr($query);
		$result = $this->query($query);
		
		return $result;

	}
	//------------ tambahan mara --------------//
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
	public function civil(){

		$query= "SELECT * FROM mitra_news_content WHERE  categoryid='3' and articleType='3'  and parentid='' and n_status != '2'  " ;
		//pr($query);
		$result= $this->fetch($query,1);
			//pr($result);
		return $result;

	}
}
?>
