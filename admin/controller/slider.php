<?php
// defined ('MICRODATA') or exit ( 'Forbidden Access' );

class slider extends Controller {
	
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
		
		$this->marticle = $this->loadModel('mslider');

	}
	
	public function index(){
       
		$this->view->assign('active','active');
		$data = $this->marticle->getContent($id=false, $type=7,$cat=1);

		if ($data){
			
			
			// pr($data);
			foreach ($data as $key => $val){

				$dataRepo[$key] = $this->marticle->getRepo($id=false, $type=1,$cat=0, $val['id']);

			}
		}
		
		// pr($dataRepo);
		$this->view->assign('data',$data);

		return $this->loadView('slider/home-slider');

	}

	public function addSlider(){

       	global $basedomain;


		$this->view->assign('active','active');
		$data = $this->marticle->getContent($id=false, $type=7,$cat=1);

		if ($data){
			
			
			// pr($data);
			foreach ($data as $key => $val){

				$dataRepo[$key] = $this->marticle->getRepo($id=false, $type=1,$cat=0, $val['id']);

			}

			$this->view->assign('data',$data);
		}
		
		

		if(isset($_GET['id']))
		{
			$id = $_GET['id'];
			$data = $this->marticle->getContent($id, $type=7,$cat=1);
			

			$result = $data[0];
			($result['n_status'] == 1) ? $result['n_status'] = 'checked' : $result['n_status'] = '';
			// pr($result);
			$this->view->assign('data',$result);
		}


		if ($_POST){

			
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
								echo "<script>alert('Data berhasil di simpan');window.location.href='".$basedomain."slider'</script>";
							}	
						}

						
					}
				}

				echo "<script>alert('Data berhasil di simpan');window.location.href='".$basedomain."slider'</script>";
	    	}
		}
		// pr($dataRepo);
		

		return $this->loadView('slider/add-slider');

	}

	
	
	public function sliderdel(){

		global $CONFIG;
		// pr($_POST);exit;
		$data = $this->marticle->slider_del($_POST['ids']);
		
		echo "<script>alert('Data has been moved to trash');window.location.href='".$CONFIG['admin']['base_url']."slider'</script>";
		
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
	
	

	


}

?>
