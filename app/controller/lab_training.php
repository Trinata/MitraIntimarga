<?php


class lab_training extends Controller {

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
		$this->contentHelper = $this->loadModel('contentHelper');
		$this->models = $this->loadModel('lab_training_m');
	}


	public function index(){
	
		// $result_data = $this->models->lab_training();
	
		$getAlbum = $this->contentHelper->getContent($id=false, $type=5,$cat=3);
		pr($getAlbum);
		$this->view->assign('data',$getAlbum);
		return $this->loadView('news_indo/lab_training');
	}
	
}

?>
