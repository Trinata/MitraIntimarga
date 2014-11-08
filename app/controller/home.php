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
		 $this->models = $this->loadModel('m_about_us');
	}
	
	
	public function index(){
		global $basedomain;
		global $baseheader;
        
		$result_data = $this->models->about();
		// pr($result_data);
		$var = array(1,2,3);
	
		// pr($basedomain);
		 //pr($baseheader);
		// pr($this->view);
		$this->view->assign('data',$result_data);
		$this->view->assign('coba','coba data smarty');
		// pr($var);
		// pr($result_data);
		return $this->loadView('home');
	}
	public function about_us(){
		global $basedomain;
		global $baseheader;
        
		$result_data = $this->models->about_us();
		// pr($result_data);
		$var = array(1,2,3);
	
		// pr($basedomain);
		 //pr($baseheader);
		// pr($this->view);
		$this->view->assign('data',$result_data);
		$this->view->assign('coba','coba data smarty');
		// pr($var);
		// pr($result_data);
		return $this->loadView('about_us');
	}
	
}

?>
