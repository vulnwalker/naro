<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	var $folder = "content_dashboard";
	var $tables = "user";
	var $pk		= "id";

	public function index()
	{
		$this->bgdashboard->load('bgdashboard',  $this->folder.'/profile');
	}

	public function setting_password()
	{
		 foreach ($_POST as $key => $value) { $$key = $value; }
		 $q = $this->db->get_where($this->tables,array('id' => $this->session->userdata('id')))->result_array();
		 $res = $q[0]['password'];
		 if ($passlama == $res) {
		 	if ($passbaru == $konfirmasi) {
		 		$data = array(
        				'password' => $passbaru
        				);
		 		$id = $this->session->userdata('id');
		 		$editdata = $this->crud->update($this->tables,$data, $this->pk,$id);
		 		$msg = "<div class='alert alert-success' role='alert'>
				    		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				    			<span aria-hidden='true'>&times;</span>
				    		</button>
  							<strong>Berhasil!</strong>
  							<p>Password berhasil di ubah </p>
							</div>";
		 	}else{
		 		$msg = "<div class='alert alert-danger'> 
				 	  	<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				  			<span aria-hidden='true'>&times;</span>
				    	</button>
  						<strong>Gagal!</strong>
  						<p>Konfirmasi Password Anda tidak sama</p>
		    		</div>";
		 	}
		 	# code...
		 }else{
		 	$msg = "<div class='alert alert-danger'> 
				 	  	<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				  			<span aria-hidden='true'>&times;</span>
				    	</button>
  						<strong>Gagal!</strong>
  						<p>Password Lama Anda Salah</p>
		    		</div>";
		 }
		 $this->session->set_flashdata("msg", $msg);
        redirect($this->uri->segment(1).'/'.$this->uri->segment(2));
	}

}
