        <?php
          $sql1  = "SELECT *from artikel Order by jumlah_baca DESC limit 5";
          $sql2  = "SELECT *from kategori where type='artikel'";
          $populer = $this->db->query($sql1)->result();
          $kategori = $this->db->query($sql2)->result();
        ?>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="courseArchive_sidebar">
              <!-- start single sidebar -->
              <div class="single_sidebar">
                <h2>Popular post <span class="fa fa-angle-double-right"></span></h2>
                <ul class="news_tab">
                <?php
                 foreach ($populer as $p) 
                 {
                  $string = htmlspecialchars_decode($p->body);
                  $src = getsrc($string);
                  echo'
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a href="'.base_url().'blog/read/'.$p->id.'/'.$p->url.'" class="news_img">
                            <img alt="img" src="'.$src.'" class="media-object">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="'.base_url().'blog/read/'.$p->id.'/'.$p->url.'">'.$p->title.'</a>
                         <span class="feed_date">'.$p->tanggal.'</span>
                        </div>
                      </div>
                    </li>';
                    }
                  ?>               
                </ul>
              </div>
              <!-- End single sidebar -->
              <!-- start single sidebar -->
              <div class="single_sidebar">
                <h2>Kategori Artikel <span class="fa fa-angle-double-right"></span></h2>
                <ul class="kat">
                <?php
                 foreach ($kategori as $k) 
                 {
                  if($this->uri->segment('3') == $k->id){
                    echo'<li class="active"><a href="#"><i class="fa fa-tags"></i>'.$k->nama_kategori.'</a></li>';
                  }else{
                    echo'<li><a href="'.base_url().'blog/kategori/'.$k->id.'"><i class="fa fa-tags"></i>'.$k->nama_kategori.'</a></li>';
                  }
                  
                  }?>
                </ul>
              </div>
              <!-- End single sidebar -->
              <!-- start single sidebar -->
              <!-- <div class="single_sidebar">
                <h2>Tags <span class="fa fa-angle-double-right"></span></h2>
                <ul class="tags_nav">
                  <li><a href="#"><i class="fa fa-tags"></i>Creative</a></li>
                  <li><a href="#"><i class="fa fa-tags"></i>News</a></li>
                  <li><a href="#"><i class="fa fa-tags"></i>Technology</a></li>
                  <li><a href="#"><i class="fa fa-tags"></i>Art</a></li>
                  <li><a href="#"><i class="fa fa-tags"></i>Audio</a></li>
                  <li><a href="#"><i class="fa fa-tags"></i>video</a></li>
                </ul>
              </div> -->
              <!-- End single sidebar -->
              <!-- start single sidebar -->
             <!--  <div class="single_sidebar">
                <h2>Sponsor Add <span class="fa fa-angle-double-right"></span></h2>
                <a class="side_add" href="#"><img src="img/side-add.jpg" alt="img"></a>
              </div> -->
              <!-- End single sidebar -->
            </div>
          </div>