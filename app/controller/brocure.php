<?php

class brocure extends Controller {
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
		 $this->models = $this->loadModel('m_brocure');
	}
	
	
	public function index(){
		global $basedomain;
		global $baseheader;
        
		$result_data = $this->models->brocure();
		//pr($result_data);
		// pr($result_data);
		
		$this->view->assign('data',$result_data);
		$this->view->assign('coba','coba data smarty');
		return $this->loadView('brocure/brocure');
	}
	
}

?>
