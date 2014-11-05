<?php
// defined ('MICRODATA') or exit ( 'Forbidden Access' );

class produk extends Controller {
	
	var $models = FALSE;
	
	public function __construct()
	{
		parent::__construct();
		$this->loadmodule();
		$this->view = $this->setSmarty();
		$sessionAdmin = new Session;
		$this->admin = $sessionAdmin->get_session();
		// $this->validatePage();
	}
	public function loadmodule()
	{
		
		$this->models = $this->loadModel('m_produk');
	}
	
	public function index(){
		$this->view->assign('active','active');
		$data = $this->models->produk();

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
		
		$this->view->assign('data',$data);

		return $this->loadView('produk/produk');

	}
	
	/*----------------edit maraoks -------------------*/
	public function about_us_edit(){
	
	global $CONFIG;
	
	if($_POST['edit']=="Edit"){
	
		$this->view->assign('active','active');
			$data = $this->models->about_us_edit($_POST);	
			
			
			$this->view->assign('data',$data);
		$this->view->assign('admin',$this->admin['admin']);
		
		echo "<script>alert('Content About Us telah diedit');window.location.href='".$CONFIG['admin']['base_url']."'</script>";
	
	}
	else{
		$this->view->assign('active','active');

			$data = $this->models->about_us();	
			$this->view->assign('data',$data);
		$this->view->assign('admin',$this->admin['admin']);
		return $this->loadView('about_us');
	}
	}
	public function geophysics_list(){
		
		$this->view->assign('active','active');
		$data = $this->models->geophysics_list();

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
		
		$this->view->assign('data',$data);
		return $this->loadView('produk/geophysics_list');

	
	}
	public function scientific_list(){
		
		$this->view->assign('active','active');
		$data = $this->models->scientific_list();

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
		
		$this->view->assign('data',$data);

		return $this->loadView('produk/scientific_list');
	}
	public function geophysics(){
		/*
		$this->view->assign('active','active');
			$data = $this->models->geophysics();	
			$this->view->assign('data',$data);
		$this->view->assign('admin',$this->admin['admin']);
		*/
		return $this->loadView('produk/geophysics');
	}
	public function scientific(){
		/*
		$this->view->assign('active','active');
			$data = $this->models->scientific();	
			$this->view->assign('data',$data);
		$this->view->assign('admin',$this->admin['admin']);
		*/
		return $this->loadView('produk/scientific');
	}
	public function addScientific(){
		
	global $CONFIG;	
		// pr($_POST);
		// pr($_FILES);
		
		$this->view->assign('active','active');
		
		$upload = uploadFile('file_image',null, 'image');
		// pr($upload);
		$data = $this->models->addScientific($upload);

		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."produk/scientific_list'</script>";
		// return $this->loadView('produk/addScientific');
	}
	
	

}

?>
