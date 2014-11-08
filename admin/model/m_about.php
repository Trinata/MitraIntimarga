<?php
class m_about extends Database {
	
	var $prefix = "mitra";

	function about_us_edit($data)
	{
	
		// $date = date('Y-m-d H:i:s');
			// $datetime = array();
		// if(!empty($data['postdate'])) $data['postdate'] = date("Y-m-d",strtotime($data['postdate'])); 

			
		$query = "UPDATE mitra_news_content
						SET 
							title = '{$data['title']}',
							posted_date = '{$data['postdate']}',
							authorid = {$data['authorid']},
							n_status = {$data['n_status']},
							content = '{$data['content']}'
							
						WHERE
							id = '{$data['id']}'";
		
		$result = $this->query($query);
		return $result;
		

	}
	function about_us()
	{
		$query= "SELECT * FROM mitra_news_content WHERE categoryid= '2' and articleType='0' " ;
		
		$result = $this->fetch($query,0);
		return $result;
	}
	
	
}
?>