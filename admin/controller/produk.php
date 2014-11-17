<?php
// defined ('MICRODATA') or exit ( 'Forbidden Access' );

class produk extends Controller {
	
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
		
		$this->models = $this->loadModel('m_produk');
	}
	
	public function index(){
		$this->view->assign('active','active');
		$data = $this->models->produk();

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

		return $this->loadView('produk/produk');

	}
	
	public function geophysics_list(){
		
		$this->view->assign('active','active');
		$data = $this->models->geophysics_list();

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
		return $this->loadView('produk/geophysics_list');

	
	}
	public function scientific_list(){
		
		$this->view->assign('active','active');
		$data = $this->models->scientific_list();

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

		return $this->loadView('produk/scientific_list');
	}
	public function geophysics(){
		global $CONFIG;	
		$this->view->assign('active','active');
		
	
		$data = $this->models->list_geophysics();
		$this->view->assign('data',$data);
		$this->view->assign('admin',$this->admin['admin']);
		
		return $this->loadView('produk/geophysics');
	}
	public function scientific(){
		global $CONFIG;	
		$this->view->assign('active','active');
		
	
		$data = $this->models->list_scientific();
		$this->view->assign('data',$data);
		$this->view->assign('admin',$this->admin['admin']);
		
		return $this->loadView('produk/scientific');
	}
	public function addScientific(){
		
	global $CONFIG;	
		// pr($_POST);
		// pr($_FILES);
		if(isset($_POST['n_status'])){
			if($_POST['n_status']=='on') $_POST['n_status']=1;
		} else {
			$_POST['n_status']=0;
		}
		If($_POST['list_geophysic'] !=''){
		// pr("tambah");
		$this->view->assign('active','active');
		$upload = uploadFile('file_image',null, 'image');
		$uploaddoc = uploadFile('file_pdf',null, 'doc');
		// pr($upload);
		// pr($uploaddoc);
		$data = $this->models->addScientificchild($upload,$uploaddoc);

		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."produk/geophysics_list'</script>";
	
		}else{
		
		$this->view->assign('active','active');
		
		$upload = uploadFile('file_image',null, 'image');
		$uploaddoc = uploadFile('file_pdf',null, 'doc');
		// pr($upload);
		$data = $this->models->addScientific($upload,$uploaddoc);

		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."produk/scientific_list'</script>";
		// return $this->loadView('produk/addScientific');
		}
	}
	public function addgeophysics(){
	global $CONFIG;	
		// pr($_POST);
		// pr($_FILES);
	
	if(isset($_POST['n_status'])){
			if($_POST['n_status']=='on') $_POST['n_status']=1;
		} else {
			$_POST['n_status']=0;
		}
		// $id=$_GET['title'];
		 // pr($id);
		// pr($_POST);
		// pr($_FILES);
		If($_POST['list_geophysic'] !=''){
		// pr("tambah");
		$this->view->assign('active','active');
		$upload = uploadFile('file_image',null, 'image');
		$uploaddoc = uploadFile('file_pdf',null, 'doc');

		$data = $this->models->addgeophysicschild($upload,$uploaddoc);
		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."produk/geophysics_list'</script>";
	
		}else{
		
		$this->view->assign('active','active');
		$upload = uploadFile('file_image',null, 'image');
		$uploaddoc = uploadFile('file_pdf',null, 'doc');
		 pr($upload);
		 pr($uploaddoc);
		$data = $this->models->addgeophysics($upload,$uploaddoc);

		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."produk/geophysics_list'</script>";
		}
	}
	public function aksi_geophysics(){
		
	global $CONFIG;	
		
			$this->view->assign('active','active');
			$upload = uploadFile('file_image',null, 'image');
			
			$data = $this->models->delete_geophysics();
			 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."produk/geophysics_list'</script>";
			// return $this->loadView('produk/addScientific');	
		
		
		$this->view->assign('active','active');
		
		$upload = uploadFile('file_image',null, 'image');
		// pr($upload);
		$data = $this->models->delete_geophysics();

		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."produk/geophysics_list'</script>";
		// return $this->loadView('produk/addScientific');
	}
	public function delete_scientific(){
		
	global $CONFIG;	
		// pr($_POST);
		// pr($_FILES);
		
		$this->view->assign('active','active');
		
		$upload = uploadFile('file_image',null, 'image');
		// pr($upload);
		$data = $this->models->delete_scientific();

		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."produk/scientific_list'</script>";
		// return $this->loadView('produk/addScientific');
	}
	public function editproduk(){
	global $CONFIG;	

		$id=$_GET['id'];
		
		
		$this->view->assign('active','active');
		$upload = uploadFile('file_image',null, 'image');
		 $data = $this->models->editproduk($id);
		
		
		 if($data['n_status'] ){
				$data['n_status'] = 'checked';
			} else {
				$data['n_status'] = '0';
			}
		//pr($data);
		$this->view->assign('data',$data);
		$this->view->assign('admin',$this->admin['admin']);
	
		 return $this->loadView('produk/editproduk');
		
	}
	public function edit_produk_submit(){
		
	global $CONFIG;	
	
	if(isset($_POST['n_status'])){
			if($_POST['n_status']=='on') $_POST['n_status']=1;
		} else {
			$_POST['n_status']=0;
		}
		 //pr($_POST);
		 // pr($_FILES);
		 // pr($_FILES['file_image']['name']);
		$this->view->assign('active','active');
		
		$upload = uploadFile('file_image',null, 'image');
		// pr($upload);
		$data = $this->models->edit_produk_submit($upload);

		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."produk'</script>";
		// return $this->loadView('produk/addScientific');
	}
	public function delete_produk(){	
	global $CONFIG;	
		// pr($_POST);
		// pr($_FILES);
		
		$this->view->assign('active','active');
		
		$upload = uploadFile('file_image',null, 'image');
		// pr($upload);
		$data = $this->models->delete_produk();

		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."produk'</script>";
		// return $this->loadView('produk/addScientific');
	}
	
	public function civil(){	
	global $CONFIG;	
		// pr($_POST);
		// pr($_FILES);
		
		$this->view->assign('active','active');
		
		$upload = uploadFile('file_image',null, 'image');
		// pr($upload);
		//$data = $this->models->delete_produk();

		// echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."produk'</script>";
		 return $this->loadView('produk/addScientific');
	}
	

}

?>
