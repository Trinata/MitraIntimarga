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
			//pr($data);
			if($data != 'tidakadadata' ){
			//	pr("isi");
				 if($data['content']['n_status'] ){
					$data['content']['n_status'] = 'checked';
				} else {
					$data['content']['n_status'] = '0';
					}			
					$this->view->assign('data',$data);
				$this->view->assign('admin',$this->admin['admin']);
				
			}else{
			//	pr("kosong");
			return $this->loadView('company/company_none');
			}
		return $this->loadView('company/company_profile');	
	}
	public function company_profile_submit(){
		
		global $CONFIG;	
		if(isset($_POST['n_status'])){
				if($_POST['n_status']=='on') $_POST['n_status']=1;
			} else {
				$_POST['n_status']=0;
			}
		$this->view->assign('active','active');
		$uploaddoc = uploadFile('file_pdf',null, 'doc');
		$upload = uploadFile('file_image',null, 'image');
		
		$data = $this->models->company_profile_submit($upload,$uploaddoc);

		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."company'</script>";
		// return $this->loadView('produk/addScientific');
	}
	public function company_profileadd_submit(){
		
	global $CONFIG;	
		$this->view->assign('active','active');
	
	 if(isset($_POST['n_status'])){
			if($_POST['n_status']=='on') $_POST['n_status']=1;
		} else {
			$_POST['n_status']=0;
		 }
		$upload = uploadFile('file_image',null, 'image');
		$uploaddoc = uploadFile('file_pdf',null, 'doc');
		 $data = $this->models->company_profileadd_submit($upload,$uploaddoc);
		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."company'</script>";
	}
	public function company_division(){

		$this->view->assign('active','active');
		$data = $this->models->company_division();
		//pr($data);
		if($data != 'tidakadadata' ){
			//pr("isi");
			 if($data['content']['n_status'] ){
				$data['content']['n_status'] = 'checked';
			} else {
				$data['content']['n_status'] = '0';
				}			
				$this->view->assign('data',$data);
			$this->view->assign('admin',$this->admin['admin']);
			
		}else{
			//pr("kosong");
		return $this->loadView('company/company_division_none');
		}
		return $this->loadView('company/company_division');
	
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
	
	public function company_divisionadd_submit(){
	
	global $CONFIG;	
		$this->view->assign('active','active');
	
	 if(isset($_POST['n_status'])){
			if($_POST['n_status']=='on') $_POST['n_status']=1;
		} else {
			$_POST['n_status']=0;
		 }
		$upload = uploadFile('file_image',null, 'image');
		$uploaddoc = uploadFile('file_pdf',null, 'doc');
		 $data = $this->models->company_divisionadd_submit($upload,$uploaddoc);
		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."company'</script>";
		
	}
	public function company_organization(){

		$this->view->assign('active','active');
		$data = $this->models->company_organization();
		//pr($data);
		if($data != 'tidakadadata' ){
			//pr("isi");
			 if($data['content']['n_status'] ){
				$data['content']['n_status'] = 'checked';
			} else {
				$data['content']['n_status'] = '0';
				}			
				$this->view->assign('data',$data);
			$this->view->assign('admin',$this->admin['admin']);
			
		}else{
			//pr("kosong");
		return $this->loadView('company/company_organization_none');
		}
		return $this->loadView('company/company_organization');
	
	}
	
	public function company_organization_submit(){
	
		global $CONFIG;	
			$this->view->assign('active','active');
		
		 if(isset($_POST['n_status'])){
				if($_POST['n_status']=='on') $_POST['n_status']=1;
			} else {
				$_POST['n_status']=0;
			 }
			$upload = uploadFile('file_image',null, 'image');
			$uploaddoc = uploadFile('file_pdf',null, 'doc');
			 $data = $this->models->company_organization_submit($upload,$uploaddoc);
			 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."company'</script>";
			
	}
	public function company_organizationadd_submit(){

		global $CONFIG;	
		$this->view->assign('active','active');
	
	 if(isset($_POST['n_status'])){
			if($_POST['n_status']=='on') $_POST['n_status']=1;
		} else {
			$_POST['n_status']=0;
		 }
		$upload = uploadFile('file_image',null, 'image');
		$uploaddoc = uploadFile('file_pdf',null, 'doc');
		 $data = $this->models->company_organizationadd_submit($upload,$uploaddoc);
		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."company'</script>";
		
	}
	public function company_marketing(){
		///////
		$this->view->assign('active','active');
		$data = $this->models->company_marketing();
		//pr($data);
		if($data != 'tidakadadata' ){
			//pr("isi");
			 if($data['content']['n_status'] ){
				$data['content']['n_status'] = 'checked';
			} else {
				$data['content']['n_status'] = '0';
				}			
				$this->view->assign('data',$data);
			$this->view->assign('admin',$this->admin['admin']);
			
		}else{
		//	pr("kosong");
		return $this->loadView('company/company_marketing_none');
		}
		return $this->loadView('company/company_marketing');
		
		
	}
	
	public function company_marketing_submit(){
	
		global $CONFIG;	
			$this->view->assign('active','active');
		
		 if(isset($_POST['n_status'])){
				if($_POST['n_status']=='on') $_POST['n_status']=1;
			} else {
				$_POST['n_status']=0;
			 }
			$upload = uploadFile('file_image',null, 'image');
			$uploaddoc = uploadFile('file_pdf',null, 'doc');
			 $data = $this->models->company_marketing_submit($upload,$uploaddoc);
			 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."company'</script>";
			
	
	}
	public function company_marketingadd_submit(){
		global $CONFIG;	
		$this->view->assign('active','active');
	
		 if(isset($_POST['n_status'])){
				if($_POST['n_status']=='on') $_POST['n_status']=1;
			} else {
				$_POST['n_status']=0;
			 }
			$upload = uploadFile('file_image',null, 'image');
			$uploaddoc = uploadFile('file_pdf',null, 'doc');
			 $data = $this->models->company_marketingadd_submit($upload,$uploaddoc);
			 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."company'</script>";
		
	}
	public function customer_list(){
		$this->view->assign('active','active');
		$data = $this->models->customer_list();
		//pr($data);
		if($data != 'tidakadadata' ){
			//pr("isi");
			 if($data['content']['n_status'] ){
				$data['content']['n_status'] = 'checked';
			} else {
				$data['content']['n_status'] = '0';
				}			
				$this->view->assign('data',$data);
			$this->view->assign('admin',$this->admin['admin']);
			
		}else{
		//	pr("kosong");
		return $this->loadView('company/customer_list_none');
		}
		return $this->loadView('company/customer_list');
		
	}
	public function customer_listadd_submit(){
	global $CONFIG;	
		$this->view->assign('active','active');
	
		 if(isset($_POST['n_status'])){
				if($_POST['n_status']=='on') $_POST['n_status']=1;
			} else {
				$_POST['n_status']=0;
			 }
			$upload = uploadFile('file_image',null, 'image');
			$uploaddoc = uploadFile('file_pdf',null, 'doc');
			 $data = $this->models->customer_listadd_submit($upload,$uploaddoc);
			 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."company'</script>";
	
	}
	
	public function customer_list_submit(){
	
		global $CONFIG;	
			$this->view->assign('active','active');
		
		 if(isset($_POST['n_status'])){
				if($_POST['n_status']=='on') $_POST['n_status']=1;
			} else {
				$_POST['n_status']=0;
			 }
			$upload = uploadFile('file_image',null, 'image');
			$uploaddoc = uploadFile('file_pdf',null, 'doc');
			 $data = $this->models->customer_list_submit($upload,$uploaddoc);
			 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."company'</script>";
			
	
	}
	public function customer_location(){
		$this->view->assign('active','active');
		$data = $this->models->customer_location();
		//pr($data);
		if($data != 'tidakadadata' ){
			//pr("isi");
			 if($data['content']['n_status'] ){
				$data['content']['n_status'] = 'checked';
			} else {
				$data['content']['n_status'] = '0';
				}			
				$this->view->assign('data',$data);
			$this->view->assign('admin',$this->admin['admin']);
			
		}else{
		//	pr("kosong");
		return $this->loadView('company/customer_location_none');
		}
		return $this->loadView('company/customer_location');
		
	}
	
	public function customer_location_submit(){
		global $CONFIG;	
			$this->view->assign('active','active');
		
		 if(isset($_POST['n_status'])){
				if($_POST['n_status']=='on') $_POST['n_status']=1;
			} else {
				$_POST['n_status']=0;
			 }
			$upload = uploadFile('file_image',null, 'image');
			$uploaddoc = uploadFile('file_pdf',null, 'doc');
			 $data = $this->models->customer_location_submit($upload,$uploaddoc);
			 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."company'</script>";
			
	}
	public function customer_locationadd_submit(){
	
		global $CONFIG;	
		$this->view->assign('active','active');
	
		 if(isset($_POST['n_status'])){
				if($_POST['n_status']=='on') $_POST['n_status']=1;
			} else {
				$_POST['n_status']=0;
			 }
			$upload = uploadFile('file_image',null, 'image');
			$uploaddoc = uploadFile('file_pdf',null, 'doc');
			 $data = $this->models->customer_locationadd_submit($upload,$uploaddoc);
			 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."company'</script>";
	
	
	}
	

}

?>
