<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Model {

	public function signin($table,$where)
	{		
		return $this->db->get_where($table,$where);
	}
}

