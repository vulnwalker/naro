<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
   function seo_title($s) {
        $c = array (' ');
        $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+','<p>');

        $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d
        
        $s = str_replace($c, '-', $s); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
        return $s;
    }

    function datenow()
    {
    	return date ("Y-m-d");
    }


    function namahari($hari)
    {
        $dayList = array(
           'Sun' => 'Minggu',
           'Mon' => 'Senin',
           'Tue' => 'Selasa',
           'Wed' => 'Rabu',
           'Thu' => 'Kamis',
           'Fri' => 'Jumat',
           'Sat' => 'Sabtu'
        );

        return $dayList[$hari];
    }

    function karakter_limit($karakter, $panjang)
    {
        if (strlen($karakter) <= $panjang) {
            return $karakter;
        } else {
            $string = substr($karakter, 0, $panjang);
            return $string . '...';
        }
    }

    function getsrc($string)
    {
         if( strpos( $string, 'img' ) !== false ) 
          {
            // libxml_use_internal_errors(true);
            // $doc = new DOMDocument();
            // $doc->loadHTML( $string );
            // $xpath = new DOMXPath($doc);
            // $imgs = $xpath->query("//img");
            // $img = $imgs->item(0);
            // $src = $img->getAttribute("src");
            
            // $doc = new DOMDocument();
            // $doc->loadHTML($string);
            // $xpath = new DOMXPath($doc);
            // $src = $xpath->evaluate("string(//img/@src)");

            $xpath = new DOMXPath(@DOMDocument::loadHTML($string));
            $src = $xpath->evaluate("string(//img/@src)");
          } else {
            $src = base_url()."assets/img/default.png";
          }
        return $src;
    }

    function priview_isi($data)
    {
        $filter = preg_replace("/<img[^>]+\>/i", "", $data); 
        return strip_tags($filter);
    }

    function isi_artikel($data)
    {
         return  $data = preg_replace('/<img(.*)>/i','',$data,1);
    }   

    function findmenu($data)
    {
        $submenu=$this->db->get_where('submenu',array('id_mainmenu'=>$data))->result();
        foreach ($submenu as $s)
           {
            if($this->uri->segment('2') == $s->link){
                return $data=$s->link;
            }
           }
    }

  	
