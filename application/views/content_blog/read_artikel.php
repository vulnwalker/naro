   <?php
      $sql   = "SELECT *from artikel where kategori='$kategori' and id != '$id' Order by rand() LIMIT 3 ";
      $sql1  = "SELECT *from artikel where id < '$id' ORDER BY id DESC LIMIT 1";
      $sql2  = "SELECT *from artikel where id > '$id' ORDER BY id LIMIT 1";
      $lainnya = $this->db->query($sql)->result();
      $prev = $this->db->query($sql1);
      $next = $this->db->query($sql2);
      $string = htmlspecialchars_decode($body);
      $src = getsrc($string);
   ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
          <!-- start course content -->
          <div class="col-lg-9 col-md-9 col-sm-9">
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Blog</a></li>
            <li class="active"><?php echo $title?></li>
          </ol>
            <div class="courseArchive_content readart">
              <!-- start blog archive  -->
              <div class="row">
                <!-- start single blog -->
               <!--  <div class="col-lg-1">
                  
                </div> -->
                <div class="col-lg-12 col-12 col-sm-12">
                  <div class="single_blog bgwhite">
                    <div class="blogimg_container">
                    <div class="topbox"> 
                       <h2 class="judul_blog bigtitle"><a href="#"><?php echo $title?></a></h2>
                        <div class="blog_commentbox">
                          <p>Posted by <i class="fa fa-user"></i><?php echo $penulis?></p>
                          <p><i class="fa fa-calendar"></i><?php echo $tanggal?></p>
                          <a href="#"><i class="fa fa-eye"></i><?php echo $jumlah_baca?></a>
                        </div>
                        <hr> 
                     </div>
                      <!-- <a href="#" class="blog_img">
                        <img alt="img" src="<?php
                        //echo $src 
                        ?>">
                      </a> -->
                    </div>
                    <p class="isinya"><?php echo $string; ?></p>
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
              <!-- komentar -->
   
               
            <?php
            if (empty($lainnya)) {
              # code...
            }else{
            echo'
              <div class="related_post">
                <h2>Artikel terkait</h2>
                <div class="row">';
              
                 foreach ($lainnya as $l) 
                 {
                  $stringl = htmlspecialchars_decode($l->body);
                  $srcl = getsrc($stringl);
                  echo'
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single_blog_archive sets">
                      <div class="blogimg_container">
                        <a href="'.base_url().'blog/read/'.$l->id.'/'.$l->url.'" class="blog_img settinggi">
                          <img src="'.$srcl.'" alt="img">
                        </a>
                      </div>
                      
                        <div class="judul_blog_read setmargin"><a href="'.base_url().'blog/read/'.$l->id.'/'.$l->url.'">'.$l->title.'</a></div>
                    
                       
                    </div>
                  </div>';
                  }
                echo'
                  </div> 
                </div>';
              }
          ?>
                
            </div>
              <div class="row">
                <div class="col-md-12" id="reloadkomen">
                

            <?php
              $komensql = "SELECT *from komentar Where komentar_dari='".$this->uri->segment('3')."' order by id_komentar ASC";
                if ($this->db->query($komensql)->num_rows()>0) {
                  echo'<br>
                  <div class="judul-new">
                    Komentar ('.$this->db->query($komensql)->num_rows().')
                  </div>
                  <div class="comments-container">
                      <ul id="comments-list" class="comments-list">';
                       
                        date_default_timezone_set("Asia/Jakarta"); //Your timezone
                       
                        $komen = $this->db->query($komensql)->result();
                        foreach($komen as $k) {
                        echo'
                          <li>
                            <div class="comment-main-level">
                              <div class="comment-avatar"><img src="https://www.1plusx.com/app/mu-plugins/all-in-one-seo-pack-pro/images/default-user-image.png" alt=""></div>
                              <div class="comment-box">
                                <div class="comment-head">
                                  <h6 class="comment-name"><a href="">'.$k->nama.'</a></h6><i class="fa fa-clock-o"></i>
                                  <span>'.timeAgo($k->waktu).'</span>
                                </div>
                                <div class="comment-content">
                                  '.$k->isi_komentar.'
                              </div>
                            </div>
                          </li>';
                          }
                      echo'    
                      </ul>
                    </div>';
                  }else{
                    echo'
                    <div class="col col-md-12">
                    <div class="komenkosong hidden-xs">
                      Belum ada komentar di artikel ini. Silahkan berkomentar dengan sopan. 
                    </div>
                    </div>';
                  }

                
                 ?>
           
                
                
                <div class="judul-new">
                  Box Komentar 
                </div>
                    <form method="POST" class="form-user" id="cform" name="myForm">  
                      <div class="form-group">
                        <table class="boxkomen" width="100%">
                          <tr>
                            <td width="50px" class="hidden-xs"><label class="komenlbl">Nama</label></td>
                            <td width="100%"><input type="text" name="nama" class="form-control" id="inpt1" placeholder="Nama.."></td>
                          </tr>
                          <tr>
                            <td><label class="komenlbl" class="hidden-xs">Email</label></td>
                            <td  width="100%"><input type="email" name="email" class="form-control" id="inpt2" placeholder="Email..">
                            <input type="hidden" value="<?php echo $id; ?>" name="id_kat"></td>
                          </tr>
                          <tr>
                            <td><label class="lblkomen" class="hidden-xs">Komentar</label></td>
                            <td  width="100%"><textarea name="komentar" class="form-control" id="inpt3"  placeholder="Komentar.."></textarea> </td>
                          </tr>
                          <tr>
                            <td></td>
                            <td><a class="tombol-simpan">Kirim Komentar</a></td>
                          </tr>
                        </table>
                      </div>    
                    </form>
                  </div>
                </div>
          </div>
          <!-- End course content -->

<script type="text/javascript">

          
  
   $(document).ready(function(){
    $(".tombol-simpan").click(function(){
      var badColor = "#ff6666";
      var awal = "#cccccc";
      var  nama  = document.getElementById('inpt1');
        var  email = document.getElementById('inpt2');
        var  komen = document.getElementById('inpt3');
        var cek = true;
        var x = document.forms["myForm"]["email"].value;
        var atpos = x.indexOf("@");
        var dotpos = x.lastIndexOf(".");
        if (nama.value == "") {
           nama.style.borderColor = badColor;
           cek = false;
        }
        if (email.value == "") {
           email.style.borderColor = badColor;
           cek = false;
        }

        if (komen.value == "") {
           komen.style.borderColor = badColor;
           cek = false;
        }

        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
            email.style.borderColor = badColor;
            cek = false;
        }

        if(cek == true){
        var data = $('#cform').serialize();
        $.ajax({
          type: 'POST',
          url: "<?php echo site_url('blog/addkomen/');?>",
          data: data,
          success: function() {
          $("#reloadkomen").load(location.href+" #reloadkomen>*","").fadeIn().delay(2000);


            // window.setTimeout(update, 10000);
            // $('.tampildata').load("komentar_artikel.php");
             resetForm('form-user');
            nama.style.borderColor = awal;
            email.style.borderColor = awal;
            komen.style.borderColor = awal;
              
            // $('form.form-user input[type="text"],textarea, select').val('');
          },
          error : function() {
            alert("gagal");
          }
        });
      }else{
        return false;
      }
    });
  });
    function resetForm(formclass) {
    $(':input','.'+formclass) .not(':button, :submit, :reset, :hidden') .val('')
      .removeAttr('checked') .removeAttr('selected');
  }
</script>