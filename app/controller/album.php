<?php
class album extends Controller {
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
		 // $this->models = $this->loadModel('lab_training_m');
	}
	public function index(){
	
		
		return $this->loadView('album/music');
	}
	
	public function detail(){
	
		
		return $this->loadView('album/music-detail');
	}
}

?>
