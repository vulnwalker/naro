<?php 
class My404 extends CI_Controller 
{
  var $folder = "content_blog";
 public function __construct() 
 {
    parent::__construct(); 
 } 

 public function index() 
 { 
    $this->output->set_status_header('404'); 
    $this->load->view($this->folder.'/error404');
 } 
} 