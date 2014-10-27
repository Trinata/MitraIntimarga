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
		 $this->models = $this->loadModel('company_m');
	}
	public function index(){
	global $basedomain;
	global $baseheader;
        
		$result_data = $this->models->profil();
		// pr($result_data);
		$var = array(1,2,3);
	
		// pr($basedomain);
		 //pr($baseheader);
		// pr($this->view);
		$this->view->assign('data',$result_data);
		$this->view->assign('coba','coba data smarty');
		pr($var);
		// pr($result_data);
		return $this->loadView('company/profil');
	}
	
}

?>
