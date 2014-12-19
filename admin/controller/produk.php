
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
		
		$data_menu = $this->models->getShowmenu('geo');
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
		

		foreach ($data as $key => $valAlbum){
			

			if($valAlbum['parentid']==0){
				$valAlbum['nameAlbum']=$valAlbum['title'];
				//pr($valAlbum['nameAlbum']);
				$dataAlbum[]=$valAlbum;
				
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
			//pr($dataAlbum);
			
			
		}
		// pr($dataAlbum);
		//pr($data);
		
		$this->view->assign('data',$dataAlbum);
		$this->view->assign('showmenu',$data_menu);
		return $this->loadView('produk/geophysics_list');



	}
	
	public function scientific_list(){
		
		$this->view->assign('active','active');
		$data = $this->models->scientific_list();
		// pr($data);
		$data_menu = $this->models->getShowmenu('scien');
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
		
		// pr($data);
		foreach ($data as $key => $valAlbum){
			

			if($valAlbum['parentid']==0){
				$valAlbum['nameAlbum']=$valAlbum['title'];
				//pr($valAlbum['nameAlbum']);
				$dataAlbum[]=$valAlbum;
				// pr($dataAlbum);
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
			//pr($valAlbum);
		}
		// pr($dataAlbum);
		$this->view->assign('data',$dataAlbum);
		$this->view->assign('showmenu',$data_menu);
		return $this->loadView('produk/scientific_list');



	}
	public function civil_list(){
		
		$this->view->assign('active','active');
		$data = $this->models->civil_list();

		$data_menu = $this->models->getShowmenu('civil');
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
		

		foreach ($data as $key => $valAlbum){
	
			if($valAlbum['parentid']==0){ 

				$valAlbum['nameAlbum']=$valAlbum['title'];
				//pr($valAlbum['nameAlbum']);
				$dataAlbum[]=$valAlbum;
				// pr($dataAlbum);
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
				
				// pr($dataAlbum);
			}
			// $i++;$j++;
		}
		// pr($dataAlbum);
		$this->view->assign('data',$dataAlbum);
	
		$this->view->assign('showmenu',$data_menu);
		return $this->loadView('produk/civil_list');

	
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
	public function addscientific(){
		
	global $CONFIG;	
		// pr($_POST);
		// pr($_FILES);
		if(isset($_POST['n_status'])){
			if($_POST['n_status']=='on') $_POST['n_status']=1;
		} else {
			$_POST['n_status']=0;
		}
		If($_POST['list_scientifics'] !=''){
		// pr("tambah");
		$this->view->assign('active','active');
		$upload = uploadFile('file_image',null, 'image');
		$uploaddoc = uploadFile('file_pdf',null, 'doc');
		// pr($upload);
		// pr($uploaddoc);
		$data = $this->models->addscientificchild($upload,$uploaddoc);

		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."produk/scientific_list'</script>";
	
		}else{
		
		$this->view->assign('active','active');
		
		$upload = uploadFile('file_image',null, 'image');
		$uploaddoc = uploadFile('file_pdf',null, 'doc');
		// pr($upload);
		$data = $this->models->addscientific($upload,$uploaddoc);

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
		if($_POST['list_geophysic'] !=''){
		//pr($_POST['list_geophysic']);
		
		 //pr("tambah");
		$this->view->assign('active','active');
		$upload = uploadFile('file_image',null, 'image');
		$uploaddoc = uploadFile('file_pdf',null, 'doc');

		$data = $this->models->addgeophysicschild($upload,$uploaddoc);
		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."produk/geophysics_list'</script>";
	exit;
		}else{
		
		$this->view->assign('active','active');
		$upload = uploadFile('file_image',null, 'image');
		$uploaddoc = uploadFile('file_pdf',null, 'doc');
		 // pr($upload);
		 // pr($uploaddoc);
		$data = $this->models->addgeophysics($upload,$uploaddoc);

		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."produk/geophysics_list'</script>";
		}
	}
	
	public function addcivil(){
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
		If($_POST['list_civil'] !=''){
		// pr($_POST['list_civil']);
		// pr($_POST);
		// exit;
		 // pr("tambah");
		$this->view->assign('active','active');
		$upload = uploadFile('file_image',null, 'image');
		$uploaddoc = uploadFile('file_pdf',null, 'doc');

		$data = $this->models->addcivilchild($upload,$uploaddoc);
		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."produk/civil_list'</script>";
	
		}else{
		
		// pr($_POST['list_civil']);
		// exit;
		$this->view->assign('active','active');
		$upload = uploadFile('file_image',null, 'image');
		$uploaddoc = uploadFile('file_pdf',null, 'doc');
		 // pr($upload);
		 // pr($uploaddoc);
		$data = $this->models->addcivil($upload,$uploaddoc);

		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."produk/civil_list'</script>";
		}
	}
	
	public function editproduk(){
	global $CONFIG;	
        $this->view->assign('app_domain',$CONFIG['admin']['app_url']);
		
		$id=$_GET['id'];
		
		
		$this->view->assign('active','active');
		
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
	public function editproduk_geophysics(){
	global $CONFIG;	
        $this->view->assign('app_domain',$CONFIG['admin']['app_url']);
		
		$id=$_GET['id'];
		
		
		$this->view->assign('active','active');
		
		 $data = $this->models->editproduk($id);
		 if($data['n_status'] ){
				$data['n_status'] = 'checked';
			} else {
				$data['n_status'] = '0';
			}
		//pr($data);
		$this->view->assign('data',$data);
		$this->view->assign('fleg','geophysics');
		$this->view->assign('admin',$this->admin['admin']);
	
		 return $this->loadView('produk/editproduk');
		
	}
	public function editproduk_scientifics(){
	global $CONFIG;	
        $this->view->assign('app_domain',$CONFIG['admin']['app_url']);
		
		$id=$_GET['id'];
		
		
		$this->view->assign('active','active');
		
		 $data = $this->models->editproduk($id);
		 if($data['n_status'] ){
				$data['n_status'] = 'checked';
			} else {
				$data['n_status'] = '0';
			}
		//pr($data);
		$this->view->assign('data',$data);
		$this->view->assign('fleg','scientifics');
		$this->view->assign('admin',$this->admin['admin']);
	
		 return $this->loadView('produk/editproduk');
		
	}
	public function editproduk_civil(){
	global $CONFIG;	
        $this->view->assign('app_domain',$CONFIG['admin']['app_url']);
		
		$id=$_GET['id'];
		
		
		$this->view->assign('active','active');
		
		 $data = $this->models->editproduk($id);
		 if($data['n_status'] ){
				$data['n_status'] = 'checked';
			} else {
				$data['n_status'] = '0';
			}
		//pr($data);
		$this->view->assign('data',$data);
		$this->view->assign('fleg','civil');
		
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
		$uploaddoc = uploadFile('file_pdf',null, 'doc');
		// pr($upload);
		$data = $this->models->edit_produk_submit($upload,$uploaddoc);

		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."produk'</script>";
		
	}
	public function edit_produk_submit_geophysics(){
		
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
		$uploaddoc = uploadFile('file_pdf',null, 'doc');
		// pr($upload);
		$data = $this->models->edit_produk_submit($upload,$uploaddoc);

		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."produk/geophysics_list'</script>";
		
	}
	public function edit_produk_submit_scientifics(){
		
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
		$uploaddoc = uploadFile('file_pdf',null, 'doc');
		// pr($upload);
		$data = $this->models->edit_produk_submit($upload,$uploaddoc);

		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."produk/scientific_list'</script>";
		
	}
	public function edit_produk_submit_civil(){
		
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
		$uploaddoc = uploadFile('file_pdf',null, 'doc');
		// pr($upload);
		$data = $this->models->edit_produk_submit($upload,$uploaddoc);

		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."produk/civil_list'</script>";
		
	}
	public function delete_produk(){	
	global $CONFIG;	
		$this->view->assign('active','active');
		
		$upload = uploadFile('file_image',null, 'image');
		// pr($upload);
		$data = $this->models->delete_produk();

		 echo "<script>alert('Data berhasil di Hapus');window.location.href='".$CONFIG['admin']['base_url']."produk'</script>";
		// return $this->loadView('produk/addScientific');
	}
	public function delete_produk_civil(){	
	global $CONFIG;	
		$this->view->assign('active','active');
		
		$upload = uploadFile('file_image',null, 'image');
		// pr($upload);
		$data = $this->models->delete_produk();

		 echo "<script>alert('Data berhasil di Hapus');window.location.href='".$CONFIG['admin']['base_url']."produk/civil_list'</script>";
		// return $this->loadView('produk/addScientific');
	}
	public function delete_produk_geophysics(){	
	global $CONFIG;	
		$this->view->assign('active','active');
		
		$upload = uploadFile('file_image',null, 'image');
		// pr($upload);
		$data = $this->models->delete_produk();

		 echo "<script>alert('Data berhasil di Hapus');window.location.href='".$CONFIG['admin']['base_url']."produk/geophysics_list'</script>";
		// return $this->loadView('produk/addScientific');
	}
	public function delete_produk_scientifics(){	
	global $CONFIG;	
		$this->view->assign('active','active');
		
		$upload = uploadFile('file_image',null, 'image');
		// pr($upload);
		$data = $this->models->delete_produk();

		 echo "<script>alert('Data berhasil di Hapus');window.location.href='".$CONFIG['admin']['base_url']."produk/scientific_list'</script>";
		// return $this->loadView('produk/addScientific');
	}
	public function showHidemenu(){	
	global $CONFIG;	
		$this->view->assign('active','active');

		if($_GET['menu']){
			$menu=$_GET['menu'];
			if($menu=='geo'){
				$data['cat']=8;
				$data['type']=1;
				$data['menu']=$menu;
			}elseif($menu=='scien'){
				$data['cat']=8;
				$data['type']=2;
				$data['menu']=$menu;
			}elseif($menu=='civil'){
				$data['cat']=8;
				$data['type']=3;
				$data['menu']=$menu;
			}
			$data_inp=$this->models->showHidemenu_submit($data,"input");
		}else{
			$data['id']=$_GET['id'];
			
			if($_GET['n_status']=='1'){
				$data['n_status']=0;
			}else{
				$data['n_status']=1;
			}
			$data_inp=$this->models->showHidemenu_submit($data,"update");

		}

		if($_GET['produk']=='civil'){
			$redirect="civil_list";
		}elseif($_GET['produk']=='scien'){
			$redirect="scientific_list";
		}else{
			$redirect="geophysics_list";
		}
		//$upload = uploadFile('file_image',null, 'image');
		// pr($upload);
		//$data = $this->models->delete_produk();

		echo "<script>alert('Perubahan Status Berhasil');window.location.href='".$CONFIG['admin']['base_url']."produk/".$redirect."'</script>";
		// return $this->loadView('produk/addScientific');
	}
	public function civil(){	
	global $CONFIG;	
	
		$this->view->assign('active','active');
		$data = $this->models->list_civil();
		$this->view->assign('data',$data);
		$this->view->assign('admin',$this->admin['admin']);
		
		return $this->loadView('produk/civil');
	
	}
	

}

?>

