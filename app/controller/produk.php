<?php
class produk extends Controller {
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
		 $this->models = $this->loadModel('produk_m');
	}
	public function geophysics(){
	global $basedomain;
	global $baseheader;
        
		$result_data = $this->models->geophysics();
		$result_data_file = $this->models->geophsics_file();
		$var = array(1,2,3);
		// pr($basedomain);

		$this->view->assign('data',$result_data);
		$this->view->assign('data1',$result_data_file);
		$this->view->assign('coba','coba data smarty');
		return $this->loadView('produk/geophsics');
	}
	public function partnergeophysics(){
	global $basedomain;
	global $baseheader;
        $id=$_GET['id'];
		//pr($id);
		$result_data = $this->models->partnergeophysics($id);
		$var = array(1,2,3);
		// pr($basedomain);
		//pr($result_data);
		$this->view->assign('data',$result_data);
		$this->view->assign('coba','coba data smarty');
		return $this->loadView('produk/geophysic/partnergeophysics');
	}
	public function partnerscientifics(){
	global $basedomain;
	global $baseheader;
        $id=$_GET['id'];
		//pr($id);
		$result_data = $this->models->partnerscientifics($id);
		$var = array(1,2,3);
		// pr($basedomain);
		//pr($result_data);
		$this->view->assign('data',$result_data);
		$this->view->assign('coba','coba data smarty');
		return $this->loadView('produk/scientific/partnerscientifics');
	}

	public function gfinstrument(){
	global $basedomain;
	global $baseheader;
        
		$result_data = $this->models->geophsics();
		$result_data_file = $this->models->geophsics_file();
		$var = array(1);
		// pr($basedomain);

		$this->view->assign('data',$var);
		$this->view->assign('data1',$result_data_file);
		$this->view->assign('title','GF INSTRUMENT');
		$this->view->assign('image','gf.jpg');
		return $this->loadView('produk/geophysic/gfinstrument');
	}

	public function pasi(){
	global $basedomain;
	global $baseheader;
        
		$result_data = $this->models->geophsics();
		$result_data_file = $this->models->geophsics_file();
		$var = array(1);
		// pr($basedomain);

		$this->view->assign('data',$var);
		$this->view->assign('data1',$result_data_file);
		$this->view->assign('title','PASI');
		$this->view->assign('image','pasi.jpg');
		return $this->loadView('produk/geophysic/pasi');
	}

	public function adi(){
	global $basedomain;
	global $baseheader;
        
		$result_data = $this->models->geophsics();
		$result_data_file = $this->models->geophsics_file();
		$var = array(1);
		// pr($basedomain);
		
		$this->view->assign('data',$var);
		$this->view->assign('data1',$result_data_file);
		$this->view->assign('title','ADI');
		$this->view->assign('image','adi.jpg');
		return $this->loadView('produk/geophysic/pasi');
	}
	public function scientifics(){
	global $basedomain;
	global $baseheader;   
		$result_data = $this->models->scientifics();
		$result_data_file = $this->models->scientifics_file();
		// pr($result_data);
		$var = array(1,2,3);
		// pr($basedomain);

		$this->view->assign('data',$result_data);
		$this->view->assign('data1',$result_data_file);
		$this->view->assign('coba','coba data smarty');
		return $this->loadView('produk/scientifics');
	}	
}
?>
