<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$this->load->view('bglogin');
	}

	public function do_login()
	{
		foreach ($_POST as $key => $value) { $$key = $value; }
    	$where = array(
			'email' 	=> $username,
			'password' 	=> $password
			);
		$login=  $this->db->get_where('user',$where);
		if($login->num_rows()>0 ){
			$d=  $login->row_array();
			$data_session = array(
				'email'   => $username,
				'nama'    => $d['nama'],
				'grup'    => $d['grup'],
				'status'  => $d['status'],
				'id'	  => $d['id']
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("dashboard/home"));

		}else{
			echo "Username dan password salah !";
		}
	}

	public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
