<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NaroSmart - Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
      // Css Library //
      echo srccss('plugins/bootstrap/css/bootstrap.css');
      echo srccss('plugins/bootstrap/css/bootstrap.min.css');
      echo srccss('css/font-awesome.css');
      echo srccss('css/superslides.css');
      echo srccss('css/slick.css');
      echo srccss('css/jquery.circliful.css');
      echo srccss('css/animate.css');
      echo srccss('css/queryLoader.css');
      echo srccss('css/jquery.tosrus.all.css');
      echo srccss('css/green-theme.css');
      echo srccss('css/style.css');
      echo srccss('fonts/OpenSans/font-style.css');
    ?>
  </head>
  <body>    
    <a class="scrollToTop" href="#"></a>
     <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner">
      <h2>Naro <span class="colr">Blog</span></h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="courseArchive">
      <div class="container">
        <div class="row">
    <?php 

      // Mainmenu //
      $this->load->view('src/bg_mainmenu');

      // Contents //
      echo $contents;


      // start course archive sidebar
      $this->load->view('src/bg_sidebar');
      // start course archive sidebar
     echo'</div>
       </div>
   </section>';
      // Footer //
      $this->load->view('src/bg_footer');

      // Js Library //
      echo srcjs('plugins/jQuery/jQuery-2.1.4.min.js');
      echo srcjs('plugins/bootstrap/js/bootstrap.min.js');
      echo srcjs('plugins/bootstrap/js/bootstrap.js');
      echo srcjs('js/queryloader2.min.js');
      echo srcjs('js/wow.min.js');
      echo srcjs('js/slick.min.js');
      echo srcjs('js/jquery.easing.1.3.js');
      echo srcjs('js/jquery.animate-enhanced.min.js');
      echo srcjs('js/jquery.superslides.min.js');
      echo srcjs('js/jquery.tosrus.min.all.js');
      echo srcjs('js/jquery.circliful.min.js');
      echo srcjs('js/custom.js');
      echo srcjs('js/cari.js');
    ?>
  </body>
</html>