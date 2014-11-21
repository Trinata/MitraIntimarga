<?php

class home extends Controller {
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
		 $this->models = $this->loadModel('home_m');
	}
	
	
	public function index(){
		global $basedomain;
		global $baseheader;
		$result_data = $this->models->home_content();
		$result_data1 = $this->models->geophysics();
		$result_data2 = $this->models->scientifics();
		
		$var = array(1,2,3);
	
		// pr($basedomain);
		 //pr($baseheader);
		// pr($this->view);
		$this->view->assign('data',$result_data);
		$this->view->assign('data1',$result_data1);
		$this->view->assign('data2',$result_data2);
		$this->view->assign('coba','coba data smarty');
	  
		return $this->loadView('home');
	}
	
}

?>
