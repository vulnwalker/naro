<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	var $artikel = "artikel";
	var $folder = "content_dashboard";

	public function index()
	{
		$this->bgdashboard->load('bgdashboard',  $this->folder.'/utama');
	}
}