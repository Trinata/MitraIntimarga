<?php
class m_brocure extends Database {

	public function brocure(){
		//	$query = "SELECT * FROM mitra_news_content_repo WHERE typealbum='4' and gallerytype='1' ";
		/*
		$query = " SELECT A.title, A.content, A.image, B.otherid
FROM mitra_news_content AS A JOIN mitra_news_content_repo AS B
ON A.id = B.otherid and b.typealbum='4' and b.gallerytype='1' ";
*/
		$query = " SELECT A.title, A.content, A.image, B.otherid, b.title as titlerepo, b.contentimage, b.files
		FROM mitra_news_content AS A JOIN mitra_news_content_repo AS B
		ON A.id = B.otherid and b.typealbum='4' and b.gallerytype='1' ";
		
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
