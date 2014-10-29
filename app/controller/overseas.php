<?php
class overseas extends Controller {
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
		 $this->models = $this->loadModel('overseas_m');
	}
	public function index(){
	global $basedomain;
	global $baseheader;
        
		$result_data = $this->models->overseas();
		$result_data1 = $this->models->overseas1();
		
		// pr($result_data);
		$var = array(1,2,3);
		// pr($basedomain);

		$this->view->assign('data',$result_data);
		$this->view->assign('data1',$result_data1);
		$this->view->assign('coba','coba data smarty');
		return $this->loadView('company_and_link/overseas-link');
	}
	
}

?>
