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
	public function editbrocure(){

		$this->view->assign('active','active');
		$id=$_GET['id'];
		//pr($id);
		//exit;
		$data = $this->models->editbrocure($id);
			//pr($data);
			
			
			 if($data['n_status'] = '1' ){
				$data['n_status'] = 'checked';
			} else {
				$data['n_status'] = '0';
				}	
				
		//pr($data['n_status']);
		//pr($data);
		$this->view->assign('data',$data);
		$this->view->assign('admin',$this->admin['admin']);
		return $this->loadView('brocure/edit_brocure');
	
		
	
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
			 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."company'</script>";
		
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
