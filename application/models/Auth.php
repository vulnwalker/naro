<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Model {

	public function signin($table,$where)
	{		
		return $this->db->get_where($table,$where);
	}

	public function anti_injection($data,$koneksi)
	{
	    $filter = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES))));
	    return $filter;
	}

	function get_mysqli() { 
		$db = (array)get_instance()->db;
		return mysqli_connect('localhost', $db['username'], $db['password'], $db['database']);
	}
}

