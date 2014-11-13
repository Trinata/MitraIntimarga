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
	}
	public function index(){
	
		$getAlbum = $this->contentHelper->getContent($id=false, $type=5,$cat=1);
		// pr($getAlbum);
		$this->view->assign('album',$getAlbum);
		return $this->loadView('album/music');
	}
	
	public function detail(){
		
		$iddata = _g('id');

		$getRepo = $this->contentHelper->getRepo($id=false, $album=2, $gallery=0, $otherid=$iddata);
		// pr($getRepo);
		$this->view->assign('album',$getRepo);
		return $this->loadView('album/music-detail');
	}

	function activity()
	{
		$getAlbum = $this->contentHelper->getContent($id=false, $type=5,$cat=3);
		// pr($getAlbum);
		$this->view->assign('album',$getAlbum);
		return $this->loadView('album/gallery');
	}

	function activityDetail()
	{

		$iddata = _g('id');
		$getRepo = $this->contentHelper->getRepo($id=false, $album=1, $gallery=0, $otherid=$iddata);
		// pr($getRepo);
		$this->view->assign('album',$getRepo);
		return $this->loadView('album/gallery-detail');
	}
}

?>
