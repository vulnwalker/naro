<?php
if($this->session->userdata('id') <> '')
{
    redirect(''.base_url().'dashboard/home');
}?>

<!DOCTYPE html>
<html >
   <head>
      <meta charset="UTF-8">
      <title>Narosmart - Login Form</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php
      // Css Library //
      echo srccss('css/style_login.css');
      echo srccss('css/font-awesome.css');
      ?>
     
   </head>

<?php
   $jam   = date('H:i:s');
   $jam4  = '04:00'; $jam10 = '10:00'; $jam16 = '16:00'; $jam18 = '18:00';

   if ($jam >= $jam4 AND $jam <= $jam10) {
       $waktu = 'pagi';
   } elseif ($jam > $jam10 AND $jam <= $jam16) {
      $waktu = 'siang';
   } else {
      $waktu = 'malam';
   }
   // "<?php echo $waktu;
?>
<body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);" class="<?php echo $waktu;?>">    
      <!--Google Font - Work Sans-->
<div class="jam"> 
<span class="tanggal">
  <?php  print date('d F Y'); ?>
</span>  
<br>
<span id="clock">
</span>
</div>


      <div class="container">
         <div class="profile">
            <button class="profile__avatar" id="toggleProfile">
            <img src="<?php echo base_url();?>assets/img/naro.png" alt="Avatar" />   
            </button>
            <span class="profile__company">Smart Choice</span>
            <div class="profile__form">
             <form action="<?php echo base_url('admin/do_login'); ?>" method="POST" accept-charset="utf-8">
               <div class="profile__fields">
                  <div class="field">
                     <input type="text" id="fieldUser" class="input" name ="username" required />
                     <label for="fieldUser" class="label">Username</label>
                  </div>
                  <div class="field">
                     <input type="password" id="fieldPassword" class="input" name ="password" required />
                     <label for="fieldPassword" class="label">Password</label>
                  </div>
                  <div class="profile__footer">
                     <center><button class="btn" type="submit">Login</button></center>
                  </div>
               </form>
               </div>
            </div>
         </div>
     
      </div>


      <?php
         echo srcjs('js/js_login.js');
      ?>
<script type="text/javascript">    
    //fungsi displayTime yang dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
    function tampilkanwaktu(){
        //buat object date berdasarkan waktu saat ini
        var waktu = new Date();
        //ambil nilai jam, 
        //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length
        var sh = waktu.getHours() + ""; 
        //ambil nilai menit
        var sm = waktu.getMinutes() + "";
        //ambil nilai detik
        // var ss = waktu.getSeconds() + "";
        //tampilkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
        document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm);
    }
</script>

   </body>
</html>

