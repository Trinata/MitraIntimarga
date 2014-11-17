<?php
class m_brocure extends Database {

	public function brocure(){
			$query = "SELECT * FROM mitra_news_content_repo WHERE typealbum='4' and gallerytype='1' ";
		
		$result= $this->fetch($query,1);
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
