<?php
class m_brocure extends Database {

	public function brocure(){
		$query = "SELECT * FROM mitra_news_content_repo WHERE 1  ";
		$result= $this->fetch($query,1);
		return $result;

	}
	


}
?>
