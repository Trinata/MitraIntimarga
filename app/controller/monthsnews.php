<?php

class monthsnews extends Controller {
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
		$this->models = $this->loadModel('monthsnews_m');
	}

	public function index(){

	
		$result_data = $this->contentHelper->getContent($id=false, $type=5,$cat=2);
		
		if ($result_data){

			foreach ($result_data as $key => $value) {

				if ($value['posted_date']) $result_data[$key]['changeDate'] = changeDate($value['posted_date']);
			}
			
		}

		// pr($result_data);
		$this->view->assign('data',$result_data);
		
		return $this->loadView('news_indo/monthsnews');
	}

	public function detailnews(){
	

		$id = _g('id');
		$result_data = $this->contentHelper->getContent($id=false, $type=5,$cat=2);
		
		if ($result_data){

			foreach ($result_data as $key => $value) {
				
				if ($value['posted_date']) $result_data[$key]['changeDate'] = changeDate($value['posted_date']);
			}
			
		}
		// pr($result_data);
		$this->view->assign('data',$result_data);

		return $this->loadView('news_indo/detailmonthsnews');
	}
	
}

?>
