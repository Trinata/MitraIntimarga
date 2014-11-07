<?php
// defined ('MICRODATA') or exit ( 'Forbidden Access' );

class company extends Controller {
	
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
		
		$this->models = $this->loadModel('m_company');
	}
	
	public function index(){
		$this->view->assign('active','active');
		$data = $this->models->company();

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

		return $this->loadView('company/company');

	}
	public function company_profile(){
		
		$this->view->assign('active','active');

			$data = $this->models->company_profile();

		 if($data['n_status'] ){
				$data['n_status'] = 'checked';
			} else {
				$data['n_status'] = '0';
			}			
			$this->view->assign('data',$data);
		$this->view->assign('admin',$this->admin['admin']);
		return $this->loadView('company/company_profile');
	}
	
	public function company_profile_submit(){
		
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
		
		//$upload = uploadFile('file_image',null, 'image');
		// pr($upload);
		$data = $this->models->company_profile_submit();

		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."company'</script>";
		// return $this->loadView('produk/addScientific');
	}
	public function company_division(){
		
		$this->view->assign('active','active');

			$data = $this->models->company_division();

		 if($data['n_status'] ){
				$data['n_status'] = 'checked';
			} else {
				$data['n_status'] = '0';
			}			
			$this->view->assign('data',$data);
		$this->view->assign('admin',$this->admin['admin']);
		return $this->loadView('company/company_division');
	}
	
	public function company_division_submit(){
		global $CONFIG;	
	if(isset($_POST['n_status'])){
			if($_POST['n_status']=='on') $_POST['n_status']=1;
		} else {
			$_POST['n_status']=0;
		}
		 //pr($_POST);
		 //pr($_FILES);
		 // pr($_FILES['file_image']['name']);
		$this->view->assign('active','active');
		
		$upload = uploadFile('file_image',null, 'image');
		// pr($upload);
		$data = $this->models->company_division_submit($upload);

		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."company'</script>";
		// return $this->loadView('produk/addScientific');
	}
	public function company_organization(){
		
		$this->view->assign('active','active');

			$data = $this->models->company_organization();

		 if($data['n_status'] ){
				$data['n_status'] = 'checked';
			} else {
				$data['n_status'] = '0';
			}			
			$this->view->assign('data',$data);
		$this->view->assign('admin',$this->admin['admin']);
		return $this->loadView('company/company_organization');
	}
	
	public function company_organization_submit(){
		global $CONFIG;	
	if(isset($_POST['n_status'])){
			if($_POST['n_status']=='on') $_POST['n_status']=1;
		} else {
			$_POST['n_status']=0;
		}
		 //pr($_POST);
		 //pr($_FILES);
		 // pr($_FILES['file_image']['name']);
		$this->view->assign('active','active');
		
		$upload = uploadFile('file_image',null, 'image');
		// pr($upload);
		$data = $this->models->company_organization_submit($upload);

		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."company'</script>";
		// return $this->loadView('produk/addScientific');
	}
	public function company_marketing(){
		
		$this->view->assign('active','active');

			$data = $this->models->company_marketing();

		 if($data['n_status'] ){
				$data['n_status'] = 'checked';
			} else {
				$data['n_status'] = '0';
			}			
			$this->view->assign('data',$data);
		$this->view->assign('admin',$this->admin['admin']);
		return $this->loadView('company/company_marketing');
	}
	
	public function company_marketing_submit(){
		global $CONFIG;	
	if(isset($_POST['n_status'])){
			if($_POST['n_status']=='on') $_POST['n_status']=1;
		} else {
			$_POST['n_status']=0;
		}
		 //pr($_POST);
		 //pr($_FILES);
		 // pr($_FILES['file_image']['name']);
		$this->view->assign('active','active');
		
		$upload = uploadFile('file_image',null, 'image');
		// pr($upload);
		$data = $this->models->company_marketing_submit($upload);

		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."company'</script>";
		// return $this->loadView('produk/addScientific');
	}
	public function customer_list(){
		
		$this->view->assign('active','active');

			$data = $this->models->customer_list();

		 if($data['n_status'] ){
				$data['n_status'] = 'checked';
			} else {
				$data['n_status'] = '0';
			}			
			$this->view->assign('data',$data);
		$this->view->assign('admin',$this->admin['admin']);
		return $this->loadView('company/customer_list');
	}
	
	public function customer_list_submit(){
		global $CONFIG;	
	if(isset($_POST['n_status'])){
			if($_POST['n_status']=='on') $_POST['n_status']=1;
		} else {
			$_POST['n_status']=0;
		}
		 //pr($_POST);
		 //pr($_FILES);
		 // pr($_FILES['file_image']['name']);
		$this->view->assign('active','active');
		
		$upload = uploadFile('file_image',null, 'image');
		// pr($upload);
		$data = $this->models->customer_list_submit($upload);

		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."company'</script>";
		// return $this->loadView('produk/addScientific');
	}
	public function customer_location(){
		
		$this->view->assign('active','active');

			$data = $this->models->customer_location();

		 if($data['n_status'] ){
				$data['n_status'] = 'checked';
			} else {
				$data['n_status'] = '0';
			}			
			$this->view->assign('data',$data);
		$this->view->assign('admin',$this->admin['admin']);
		return $this->loadView('company/customer_location');
	}
	
	public function customer_location_submit(){
		global $CONFIG;	
	if(isset($_POST['n_status'])){
			if($_POST['n_status']=='on') $_POST['n_status']=1;
		} else {
			$_POST['n_status']=0;
		}
		 //pr($_POST);
		 //pr($_FILES);
		 // pr($_FILES['file_image']['name']);
		$this->view->assign('active','active');
		
		$upload = uploadFile('file_image',null, 'image');
		// pr($upload);
		$data = $this->models->customer_location_submit($upload);

		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."company'</script>";
		// return $this->loadView('produk/addScientific');
	}
	
	/*----------------edit maraoks -------------------*/
	/*
	public function about_us_edit(){
	
	global $CONFIG;
	
	if($_POST['edit']=="Edit"){
	
		$this->view->assign('active','active');
			$data = $this->models->about_us_edit($_POST);	
			
			
			$this->view->assign('data',$data);
		$this->view->assign('admin',$this->admin['admin']);
		
		echo "<script>alert('Content About Us telah diedit');window.location.href='".$CONFIG['admin']['base_url']."'</script>";
	
	}
	else{
		$this->view->assign('active','active');

			$data = $this->models->about_us();	
			$this->view->assign('data',$data);
		$this->view->assign('admin',$this->admin['admin']);
		return $this->loadView('about_us');
	}
	
	}
	*/
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
		/*
		$this->view->assign('active','active');
			$data = $this->models->geophysics();	
			$this->view->assign('data',$data);
		$this->view->assign('admin',$this->admin['admin']);
		*/
		return $this->loadView('produk/geophysics');
	}
	public function scientific(){
		/*
		$this->view->assign('active','active');
			$data = $this->models->scientific();	
			$this->view->assign('data',$data);
		$this->view->assign('admin',$this->admin['admin']);
		*/
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
		
		$this->view->assign('active','active');
		
		$upload = uploadFile('file_image',null, 'image');
		// pr($upload);
		$data = $this->models->addScientific($upload);

		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."produk/scientific_list'</script>";
		// return $this->loadView('produk/addScientific');
	}
	public function addgeophysics(){
		
	global $CONFIG;	
	if(isset($_POST['n_status'])){
			if($_POST['n_status']=='on') $_POST['n_status']=1;
		} else {
			$_POST['n_status']=0;
		}
		// pr($_POST);
		// pr($_FILES);
		
		$this->view->assign('active','active');
		
		$upload = uploadFile('file_image',null, 'image');
		// pr($upload);
		$data = $this->models->addgeophysics($upload);

		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."produk/geophysics_list'</script>";
		// return $this->loadView('produk/addScientific');
	}
	public function delete_geophysics(){
		
	global $CONFIG;	
		// pr($_POST);
		// pr($_FILES);
		
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
	// $alamat="http://localhost/MitraIntimarga/public_assets/";
	// pr($alamat);

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
		 pr($_FILES);
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
	

}

?>
