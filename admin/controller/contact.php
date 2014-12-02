<?php
// defined ('TATARUANG') or exit ( 'Forbidden Access' );

class contact extends Controller {
	
	var $models = FALSE;
	
	public function __construct()
	{
		parent::__construct();

		global $app_domain;
		$this->loadmodule();
		$this->view = $this->setSmarty();
		$sessionAdmin = new Session;
		$this->admin = $sessionAdmin->get_session();
		// $this->validatePage();
		$this->view->assign('app_domain',$app_domain);
	}
	public function loadmodule()
	{
		
		$this->models = $this->loadModel('m_contact');
	}
	
	public function index(){
		$this->view->assign('active','active');
		
		$data = $this->models->contact_view();

		// if ($data){
		// 	foreach ($data as $key => $val){

		// 		$data[$key]['created_date'] = dateFormat($val['created_date'],'article');

		// 		$data[$key]['posted_date'] = dateFormat($val['posted_date'],'article');

		// 		if($val['n_status'] == '1') {
		// 			$data[$key]['n_status'] = 'Publish';
		// 			$data[$key]['status_color'] = 'green';
		// 		} else {
		// 			$data[$key]['n_status'] = 'Unpublish';
		// 			$data[$key]['status_color'] = 'red'; 
		// 		}
		// 	}
		// }
		
		// pr($data);exit;
		$this->view->assign('data',$data);

		return $this->loadView('contact');

	}

	public function contact_del(){

		global $CONFIG;
		// pr($CONFIG);exit;
		$data = $this->models->contactDel($_POST['ids']);
		
		echo "<script>alert('Data berhasil dihapus');window.location.href='".$CONFIG['admin']['base_url']."contact'</script>";
		
	}
	
}

?>
