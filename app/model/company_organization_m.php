<?php
class company_organization_m extends Database {

	public function company_organization(){
		/*$query= "SELECT * FROM mitra_news_content WHERE 1  ";*/
		$query= "SELECT * FROM mitra_news_content WHERE categoryid='412' and n_status='1' " ;
		$result= $this->fetch($query,1);
		// pr($result);
		return $result;
	
		// $result = $this->fetch($query,0);
		
		// return $result;
	}

}
?>