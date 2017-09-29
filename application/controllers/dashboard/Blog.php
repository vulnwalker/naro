<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	var $folder = "content_dashboard";
	var $tables = "artikel";
	var $tables_kat = "kategori";
	var $pk		= "id";

	public function artikel()
	{

		$sql  = "SELECT *from kategori where type ='artikel' ";
		$sql1 = "SELECT *from artikel";
		$data['kategori'] = $this->db->query($sql)->result();
		$data['record_artikel'] = $this->db->query($sql1)->result();
		// $this->session->set_userdata('upload_image_file_manager',true);
		$this->bgdashboard->load('bgdashboard',  $this->folder.'/artikel/view',$data);

	}

	public function post_artikel()
	{
		 foreach ($_POST as $key => $value) { $$key = $value; }
		 if(isset($_POST['submit']))
	        {
	        	$data  = array(
	        					'title' => $judul,
	        					'body' => htmlspecialchars($isi, ENT_QUOTES),
	        					'url' => strtolower(seo_title($judul)),
	       						'kategori' => $kategori,
	   							'tanggal' => datenow(),
	        					'penulis' => $this->session->userdata('nama'),
	        					'jumlah_baca' => 0
	        					);
				$this->db->insert($this->tables,$data);
				redirect($this->uri->segment(1).'/'.$this->uri->segment(2).'/artikel');
	        }	
	}

	public function edit_artikel($id)
	{
		$res = $this->crud->getPost(" Where id = '$id'");
		$data =  array(
			'id' => $res[0]['id'],
			'title' => $res[0]['title'],
			'body' => $res[0]['body'],
			'kategori' => $res[0]['kategori'],
			'tanggal' =>  $res[0]['tanggal'],
			'penulis' =>  $res[0]['penulis'],
			'jumlah_baca' =>  $res[0]['jumlah_baca'],
			);
		$this->bgdashboard->load('bgdashboard',  $this->folder.'/artikel/edit',$data);	
	}

	public function do_edit_artikel()
	{
		foreach ($_POST as $key => $value) { $$key = $value; }
		if(isset($_POST['submit']))
        {
        	$data = array(
        				'title' => $judul,
	        			'body' => htmlspecialchars($isi, ENT_QUOTES),
	        			'url' => strtolower(seo_title($judul)),
	       				'kategori' => $kategori,
	   					'tanggal' => datenow(),
	        			'penulis' => 'Yoga',
        				);

        	$this->crud->update($this->tables,$data, $this->pk,$id);
        	redirect($this->uri->segment(1).'/'.$this->uri->segment(2).'/artikel');
        }	
	}

	public function delete_artikel()
	{
		$id =  $this->uri->segment(4);
        $this->crud->delete($this->tables,  $this->pk,  $this->uri->segment(4));
       	redirect($this->uri->segment(1).'/'.$this->uri->segment(2).'/artikel');	
	}

	public function kategori()
	{
		 $sql  = "SELECT *from kategori where type='artikel'";
		 $data['record_kategori'] = $this->db->query($sql)->result();
		 $this->bgdashboard->load('bgdashboard',  $this->folder.'/kategori/view',$data);
	}

	public function add_kategori_artikel()
	{
		foreach ($_POST as $key => $value) { $$key = $value; }
		if(isset($_POST['submit']))
	        {
	        	$data  = array(
	        					'nama_kategori' => $nama_kategori,
	        					'deskripsi' => $deskripsi,
	        					'type'	=> 'artikel'
	        				   );
				$this->db->insert($this->tables_kat,$data);
				redirect($this->uri->segment(1).'/'.$this->uri->segment(2).'/kategori');
	        }	
	}

	public function edit_kategori_artikel($id)
	{
		$res = $this->crud->getKategori(" Where id = '$id'");
		$data =  array(
			'id' => $res[0]['id'],
			'nama_kategori' => $res[0]['nama_kategori'],
			'deskripsi' => $res[0]['deskripsi']
			);
		$this->bgdashboard->load('bgdashboard',  $this->folder.'/kategori/edit',$data);	
	}

	public function do_edit_kategori_artikel()
	{
		foreach ($_POST as $key => $value) { $$key = $value; }
		if(isset($_POST['submit']))
        {
        	$data = array(
	        			'nama_kategori' => $nama_kategori,
	        			'deskripsi' => $deskripsi
        				);

        	$this->crud->update($this->tables_kat,$data, $this->pk,$id);
        	redirect($this->uri->segment(1).'/'.$this->uri->segment(2).'/kategori');
        }	
	}

	public function delete_kategori_artikel()
	{
		$id =  $this->uri->segment(4);
        $this->crud->delete($this->tables_kat,  $this->pk,  $this->uri->segment(4));
       	redirect($this->uri->segment(1).'/'.$this->uri->segment(2).'/kategori');	
	}

}