<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
  var $folder =   "content_dashboard";
  public function index()
  {
    $this->bgdashboard->load('Bgdashboard',  $this->folder.'/utama');
  }

  public function artikel()
  {
    $this->bgdashboard->load('Bgdashboard',  $this->folder.'/artikel/view');
  }

   public function kategori()
  {
    $this->bgdashboard->load('Bgdashboard',  $this->folder.'/kategori/view');
  }

 
}