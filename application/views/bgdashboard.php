<?php
if($this->session->userdata('id')=='')
{
    redirect(''.base_url().'admin');
}?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NaroSmart - Dashboard</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" /> -->

    <?php echo srccss('css/font-awesome.css');
          echo srccss('plugins/select2/css/select2.min.css');
          echo srccss('plugins/bootstrap/css/bootstrap.min.css');
          echo srccss('plugins/LTE/css/skins/_all-skins.min.css');
          echo srccss('plugins/LTE/css/AdminLTE.min.css');
          echo srccss('plugins/LTE/css/skins/skin-green.min.css');
          echo srccss('plugins/datatables/dataTables.bootstrap.css');
          echo srccss('plugins/icheck/skins/flat/red.css');
          echo srccss('css/dashboard_style.css');
          echo srccss('css/custom.css');
    ?>
  </head>
<body class="hold-transition skin-black sidebar-mini">
<div class="wrapper">
  
<!-- Header & Sidebar -->
  <?php
    $this->load->view('src/dashboard_header');
    $this->load->view('src/dashboard_sidebar');
  ?>

<!-- Contents -->  
  <div class="content-wrapper">
    <?php echo $contents;?>
  </div>
  

<?php $this->load->view('src/dashboard_control');?>
</div>

<!-- Js Library -->
<?php
  echo srcjs('plugins/jQuery/jQuery-2.1.4.min.js');
  echo srcjs('plugins/bootstrap/js/bootstrap.min.js');
  echo srcjs('plugins/LTE/js/app.min.js');
  echo srcjs('plugins/LTE/js/demo.js');
  echo srcjs('plugins/datatables/jquery.dataTables.min.js');
  echo srcjs('plugins/datatables/dataTables.bootstrap.min.js'); 
  echo srcjs('plugins/ckeditor/ckeditor.js');
  echo srcjs('plugins/icheck/icheck.js');
  echo srcjs('plugins/select2/js/select2.min.js');
?>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script> -->
<script>
$(function () {
  $("#example1").DataTable();
  $('#example3').dataTable( {
    "processing": true,
    "columnDefs": [ {
    "targets": 'no-sort',
    "orderable": false,
    } ]
  });

  $('#example2').DataTable({
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "aoColumnDefs": [{ 'bSortable': false, 'aTargets': [ 0 ] }]
  });
});
</script>

<script>
  $(document).ready(function() {
      $('.selectfind').select2();
      $('.selectfind').select2({
          placeholder: "Pilih Kategori"
      });
  });
  CKEDITOR.replace('editor1');
</script>


</body>
</html>
