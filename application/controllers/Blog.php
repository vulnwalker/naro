<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	var $table = "artikel";
	var $pengunjung = "pengunjung";
	var $folder = "content_blog";
	var $pk		= "id";
		

	public function index()
	{
		$page=$this->input->get('per_page');
        $batas=5; //jlh data yang ditampilkan per halaman
        if(!$page):     //jika page bernilai kosong maka batas akhirna akan di set 0
           $offset = 0;
        else:
           $offset = $page; // jika tidak kosong maka nilai batas akhir nya akan diset nilai page terakhir
        endif;
 
        $config['page_query_string'] = TRUE; //mengaktifkan pengambilan method get pada url default
        $config['base_url'] = base_url().'blog';   //url yang muncul ketika tombol pada paging diklik
        $config['total_rows'] = $this->crud->count_artikel(); // jlh total barang
        $config['per_page'] = $batas; //batas sesuai dengan variabel batas
 
        $config['uri_segment'] = $page; //merupakan posisi pagination dalam url pada kesempatan ini saya menggunakan method get untuk menentukan posisi pada url yaitu per_page
 
		$config['full_tag_open'] = "<ul class='pagination wow fadeInLeft'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
 
        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $data['paging']=$this->pagination->create_links();
        $data['jlhpage']=$page;
        $data['artikel'] = $this->crud->get_allartikel($batas,$offset); //query model semua barang

		// $sql   = "SELECT *from artikel order by id DESC";
		// $data['artikel'] = $this->db->query($sql)->result();
		$this->bghome->load('bghome',$this->folder.'/utama',$data);
	}

	public function cari()
    {
        $key= $this->input->get('key'); //method get key
        $page=$this->input->get('per_page');  //method get per_page
 
        $search=array(
            'title'=> $key  
        ); //array pencarian yang akan dibawa ke model
 
        $batas=5; //jlh data yang ditampilkan per halaman
        if(!$page):     //jika page bernilai kosong maka batas akhirna akan di set 0
           $offset = 0;
        else:
           $offset = $page; // jika tidak kosong maka nilai batas akhir nya akan diset nilai page terakhir
        endif;
 
        $config['page_query_string'] = TRUE; //mengaktifkan pengambilan method get pada url default
        $config['base_url'] = base_url().'blog/cari?key='.$key;   //url yang muncul ketika tombol pada paging diklik
        $config['total_rows'] = $this->crud->count_artikel_search($search); // jlh total barang
        $config['per_page'] = $batas; //batas sesuai dengan variabel batas
 
        $config['uri_segment'] = $page; //merupakan posisi pagination dalam url pada kesempatan ini saya menggunakan method get untuk menentukan posisi pada url yaitu per_page
 
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '&laquo; First';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';
 
        $config['last_link'] = 'Last &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';
 
        $config['next_link'] = 'Next &rarr;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';
 
        $config['prev_link'] = '&larr; Prev';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';
 
        $config['cur_tag_open'] = '<li class="current"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
 
        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $data['paging']=$this->pagination->create_links();
        $data['jlhpage']=$page;
        $data['kata_kunci'] = $key;
 
        $data['artikel'] = $this->crud->get_allartikel($batas,$offset,$search); //query model semua barang
 
        $this->bghome->load('bghome',$this->folder.'/utama',$data);
 
    }

	public function read($id,$url)
	{
		$season_id =session_id();
		$res = $this->crud->getPost(" Where url = '$url'");
		$cek = $this->db->query('Select *From pengunjung Where season_id="'.$season_id.'" and id_artikel="'.$id.'"');
		if($cek->num_rows() < 1)
		{
			$jum = $res[0]['jumlah_baca'] + 1;
			$guest  = array(
						'season_id' => $season_id,
						'tanggal'	=> datenow(),
						'id_artikel'=> $id
					);
			$this->db->insert($this->pengunjung,$guest);
			$this->db->set('jumlah_baca', $jum); 
			$this->db->where('id', $id); 
			$this->db->update('artikel');  
		}
		
		$data =  array(
			'id' => $res[0]['id'],
			'title' => $res[0]['title'],
			'body' => $res[0]['body'],
			'kategori' => $res[0]['kategori'],
			'tanggal' =>  $res[0]['tanggal'],
			'penulis' =>  $res[0]['penulis'],
			'jumlah_baca' =>  $res[0]['jumlah_baca'],
			);
		$this->bghome->load('bghome',  $this->folder.'/read_artikel',$data);	
	}

	public function kategori($id)
	{
        $page=$this->input->get('per_page');  //method get per_page
 		$search = null;
        $kat=array(
            'kategori'=> $id  
        );//array pencarian yang akan dibawa ke model
 
        $batas=6; //jlh data yang ditampilkan per halaman
        if(!$page):     //jika page bernilai kosong maka batas akhirna akan di set 0
           $offset = 0;
        else:
           $offset = $page; // jika tidak kosong maka nilai batas akhir nya akan diset nilai page terakhir
        endif;
 
        $config['page_query_string'] = TRUE; //mengaktifkan pengambilan method get pada url default
        $config['base_url'] = base_url().'blog/kategori/'.$id;   //url yang muncul ketika tombol pada paging diklik
        $config['total_rows'] = $this->crud->count_artikel_kategori($id); // jlh total barang
        $config['per_page'] = $batas; //batas sesuai dengan variabel batas
 
        $config['uri_segment'] = $page; //merupakan posisi pagination dalam url pada kesempatan ini saya menggunakan method get untuk menentukan posisi pada url yaitu per_page
 
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '&laquo; First';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';
 
        $config['last_link'] = 'Last &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';
 
        $config['next_link'] = 'Next &rarr;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';
 
        $config['prev_link'] = '&larr; Prev';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';
 
        $config['cur_tag_open'] = '<li class="current"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
 
        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $data['paging']=$this->pagination->create_links();
        $data['jlhpage']=$page;
        $data['artikel'] = $this->crud->get_allartikel($batas,$offset,$search,$kat); //query model semua barang

		// $sql   = "SELECT *from artikel WHERE kategori='$id' order by id DESC";
		// $data['artikel'] = $this->db->query($sql)->result();

		$this->bghome->load('bghome',$this->folder.'/utama',$data);
	}

	
}
