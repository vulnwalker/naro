<?php
$kirim = mail('polisi@amail.club', 'Form submission', 'Halo');
if($kirim){
  echo "SUkses";
}else{
  echo "gagal";
}
 ?>
