<?php
class m_info extends Database {
	
	var $prefix = "mitra";
	
	
	function scientific()
	{
		$query= "SELECT * FROM mitra_news_content WHERE categoryid= '2' and articleType='0' " ;
		
		$result = $this->fetch($query,0);
		return $result;
	}
	
	
	
}
?>