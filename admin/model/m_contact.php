<?php
class m_contact extends Database {
	
	var $prefix = "mitra";


	function contact_view()
	{
		$query= "SELECT * FROM mitra_contact " ;
		
		$result = $this->fetch($query,1);
		return $result;
	}
	
	
}
?>