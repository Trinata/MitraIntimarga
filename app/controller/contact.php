<?php
class contact extends Controller {
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
		 $this->models = $this->loadModel('contact_m');
	}
	public function index(){
	global $basedomain;
	global $baseheader;
        
		$result_data = $this->models->contact();
		// pr($result_data);
		$var = array(1,2,3);
		// pr($basedomain);

		$this->view->assign('data',$result_data);
		$this->view->assign('coba','coba data smarty');
		return $this->loadView('contact');
	}
	public function proses_pesan(){
		global $basedomain;
		global $baseheader;
        
		$create_date=date("Y-m-d H:i:s");
	
		
		$result_data = $this->models->insert_contact();


		 echo "<script>alert('Pesan Berhasil Dikirim');window.location.href='".$basedomain."contact'</script>";
		
		// $this->view->assign('data',$result_data);
		// $this->view->assign('coba','coba data smarty');
		// return $this->loadView('contact');

	}
	
}

?>
