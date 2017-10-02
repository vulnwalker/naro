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

		$koneksi = $this->auth->get_mysqli();

		$pass = $this->auth->anti_injection($password,$koneksi);

    	$where = array(

			'email' 	=> $username,

			'password' 	=> $pass

			);

		$login=  $this->db->get_where('user',$where);

		$getPasswordAsli = $login->row_array();

		$passwordAsli = $getPasswordAsli['password'];

		$emailAsli = $getPasswordAsli['email'];

		if($username == $emailAsli && $pass == $passwordAsli){

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

			$msg = "<div class='alert'>

  					<strong>Gagal!</strong>

  					<p>Username atau password salah</p>

				    </div>";

				    $this->session->set_flashdata("msg", $msg);

				    redirect(base_url("admin"));

		}

	}



	public function logout()

    {

        $this->session->sess_destroy();

        redirect(base_url());

    }

}


