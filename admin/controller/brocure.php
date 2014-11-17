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
		$this->view->assign('active','active');
		$data = $this->models->brocure();

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
	
			$this->view->assign('admin',$this->admin['admin']);
			

		return $this->loadView('brocure/brocure_none');
	
		
	
	}
	
	public function company_division_submit(){
	
		global $CONFIG;	
		if(isset($_POST['n_status'])){
				if($_POST['n_status']=='on') $_POST['n_status']=1;
			} else {
				$_POST['n_status']=0;
			}
		$this->view->assign('active','active');
		$uploaddoc = uploadFile('file_pdf',null, 'doc');
		$upload = uploadFile('file_image',null, 'image');
		
		$data = $this->models->company_division_submit($upload,$uploaddoc);

		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."company'</script>";

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
			pr($_POST);
			pr($upload);
			pr($uploaddoc );
			

		$data = $this->models->brocure_add_submit($upload,$uploaddoc);
			 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."company'</script>";
		
	}
	
	
	
	/////////////////////// mara
	
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
