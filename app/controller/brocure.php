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

	public function geophysics(){
	global $basedomain;
	global $baseheader;
        
		$result_data = $this->models->geophysics();
		//$result_data_file = $this->models->geophsics_file();
		$result_data_file3 = $this->models->geophysicsa();
		$result_data_file4 = $this->models->scientificsa();
		$result_data_file5 = $this->models->civil();

		
		$var = array(1,2,3);
		// pr($basedomain);
		//pr($result_data);
		//pr($result_data_file);
		$this->view->assign('data',$result_data);
		//$this->view->assign('data1',$result_data_file);
		$this->view->assign('data2',$result_data_file3);
		$this->view->assign('data3',$result_data_file4);
		$this->view->assign('data4',$result_data_file5);
		$this->view->assign('coba','coba data smarty');
		return $this->loadView('brocure/geophsics');
	}
	public function detailgeophysics(){
	global $basedomain;
	global $baseheader;
        $id=$_GET['id'];
		//pr($id);
		$result_data = $this->models->partnergeophysics($id);
		$result_data_detail = $this->models->geophysicsDetail($id);
		$result_data_file = $this->models->geophsicschild_file($id);
		$result_data_file3 = $this->models->geophysicsa();
		$result_data_file4 = $this->models->scientificsa();
		$result_data_file5 = $this->models->civil();
		$brocure=$this->models->brochure_partner(1);
		// pr($result_data_detail);
		// pr($brocure);
		$this->view->assign('brocure',$brocure);
		$this->view->assign('data',$result_data);
		$this->view->assign('data_detail',$result_data_detail);
		$this->view->assign('data1',$result_data_file);
		$this->view->assign('data2',$result_data_file3);
		$this->view->assign('data3',$result_data_file4);
		$this->view->assign('data4',$result_data_file5);
		$this->view->assign('coba','coba data smarty');
		return $this->loadView('brocure/geophysic/detailgeophysics');
	}
	public function scientifics(){
	global $basedomain;
	global $baseheader;   
	 //$id=$_GET['id'];
	// pr($id);
		$result_data = $this->models->scientifics();
		$result_data_file = $this->models->scientifics_file();
		$result_data_file3 = $this->models->geophysicsa();
		$result_data_file4 = $this->models->scientificsa();
		$result_data_file5 = $this->models->civil();
		// pr($result_data);
		$var = array(1,2,3);
		// pr($basedomain);

		$this->view->assign('data',$result_data);
		$this->view->assign('data1',$result_data_file);
		$this->view->assign('data2',$result_data_file3);
		$this->view->assign('data3',$result_data_file4);
		$this->view->assign('data4',$result_data_file5);
		$this->view->assign('coba','coba data smarty');
		return $this->loadView('brocure/scientifics');
	}
	public function detailscientifics(){
	global $basedomain;
	global $baseheader;
        $id=$_GET['id'];
		//pr($id);
		$result_data = $this->models->partnerscientifics($id);
		$result_data_detail = $this->models->scientificsDetail($id);
		$result_data_file = $this->models->scientificschild_file($id);
		$result_data_file3 = $this->models->geophysicsa();
		$result_data_file4 = $this->models->scientificsa();
		$result_data_file5 = $this->models->civil();
		$brocure=$this->models->brochure_partner(2);
		// pr($result_data_detail);
		// pr($brocure);
		$this->view->assign('brocure',$brocure);
		$this->view->assign('data',$result_data);
		$this->view->assign('data_detail',$result_data_detail);
		$this->view->assign('data1',$result_data_file);
		$this->view->assign('data2',$result_data_file3);
		$this->view->assign('data3',$result_data_file4);
		$this->view->assign('data4',$result_data_file5);
		$this->view->assign('coba','coba data smarty');
		return $this->loadView('brocure/scientific/detailscientifics');
	}
	public function civil(){
	global $basedomain;
	global $baseheader;   
		$result_data = $this->models->civil();
		$result_data_file = $this->models->civil_file();
		$result_data_file3 = $this->models->geophysicsa();
		$result_data_file4 = $this->models->scientificsa();
		$result_data_file5 = $this->models->civil();
		// pr($result_data);
		$var = array(1,2,3);
		// pr($basedomain);

		$this->view->assign('data',$result_data);
		$this->view->assign('data1',$result_data_file);
		$this->view->assign('data2',$result_data_file3);
		$this->view->assign('data3',$result_data_file4);
		$this->view->assign('data4',$result_data_file5);
		$this->view->assign('coba','coba data smarty');
		return $this->loadView('brocure/civil');
	}	
	public function detailcivil(){
	global $basedomain;
	global $baseheader;
        $id=$_GET['id'];
		//pr($id);
		$result_data = $this->models->partnercivil($id);
		$result_data_detail = $this->models->civilDetail($id);
		$result_data_file = $this->models->civilchild_file($id);
		$result_data_file3 = $this->models->geophysicsa();
		$result_data_file4 = $this->models->scientificsa();
		$result_data_file5 = $this->models->civil();
		$brocure=$this->models->brochure_partner(3);
		// pr($result_data_detail);
		// pr($brocure);
		$this->view->assign('brocure',$brocure);
		$this->view->assign('data',$result_data);
		$this->view->assign('data_detail',$result_data_detail);
		$this->view->assign('data1',$result_data_file);
		$this->view->assign('data2',$result_data_file3);
		$this->view->assign('data3',$result_data_file4);
		$this->view->assign('data4',$result_data_file5);
		$this->view->assign('coba','coba data smarty');
		return $this->loadView('brocure/civil/detailcivil');
	}
}

?>
