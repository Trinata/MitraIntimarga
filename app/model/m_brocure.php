<?php
class m_brocure extends Database {

	public function brocure(){
		//	$query = "SELECT * FROM mitra_news_content_repo WHERE typealbum='4' and gallerytype='1' ";
		/*
		$query = " SELECT A.title, A.content, A.image, B.otherid
FROM mitra_news_content AS A JOIN mitra_news_content_repo AS B
ON A.id = B.otherid and b.typealbum='4' and b.gallerytype='1' ";
*/
		$query = " SELECT A.title, A.content, A.image,A.n_status, B.otherid, B.title as titlerepo, B.contentimage, B.files
		FROM mitra_news_content AS A JOIN mitra_news_content_repo AS B
		ON A.id = B.otherid and B.typealbum='4' and B.gallerytype='1' and A.n_status !='2'";
		
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
	/*
	public function imagebrocure(){
		$query = "SELECT * FROM mitra_news_content WHERE typealbum='4' and gallerytype='1' ";
		$result= $this->fetch($query,1);
		return $result;

	}
	*/
}
?>
