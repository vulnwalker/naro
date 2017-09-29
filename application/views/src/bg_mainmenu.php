<?php
  $sql  = "SELECT *from kategori where type='artikel'";
  $kategori = $this->db->query($sql)->result();
?>
<header id="header">
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->
              <!-- TEXT BASED LOGO -->
              <a class="navbar-brand" href="<?php echo base_url();?>">Naro<span>Smart</span></a>              
              <!-- IMG BASED LOGO  -->
               <!-- <a class="navbar-brand" href="index.html"><img src="<?php echo base_url();?>/assets/img/logo.png" alt="logo"></a>  -->            
                     
            </div>
            <div id="navbar" class="navbar-collapse collapse">
            <div class="navbar-right">
                <form class="searchbox hidden-xs" action="<?php echo base_url();?>blog/cari" method="get">
                      <input type="text" placeholder="Search......" name="key" class="searchbox-input" onkeyup="buttonUp();" required>
                      <input type="submit" class="searchbox-submit" value="GO">
                      <span class="searchbox-icon"><i class="fa fa-search"></i></span>
                  </form>
              </div>
              <ul id="top-menu" class="nav navbar-nav navbar-left main-nav">
                <li class="active"><a href="<?php echo base_url();?>">Home</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Kategori <span class="caret"></span></a>
                  <ul class="dropdown-menu kategori" role="menu">
                    <?php
                        foreach ($kategori as $k) 
                        {
                        echo'<li><a href="'.base_url().'blog/kategori/'.$k->id.'"><i class="fa fa-circle-o"></i>'.$k->nama_kategori.'</a></li>';
                        }
                    ?>       
                  </ul>
                </li>               
                <li><a href="contact.html">About Us</a></li>
              </ul> 

              
                     
            </div><!--/.nav-collapse -->

            
          </div>     
        </nav>  
      </div>

    
    </header>     