<?php
class m_company extends Database {
	
	var $prefix = "mitra";
	function article_inp($data)
	{
		
		$date = date('Y-m-d H:i:s');
		$datetime = array();
		
		if(!empty($data['postdate'])) $data['postdate'] = date("Y-m-d",strtotime($data['postdate'])); 

		if($data['action'] == 'insert'){
			
			$query = "INSERT INTO  
						{$this->prefix}_news_content (title,brief,content,image,file,articletype,
												created_date,posted_date,authorid,n_status)
					VALUES
						('".$data['title']."','".$data['brief']."','".$data['content']."','".$data['image']."'

							,'".$data['image_url']."','".$data['articletype']."','".$date."','".$data['postdate']."'
							,'".$data['authorid']."','".$data['n_status']."')";

		} else {
			$query = "UPDATE {$this->prefix}_news_content
						SET 
							title = '{$data['title']}',
							brief = '{$data['brief']}',
							content = '{$data['content']}',
							image = '{$data['image']}',
							file = '{$data['image_url']}',
							posted_date = '".$date."',
							authorid = '{$data['authorid']}',
							n_status = {$data['n_status']}
						WHERE
							id = '{$data['id']}'";
			}
		$result = $this->query($query);
		
		return $result;
	}
	
	
	
	
	function get_article_slide()
	{
		$query = "SELECT nc.*, cc.category, ct.type FROM cdc_news_content nc LEFT JOIN cdc_news_content_category cc 
					ON nc.categoryid = cc.id LEFT JOIN cdc_news_content_type ct ON nc.articletype = ct.id 
					WHERE nc.n_status < 2 AND nc.articletype > 0  ORDER BY nc.createdate DESC";
		
		$result = $this->fetch($query,1);
		
		return $result;
	}
	
	function get_article_trash()
	{
		$query = "SELECT * FROM {$this->prefix}_news_content WHERE n_status = '2' ORDER BY created_date DESC";
		
		$result = $this->fetch($query,1);

		foreach ($result as $key => $value) {
			$query = "SELECT username FROM admin_member WHERE id={$value['authorid']} LIMIT 1";

			$username = $this->fetch($query,0);

			$result[$key]['username'] = $username['username'];
		}
		
		return $result;
	}
	
	function article_del($id)
	{
		foreach ($id as $key => $value) {
			
			$query = "UPDATE {$this->prefix}_news_content SET n_status = '2' WHERE id = '{$value}'";
		
			$result = $this->query($query);
		
		}

		return true;
		
	}
	
	function article_delpermanent($id)
	{
		$query = "DELETE FROM cdc_news_content WHERE id = '{$id}'";
		
		$result = $this->query($query);
		
		return $result;
		
	}
	
	function article_restore($id)
	{
		foreach ($id as $key => $value) {
			
			$query = "UPDATE {$this->prefix}_news_content SET n_status = '0' WHERE id = '{$value}'";
		
			$result = $this->query($query);
		
		}

		return true;
		
	}
	
	function about_us()
	{
		$query= "SELECT * FROM mitra_news_content WHERE categoryid= '2' and articleType='0' " ;
		
		$result = $this->fetch($query,0);
		return $result;
	}
	
	function frame_inp($data){

		foreach ($data[0] as $key => $val) {
			$tmpfield[] = $key;
			$tmpvalue[] = "'$val'";
		}

		$field = implode(',', $tmpfield);
		$value = implode(',', $tmpvalue);

		$query = "INSERT INTO {$this->prefix}_news_content_repo ({$field}) VALUES ($value)";

		$result = $this->query($query);

		$queryid = "SELECT id FROM {$this->prefix}_news_content_repo ORDER BY created_date DESC LIMIT 1";

		$id = $this->fetch($queryid,0);

		$data[1]['otherid'] = $id['id'];

		foreach ($data[1] as $key => $val) {
			$tmpfield2[] = $key;
			$tmpvalue2[] = "'$val'";
		}

		$field2 = implode(',', $tmpfield2);
		$value2 = implode(',', $tmpvalue2);

		$query2= "INSERT INTO {$this->prefix}_news_content_repo ({$field2}) VALUES ($value2)";

		$result = $this->query($query2);
		return true;
	}

	function get_frameList(){

		global $CONFIG;

		$query = "SELECT * FROM {$this->prefix}_news_content_repo WHERE gallerytype = 1 AND n_status = 1 ORDER BY created_date DESC";

		$result = $this->fetch($query,1);

		foreach ($result as $key => $val) {
			$query = "SELECT * FROM {$this->prefix}_news_content_repo WHERE gallerytype = 2 AND n_status = 1 AND otherid = {$val['id']} LIMIT 1";
			$res = $this->fetch($query,0);
			$result[$key]['cover'] = $res['files'];
			$result[$key]['covername'] = $res['title'];

			//typealbum
			if($val['typealbum'] == 4){
				$result[$key]['typealbum'] = 'Facebook';
			} elseif ($val['typealbum'] == 5) {
				$result[$key]['typealbum'] = 'Twitter';
			}
			
			//dimension
			list($result[$key]['frWidth'], $result[$key]['frHeight'], $type, $attr) = @getimagesize($CONFIG['admin']['upload_path']."frame/".$result[$key]['files']);
			list($result[$key]['covWidth'], $result[$key]['covHeight'], $type, $attr) = @getimagesize($CONFIG['admin']['upload_path']."cover/".$res['files']);
		}

		return $result;
	}

	function updateStatusFrame($id=false,$n_status=0)
	{
		if (!$id) return false;


		$query2= "UPDATE {$this->prefix}_news_content_repo SET n_status = {$n_status} WHERE id = {$id} LIMIT 1";

		$result = $this->query($query2);
		if ($result) return true;
		return false;

	}
	/*------------------------edit maraoks ---------------*/
	
	/*function geophysics()
	{
		
		$query= "SELECT * FROM mitra_news_content WHERE categoryid= '2' and articleType='0' " ;
		
		$result = $this->fetch($query,0);
		return $result;
	}
	function scientific()
	{
		$query= "SELECT * FROM mitra_news_content WHERE categoryid= '2' and articleType='0' " ;
		
		$result = $this->fetch($query,0);
		return $result;
	}
	*/
	
	function company($type=1)
	{
		$query = "SELECT * FROM {$this->prefix}_news_content WHERE  categoryid='4' and n_status != '2'  ORDER BY created_date DESC";
		
		$result = $this->fetch($query,1);

		foreach ($result as $key => $value) {
			$query = "SELECT username FROM admin_member WHERE id={$value['authorid']} LIMIT 1";

			$username = $this->fetch($query,0);

			$result[$key]['username'] = $username['username'];
		}
		
		return $result;
	}
	function company_profile()
	{
		$query= "SELECT * FROM mitra_news_content WHERE categoryid= '4' and articleType='1' and n_status !='2' " ;
		
		$result = $this->fetch($query,0);
		return $result;
	}
	function company_division()
	{
		$query= "SELECT * FROM mitra_news_content WHERE categoryid= '4' and articleType='2' and n_status !='2'" ;
		
		$result = $this->fetch($query,0);
		return $result;
	}
	function company_profileadd_submit()
	{	
			$query = "INSERT INTO  
						{$this->prefix}_news_content (title,brief,content,categoryid,articletype,
												created_date,posted_date,authorid,n_status)
					VALUES
						('".$_POST['title']."','','".$_POST['content']."','4','1','','".$_POST['postdate']."'
							,'','".$_POST['n_status']."')";

	
		
		$result = $this->fetch($query,0);
		
		return $result;
	}
	function company_profile_submit()
	{

		$query = "UPDATE {$this->prefix}_news_content
						SET 
							title = '".$_POST['title']."',
							content = '".$_POST['content']."',
							n_status = '".$_POST['n_status']."'
						WHERE
							id = '".$_POST['id']."' ";

		$result = $this->fetch($query,0);
		
		return $result;
	}

	
	
	
	function company_division_submit($upload)
	{

		global $CONFIG;

			if($_FILES['file_image']['name'] != ''){

					$query = "UPDATE {$this->prefix}_news_content
								SET 
									title = '".$_POST['title']."',
									content = '".$_POST['content']."',
									image = '".$upload['full_name']."',
									file = '".$upload['full_path']."',
									n_status = '".$_POST['n_status']."'
								WHERE
									id = '".$_POST['id']."' ";
			
				
			// pr('baru');
			// exit;
			}else{	
				$query = "UPDATE {$this->prefix}_news_content
								SET 
									title = '".$_POST['title']."',
									content = '".$_POST['content']."',
									n_status = '".$_POST['n_status']."'
								WHERE
									id = '".$_POST['id']."' ";
				// pr('lama');
			// exit;
			}
		 
		
		$result = $this->fetch($query,0);
		
		return $result;
	}
	
	function company_divisionadd_submit($upload)
	{
		global $CONFIG;
		$query = "INSERT INTO  
						{$this->prefix}_news_content (title,brief,content,image,file,categoryid,articletype,
												created_date,posted_date,authorid,n_status)
					VALUES
						('".$_POST['title']."','','".$_POST['content']."','".$upload['full_name']."','".$upload['full_path']."','4','2','','".$_POST['postdate']."'
							,'','".$_POST['n_status']."')";

					// $query = "UPDATE {$this->prefix}_news_content
								// SET 
									// title = '".$_POST['title']."',
									// content = '".$_POST['content']."',
									// image = '".$upload['full_name']."',
									// file = '".$upload['full_path']."',
									// n_status = '".$_POST['n_status']."'
								// WHERE
									// id = '".$_POST['id']."' ";
									
		// pr($query);
		// exit;
	
		$result = $this->fetch($query,0);
		
		return $result;
	}
	
	function company_organization()
	{
		$query= "SELECT * FROM mitra_news_content WHERE categoryid= '4' and articleType='3' and n_status !='2'" ;
		
		$result = $this->fetch($query,0);
		return $result;
	}
	
	function company_organization_submit($upload)
	{

		global $CONFIG;

				if($_FILES['file_image']['name'] != ''){

						$query = "UPDATE {$this->prefix}_news_content
									SET 
										title = '".$_POST['title']."',
										content = '".$_POST['content']."',
										image = '".$upload['full_name']."',
										file = '".$upload['full_path']."',
										n_status = '".$_POST['n_status']."'
									WHERE
										id = '".$_POST['id']."' ";
				
					
				// pr('baru');
				// exit;
				}else{	
					$query = "UPDATE {$this->prefix}_news_content
									SET 
										title = '".$_POST['title']."',
										content = '".$_POST['content']."',
										n_status = '".$_POST['n_status']."'
									WHERE
										id = '".$_POST['id']."' ";
					// pr('lama');
				// exit;
				}
		 
		
		$result = $this->fetch($query,0);
		
		return $result;
	}
	function company_organizationadd_submit($upload)
	{
		global $CONFIG;
		$query = "INSERT INTO  
						{$this->prefix}_news_content (title,brief,content,image,file,categoryid,articletype,
												created_date,posted_date,authorid,n_status)
					VALUES
						('".$_POST['title']."','','".$_POST['content']."','".$upload['full_name']."','".$upload['full_path']."','4','3','','".$_POST['postdate']."'
							,'','".$_POST['n_status']."')";	
		$result = $this->fetch($query,0);
		pr($query);
		
		return $result;
	}
	function company_marketing()
	{
		$query= "SELECT * FROM mitra_news_content WHERE categoryid= '4' and articleType='4' and n_status !='2'" ;
		
		$result = $this->fetch($query,0);
		return $result;
	}
	
	function company_marketing_submit($upload)
	{

		global $CONFIG;

			if($_FILES['file_image']['name'] != ''){

					$query = "UPDATE {$this->prefix}_news_content
								SET 
									title = '".$_POST['title']."',
									content = '".$_POST['content']."',
									image = '".$upload['full_name']."',
									file = '".$upload['full_path']."',
									n_status = '".$_POST['n_status']."'
								WHERE
									id = '".$_POST['id']."' ";
			
				
			// pr('baru');
			// exit;
			}else{	
				$query = "UPDATE {$this->prefix}_news_content
								SET 
									title = '".$_POST['title']."',
									content = '".$_POST['content']."',
									n_status = '".$_POST['n_status']."'
								WHERE
									id = '".$_POST['id']."' ";
				// pr('lama');
			// exit;
			}
				 
		
		$result = $this->fetch($query,0);
		
		return $result;
	}
	function company_marketingadd_submit($upload)
	{

		global $CONFIG;
				$query = "INSERT INTO  
						{$this->prefix}_news_content (title,brief,content,image,file,categoryid,articletype,
												created_date,posted_date,authorid,n_status)
					VALUES
						('".$_POST['title']."','','".$_POST['content']."','".$upload['full_name']."','".$upload['full_path']."','4','4','','".$_POST['postdate']."'
							,'','".$_POST['n_status']."')";
							
		$result = $this->fetch($query,0);
		
		return $result;
	}
	function customer_list()
	{
		$query= "SELECT * FROM mitra_news_content WHERE categoryid= '4' and articleType='5' and n_status !='2'" ;
		
		$result = $this->fetch($query,0);
		return $result;
	}
	
	function customer_list_submit($upload)
	{

		global $CONFIG;

	if($_FILES['file_image']['name'] != ''){

			$query = "UPDATE {$this->prefix}_news_content
						SET 
							title = '".$_POST['title']."',
							content = '".$_POST['content']."',
							image = '".$upload['full_name']."',
							file = '".$upload['full_path']."',
							n_status = '".$_POST['n_status']."'
						WHERE
							id = '".$_POST['id']."' ";
	
		
	// pr('baru');
	// exit;
	}else{	
		$query = "UPDATE {$this->prefix}_news_content
						SET 
							title = '".$_POST['title']."',
							content = '".$_POST['content']."',
							n_status = '".$_POST['n_status']."'
						WHERE
							id = '".$_POST['id']."' ";
		// pr('lama');
	// exit;
	}
		 
		
		$result = $this->fetch($query,0);
		
		return $result;
	}
	function customer_listadd_submit($upload)
	{

		global $CONFIG;
			$query = "INSERT INTO  
						{$this->prefix}_news_content (title,brief,content,image,file,categoryid,articletype,
												created_date,posted_date,authorid,n_status)
					VALUES
						('".$_POST['title']."','','".$_POST['content']."','".$upload['full_name']."','".$upload['full_path']."','4','5','','".$_POST['postdate']."'
							,'','".$_POST['n_status']."')";
				
		$result = $this->fetch($query,0);
		return $result;
	}
	
	function customer_location()
	{
		$query= "SELECT * FROM mitra_news_content WHERE categoryid= '4' and articleType='6' and n_status !='2'" ;
		
		$result = $this->fetch($query,0);
		return $result;
	}
	
	function customer_location_submit($upload)
	{

		global $CONFIG;

	if($_FILES['file_image']['name'] != ''){

			$query = "UPDATE {$this->prefix}_news_content
						SET 
							title = '".$_POST['title']."',
							content = '".$_POST['content']."',
							image = '".$upload['full_name']."',
							file = '".$upload['full_path']."',
							n_status = '".$_POST['n_status']."'
						WHERE
							id = '".$_POST['id']."' ";
	
		
	// pr('baru');
	// exit;
	}else{	
		$query = "UPDATE {$this->prefix}_news_content
						SET 
							title = '".$_POST['title']."',
							content = '".$_POST['content']."',
							n_status = '".$_POST['n_status']."'
						WHERE
							id = '".$_POST['id']."' ";
		// pr('lama');
	// exit;
	}
		 
		
		$result = $this->fetch($query,0);
		
		return $result;
	}
	
	
	function geophysics_list($type=1)
	{
		$query = "SELECT * FROM {$this->prefix}_news_content WHERE  categoryid='3' and articleType='1' and n_status != '2'  ORDER BY created_date DESC";
		
		$result = $this->fetch($query,1);

		foreach ($result as $key => $value) {
			$query = "SELECT username FROM admin_member WHERE id={$value['authorid']} LIMIT 1";

			$username = $this->fetch($query,0);

			$result[$key]['username'] = $username['username'];
		}
		
		return $result;
	}
	function scientific_list($type=1)
	{
		$query = "SELECT * FROM {$this->prefix}_news_content WHERE  categoryid='3' and articleType='2' and n_status != '2'  ORDER BY created_date DESC";
		
		$result = $this->fetch($query,1);

		foreach ($result as $key => $value) {
			$query = "SELECT username FROM admin_member WHERE id={$value['authorid']} LIMIT 1";

			$username = $this->fetch($query,0);

			$result[$key]['username'] = $username['username'];
		}
		
		return $result;
	}
	
	function addScientific($upload)
	{
	
	// pr($_POST);
	// pr($upload);
	
		$query = "INSERT INTO  
						{$this->prefix}_news_content (title,brief,content,image,file,categoryid,articletype,
												created_date,posted_date,authorid,n_status)
					VALUES
						('".$_POST['title']."','','".$_POST['content']."','".$upload['full_name']."'

							,'".$upload['full_path']."','3','2','','".$_POST['postdate']."'
							,'','".$_POST['n_status']."')";

		// pr($query);
		 // exit;
		
		$result = $this->fetch($query,0);
		
		return $result;
	}
	function addgeophysics($upload)
	{
	
	// pr($_POST);
	// pr($upload);
	
		$query = "INSERT INTO  
						{$this->prefix}_news_content (title,brief,content,image,file,categoryid,articletype,
												created_date,posted_date,authorid,n_status)
					VALUES
						('".$_POST['title']."','','".$_POST['content']."','".$upload['full_name']."'

							,'".$upload['full_path']."','3','1','','".$_POST['postdate']."'
							,'','".$_POST['n_status']."')";

		// pr($query);
		 // exit;
		
		$result = $this->fetch($query,0);
		
		return $result;
	}
	function delete_geophysics()
	{
	
	// pr($_POST);
	// pr($upload);
	// exit;
	$del = $_POST['ids'];
    $idsToDelete = implode($del, ', ');
	// pr($idsToDelete);
		// $query = "DELETE FROM mitra_news_content WHERE id in($idsToDelete) ";
		$query = "UPDATE {$this->prefix}_news_content
						SET 
						
							n_status = '2'
						WHERE
							id in($idsToDelete)";
		

		// pr($query);
		// exit;
		

		$result = $this->fetch($query,0);
		
		return $result;
	}
	function delete_scientific()
	{
	// pr($_POST);
	
	$del = $_POST['ids'];
    $idsToDelete = implode($del, ', ');
	// pr($idsToDelete);
		// $query = "DELETE FROM mitra_news_content WHERE id in($idsToDelete) ";
		$query = "UPDATE {$this->prefix}_news_content
						SET 
							n_status = '2'
						WHERE
							id in($idsToDelete)";
		// pr($query);
		$result = $this->fetch($query,0);
		return $result;
	}
	function delete_produk()
	{
	// pr($_POST);
	
	$del = $_POST['ids'];
    $idsToDelete = implode($del, ', ');
	// pr($idsToDelete);
		// $query = "DELETE FROM mitra_news_content WHERE id in($idsToDelete) ";
		$query = "UPDATE {$this->prefix}_news_content
						SET 
							n_status = '2'
						WHERE
							id in($idsToDelete)";
		// pr($query);
		$result = $this->fetch($query,0);
		return $result;
	}
	function editproduk($id)
	{
	
		$query = "SELECT * FROM mitra_news_content WHERE id= $id ";
		 // pr($query);
		$result = $this->fetch($query,0);
		return $result;
	}
	
	function edit_produk_submit($upload)
	{
	 // pr($_FILES['file_image']['name']);
	// exit;
	global $CONFIG;
		if($_FILES['file_image']['name'] != ''){

			$query = "UPDATE {$this->prefix}_news_content
						SET 
							title = '".$_POST['title']."',
							content = '".$_POST['content']."',
							image = '".$upload['full_name']."',
							file = '".$upload['full_path']."',
							n_status = '".$_POST['n_status']."'
						WHERE
							id = '".$_POST['id']."' ";
	
		
	
		}else{	
			$query = "UPDATE {$this->prefix}_news_content
							SET 
								title = '".$_POST['title']."',
								content = '".$_POST['content']."',
								n_status = '".$_POST['n_status']."'
							WHERE
								id = '".$_POST['id']."' ";

		}
		 
		
		$result = $this->fetch($query,0);
		
		return $result;
	}
	
	
}
?>