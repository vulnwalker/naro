   <?php
      $sql   = "SELECT *from artikel where kategori='$kategori' and id != '$id' Order by rand() LIMIT 2 ";
      $sql1  = "SELECT *from artikel where id < '$id' ORDER BY id DESC LIMIT 1";
      $sql2  = "SELECT *from artikel where id > '$id' ORDER BY id LIMIT 1";
      $lainnya = $this->db->query($sql)->result();
      $prev = $this->db->query($sql1);
      $next = $this->db->query($sql2);
      $string = htmlspecialchars_decode($body);
      $src = getsrc($string);
   ?>
          <!-- start course content -->
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="courseArchive_content">
              <!-- start blog archive  -->
              <div class="row">
                <!-- start single blog -->
                <div class="col-lg-12 col-12 col-sm-12">
                  <div class="single_blog">
                    <div class="blogimg_container">
                      <a href="#" class="blog_img">
                        <img alt="img" src="<?php
                        echo $src ?>">
                      </a>
                    </div>
                    <h2 class="blog_title"><a href="blog-single.html"><?php echo $title?></a></h2>
                    <div class="blog_commentbox">
                      <p><i class="fa fa-user"></i><?php echo $penulis?></p>
                      <p><i class="fa fa-calendar"></i><?php echo $tanggal?></p>
                      <a href="#"><i class="fa fa-eye"></i><?php echo $jumlah_baca?></a>
                    </div>
                    <?php echo isi_artikel($string);?>
                  </div>
                  <div class="single_blog_prevnext">

                <?php
                if ($prev->num_rows() >= 1) {
                    $res = $prev->row_array();
                    echo '<a class="prev_post wow fadeInLeft" href="'.base_url().'blog/read/'.$res['id'].'/'.$res['url'].'"><i class="fa fa-angle-left"></i>Previous Post</a>';
                }else{
                    echo'<span class="prev_post wow fadeInLeft not-active" href="#"><i class="fa fa-angle-left"></i>Previous Post</span>';
                }

                if ($next->num_rows() >= 1) {
                  $row = $next->row_array();
                  echo'<a class="next_post wow fadeInRight" href="'.base_url().'blog/read/'.$row['id'].'/'.$row['url'].'">Next Post<i class="fa fa-angle-right"></i></a>';
                }else{
                  echo'<span class="next_post wow fadeInRight not-active" >Next Post<i class="fa fa-angle-right"></i></span>';
                }
                  ?>  
                  </div>
                </div>
                <!-- End single blog -->                
              </div>
              <!-- end blog archive  -->
              <!-- start related post -->
            <?php
            if (empty($lainnya)) {
              # code...
            }else{
            echo'
              <div class="related_post">
                <h2>Artikel Dengan Kategori Yang Sama</h2>
                <div class="row">';
              
                 foreach ($lainnya as $l) 
                 {
                  $stringl = htmlspecialchars_decode($l->body);
                  $srcl = getsrc($stringl);
                  echo'
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="single_blog_archive wow fadeInUp">
                      <div class="blogimg_container">
                        <a href="'.base_url().'blog/read/'.$l->id.'/'.$l->url.'" class="blog_img">
                          <img src="'.$srcl.'" alt="img">
                        </a>
                      </div>
                      <h2 class="blog_title"><a href="'.base_url().'blog/read/'.$l->id.'/'.$l->url.'"></a>'.$l->title.'</h2>
                      <div class="blog_commentbox">
                        <p><i class="fa fa-user"></i>'.$l->penulis.'</p>
                        <p><i class="fa fa-calendar"></i>'.$l->tanggal.'</p>
                        <a href="#"><i class="fa fa-eye"></i>'.$l->jumlah_baca.'</a>
                      </div>
                      <p class="blog_summary">'.karakter_limit(priview_isi($stringl),150).'</p>
                      <a href="'.base_url().'blog/read/'.$l->id.'/'.$l->url.'" class="blog_readmore">Read More</a>
                    </div>
                  </div>';
                  }
                echo'
                  </div> 
                </div>';
              }
            ?>  
              <!-- start related post -->           
            </div>
          </div>
          <!-- End course content -->

          