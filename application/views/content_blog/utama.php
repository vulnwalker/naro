
<?php if(empty($artikel)){ ?>
<div class="col-lg-8 col-md-8 col-sm-8">
    <div class="courseArchive_content">
       <h3 class="wow fadeInUp animated not-found" style="visibility: visible; animation-name: fadeInUp;"><i class="fa fa-search"></i> Maaf artikel tidak di temukan</h3>
   </div>
 </div>      
<?php }else{ ?>
 
      <!-- start course content -->
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="courseArchive_content">
              <!-- start blog archive  -->
              <div class="row">
                <!-- start single blog archive -->
                <?php

                 foreach ($artikel as $a) 
                 {
                  $string = htmlspecialchars_decode($a->body);
                  $src = getsrc($string);
                  echo'
                  <div class="col-lg-12 col-12 col-sm-12">
                    <div class="single_blog_archive wow fadeInUp">
                      <div class="blogimg_container">
                        <a href="'.base_url().'blog/read/'.$a->id.'/'.$a->url.'" class="blog_img">
                          <img alt="img" src="'.$src.'">
                        </a>
                      </div>';
                        if (empty($kata_kunci)) {
                            $judul = $a->title;
                        }else{
                            $judul = preg_replace("/(" . $kata_kunci . ")/i", "<b style='color:#1ABC9C !important;'>$1</b>", $a->title);
                        }
                      echo'
                      <h2 class="blog_title"><a href="'.base_url().'blog/read/'.$a->id.'/'.$a->url.'">'.$judul.'</a></h2>
                      <div class="blog_commentbox">
                        <p><i class="fa fa-user"></i>'.$a->penulis.'</p>
                        <p><i class="fa fa-calendar"></i>'.$a->tanggal.'</p>
                        
                      </div>
                      <p class="blog_summary">'.karakter_limit(priview_isi($string),300).'</p>
                      <a class="blog_readmore" href="'.base_url().'blog/read/'.$a->id.'/'.$a->url.'">Read More</a>
                    </div>
                  </div>';
                 }
                ?>
                
              </div>
              <!-- end blog archive  -->
              <nav>
              <?php echo $paging; ?>
                <!-- <ul class="pagination wow fadeInLeft">
                  <li><a href="#"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                </ul> -->
              </nav>
            </div>
          </div>
          <?php }?>
          <!-- End course content -->

          <!-- start course archive sidebar -->
         
          <!-- start course archive sidebar -->
        
    <!--=========== END COURSE BANNER SECTION ================-->