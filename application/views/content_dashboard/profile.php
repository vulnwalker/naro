<section class="content-header">
      <h1>
        Page Profile
        <small>Seting Profile</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i> Dasboard</a></li>
        <li class="active">Profile</li>
      </ol>
    </section>

    <!-- Main content -->
<section class="content">
<!--  <div class="row"> -->
        <!-- left column -->  
 <!--    <div class="col-md-12"> -->
      <!-- <div class="profile-block">
        <div class="panel text-center">
          <div class="user-heading"> <a href="#"><img src="http://cumbrianrun.co.uk/wp-content/uploads/2014/02/default-placeholder-300x300.png" alt="" title=""></a>
            <h1>Elias Miah</h1>
            <p>eliasmia1988@gmail.com</p>
            <p>Wallet Balance $0.00</p>
          </div>
          <ul class="nav nav-pills nav-stacked">
            <li><a href="#"><i class="fa fa-user"></i>Profile</a></li>
            <li class="active"><a href="#"><i class="fa fa-pencil-square-o"></i>Edit profile</a></li>
            <li><a href="#"><i class="fa fa-usd" aria-hidden="true"></i>Subscription History</a></li>
            <li><a href="#"><i class="fa fa-usd" aria-hidden="true"></i>Transaction History</a></li>
            <li><a href="#"><i class="fa fa-sign-out"></i>Logout</a></li>
          </ul>
        </div>
      </div> -->
<!--     </div>
   
  </div>  -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-lock"></i> Ubah Password</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <?php echo $this->session->flashdata('msg'); ?>
          <div class="row">
            <div class="col-md-12">
            <?php echo form_open_multipart($this->uri->segment(1).'/'.$this->uri->segment(2).'/setting_password');?>
                <table class="table table-bordered">
                  <tr class="success">
                    <th colspan="2">Form Ubah Password</th>
                  </tr>
                  <tr>
                    <td width="150">Password Lama</td>
                    <td><?php echo inpt('col-md-12','password','passlama','Password Lama..','','height:35px;');?></td>
                  </tr>
                  <tr>
                    <td width="150">Password Baru</td>
                    <td>
                      <div class="col-md-12">
                        <input name="passbaru" id="pass1" type="password" class='form-control' placeholder="Password Baru..">
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td width="150" height="75px">Konfirmasi Password</td>
                    <td>
                      <div class="col-md-12">
                      <input name="konfirmasi" id="pass2" onkeyup="checkPass(); return false;" type="password" class='form-control' placeholder="Konfoimasi Password Baru..">
                      <span id="confirmMessage" class="confirmMessage"></span>
                      </div>
                    </td>
                  </tr>
                </table>  
                      <?php
                          echo btn('col-md-2','btn-primary btn-block','submit','submit','Simpan','height:40px;');
                          echo btn('col-md-2','btn-danger btn-block','reset','reset','Batal','height:40px;');   
                        ?>  
              </form>         
            </div>
          </div>
        </div>
      </div>         
</section>

<script>
function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.borderColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.borderColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}  
</script>

<script>
  window.setTimeout(function() {
    $(".alert").slideDown(500, 0).slideUp(500, function(){
        $(this).remove(); 
      });
  }, 4000);
</script>