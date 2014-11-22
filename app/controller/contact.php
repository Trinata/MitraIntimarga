<?php
class contact extends Controller {
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
		 $this->models = $this->loadModel('contact_m');
	}
	public function index(){
	global $basedomain;
	global $baseheader;
        
		$result_data = $this->models->contact();
		// pr($result_data);
		$var = array(1,2,3);
		// pr($basedomain);

		$this->view->assign('data',$result_data);
		$this->view->assign('coba','coba data smarty');
		return $this->loadView('contact');
	}
	public function proses_pesan(){
		global $basedomain;
		global $baseheader;
        
		$create_date=date("Y-m-d H:i:s");
		$msg ="<strong>Pesan Dikirim Pada tanggal {$create_date}</strong><br/><table class=\"table table-bordered\">

									<tr>
										<td>Subjek :</td>
										<td>{$_POST['subjek']}</td>
									</tr>
									<tr>
										<td>Nama :</td>
										<td>{$_POST['nama']}</td>
									</tr>
									<tr>
										<td>Email :</td>
										<td>{$_POST['email']}</td>
									</tr>
									<tr>
										<td>Kota :</td>
										<td>{$_POST['kota']}</td>
									</tr>
									<tr>
										<td>Institusi :</td>
										<td>{$_POST['institusi']}</td>
									</tr>
									<tr>
										<td>Telepon :</td>
										<td>{$_POST['telp']}</td>
									</tr>
									<tr>
										<td>Fax :</td>
										<td>{$_POST['telp']}</td>
									</tr>
									<tr>
										<td>Alamat :</td>
										<td>{$_POST['alamat']}</td>
									</tr>

									<tr>
										<td>Pesan :</td>
										<td>{$_POST['komentar']}</td>
									</tr>
								</table>
								";
		 $from="Pesan Kontak";
		 
		sendGlobalMail('pukiscuy@gmail.com',$from,$msg,$config=true);

		 echo "<script>alert('Pesan Berhasil dikirim');window.location.href='".$basedomain."contact'</script>";
		
		// $result_data = $this->models->insert_contact();

		// pr($result_data);
		// $var = array(1,2,3);
		// pr($basedomain);

		// $this->view->assign('data',$result_data);
		// $this->view->assign('coba','coba data smarty');
		// return $this->loadView('contact');

	}
	
}

?>
