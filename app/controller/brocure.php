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
		$result_data_file3 = $this->models->geophysics();
		$result_data_file4 = $this->models->scientifics();
		$result_data_file5 = $this->models->civil();
		$this->view->assign('data4',$result_data_file5);
		
		//$result_data2 = $this->models->brocure();
		//pr($result_data);
		// pr($result_data);
		
		$this->view->assign('data',$result_data);
		$this->view->assign('data2',$result_data_file3);
		$this->view->assign('data3',$result_data_file4);
		$this->view->assign('data4',$result_data_file5);
		$this->view->assign('coba','coba data smarty');
		return $this->loadView('brocure/brocure');
	}
	
}

?>
