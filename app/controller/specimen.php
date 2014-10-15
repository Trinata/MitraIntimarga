<?php

class specimen extends Controller {
	
	var $models = FALSE;
	
	public function __construct()
	{
		global $basedomain, $CONFIG;
		$this->loadmodule();
		// if (!$this->isUserOnline()){
			
			// redirect($basedomain.$CONFIG['default']['login']);
		// }
		$this->view = $this->setSmarty();
	}
	public function loadmodule()
	{
		$this->models = $this->loadModel('contentHelper');
	}
	
	public function index(){
	
		
		$getNews = $this->models->test();
		// pr($getNews);
		return $this->loadView('specimen');
		
	}
    
	function listSpecimen()
	{
		$getNews = $this->models->getNews();
		if ($getNews){
			print json_encode(array('status'=>true,'data'=>$getNews));
		}else{
			print json_encode(array('status'=>false));
		}
			
		exit;
	}
	
	function ada()
	{
		echo 'masuk';
		pr($_GET);
	}
	
}

?>
