<?php
/* contoh models */

class frontend extends Database {
	
	public function getDataDesc(){
		$query = "SELECT * FROM tests ORDER BY ID DESC";
		 $result = $this->fetch($query,1);
		 return $result;
	}
	function inputData($id,$nama,$alamat){
            $query = "call testsInputProcedure(".$id.",'".$nama."','".$alamat."')";
            $result = $this->query($query);
            return $result;
        }
        
	public function get_article_asc(){
		$query = "SELECT * FROM Aset ORDER BY Aset_ID ASC LIMIT 2";
		pr($query);
	}
}
?>
