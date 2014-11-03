<?php
class field_training extends Controller {
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
		 $this->models = $this->loadModel('field_training_m');
	}
	public function index(){
	global $basedomain;
	global $baseheader;
        
		$result_data_frame_kiri = $this->models->field_training_frame_kiri();
		$result_data_frame_kanan = $this->models->field_training_frame_kanan();
	
		// pr($result_data);
		$var = array(1,2,3);
		// pr($basedomain);

		$this->view->assign('data_frame_kiri',$result_data_frame_kiri);
		$this->view->assign('data_frame_kanan',$result_data_frame_kanan);
		
		$this->view->assign('coba','coba data smarty');
		return $this->loadView('news_info/field_training');
	}
	
}

?>
