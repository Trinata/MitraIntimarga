<?php
// defined ('MICRODATA') or exit ( 'Forbidden Access' );

class gallery extends Controller {
	
	var $models = FALSE;
	
	public function __construct()
	{
		parent::__construct();
		$this->loadmodule();
		$this->view = $this->setSmarty();
		$sessionAdmin = new Session;
		$this->admin = $sessionAdmin->get_session();

		global $app_domain;

		$this->view->assign('app_domain',$app_domain);
		// $this->validatePage();
	}
	public function loadmodule()
	{
		
		$this->marticle = $this->loadModel('marticle');

	}
	
	public function index(){
       
		$this->view->assign('active','active');
		$data = $this->marticle->getContent($id=false, $type=5,$cat=3);

		foreach ($data as $key => $valAlbum){

			if($valAlbum['parentid']==0){
				$valAlbum['nameAlbum']=$valAlbum['title'];
				$dataAlbum[]=$valAlbum;
				// pr($dataAlbum);
				// echo"=====";

				foreach ($data as $key => $valAlbum2){ 

					if($valAlbum2['parentid']==$valAlbum['id'] ){


								$valAlbum['nameAlbum']=$valAlbum['title']." >> ".$valAlbum2['title'];
							
						$valAlbum['id']=$valAlbum2['id'];
						$dataAlbum[]=$valAlbum;

					}
				}

			}

		}
		//pr($dataAlbum);
		if ($data){
		
			
			// pr($data);
			foreach ($data as $key => $val){

				$dataRepo[$key] = $this->marticle->getRepo($id=false, $type=1,$cat=0, $val['id']);

			}
		}
		
		// pr($dataRepo);
		$this->view->assign('data',$dataAlbum);
		// $this->view->assign('data',$data);

		return $this->loadView('news/home-gallery');

	}

	public function addAlbum(){

       	global $basedomain;


		$this->view->assign('active','active');
		$data = $this->marticle->getContent($id=false, $type=5,$cat=3);

		if ($data){
			
			
			// pr($data);
			foreach ($data as $key => $val){

				$dataRepo[$key] = $this->marticle->getRepo($id=false, $type=1,$cat=0, $val['id']);

			}

			$this->view->assign('data',$data);
		}
		foreach ($data as $key => $valAlbum){
			if($valAlbum['parentid']==0){
				$dataAlbum[]=$valAlbum;
			}

		}
		// pr($dataAlbum);
		$this->view->assign('dataAlbum',$dataAlbum);

		if(isset($_GET['id']))
		{
			$id = $_GET['id'];
			$data = $this->marticle->getContent($id, $type=5,$cat=3);
			

			$result = $data[0];
			($result['n_status'] == 1) ? $result['n_status'] = 'checked' : $result['n_status'] = '';
			// pr($result);
			$this->view->assign('data',$result);
		}


		if ($_POST){

			
	    	// pr($_POST);

	    	
	    	if ($_POST['id']){
	    	
	    		$saveData = $this->marticle->updateNewsAlbum($_POST);

	    	}else{
	    		$saveData = $this->marticle->saveDataAlbum($_POST);	
	    	}
	    	
	    	// pr($saveData);
	    	if ($saveData){

	    		if(!empty($_FILES)){
					if($_FILES['file_image']['name'] != ''){
						if($x['action'] == 'update') deleteFile($x['image']);
						$image = uploadFile('file_image',null,'image');
						if ($image['status']){
							$image['id'] = $_POST['id'];
							$saveData = $this->marticle->updateData($image);
							// pr($saveData);
							if ($saveData){
								echo "<script>alert('Data berhasil di simpan');window.location.href='".$basedomain."gallery'</script>";
							}	
						}

						
					}
				}

				echo "<script>alert('Data berhasil di simpan');window.location.href='".$basedomain."gallery'</script>";
	    	}
		}
		// pr($dataRepo);
		

		return $this->loadView('news/add-album');

	}

	function addFile()
	{
		global $basedomain;
		
		$data = $this->marticle->getContent($id=false, $type=5,$cat=3);
		// pr($data);
		foreach ($data as $key => $valAlbum){

			if($valAlbum['parentid']!=0){
				foreach($data as $key => $valAlbum2){
					if($valAlbum2['id']==$valAlbum['parentid']){
						$valAlbum['subAlbum']=$valAlbum2['title'].">> ".$valAlbum['title'];
					}

				}
				$dataAlbum[]=$valAlbum;
			}

		}
		// pr($dataAlbum);exit;
		$this->view->assign('cat',$dataAlbum);

		if(isset($_GET['id']))
		{
			$id = $_GET['id'];

			if ($data){
			
			
			// pr($data);
				// foreach ($data as $key => $val){

					$dataRepo = $this->marticle->getRepo($id=false, $type=1,$cat=0, $id);

				// }

			}
			// $data = $this->marticle->getContent($id, $type=5,$cat=3);
			

			$result = $dataRepo[0];
			($result['n_status'] == 1) ? $result['n_status'] = 'checked' : $result['n_status'] = '';
			// pr($result);
			$this->view->assign('data',$result);
		}
		if ($_POST){

			if ($_POST['id']){
	    	
	    		$saveData = $this->marticle->updateGalleryRepo($_POST);

	    	}else{
	    		$saveData = $this->marticle->saveDataRepo($_POST);	
	    	}
	    	
	    	// pr($saveData);
	    	if ($saveData){

	    		if(!empty($_FILES)){
					if($_FILES['file_image']['name'] != ''){
						if($x['action'] == 'update') deleteFile($x['image']);
						$image = uploadFile('file_image',null,'image');
						if ($image['status']){
							$image['id'] = $_POST['id'];
							$saveData = $this->marticle->updateRepo($image);
							// pr($saveData);
							if ($saveData){
								echo "<script>alert('Data berhasil di simpan');window.location.href='".$basedomain."gallery/listFile'</script>";
							}	
						}

						
					}
				}

				echo "<script>alert('Data berhasil di simpan');window.location.href='".$basedomain."gallery/listFile'</script>";
	    	}
		}
		return $this->loadView('news/add-file');
	}


	function listFile()
	{
		$this->view->assign('active','active');
		$data = $this->marticle->getContent($id=false, $type=5,$cat=3);

		if ($data){
			
			
			// pr($data);
			foreach ($data as $key => $val){

				$dataRepo[$key] = $this->marticle->getRepo($id=false, $type=1,$cat=0, $val['id']);

			}

		}
		
		// pr($dataRepo);
		$this->view->assign('data',$dataRepo);

		return $this->loadView('news/home-file');
	}

	function news()
	{

		$this->view->assign('active','active');
		$data = $this->marticle->getContent($id=false, $type=5,$cat=2);

		if ($data){
			foreach ($data as $key => $val){

				$data[$key]['created_date'] = dateFormat($val['created_date'],'article');

				$data[$key]['posted_date'] = dateFormat($val['posted_date'],'article');

				if($val['n_status'] == '1') {
					$data[$key]['n_status'] = 'Publish';
					$data[$key]['status_color'] = 'green';
				} else {
					$data[$key]['n_status'] = 'Unpublish';
					$data[$key]['status_color'] = 'red'; 
				}
			}
		}
		
		// pr($data);exit;
		$this->view->assign('data',$data);

		return $this->loadView('news/home');
	}


	public function addnews(){
		
		$this->view->assign('active','active');

		if(isset($_GET['id']))
		{
			$id = $_GET['id'];
			$data = $this->marticle->getContent($id, $type=5,$cat=2);
			

			$result = $data[0];
			($result['n_status'] == 1) ? $result['n_status'] = 'checked' : $result['n_status'] = '';
			// pr($result);
			$this->view->assign('data',$result);
		} 

		$this->view->assign('admin',$this->admin['admin']);
		return $this->loadView('news/news');
	}
    

	function gallery()
	{
		
	}

	function galleryAlbum()
	{
		$this->view->assign('active','active');
		$data = $this->marticle->getContent($id=false, $type=5,$cat=3);

		if ($data){
			
			
			// pr($data);
			foreach ($data as $key => $val){

				$dataRepo[$key] = $this->marticle->getRepo($id=false, $type=1,$cat=0, $val['id']);

			}
		}
		
		pr($dataRepo);
		$this->view->assign('data',$data);

		return $this->loadView('news/home-gallery');
	}

	function addgallery()
	{
		$this->view->assign('active','active');

		if(isset($_GET['id']))
		{
			$id = $_GET['id'];
			$data = $this->marticle->getContent($id, $type=5,$cat=2);
			

			$result = $data[0];
			($result['n_status'] == 1) ? $result['n_status'] = 'checked' : $result['n_status'] = '';
			// pr($result);
			$this->view->assign('data',$result);
		} 

		$this->view->assign('admin',$this->admin['admin']);
		return $this->loadView('news/gallery-detail');
	}

	
	
	public function addarticle(){
		
		$this->view->assign('active','active');

		if(isset($_GET['id']))
		{
			$data = $this->models->get_article_id($_GET['id']);	
			$this->view->assign('data',$data);
		} 

		$this->view->assign('admin',$this->admin['admin']);
		return $this->loadView('inputarticle');
	}
    
    function saveData()
    {

    	global $basedomain;

    	// pr($_POST);

    	
    	if ($_POST['id']){
    	
    		$saveData = $this->marticle->updateNews($_POST);

    	}else{
    		$saveData = $this->marticle->saveData($_POST);	
    	}
    	
    	// pr($saveData);
    	if ($saveData){

    		if(!empty($_FILES)){
				if($_FILES['file_image']['name'] != ''){
					if($x['action'] == 'update') deleteFile($x['image']);
					$image = uploadFile('file_image',null,'image');
					if ($image['status']){
						$image['id'] = $_POST['id'];
						$saveData = $this->marticle->updateData($image);
						// pr($saveData);
						if ($saveData){
							echo "<script>alert('Data berhasil di simpan');window.location.href='".$basedomain."article/news'</script>";
						}	
					}

					
				}
			}

			echo "<script>alert('Data berhasil di simpan');window.location.href='".$basedomain."article/news'</script>";
    	}
    }

	public function articleinp(){
		global $CONFIG;
		
		if(isset($_POST['n_status'])){
			if($_POST['n_status']=='on') $_POST['n_status']=1;
		} else {
			$_POST['n_status']=0;
		}
		if(isset($_POST['articletype'])){
			if($_POST['articletype']=='on') {
				if($_POST['articleid_old']!=0){
					$_POST['articletype'] = $_POST['articleid_old'];
				} else {
					$_POST['articletype']=1; 
				}
			}
		} else {
			$_POST['articletype']=0;
		}
 		
		if(isset($_POST)){
                // validasi value yang masuk
               $x = form_validation($_POST);

			   try
			   {
			   		if(isset($x) && count($x) != 0)
			   		{
						//update or insert
						$x['action'] = 'insert';
						if($x['id'] != ''){
							$x['action'] = 'update';
						}
						
						//upload file
						if(!empty($_FILES)){
							if($_FILES['file_image']['name'] != ''){
								if($x['action'] == 'update') deleteFile($x['image']);
								$image = uploadFile('file_image',null,'image');
								$x['image_url'] = $CONFIG['admin']['app_url'].$image['folder_name'].$image['full_name'];
								$x['image'] = $image['full_name'];
							}
						}
						
						$data = $this->models->article_inp($x);
			   		}
				   	
			   }catch (Exception $e){}
			   
            echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."home'</script>";
            }
	}
	
	public function articledel(){

		global $CONFIG;
		// pr($_POST);exit;
		$data = $this->marticle->article_del_repo($_POST['ids']);
		
		echo "<script>alert('Data has been moved to trash');window.location.href='".$CONFIG['admin']['base_url']."gallery/listFile'</script>";
		
	}
	
	public function trash(){
       
		$data = $this->models->get_article_trash();
		if ($data){
			foreach ($data as $key => $val){
				$data[$key]['created_date'] = dateFormat($val['created_date'],'article');

				$data[$key]['posted_date'] = dateFormat($val['posted_date'],'article');

				if($val['n_status'] == '2') {
					$data[$key]['n_status'] = 'Deleted';
					$data[$key]['status_color'] = 'red';
				} 
			}
		}

		$this->view->assign('active','active');
		$this->view->assign('data',$data);

		return $this->loadView('viewtrash');

	}
	
	
	public function articlerest(){

		global $CONFIG;
		
		$data = $this->models->article_restore($_POST['ids']);
		
		echo "<script>alert('Your data has been restore');window.location.href='".$CONFIG['admin']['base_url']."article/trash'</script>";
		
	}
	
	public function articledelp(){

		global $CONFIG;
		
		$id = $_GET['id'];

		$data = $this->models->article_delpermanent($id);
		
		echo "<script>alert('Data berhasil di hapus secara permanen');window.location.href='".$CONFIG['admin']['base_url']."article/trash'</script>";
		
	}

	public function upload(){

		return $this->loadView('uploadFrame');

	}

	public function uploadtwt(){

		return $this->loadView('uploadFrameTwt');

	}

	public function uplFrame(){
		global $CONFIG;

		//upload file
		if(!empty($_FILES)){
			if($_FILES['file_frame']['name'] != ''){
				$image = uploadFile('file_frame','frame','image');

				$data[0]['title'] = $_POST['title'];
				$data[0]['typealbum'] = $_POST['typealbum'];
				$data[0]['gallerytype'] = 1;
				$data[0]['content'] = $image['full_name'];
				$data[0]['files'] = $image['full_name'];
				$data[0]['created_date'] = date("Y-m-d H:i:s");
				$data[0]['n_status'] = 1;

			} else {
				echo "<script>alert('You have to choose frame file');window.location.href='".$CONFIG['admin']['base_url']."article/upload'</script>";
			}

			if($_FILES['file_cover']['name'] != ''){
				$image = uploadFile('file_cover','cover','image');

				$data[1]['title'] = $_POST['title'];
				$data[1]['typealbum'] = $_POST['typealbum'];
				$data[1]['gallerytype'] = 2;
				$data[1]['content'] = $image['full_name'];
				$data[1]['files'] = $image['full_name'];
				$data[1]['created_date'] = date("Y-m-d H:i:s");
				$data[1]['n_status'] = 1;

			} else {
				echo "<script>alert('You have to choose cover file');window.location.href='".$CONFIG['admin']['base_url']."article/upload'</script>";
			}

				$data = $this->models->frame_inp($data);

				echo "<script>alert('Files has been uploaded');window.location.href='".$CONFIG['admin']['base_url']."home/frame'</script>";
		} else {

			echo "<script>alert('No file has been selected');window.location.href='".$CONFIG['admin']['base_url']."article/upload'</script>";

		}
	}

}

?>
