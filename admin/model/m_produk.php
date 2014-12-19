<?php
class m_produk extends Database {
	
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
// pr($query);
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
	
	// function about_us()
	// {
		// $query= "SELECT * FROM mitra_news_content WHERE categoryid= '2' and articleType='0' " ;
		
		// $result = $this->fetch($query,0);
		// return $result;
	// }
	
	function list_geophysics()
	{
	$query = "SELECT * FROM {$this->prefix}_news_content WHERE  categoryid='3' and articleType='1' and n_status != 2 and parentid=''  ORDER BY created_date DESC";
		
		$result = $this->fetch($query,1);
		 //pr($query );
		 //pr($result );
		return $result;
	}
	function list_scientific()
	{
	$query = "SELECT * FROM {$this->prefix}_news_content WHERE  categoryid='3' and articleType='2' and n_status != '2' and parentid=''  ORDER BY created_date DESC";
		
		$result = $this->fetch($query,1);
		// pr($query );
		// pr($result );
		return $result;
	}
	function list_civil()
	{
	$query = "SELECT * FROM {$this->prefix}_news_content WHERE  categoryid='3' and articleType='3' and n_status != '2' and parentid=''  ORDER BY created_date DESC";
		
		$result = $this->fetch($query,1);

		// pr($result );
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
	
	function produk($type=1)
	{
		$query = "SELECT * FROM {$this->prefix}_news_content WHERE  categoryid='3' and n_status != '2'  ORDER BY created_date DESC";
		
		$result = $this->fetch($query,1);

		foreach ($result as $key => $value) {
			$query = "SELECT username FROM admin_member WHERE id={$value['authorid']} LIMIT 1";

			$username = $this->fetch($query,0);

			$result[$key]['username'] = $username['username'];
		}
		
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
	function civil_list($type=1)
	{
		$query = "SELECT * FROM {$this->prefix}_news_content WHERE  categoryid='3' and articleType='3'  and n_status != '2'  ORDER BY created_date DESC";
	
		$result = $this->fetch($query,1);

		foreach ($result as $key => $value) {
			$query = "SELECT username FROM admin_member WHERE id={$value['authorid']} LIMIT 1";

			$username = $this->fetch($query,0);

			$result[$key]['username'] = $username['username'];
		}
		
		return $result;
	}
	
	function addScientific($upload,$uploaddoc)
	{
	
	// pr($_POST);
	// pr($upload);
	// pr($uploaddoc);

	$create_date=date("Y-m-d H:i:s");
	$content=hsc($_POST['content']);
	
		$query = "INSERT INTO  
						{$this->prefix}_news_content (title,brief,content,image,file,categoryid,articletype,
												created_date,posted_date,authorid,n_status)
					VALUES
						('".$_POST['title']."','','".$content."','".$upload['full_name']."'

							,'".$upload['full_path']."','3','2','','".$create_date."'
							,'','".$_POST['n_status']."')";

		//pr($query);
		
		
		$result = $this->fetch($query,0);
		$getID = $this->insert_id();
		
		$query2 = "INSERT INTO 
		{$this->prefix}_news_content_repo (title, typealbum, gallerytype, files, n_status, otherid) 
		VALUES 
		('".$_POST['title']."','3','2','".$uploaddoc['full_name']."','".$_POST['n_status']."',{$getID})";
		// pr($query2);
		 // exit;
		$result2 = $this->fetch($query2,0);
		
		return $result;
		return $result2;
	}
	function addgeophysics($upload,$uploaddoc)
	{
	$create_date=date("Y-m-d H:i:s");
	$content=hsc($_POST['content']);
	 // pr($_POST);
	 // pr($upload);
	 // pr($uploaddoc);
	// $content = strtr($_POST['content'], "'", "&#39;");
		$query = "INSERT INTO  
						{$this->prefix}_news_content (title,brief,content,image,file,categoryid,articletype,
												created_date,posted_date,authorid,n_status)
					VALUES
						('".$_POST['title']."','','".$content."','".$upload['full_name']."'

							,'".$upload['full_path']."','3','1','','".$create_date."'
							,'','".$_POST['n_status']."')";

		 //pr($query);
		
		$result = $this->fetch($query,0);
		//pr($result);
		
		$getID = $this->insert_id();
		
		$query2 = "INSERT INTO 
		{$this->prefix}_news_content_repo (title, typealbum, gallerytype, files, n_status, otherid) 
		VALUES 
		('".$_POST['title']."','3','1','".$uploaddoc['full_name']."','".$_POST['n_status']."',{$getID})";
		//pr($query2);
		$result2 = $this->fetch($query2,0);
		
		return $result;
		return $result2;
	}
	function addcivil($upload,$uploaddoc)
	{
	$create_date=date("Y-m-d H:i:s");
	$content=hsc($_POST['content']);
	 // pr($_POST);
	 // pr($upload);
	 // pr($uploaddoc);
	// $content = strtr($_POST['content'], "'", "&#39;");
		$query = "INSERT INTO  
						{$this->prefix}_news_content (title,brief,content,image,file,categoryid,articletype,
												created_date,posted_date,authorid,n_status)
					VALUES
						('".$_POST['title']."','','".$content."','".$upload['full_name']."'

							,'".$upload['full_path']."','3','3','','".$create_date."'
							,'','".$_POST['n_status']."')";

		 //pr($query);
		
		$result = $this->fetch($query,0);
		//pr($result);
		
		$getID = $this->insert_id();
		
		$query2 = "INSERT INTO 
		{$this->prefix}_news_content_repo (title, typealbum, gallerytype, files, n_status, otherid) 
		VALUES 
		('".$_POST['title']."','3','3','".$uploaddoc['full_name']."','".$_POST['n_status']."',{$getID})";
		//pr($query2);
		$result2 = $this->fetch($query2,0);
		
		return $result;
		return $result2;
	}
	function addgeophysicschild($upload,$uploaddoc)
	{
	$create_date=date("Y-m-d H:i:s");
	$content=hsc($_POST['content']);
	// pr($upload);
	// pr($uploaddoc);
		global $CONFIG;
		//pr($_POST['list_geophysic']);

		if($upload['full_name'] !='' && $uploaddoc['full_name'] !='') {
				//pr("isi dua duanya");
					$query = "INSERT INTO  
							{$this->prefix}_news_content (parentid,title,brief,content,image,file,categoryid,articletype,
													posted_date,authorid,n_status)
						VALUES
							('".$_POST['list_geophysic']."','".$_POST['title']."','','".$content."','".$upload['full_name']."','".$upload['full_path']."','3','1','".$create_date."'
								,'".$_POST['list_geophysic']."','".$_POST['n_status']."')";
		
		
				$result = $this->fetch($query,0);
				$getID = $this->insert_id();
				$query2 = "INSERT INTO  {$this->prefix}_news_content_repo (title,files,typealbum,gallerytype,otherid,n_status)
								VALUES ('".$_POST['title']."','".$uploaddoc['full_name']."','3','1','".$getID."','".$_POST['n_status']."')";
				
				$result2 = $this->fetch($query2,0);

			}else if ($upload['full_name'] !='') {
			//pr("gambar aja");
		//	pr($_POST['list_geophysic']);

				$query = "INSERT INTO  
							{$this->prefix}_news_content (parentid,title,brief,content,image,file,categoryid,articletype,
													posted_date,authorid,n_status)
						VALUES
							('".$_POST['list_geophysic']."','".$_POST['title']."','','".$content."','".$upload['full_name']."','".$upload['full_path']."','3','1','".$create_date."'
								,'".$_POST['list_geophysic']."','".$_POST['n_status']."')";
									
				$result = $this->fetch($query,0);
			}else if ($uploaddoc['full_name'] !='') {
			//pr("doc aja");
			//pr($_POST['list_geophysic']);

				$query = "INSERT INTO  
							{$this->prefix}_news_content (parentid,title,brief,content,image,file,categoryid,articletype,
													posted_date,authorid,n_status)
						VALUES
							('".$_POST['list_geophysic']."','".$_POST['title']."','','".$content."','".$upload['full_name']."','".$upload['full_path']."','3','1','".$create_date."'
								,'".$_POST['list_geophysic']."','".$_POST['n_status']."')";
									
				$result = $this->fetch($query,0);
				$getID = $this->insert_id();
				$query2 = "INSERT INTO  {$this->prefix}_news_content_repo (title,files,typealbum,gallerytype,otherid,n_status)
								VALUES ('".$_POST['title']."','".$uploaddoc['full_name']."','3','1','".$getID."','".$_POST['n_status']."')";
				
				$result2 = $this->fetch($query2,0);
			
			}
			else{
			//pr("kosong semua");
			//pr($_POST['list_geophysic']);

					$query = "INSERT INTO  
							{$this->prefix}_news_content (parentid,title,brief,content,image,file,categoryid,articletype,
													posted_date,authorid,n_status)
						VALUES
							('".$_POST['list_geophysic']."','".$_POST['title']."','','".$content."','".$upload['full_name']."','".$upload['full_path']."','3','1','".$create_date."'
								,'".$_POST['list_geophysic']."','".$_POST['n_status']."')";
						pr($query);		
								
				$result = $this->fetch($query,0);
			}
			
		return $result;
	}
	function addscientificchild($upload,$uploaddoc)
	{
		global $CONFIG;
		$create_date=date("Y-m-d H:i:s");
		$content=hsc($_POST['content']);
		if($upload['full_name'] !='' && $uploaddoc['full_name'] !='') {
			//	pr("isi dua duanya");
					$query = "INSERT INTO  
							{$this->prefix}_news_content (parentid,title,brief,content,image,file,categoryid,articletype,
													posted_date,authorid,n_status)
						VALUES
							('".$_POST['list_scientifics']."','".$_POST['title']."','','".$content."','".$upload['full_name']."','".$upload['full_path']."','3','2','".$create_date."'
								,'".$_POST['list_scientifics']."','".$_POST['n_status']."')";
									
				$result = $this->fetch($query,0);
				$getID = $this->insert_id();
				$query2 = "INSERT INTO  {$this->prefix}_news_content_repo (title,files,typealbum,gallerytype,otherid,n_status)
								VALUES ('".$_POST['title']."','".$uploaddoc['full_name']."','3','2','".$getID."','".$_POST['n_status']."')";
				
				$result2 = $this->fetch($query2,0);
			
			}else if ($upload['full_name'] !='') {
			//pr("gambar aja");
					$query = "INSERT INTO  
							{$this->prefix}_news_content (parentid,title,brief,content,image,file,categoryid,articletype,
													posted_date,authorid,n_status)
						VALUES
							('".$_POST['list_scientifics']."','".$_POST['title']."','','".$content."','".$upload['full_name']."','".$upload['full_path']."','3','2','".$create_date."'
								,'".$_POST['list_scientifics']."','".$_POST['n_status']."')";
									
				
									
				$result = $this->fetch($query,0);
			}else if ($uploaddoc['full_name'] !='') {
			//pr("doc aja");
				$query = "INSERT INTO  
							{$this->prefix}_news_content (parentid,title,brief,content,image,file,categoryid,articletype,
													posted_date,authorid,n_status)
						VALUES
							('".$_POST['list_scientifics']."','".$_POST['title']."','','".$content."','".$upload['full_name']."','".$upload['full_path']."','3','2','".$create_date."'
								,'".$_POST['list_scientifics']."','".$_POST['n_status']."')";
									
				$result = $this->fetch($query,0);
				$getID = $this->insert_id();
				$query2 = "INSERT INTO  {$this->prefix}_news_content_repo (title,files,typealbum,gallerytype,otherid,n_status)
								VALUES ('".$_POST['title']."','".$uploaddoc['full_name']."','3','2','".$getID."','".$_POST['n_status']."')";
				
				$result2 = $this->fetch($query2,0);
			
			}
			else{
			//pr("kosong semua");
				$query = "INSERT INTO  
							{$this->prefix}_news_content (parentid,title,brief,content,image,file,categoryid,articletype,
													posted_date,authorid,n_status)
						VALUES
							('".$_POST['list_scientifics']."','".$_POST['title']."','','".$content."','".$upload['full_name']."','".$upload['full_path']."','3','2','".$create_date."'
								,'".$_POST['list_scientifics']."','".$_POST['n_status']."')";
									
				$result = $this->fetch($query,0);
			}
			
		return $result;
	}
	function addcivilchild($upload,$uploaddoc)
	{
	$create_date=date("Y-m-d H:i:s");
	$content=hsc($_POST['content']);
	// pr($_POST);
	//pr($_POST['list_geophysic']);
	// pr($upload);
	// pr($uploaddoc);exit;
		global $CONFIG;
	//	pr($_POST['list_civil']);
		if($upload['full_name'] !='' && $uploaddoc['full_name'] !='') {
				//pr("isi dua duanya");
					$query = "INSERT INTO  
							{$this->prefix}_news_content (parentid,title,brief,content,image,file,categoryid,articletype,
													posted_date,authorid,n_status)
						VALUES
							('".$_POST['list_civil']."','".$_POST['title']."','','".$content."','".$upload['full_name']."','".$upload['full_path']."','3','3','".$create_date."'
								,'".$_POST['list_civil']."','".$_POST['n_status']."')";
					
				$result = $this->fetch($query,0);
				$getID = $this->insert_id();
				$query2 = "INSERT INTO  {$this->prefix}_news_content_repo (title,files,typealbum,gallerytype,otherid,n_status)
								VALUES ('".$_POST['title']."','".$uploaddoc['full_name']."','3','3','".$getID."','".$_POST['n_status']."')";
				
				$result2 = $this->fetch($query2,0);
			
			}else if ($upload['full_name'] !='') {
			//pr("gambar aja");
				$query = "INSERT INTO  
							{$this->prefix}_news_content (parentid,title,brief,content,image,file,categoryid,articletype,
													posted_date,authorid,n_status)
						VALUES
							('".$_POST['list_civil']."','".$_POST['title']."','','".$content."','".$upload['full_name']."','".$upload['full_path']."','3','3','".$create_date."'
								,'".$_POST['list_civil']."','".$_POST['n_status']."')";
									
				$result = $this->fetch($query,0);
			}else if ($uploaddoc['full_name'] !='') {
			//pr("doc aja");
				$query = "INSERT INTO  
							{$this->prefix}_news_content (parentid,title,brief,content,image,file,categoryid,articletype,
													posted_date,authorid,n_status)
						VALUES
							('".$_POST['list_civil']."','".$_POST['title']."','','".$content."','".$upload['full_name']."','".$upload['full_path']."','3','3','".$create_date."'
								,'".$_POST['list_civil']."','".$_POST['n_status']."')";
									
				$result = $this->fetch($query,0);
				$getID = $this->insert_id();
				$query2 = "INSERT INTO  {$this->prefix}_news_content_repo (title,files,typealbum,gallerytype,otherid,n_status)
								VALUES ('".$_POST['title']."','".$uploaddoc['full_name']."','3','3','".$getID."','".$_POST['n_status']."')";
				
				$result2 = $this->fetch($query2,0);
			
			}
			else{
			//pr("kosong semua");
					$query = "INSERT INTO  
							{$this->prefix}_news_content (parentid,title,brief,content,image,file,categoryid,articletype,
													posted_date,authorid,n_status)
						VALUES
							('".$_POST['list_civil']."','".$_POST['title']."','','".$content."','".$upload['full_name']."','".$upload['full_path']."','3','3','".$create_date."'
								,'".$_POST['list_civil']."','".$_POST['n_status']."')";
						//pr($query);			
				$result = $this->fetch($query,0);
			}
			
		return $result;
	}
	function delete_geophysics()
	{

	$del = $_POST['ids'];
    $idsToDelete = implode($del, ', ');
		$query = "UPDATE {$this->prefix}_news_content
						SET 
							n_status = '2'
						WHERE
							id in($idsToDelete)";

		$result = $this->fetch($query,0);
		
		return $result;
	}
	
	function delete_produk()
	{

	
	$del = $_POST['ids'];
    $idsToDelete = implode($del, ', ');
		$query = "UPDATE {$this->prefix}_news_content
						SET 
							n_status = '2'
						WHERE
							id in($idsToDelete)";
		// pr($query);
		$result = $this->fetch($query,0);
		$del = $_POST['ids'];
		$query = "UPDATE {$this->prefix}_news_content_repo
						SET 
							n_status = '2'
						WHERE
							otherid in($idsToDelete)";
		// pr($query);
		$result = $this->fetch($query,0);
		return $result;
	}
	function editproduk($id)
	{
	
		//$query = "SELECT * FROM mitra_news_content WHERE id= $id ";
		$query = "SELECT DISTINCT(A.id), A.title, A.content, A.n_status, A.posted_date , A.image, B.otherid, B.id as idrepo, B.title as titlerepo, B.contentimage, B.files
		FROM mitra_news_content AS A JOIN mitra_news_content_repo AS B
		ON A.id = B.otherid || A.parentid = B.otherid where A.id='$id' ";
		
		$result = $this->fetch($query,0);
	
		return $result;
	}
	
	function edit_produk_submit($upload,$uploaddoc)
	{
	global $CONFIG;
		$create_date=date("Y-m-d H:i:s");
		$content=hsc($_POST['content']);
		if($upload['full_name'] !='' && $uploaddoc['full_name'] !='') {
		
		$query = "UPDATE {$this->prefix}_news_content
						SET 
							title = '".$_POST['title']."',
							content = '".$content."',
							image = '".$upload['full_name']."',
							file ='".$upload['full_path']."',
							n_status = '".$_POST['n_status']."',
							posted_date='".$create_date."'
						WHERE
							id = '".$_POST['id']."' ";
							
		$result = $this->fetch($query,0);
		//$getID = $this->insert_id();
		$query2 = "UPDATE {$this->prefix}_news_content_repo
						SET 
							title = '".$_POST['title']."',
							files = '".$uploaddoc['full_name']."',
						WHERE
							otherid = '".$_POST['id']."' ";
							
		$result2 = $this->fetch($query2,0);
		
		}else if ($upload['full_name'] !='') {
		//pr("gambar aja");
		$query = "UPDATE {$this->prefix}_news_content
						SET 
							title = '".$_POST['title']."',
							content = '".$content."',
							image = '".$upload['full_name']."',
							file ='".$upload['full_path']."',
							n_status = '".$_POST['n_status']."',
							posted_date='".$create_date."'
						WHERE
							id = '".$_POST['id']."' ";
							// pr($query);
		$result = $this->fetch($query,0);
		}else if ($uploaddoc['full_name'] !='') {
		//pr("doc aja");
		$query = "UPDATE {$this->prefix}_news_content
						SET 
							title = '".$_POST['title']."',
							content = '".$content."',
							n_status = '".$_POST['n_status']."',
							posted_date='".$create_date."'
						WHERE
							id = '".$_POST['id']."' ";
							
		$result = $this->fetch($query,0);
		$query2 = "UPDATE {$this->prefix}_news_content_repo
						SET 
							title = '".$_POST['title']."',
							files = '".$uploaddoc['full_name']."'
						WHERE
							otherid = '".$_POST['id']."' ";
							
		$result2 = $this->fetch($query2,0);
		
		}
		else{
		//pr("kosong semua");
		$query = "UPDATE {$this->prefix}_news_content
						SET 
							title = '".$_POST['title']."',
							content = '".$content."',
							n_status = '".$_POST['n_status']."',
							posted_date='".$create_date."'
						WHERE
							id = '".$_POST['id']."' ";
	
		$result = $this->fetch($query,0);
		$query2 = "UPDATE {$this->prefix}_news_content_repo
						SET 
							n_status = '".$_POST['n_status']."'
							
						WHERE
							otherid = '".$_POST['id']."' ";
							
		$result2 = $this->fetch($query2,0);
		}
		return $result;
		}
		function getShowmenu($menu){

		$query = "SELECT * FROM {$this->prefix}_news_content WHERE (n_status = '1' OR n_status='0') AND title='".$menu."'";
		
		$result = $this->fetch($query,0);
		if($result['n_status']==1){
			$result['color']="success";
			$result['text']="Hidden";
			$result['icon']="fa fa-eye";
		}else{
			$result['color']="danger";
			$result['text']="Show";
			$result['icon']="fa fa-eye-slash";
		}
		return $result;

		}
		function showHidemenu_submit($data,$status_query){

		global $CONFIG;

		$create_date=date("Y-m-d H:i:s");
		// pr($data);exit;
		if($status_query=='input'){
				$query = "INSERT INTO  
							{$this->prefix}_news_content (title,categoryid,articletype,
													posted_date,authorid,n_status)
						VALUES
							('".$data['menu']."','".$data['cat']."','".$data['type']."','".$create_date."'
								,'admin','1')";
						//pr($query);			
				$result = $this->fetch($query,0);

		}elseif($status_query=='update'){

				$query = "UPDATE {$this->prefix}_news_content
						SET 
							n_status = '".$data['n_status']."'
							
						WHERE
							id = '".$data['id']."' ";
							
				$result = $this->fetch($query,0);

			}
			return $result;
		}
	
}
?>
