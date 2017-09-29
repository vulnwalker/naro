
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Blog
        <small>Create Kategori</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-dashboard"></i> Dasboard</a></li>
        <li><a href="#">Blog</a></li>
        <li class="active">Create Kategori</li>
      </ol>
    </section>

<!-- Main content -->
     <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tags"></i>Kategori Artikel</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <ul class="nav nav-tabs" id="example-tabs">
                  <li class="active"><a href="#publish" data-toggle="tab">Daftar Kategori <?php echo'('.count($record_kategori).')';?></a></li>
                  <!-- <li><a href="#draf" data-toggle="tab">Draf Artikel (4)</a></li> -->
                  <li><a href="#add" data-toggle="tab">Tambah Kategori Baru</a></li>
              </ul>
              <div class="tab-content">
              <!-- View Artikel -->
                  <div class="tab-pane active" id="publish">
                    <table class="table table-hover" id="example3">
                      <thead>
                          <tr>
                              <th>Id Kategori</th>
                              <th>Nama Kategori</th>
                              <th>Deskripsi</th>
                              <th>Type Kategori</th>
                          </tr>
                      </thead>
                      <tbody>
                      <?php
                          $i=1;
                          foreach ($record_kategori as $r)
                          {
                          echo'
                          <tr>
                              <td>'.$r->id.'<br>
                                  <div class="act">
                                      <a href="'.base_url().'dashboard/blog/edit_kategori_artikel/'.$r->id.'">
                                          <button type="button" class="btn btn-xs btn-link act">Edit</button> 
                                      </a>    
                                      <a href="'.base_url().'dashboard/blog/delete_kategori_artikel/'.$r->id.'">
                                          <button type="submit" class="btn btn-xs btn-link act">Delete</button>
                                      </a>
                                  </div>
                              </td>
                              <td>'.$r->nama_kategori.'</td>
                              <td>'.$r->deskripsi.'</td>
                              <td>'.$r->type.'</td>
                          </tr>';
                          }
                      ?>  
                      </tbody>

                      </form>
                    </table>     
                  </div>
                 <!--  <div class="tab-pane" id="draf" >
                        Draf
                  </div> -->
                  <div class="tab-pane" id="add" >
                 <?php echo form_open_multipart($this->uri->segment(1).'/'.$this->uri->segment(2).'/add_kategori_artikel');?>
                       <table class="table table-bordered">
                          <tr class="success"><th colspan="2">Form Tambah Kategori</th></tr>
                          <tr><td width="150">Nama Kategori</td>
                          <td>
                             <?php
                              echo inpt('col-md-12','text','nama_kategori','Nama Kategori..','','height:35px;');
                             ?>                     
                          </td></tr>
                          <tr><td width="150">Deskripsi Kategori</td>
                          <td>
                            <div class="col col-md-12">
                             <textarea class="form-control" rows="5" id="comment" name="deskripsi"></textarea>
                             </div>
                          </td></tr>
                       </table>
                       <?php
                          echo btn('col-md-2','btn-primary btn-block','submit','submit','Simpan Kategori','height:30px;');
                          echo btn('col-md-2','btn-danger btn-block','reset','reset','Batal','height:30px;');   
                        ?>
                        <br><br>
                        </form>
                  </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
       <!--  <div class="box-footer">
          Information
        </div> -->
      </div>
      <!-- /.box -->

     
      <!-- /.row -->

    </section>
    <!-- /.content -->
    <!-- /.content -->
