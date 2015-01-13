<?php
class m_brocure extends Database {
	
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
	function brocure_add_submit($upload,$uploaddoc)
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
							('".$_POST['parentid']."','".$_POST['title']."','','".$content."','".$upload['full_name']."','".$upload['full_path']."','9','".$_POST['idget']."','".$create_date."'
								,'','".$_POST['n_status']."')";
								
				$result = $this->fetch($query,0);
				$getID = $this->insert_id();
				$query2 = "INSERT INTO  {$this->prefix}_news_content_repo (title,files,typealbum,gallerytype,otherid)
								VALUES ('".$_POST['title']."','".$uploaddoc['full_name']."','9','1',$getID)";
				
				$result2 = $this->fetch($query2,0);
			
			}else if ($upload['full_name'] !='') {
			//pr("gambar aja");
				$query = "INSERT INTO  
							{$this->prefix}_news_content (parentid,title,brief,content,image,file,categoryid,articletype,
													posted_date,authorid,n_status)
						VALUES
							('".$_POST['parentid']."','".$_POST['title']."','','".$content."','".$upload['full_name']."','".$upload['full_path']."','9','".$_POST['idget']."','".$create_date."'
								,'','".$_POST['n_status']."')";
								
				$result = $this->fetch($query,0);
			}else if ($uploaddoc['full_name'] !='') {
			//pr("doc aja");
				$query = "INSERT INTO  
							{$this->prefix}_news_content (parentid,title,brief,content,image,file,categoryid,articletype,
													posted_date,authorid,n_status)
						VALUES
							('".$_POST['parentid']."','".$_POST['title']."','','".$content."','".$upload['full_name']."','".$upload['full_path']."','9','".$_POST['idget']."','".$create_date."'
								,'','".$_POST['n_status']."')";
								
				$result = $this->fetch($query,0);
				$getID = $this->insert_id();
				$query2 = "INSERT INTO  {$this->prefix}_news_content_repo (title,files,typealbum,gallerytype,otherid)
								VALUES ('".$_POST['title']."','".$uploaddoc['full_name']."','9','1',$getID)";
				
				$result2 = $this->fetch($query2,0);
			
			}
			else{
			//pr("kosong semua");
				$query = "INSERT INTO  
							{$this->prefix}_news_content (parentid,title,brief,content,image,file,categoryid,articletype,
													posted_date,authorid,n_status)
						VALUES
							('".$_POST['parentid']."','".$_POST['title']."','','".$content."','".$upload['full_name']."','".$upload['full_path']."','9','".$_POST['idget']."','".$create_date."'
								,'','".$_POST['n_status']."')";
								
				$result = $this->fetch($query,0);
			}
			
		return $result;

	}
	///////////////////
	// brocure
	function brocure($type=1)
	{
		$query = "SELECT * FROM {$this->prefix}_news_content WHERE  categoryid='9' and n_status != '2'  ORDER BY created_date DESC";
		
		$result = $this->fetch($query,1);

		foreach ($result as $key => $value) {
			$query = "SELECT username FROM admin_member WHERE id={$value['authorid']} LIMIT 1";

			$username = $this->fetch($query,0);

			$result[$key]['username'] = $username['username'];
		}
		
		return $result;
	}

	function brocureid($id)
	{
		$query = "SELECT * FROM {$this->prefix}_news_content WHERE  categoryid='9' and articletype='".$id."' and n_status != '2'  ORDER BY created_date DESC";
		
		$result = $this->fetch($query,1);

		foreach ($result as $key => $value) {
			$query = "SELECT username FROM admin_member WHERE id={$value['authorid']} LIMIT 1";

			$username = $this->fetch($query,0);

			$result[$key]['username'] = $username['username'];
		}
		foreach ($result as $key2 => $value2) {
			$query2 = "SELECT files FROM {$this->prefix}_news_content_repo WHERE otherid={$value2['id']} LIMIT 1";

			$files = $this->fetch($query2,0);

			$result[$key2]['files'] = $files['files'];
		}
		
		return $result;
	}

	function brocure_produk($id)
	{
		$query = "SELECT * FROM {$this->prefix}_news_content WHERE categoryid='3' and articletype='".$id."' and n_status = 1  ORDER BY created_date DESC";
		
		$result = $this->fetch($query,1);

		foreach ($result as $key => $value) {
			$query = "SELECT username FROM admin_member WHERE id={$value['authorid']} LIMIT 1";

			$username = $this->fetch($query,0);

			$result[$key]['username'] = $username['username'];
		}
		
		return $result;
	}
	function editbrocure($id)
	{
	
		$query = "SELECT * FROM {$this->prefix}_news_content WHERE  id='".$id."' ORDER BY created_date DESC";
		// pr($query);
		$result = $this->fetch($query,1);

		foreach ($result as $key2 => $value2) {
			$query2 = "SELECT files FROM {$this->prefix}_news_content_repo WHERE otherid={$value2['id']} LIMIT 1";

			$files = $this->fetch($query2,0);

			$result[$key2]['files'] = $files['files'];
		}
		return $result;
	}
	function editbrocure_submit ($upload,$uploaddoc)
	{
		global $CONFIG;
		$create_date=date("Y-m-d H:i:s");
		$content=hsc($_POST['content']);
		// pr($create_date);
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
		// $query2 = "UPDATE {$this->prefix}_news_content_repo
		// 				SET 
		// 					title = '".$_POST['title']."',
		// 					files = '".$uploaddoc['full_name']."',
		// 					n_status = '".$_POST['n_status']."',
		// 					n_status = '".$_POST['n_status']."'
						
		// 				WHERE
		// 					otherid = '".$_POST['id']."' ";
						
		// $result2 = $this->fetch($query2,0);
		$select = "SELECT * FROM {$this->prefix}_news_content_repo WHERE otherid='".$_POST['id']."' LIMIT 1";

				$select_query = $this->fetch($select,0);

				$select2 = "SELECT * FROM {$this->prefix}_news_content WHERE id='".$_POST['id']."' LIMIT 1";

				$select_query2 = $this->fetch($select2,0);
				// pr($select_query2);exit;
				if($select){
					$query2 = "UPDATE {$this->prefix}_news_content_repo
									SET 
										title = '".$_POST['title']."',
										files = '".$uploaddoc['full_name']."'
									WHERE
										otherid = '".$_POST['id']."' ";
										
											// pr($query2);
					$result2 = $this->fetch($query2,0);
				}else{
					
					$insert = "INSERT INTO  {$this->prefix}_news_content_repo (title,files,typealbum,gallerytype,otherid,n_status)
								VALUES ('".$_POST['title']."','".$uploaddoc['full_name']."','".$select_query2['categoryid']."','".$select_query2['articleType']."','".$_POST['id']."','".$_POST['n_status']."')";
				
					$result3 = $this->fetch($insert,0);

				}
		
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
						
		$result = $this->fetch($query,0);
		}else if ($uploaddoc['full_name'] !='') {
		// pr("doc aja");
		$query = "UPDATE {$this->prefix}_news_content
						SET 
							title = '".$_POST['title']."',
							content = '".$content."',
							n_status = '".$_POST['n_status']."',
						WHERE
							id = '".$_POST['id']."' ";
							$result = $this->fetch($query,0);
				
		// $query2 = "UPDATE {$this->prefix}_news_content_repo
		// 				SET 
		// 					title = '".$_POST['title']."',
		// 					files = '".$uploaddoc['full_name']."',
		// 					n_status = '".$_POST['n_status']."'
						
		// 				WHERE
		// 					otherid = '".$_POST['id']."' ";
						
		// $result2 = $this->fetch($query2,0);
							$select = "SELECT * FROM {$this->prefix}_news_content_repo WHERE otherid='".$_POST['id']."' LIMIT 1";

				$select_query = $this->fetch($select,0);

				$select2 = "SELECT * FROM {$this->prefix}_news_content WHERE id='".$_POST['id']."' LIMIT 1";

				$select_query2 = $this->fetch($select2,0);
				// pr($select_query2);exit;
				if($select){
					$query2 = "UPDATE {$this->prefix}_news_content_repo
									SET 
										title = '".$_POST['title']."',
										files = '".$uploaddoc['full_name']."'
									WHERE
										otherid = '".$_POST['id']."' ";
										
											// pr($query2);
					$result2 = $this->fetch($query2,0);
				}else{
					
					$insert = "INSERT INTO  {$this->prefix}_news_content_repo (title,files,typealbum,gallerytype,otherid,n_status)
								VALUES ('".$_POST['title']."','".$uploaddoc['full_name']."','".$select_query2['categoryid']."','".$select_query2['articleType']."','".$_POST['id']."','".$_POST['n_status']."')";
				
					$result3 = $this->fetch($insert,0);

				}
		
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
	function delete_brocure(){
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
	function updateTitle(){

	global $CONFIG;
		$create_date=date("Y-m-d H:i:s");

		if($_POST[id]==""){
			$query = "INSERT INTO  
							{$this->prefix}_news_content (title,categoryid,articletype,
													posted_date,authorid,n_status)
						VALUES
							('".$_POST['title_prod']."','12','".$_POST['type']."','".$create_date."'
								,'admin','1')";
						//pr($query);			
				$result = $this->fetch($query,0);
		}else{
			$query = "UPDATE {$this->prefix}_news_content
						SET 
							title = '".$_POST['title_prod']."'
							
						WHERE
							id = '".$_POST['id']."' ";
							
				$result = $this->fetch($query,0);
		}
	}

	function getTitleprod($type){

		$query = "SELECT * FROM {$this->prefix}_news_content WHERE categoryid=12 AND articletype='".$type."' LIMIT 1";
		
		$result = $this->fetch($query,0);
		
		return $result;

		}
	
	
	
}
?>
