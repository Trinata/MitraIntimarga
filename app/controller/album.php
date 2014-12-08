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
		 $this->contentHelper = $this->loadModel('contentHelper');
		 $this->models = $this->loadModel('m_brocure');
	}
	public function index(){
	
		$getAlbum = $this->contentHelper->getContent($id=false, $type=5,$cat=1);
		//
		// pr($getAlbum);
		$this->view->assign('album',$getAlbum);
		return $this->loadView('album/music');
	}
	
	public function detail(){
		
		$iddata = _g('id');

		$getRepo = $this->contentHelper->getRepo($id=false, $album=2, $gallery=0, $otherid=$iddata);
		
		//---------------tambahan maraoks-----------------//
		$result_data_file3 = $this->contentHelper->geophysics();
		$result_data_file4 = $this->contentHelper->scientifics();
		// pr($getRepo);
		$this->view->assign('album',$getRepo);
		$this->view->assign('data2',$result_data_file3);
		$this->view->assign('data3',$result_data_file4);
		return $this->loadView('album/music-detail');
	}

	function activity()
	{
		$getAlbum = $this->contentHelper->getContent($id=false, $type=5,$cat=3);
		if($_GET['idAlbum']){
			foreach ($getAlbum as $key => $value) {
				if($value['parentid']==$_GET['idAlbum']){
					$dataAlbum[]=$value;
				}
			}

		}else{
			foreach ($getAlbum as $key => $value) {
				if($value['parentid']==0){
					$dataAlbum[]=$value;
				}
			}
		}
			$this->view->assign('album',$dataAlbum);
		//------------	tambahan maraoks----------//
			$result_data_file3 = $this->models->geophysics();
		$result_data_file4 = $this->models->scientifics();
		$result_data_file5 = $this->models->civil();
		
		// pr($result_data);
	
		$this->view->assign('data2',$result_data_file3);
		$this->view->assign('data3',$result_data_file4);
		$this->view->assign('data4',$result_data_file5);
		
		// pr($getAlbum);
		return $this->loadView('album/gallery');
	}

	function activityDetail()
	{

		$iddata = _g('id');
		//------------	tambahan maraoks----------//
		$result_data_file3 = $this->contentHelper->geophysics();
		$result_data_file4 = $this->contentHelper->scientifics();
		$result_data_file5 = $this->models->civil();
		$this->view->assign('data4',$result_data_file5);
		$getRepo = $this->contentHelper->getRepo($id=false, $album=1, $gallery=0, $otherid=$iddata);
		// pr($getRepo);
		$this->view->assign('album',$getRepo);
		$this->view->assign('data2',$result_data_file3);
		$this->view->assign('data3',$result_data_file4);
		return $this->loadView('album/gallery-detail');
	}
}

?>
