<?php
class company extends Controller {
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
		 $this->models = $this->loadModel('company_link_m');
	}
	public function company_profile(){
	global $basedomain;
	global $baseheader;
		$result_data = $this->models->company_profile();
		$result_data_file = $this->models->company_profile_file();
		$result_data_file3 = $this->models->geophysics();
		$result_data_file4 = $this->models->scientifics();
		// pr($result_data);
		$var = array(1,2,3);
		$this->view->assign('data',$result_data);
		$this->view->assign('data1',$result_data_file);
		$this->view->assign('data2',$result_data_file3);
		$this->view->assign('data3',$result_data_file4);
		//$this->view->assign('coba','coba data smarty');
		//pr($var);
		// pr($result_data_file3);
		return $this->loadView('company_and_link/company_profile');
	}
	public function company_division(){
	global $basedomain;
	global $baseheader;
        
		$result_data = $this->models->company_division();
		$result_data_file = $this->models->company_division_file();
		$result_data_file3 = $this->models->geophysics();
		$result_data_file4 = $this->models->scientifics();
		//pr($result_data_file3['0']['id']);
		//pr($result_data_file4['0']['id']);
		$this->view->assign('data',$result_data);
		$this->view->assign('data1',$result_data_file);
		$this->view->assign('data2',$result_data_file3);
		$this->view->assign('data3',$result_data_file4);
		
		$this->view->assign('coba','coba data smarty');
		return $this->loadView('company_and_link/company_division');
	}
	public function company_organization(){
	global $basedomain;
	global $baseheader;
        
		$result_data = $this->models->company_organization();
		$result_data_file = $this->models->company_organization_file();
		$result_data_file3 = $this->models->geophysics();
		$result_data_file4 = $this->models->scientifics();
		$this->view->assign('data',$result_data);
		$this->view->assign('data1',$result_data_file);
		$this->view->assign('data2',$result_data_file3);
		$this->view->assign('data3',$result_data_file4);
		
		$this->view->assign('coba','coba data smarty');
		return $this->loadView('company_and_link/company_organization');
	}
	public function company_marketing(){
	global $basedomain;
	global $baseheader;
        
		$result_data = $this->models->company_marketing();
		$this->view->assign('data',$result_data);
		$result_data_file3 = $this->models->geophysics();
		$result_data_file4 = $this->models->scientifics();
		$this->view->assign('coba','coba data smarty');
		$this->view->assign('data2',$result_data_file3);
		$this->view->assign('data3',$result_data_file4);
		return $this->loadView('company_and_link/company_marketing');
	}
	public function company_customerlist(){
	global $basedomain;
	global $baseheader;
        
		$result_data = $this->models->company_customerlist();
		$result_data_file = $this->models->company_customerlist_file();
		$result_data_file3 = $this->models->geophysics();
		$result_data_file4 = $this->models->scientifics();
		$this->view->assign('data',$result_data);
		$this->view->assign('data1',$result_data_file);
		$this->view->assign('data2',$result_data_file3);
		$this->view->assign('data3',$result_data_file4);

		$this->view->assign('coba','coba data smarty');
		return $this->loadView('company_and_link/company_customerlist');
	}
	public function customer_location(){
	global $basedomain;
	global $baseheader;
        
		$result_data = $this->models->customer_location();
		$result_data_file3 = $this->models->geophysics();
		$result_data_file4 = $this->models->scientifics();
		$this->view->assign('data',$result_data);
		$this->view->assign('data2',$result_data_file3);
		$this->view->assign('data3',$result_data_file4);
	
		$this->view->assign('coba','coba data smarty');
		return $this->loadView('company_and_link/customer_location');
	}
	public function overseas(){
	global $basedomain;
	global $baseheader;
        
		$result_data = $this->models->overseas();
		$result_data1 = $this->models->overseas1();
		
		$this->view->assign('data',$result_data);
		$this->view->assign('data1',$result_data1);
		$this->view->assign('coba','coba data smarty');
		return $this->loadView('company_and_link/overseas-link');
	}
	
		
	
}

?>
