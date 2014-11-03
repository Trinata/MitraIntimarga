<?php
// defined ('MICRODATA') or exit ( 'Forbidden Access' );

class info extends Controller {
	
	var $models = FALSE;
	
	public function __construct()
	{
		parent::__construct();
		$this->loadmodule();
		$this->view = $this->setSmarty();
		$sessionAdmin = new Session;
		$this->admin = $sessionAdmin->get_session();
		// $this->validatePage();
	}
	public function loadmodule()
	{
		
		$this->models = $this->loadModel('m_info');
	}
	
	public function info(){
	
		return $this->loadView('info');
	}
	
	
	

}

?>
