<?php

class home extends Controller {
	
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
		
		// $this->models = $this->loadModel('frontend');
	}
	
	function parseExcel()
	{
		global $EXCEL;
		if ($_FILES){
			
			// parameternya adalah name dari input type file
			$excel = $this->excel('tes');
			
			$baris = $excel->rowcount($sheet_index=0);
			$nilai1 = $excel->val($EXCEL[0]['startrow'], $EXCEL[0]['startcolumn']);
			
			pr($baris);
			pr($nilai1);
		}
	}
	
	public function index(){
	global $basedomain;
	global $baseheader;
        
		$var = array(1,2,3);
	
	//	pr($basedomain);
	//	pr($baseheader);
		
		
		
		// pr($this->view);
		$this->view->assign('home',$var);
		$this->view->assign('coba','coba data smarty');
		// $this->view->assign('coba1','coba data smarty1');
		//pr($var);
		
		return $this->loadView('test');
		return $this->loadView('header');
		

	}
        
	public function tangkap(){
		if(isset($_POST)){
			// validasi value yang masuk
		   $x = form_validation($_POST);
		   
		   $data['input'] = $this->models->inputData($x['id'],$x['nama'],$x['alamat']);
		   
		   /* tampung kembalian data dari fungsi yang dipanggil */
			//$data['frontend'] = $this->models->get_data_desc();
		   if($data['input'])
		   {
			   //return $this->loadView('display');
			   global $CONFIG;
			   redirect($CONFIG['default']['base_url']."display");
		   }else {
			   echo "gagal";
		   }
		   
		  // pr($x);
		}
	}
	
}

?>
