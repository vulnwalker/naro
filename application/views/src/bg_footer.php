 <?php
    $sql1  = "SELECT *from artikel Order by id DESC limit 3";
    $sql2  = "SELECT *from kategori where type='artikel'";
    $populer = $this->db->query($sql1)->result();
    $kategori = $this->db->query($sql2)->result();
?>
 <footer id="footer">
      <!-- Start footer top area -->
      <div class="footer_top">
        <div class="container">
          <div class="row">
            <div class="col-ld-4  col-md-4 col-sm-4">
              <div class="single_footer_widget">
                <h3>Kategori Artikel</h3>
                <ul class="tags_nav">
                <?php
                  foreach ($kategori as $k) 
                  {
                  echo'<li><a href="'.base_url().'blog/kategori/'.$k->id.'"><i class="fa fa-tags"></i>'.$k->nama_kategori.'</a></li>';
                  }
                ?> 
                </ul>
              </div>
            </div>
          
            <div class="col-ld-4  col-md-4 col-sm-4">
              <div class="single_footer_widget">
                <h3>Artikel Terbaru</h3>
                <ul class="news_tab nt-footer">
                <?php
                 foreach ($populer as $p) 
                 {
                  $string = htmlspecialchars_decode($p->body);
                  $src = getsrc($string);
                  echo'
                    <li>
                      <div class="media">
                        <div class="media-left ml-footer">
                          <a href="'.base_url().'blog/read/'.$p->id.'/'.$p->url.'" class="news_img ni-footer">
                            <img alt="img" src="'.$src.'" class="media-object">
                          </a>
                        </div>
                        <div class="media-body mb-footer">
                         <a href="'.base_url().'blog/read/'.$p->id.'/'.$p->url.'">'.$p->title.'</a>
                         <span class="feed_date">'.$p->tanggal.'</span>
                        </div>
                      </div>
                    </li>';
                    }
                  ?>               
                </ul>
              </div>
            </div>
            <div class="col-ld-4  col-md-4 col-sm-4">
              <div class="single_footer_widget">
                <h3>Social Links</h3>
                <ul class="footer_social">
                  <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip"  href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip"  href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Linkedin" class="soc_tooltip"  href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Youtube" class="soc_tooltip"  href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
                <ul class="footer-info">
                  <li><a href="https://www.google.com/maps/place/Taman+Makam+Pahlawan+Cikutra/@-6.8923299,107.6355555,15z/data=!4m2!3m1!1s0x0:0xe7603359062a3236?sa=X&ved=0ahUKEwiW17yhusfWAhVFPI8KHeIoA3UQ_BIIhgEwDg" target="_blank"><i class="fa fa-map-marker"></i> Taman Pahlawan Bandung</a></li>
                  <li><i class="fa fa-phone"></i>+62 22 2345 6789</li>
                </ul>
                  
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer top area -->

      <!-- Start footer bottom area -->
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
            
              <div class="footer_bootomLeft" align="center">
                <p> NAROSMART &copy; 2017</p>
              </div>
          
           
          </div>
        </div>
      </div>
      <!-- End footer bottom area -->
    </footer>