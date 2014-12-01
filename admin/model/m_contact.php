<?php
class m_contact extends Database {
	
	var $prefix = "mitra";


	function contact_view()
	{
		$query= "SELECT * FROM {$this->prefix}_contact  where n_status='1' " ;
		
		$result = $this->fetch($query,1);
		return $result;
	}
	function contactDel($id)
	{
		//pr($id);
		foreach ($id as $key => $value) {
			
			$query = "UPDATE {$this->prefix}_contact  SET n_status = '2' WHERE id_contact = '{$value}'";
		
			$result = $this->query($query);
		
		}

		return true;
		
	}

	
}
?>