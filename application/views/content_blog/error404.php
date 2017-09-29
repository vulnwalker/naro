<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>404 Page Not Found</title>
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
   
    <!--=========== END COURSE BANNER SECTION ================-->

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    
    <?php 
      // Mainmenu //
      $this->load->view('src/bg_mainmenu');
      echo'
      <section id="errorpage">
        <div class="container">
          <div class="error_page_content">
               <h1>404</h1>
               <h2>Sorry :(</h2>
               <h3>This page doesnt exist.</h3>
               <p class="wow fadeInDown animated" style="visibility: visible; animation-name: fadeInLeftBig;">Please, continue to our <a href="'.base_url().'">Home page</a></p>
             </div>
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