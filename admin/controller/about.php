<?php
// defined ('MICRODATA') or exit ( 'Forbidden Access' );

class about extends Controller {
	
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
		$this->models = $this->loadModel('m_about');
	}
	
	public function index(){
       
	}
	
	public function about_us_edit(){
	global $CONFIG;
	
	if(isset($_POST['n_status'])){
			if($_POST['n_status']=='on') $_POST['n_status']=1;
		} else {
			$_POST['n_status']=0;
		}
	
	
	//pr($_POST['edit']);
	   // pr($_POST);
	 // exit;
	
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
	public function about_us(){
		
		$this->view->assign('active','active');

			$data = $this->models->about_us();

		 if($data['n_status'] ){
				$data['n_status'] = 'checked';
			} else {
				$data['n_status'] = '0';
			}			
			$this->view->assign('data',$data);
		$this->view->assign('admin',$this->admin['admin']);
		return $this->loadView('about_us');
	}
}

?>
