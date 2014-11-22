<?php
class marticle extends Database {
	
	var $prefix;
	function __construct()
	{
		$this->prefix = "mitra";
		$this->db = new Database;
	}

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
	
	function getContent($id=false, $type=1,$cat=1, $debug=false)
	{
		
		$filter = "";
		if ($id) $filter .= " AND id = {$id} ";
		
		$sql = array(
                'table'=>"{$this->prefix}_news_content",
                'field'=>"*",
                'condition' => "categoryid= {$type} AND articleType = {$cat} {$filter} ",
                );

		$res = $this->lazyQuery($sql,$debug);
		if ($res) return $res;
		return false;

	}
	
	function getRepo($id=false, $typealbum=1, $gallerytype=1, $otherid=false, $debug=false)
	{

		$filter = "";
		if ($id) $filter .= " AND id = {$id} ";
		if ($otherid) $filter .= " AND otherid = {$otherid} ";
		$sql = array(
                'table'=>"{$this->prefix}_news_content_repo",
                'field'=>"*",
                'condition' => "typealbum= {$typealbum} AND gallerytype = {$gallerytype} AND n_status = 1 {$filter} ",
                );

		$res = $this->db->lazyQuery($sql,$debug);
		if ($res) return $res;
		return false;
	}

	function saveData($data, $debug=false)
	{	

		
    	foreach ($data as $key => $value) {
    		$$key = $value;
    	}

    	if(!empty($postdate)) $postdate = date("Y-m-d",strtotime($postdate)); 
    	$created_date = date('Y-m-d H:i:s');
    	if ($n_status == 'on') $n_status = 1;

		$sql = array(
                'table'=>"{$this->prefix}_news_content",
                'field'=>"title, brief, content, categoryid, articletype, created_date, posted_date, authorid, n_status",
                'value' => "'{$title}', '{$brief}', '{$content}', '{$categoryid}', '{$articletype}', '{$created_date}', '{$postdate}', '{$authorid}', '{$n_status}'",
                );

		$res = $this->lazyQuery($sql,$debug,1);
		if ($res) return true;
		return false;
	}

	function saveDataRepo($data, $debug=false)
	{	

		
    	foreach ($data as $key => $value) {
    		$$key = $value;
    	}

    	if(!empty($postdate)) $postdate = date("Y-m-d",strtotime($postdate)); 
    	$created_date = date('Y-m-d H:i:s');
    	if ($n_status == 'on') $n_status = 1;
    	if ($files) $files = $files;
    	else $files = null;

		$sql = array(
                'table'=>"{$this->prefix}_news_content_repo",
                'field'=>"title, brief, content, typealbum, gallerytype, created_date, otherid, n_status, files",
                'value' => "'{$title}', '{$brief}', '{$content}', '{$typealbum}', '{$gallerytype}', '{$created_date}', '{$otherid}', '{$n_status}', '{$files}'",
                );

		$res = $this->lazyQuery($sql,$debug,1);
		if ($res) return true;
		return false;
	}

	function updateRepo($data, $debug=false)
	{
		$image = $data['full_name'];

		if ($data['id']) $id = $data['id'];
		else $id = $this->insert_id();
		$sql = array(
                'table'=>"{$this->prefix}_news_content_repo",
                'field'=>"thumbnail = '{$image}', files = '{$image}'",
                'condition' => " id = $id",
                );

		$res = $this->lazyQuery($sql,$debug,2);
		if ($res) return true;
		return false;
	}

	function updateGalleryRepo($data, $debug=false)
	{
		foreach ($data as $key => $value) {
    		$$key = $value;
    	}

    	if(!empty($postdate)) $postdate = date("Y-m-d",strtotime($postdate)); 
    	$created_date = date('Y-m-d H:i:s');
    	if ($n_status == 'on') $n_status = 1;
    	else $n_status = 0;
    	$content = addslashes($content);
    	$brief = addslashes($brief);
		$sql = array(
                'table'=>"{$this->prefix}_news_content_repo",
                'field'=>"title = '{$title}', brief = '{$brief}', content = '{$content}', n_status = {$n_status}",
                'condition' => "id = {$id}",
                );

		$res = $this->lazyQuery($sql,$debug,2);
		if ($res) return true;
		return false;
	}

	function updateNews($data, $debug=false)
	{
		foreach ($data as $key => $value) {
    		$$key = $value;
    	}

    	if(!empty($postdate)) $postdate = date("Y-m-d",strtotime($postdate)); 
    	$created_date = date('Y-m-d H:i:s');
    	if ($n_status == 'on') $n_status = 1;
    	else $n_status = 0;
    	$content = addslashes($content);
    	$brief = addslashes($brief);
		$sql = array(
                'table'=>"{$this->prefix}_news_content",
                'field'=>"title = '{$title}', brief = '{$brief}', content = '{$content}', posted_date = '{$postdate}', n_status = {$n_status}",
                'condition' => "id = {$id}",
                );

		$res = $this->lazyQuery($sql,$debug,2);
		if ($res) return true;
		return false;
	}

	function updateData($data, $debug=false)
	{	

		$image = $data['full_name'];

		if ($data['id']) $id = $data['id'];
		else $id = $this->insert_id();
		$sql = array(
                'table'=>"{$this->prefix}_news_content",
                'field'=>"image = '{$image}', file = '{$image}'",
                'condition' => " id = $id",
                );

		$res = $this->lazyQuery($sql,$debug,2);
		if ($res) return true;
		return false;
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
	
	function get_article_id($data)
	{
		$query = "SELECT * FROM {$this->prefix}_news_content WHERE id= {$data} LIMIT 1";
		
		$result = $this->fetch($query,0);

		if($result['posted_date'] != '') $result['posted_date'] = dateFormat($result['posted_date'],'dd-mm-yyyy');
		($result['n_status'] == 1) ? $result['n_status'] = 'checked' : $result['n_status'] = '';

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
}
?>