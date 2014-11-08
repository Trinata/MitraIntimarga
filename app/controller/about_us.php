<?php
class about_us extends Controller {
	var $models = FALSE;
	var $view;
	
	public function __construct()
	{
		global $basedomain,$CODEKIR;
		
		$this->loadmodule();
		$this->view = $CODEKIR['smarty'];
		
	}
	public function loadmodule()
	{
		 $this->models = $this->loadModel('about_us_m');
	}
	public function index(){
	global $basedomain;
	global $baseheader;
        
		$result_data = $this->models->about();
		$result_data1 = $this->models->about_content();
		 //pr($result_data);
		 // pr($result_data1);
		$var = array(1,2,3);
	
		// pr($basedomain);
		 //pr($baseheader);
		// pr($this->view);
		$this->view->assign('data',$result_data);
		$this->view->assign('data1',$result_data1);
		$this->view->assign('coba','coba data smarty');
		//pr($var);
		// pr($result_data);
		return $this->loadView('about_us');
	}
	public function partner(){
	global $basedomain;
	global $baseheader;
        
		$id=$_GET['id'];
		pr($id);
		$result_data = $this->models->tangkap($id);
		$var = array(1,2,3);
	
		$this->view->assign('data',$result_data);
		$this->view->assign('coba','coba data smarty');
		//pr($var);
		// pr($result_data);
		return $this->loadView('partner');
	}
}

?>
