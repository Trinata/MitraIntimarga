<?php
// defined ('MICRODATA') or exit ( 'Forbidden Access' );

class brocure extends Controller {
	
	var $models = FALSE;
	
	public function __construct()
	{
		parent::__construct();
		$this->loadmodule();
		$this->view = $this->setSmarty();
		$sessionAdmin = new Session;
		$this->admin = $sessionAdmin->get_session();
		// $this->validatePage();
	}
	public function loadmodule()
	{
		
		$this->models = $this->loadModel('m_brocure');
	}
	
	public function index(){

	global $CONFIG;	
	
        $this->view->assign('app_domain',$CONFIG['admin']['app_url']);
		$this->view->assign('active','active');

		
		if($_GET['id']){
			if($_GET['id']==1){
				$title="Geophysics";
				$data = $this->models->brocureid($_GET['id']);

				$titleProd= $this->models->getTitleprod(1);
				$this->view->assign('titleProd',$titleProd);

				$this->view->assign('id',$_GET['id']);
			}elseif ($_GET['id']==2) {
				$title="Scientifics";
				$data = $this->models->brocureid($_GET['id']);

				$titleProd= $this->models->getTitleprod(2);
				$this->view->assign('titleProd',$titleProd);
				$this->view->assign('id',$_GET['id']);
			}elseif($_GET['id']==3){
				$title="Civil";
				$data = $this->models->brocureid($_GET['id']);

				$titleProd= $this->models->getTitleprod(3);
				$this->view->assign('titleProd',$titleProd);
				$this->view->assign('id',$_GET['id']);
			}else{
				$data = $this->models->brocure();

				$this->view->assign('id',false);
			}
		}else{
			$data = $this->models->brocure();

			$this->view->assign('id',false);
		}
		if($title){

			$this->view->assign('title',$title);
		}else{
			
			$this->view->assign('title',false);
		}
		if ($data){
			foreach ($data as $key => $val){

				$data[$key]['created_date'] = dateFormat($val['created_date'],'article');

				$data[$key]['posted_date'] = dateFormat($val['posted_date'],'article');

				if($val['n_status'] == '1') {
					$data[$key]['n_status'] = 'Publish';
					$data[$key]['status_color'] = 'green';
				} else {
					$data[$key]['n_status'] = 'Unpublish';
					$data[$key]['status_color'] = 'red'; 
				}
			}
		}
		
		$this->view->assign('data',$data);

		return $this->loadView('brocure/brocure_list');

	}
	//////////////////// mara
	public function addbrocure(){

		$this->view->assign('active','active');
		//$data = $this->models->company_division();
		if($_GET['id']){
			if($_GET['id']==1){
				$title="Geophysics";
				$data = $this->models->brocure_produk($_GET['id']);

				$this->view->assign('id',$_GET['id']);
			}elseif ($_GET['id']==2) {
				$title="Scientifics";
				$data = $this->models->brocure_produk($_GET['id']);

				$this->view->assign('id',$_GET['id']);
			}elseif($_GET['id']==3){
				$title="Civil";
				$data = $this->models->brocure_produk($_GET['id']);

				$this->view->assign('id',$_GET['id']);
			}else{
				$data = $this->models->brocure();

				$this->view->assign('id',false);
			}
		}else{
			$data = $this->models->brocure();

			$this->view->assign('id',false);
		}
		if($title){

			$this->view->assign('title',$title);
		}else{
			
			$this->view->assign('title',false);
		}
			$this->view->assign('admin',$this->admin['admin']);
			foreach ($data as $key => $valAlbum){
			

			if($valAlbum['parentid']==0){
				$valAlbum['nameAlbum']=$valAlbum['title'];
				//pr($valAlbum['nameAlbum']);
				// $dataAlbum[]=$valAlbum;
				
				// echo"=====";

				foreach ($data as $key => $valAlbum2){ 
					// pr($valAlbum2);
					if($valAlbum2['parentid']==$valAlbum['id'] ){

					// pr($valAlbum2);

								$valAlbum2['nameAlbum']=$valAlbum['title']." >> ".$valAlbum2['title'];
							//	pr(	$valAlbum['nameAlbum']);
						// $valAlbum['id']=$valAlbum2['id'];	
						$dataAlbum[]=$valAlbum2;
					}
				}
				

			}
			
			
			
		}
// pr($dataAlbum);
			$this->view->assign('list_produk',$dataAlbum);

		return $this->loadView('brocure/brocure_none');
	
		
	
	}
	public function editbrocure(){

		global $CONFIG;	
        $this->view->assign('app_domain',$CONFIG['admin']['app_url']);
		$this->view->assign('active','active');
		$id=$_GET['id'];
		$idget=$_GET['idget'];
		$data = $this->models->editbrocure($id);
		// pr($data);
			
			 if($data[0]['n_status'] == 1 ){
				$data[0]['n_status'] = 'checked';
			} else {
				$data[0]['n_status'] = 'haha';
				}	

		$this->view->assign('data',$data);

		$this->view->assign('idget',$idget);
		$this->view->assign('admin',$this->admin['admin']);
		return $this->loadView('brocure/edit_brocure');
	
		
	
	}
	public function editbrocure_submit(){
	
		global $CONFIG;	
		pr($_POST);
		if(isset($_POST['n_status'])){
				if($_POST['n_status']=='on') $_POST['n_status']=1;
			} else {
				$_POST['n_status']=0;
			}
		$this->view->assign('active','active');
		$uploaddoc = uploadFile('file_pdf',null, 'doc');
		$upload = uploadFile('file_image',null, 'image');
		
		$data = $this->models->editbrocure_submit($upload,$uploaddoc);

		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."brocure/index/?id=".$_POST['idget']."'</script>";

	}

	
	
	public function brocure_add_submit(){

		global $CONFIG;	
		$this->view->assign('active','active');
	
		 if(isset($_POST['n_status'])){
				if($_POST['n_status']=='on') $_POST['n_status']=1;
			} else {
				$_POST['n_status']=0;
			 }
			$upload = uploadFile('file_image',null, 'image');
			$uploaddoc = uploadFile('file_pdf',null, 'doc');
			// pr($_POST);
			// pr($upload);
			// pr($uploaddoc );
			

		$data = $this->models->brocure_add_submit($upload,$uploaddoc);
			 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."brocure/index/?id=".$_POST['idget']."'</script>";
		
	}

	public function delete_brocure(){	
	global $CONFIG;	
		 pr($_POST);
		// pr($_FILES);
		
		$this->view->assign('active','active');
		
		$upload = uploadFile('file_image',null, 'image');
		// pr($upload);
		$data = $this->models->delete_brocure();

		 echo "<script>alert('Data berhasil di Hapus');window.location.href='".$CONFIG['admin']['base_url']."produk'</script>";
		
	}
	public function changeTitle(){
		global $CONFIG;
		// pr($_POST);exit;
		$data = $this->models->updateTitle();
		if($_POST['type']==1){
			$url="1";
		}elseif($_POST['type']==2){
			$url="2";
		}elseif($_POST['type']==3){
			$url="3";
		}
		echo "<script>alert('Data has been Changed');window.location.href='".$CONFIG['admin']['base_url']."brocure/index/?id=".$url."'</script>";
		
	
	}
	// public function civil(){	
	// global $CONFIG;	
	// 	// pr($_POST);
	// 	// pr($_FILES);
		
	// 	$this->view->assign('active','active');
		
	// 	$upload = uploadFile('file_image',null, 'image');
	// 	// pr($upload);
	// 	//$data = $this->models->delete_produk();

	// 	// echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."produk'</script>";
	// 	 return $this->loadView('produk/addScientific');
	// }
	

}

?>
