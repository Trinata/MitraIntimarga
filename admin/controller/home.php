<?php
// defined ('TATARUANG') or exit ( 'Forbidden Access' );

class home extends Controller {
	
	var $models = FALSE;
	
	public function __construct()
	{
		parent::__construct();

		global $app_domain;
		$this->loadmodule();
		$this->view = $this->setSmarty();
		$sessionAdmin = new Session;
		$this->admin = $sessionAdmin->get_session();
		// $this->validatePage();
		$this->view->assign('app_domain',$app_domain);
	}
	public function loadmodule()
	{
		
		$this->models = $this->loadModel('m_menu');
		
	}
	
	public function index(){
		$this->view->assign('active','active');
		$data = $this->models->home();

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
		
		// pr($data);exit;
		$this->view->assign('data',$data);

		return $this->loadView('home');

	}
	public function visi(){

		$this->view->assign('active','active');
			$data = $this->models->view_visi();
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
			return $this->loadView('visi_none');
			}
		return $this->loadView('visi');	
	}
	public function visiadd_submit(){
		
	global $CONFIG;	
		$this->view->assign('active','active');
	
	 if(isset($_POST['n_status'])){
			if($_POST['n_status']=='on') $_POST['n_status']=1;
		} else {
			$_POST['n_status']=0;
		 }
		$upload = uploadFile('file_image',null, 'image');
		$uploaddoc = uploadFile('file_pdf',null, 'doc');
		 $data = $this->models->add_submitVisi($upload,$uploaddoc);
		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."home/visi'</script>";
	}
	public function visi_submit(){
		
		global $CONFIG;	
		if(isset($_POST['n_status'])){
				if($_POST['n_status']=='on') $_POST['n_status']=1;
			} else {
				$_POST['n_status']=0;
			}
		$this->view->assign('active','active');
		$uploaddoc = uploadFile('file_pdf',null, 'doc');
		$upload = uploadFile('file_image',null, 'image');
		
		$data = $this->models->submitVisi($upload,$uploaddoc);

		 echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."home/visi'</script>";
		// return $this->loadView('produk/addScientific');
	}
	public function frame(){

		$data = $this->models->get_frameList();
		// pr($data);
		$this->view->assign('data',$data);

		return $this->loadView('listFrame');
	}
	public function delete_home(){	
	global $CONFIG;	
		$this->view->assign('active','active');
		
		$upload = uploadFile('file_image',null, 'image');
		// pr($upload);
		$data = $this->models->delete_home();

		 echo "<script>alert('Data berhasil di Hapus');window.location.href='".$CONFIG['admin']['base_url']."home'</script>";
		// return $this->loadView('produk/addScientific');
	}
	
	function ajax()
	{
		
		$id = _p('id');
		$n_status = _p('n_status');
		
		$data = $this->models->updateStatusFrame($id, $n_status);
		if ($data){
			print json_encode(array('status'=>true));
		}else{
			print json_encode(array('status'=>false));
		}

		exit;
	}
}

?>
