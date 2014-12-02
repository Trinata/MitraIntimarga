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
		///////////////////////tambahan maraoks//////////////
		$result_data_file3 = $this->models->geophysics();
		$result_data_file4 = $this->models->scientifics();
		$result_data_file5 = $this->models->civil();
		
		// pr($result_data);
	
		$this->view->assign('data2',$result_data_file3);
		$this->view->assign('data3',$result_data_file4);
		$this->view->assign('data4',$result_data_file5);
	
		// pr($result_data);exit;
		$this->view->assign('data',$result_data);
		
		return $this->loadView('news_indo/monthsnews');
	}

	public function detailnews(){
	

		$id = _g('id');
		$result_data = $this->contentHelper->getContent($id, $type=5,$cat=2);
		
		if ($result_data){

			foreach ($result_data as $key => $value) {
				
				if ($value['posted_date']) $result_data[$key]['changeDate'] = changeDate($value['posted_date']);
			}
			
		}
		// pr($result_data);exit;
		$this->view->assign('data',$result_data);

		return $this->loadView('news_indo/detailmonthsnews');
	}
	
}

?>
