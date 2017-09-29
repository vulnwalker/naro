
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Blog
        <small>Edit Kategori</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-dashboard"></i> Dasboard</a></li>
        <li><a href="#">Blog</a></li>
        <li class="active">Edit Kategori</li>
      </ol>
    </section>

    <!-- Main content -->
     <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Kategori</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col col-md-12">
              <?php echo form_open_multipart($this->uri->segment(1).'/'.$this->uri->segment(2).'/do_edit_kategori_artikel');?>
                       <table class="table table-bordered">
                          <tr class="success"><th colspan="2">Form Edit Kategori</th></tr>
                          <tr><td width="150">Nama Kategori</td>
                          <td>
                             <?php
                              echo inpt('col-md-12','text','nama_kategori','Nama Kategori..',''.$nama_kategori.'','height:35px;');
                              echo inpt('','hidden','id','',''.$id.'','');
                             ?>                     
                          </td></tr>
                          <tr><td width="150">Deskripsi Kategori</td>
                          <td>
                            <div class="col col-md-12">
                             <textarea class="form-control" style="padding:0px;margin:0px;" rows="5" id="comment" name="deskripsi"><?php echo strip_tags($deskripsi);?>
                             </textarea>
                             </div>
                          </td></tr>
                       </table>
                       <?php
                          echo btn('col-md-2','btn-primary btn-block','submit','submit','Simpan','height:30px;');
                          echo btn('col-md-2','btn-danger btn-block','reset','reset','Batal','height:30px;');   
                        ?>
                        <br><br>
                    </form>
            </div>

          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        
      </div>
      <!-- /.box -->

     
      <!-- /.row -->

    </section>
    <!-- /.content -->
