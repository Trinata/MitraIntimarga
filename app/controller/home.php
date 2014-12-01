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
		$result_data_file3 = $this->models->geophysics();
		$result_data_file4 = $this->models->scientifics();
		$result_data_file5 = $this->models->civil();
		$this->view->assign('data4',$result_data_file5);
		$var = array(1,2,3);
		$this->view->assign('data',$result_data);
		$this->view->assign('data2',$result_data_file3);
		$this->view->assign('data3',$result_data_file4);
		$this->view->assign('coba','coba data smarty');
		return $this->loadView('landing');
	}
	public function home(){
		global $basedomain;
		global $baseheader;
		$result_data = $this->models->about();
		$result_data_file3 = $this->models->geophysics();
		$result_data_file4 = $this->models->scientifics();
		$result_data_file5 = $this->models->civil();
		$this->view->assign('data4',$result_data_file5);
		$var = array(1,2,3);
		$this->view->assign('data',$result_data);
		$this->view->assign('coba','coba data smarty');
		$this->view->assign('data2',$result_data_file3);
		$this->view->assign('data3',$result_data_file4);

		return $this->loadView('home');
	}
	public function visi(){
		global $basedomain;
		global $baseheader;
		$result_data = $this->models->about();
		$result_data_file3 = $this->models->geophysics();
		$result_data_file4 = $this->models->scientifics();
		$result_data_file5 = $this->models->civil();
		$this->view->assign('data4',$result_data_file5);
		$var = array(1,2,3);
		$this->view->assign('data',$result_data);
		$this->view->assign('coba','coba data smarty');
		$this->view->assign('data2',$result_data_file3);
		$this->view->assign('data3',$result_data_file4);

		return $this->loadView('home');
	}
	public function about_us(){
		global $basedomain;
		global $baseheader;
        
		$result_data = $this->models->about_us();
		$result_data_file3 = $this->models->geophysics();
		$result_data_file4 = $this->models->scientifics();
		$result_data_file5 = $this->models->civil();
		$this->view->assign('data4',$result_data_file5);
		$var = array(1,2,3);

		$this->view->assign('data',$result_data);
		$this->view->assign('coba','coba data smarty');
		$this->view->assign('data2',$result_data_file3);
		$this->view->assign('data3',$result_data_file4);
		return $this->loadView('about_us');
	}
	
}

?>
