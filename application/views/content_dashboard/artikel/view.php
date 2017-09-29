
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Blog
        <small>Create Artikel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-dashboard"></i> Dasboard</a></li>
        <li><a href="#">Blog</a></li>
        <li class="active">Create Artikel</li>
      </ol>
    </section>

    <!-- Main content -->
     <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-pencil"></i> Artikel</h3>

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
                  <li class="active"><a href="#publish" data-toggle="tab">Daftar Artikel <?php echo'('.count($record_artikel).')';?></a></li>
                  <!-- <li><a href="#draf" data-toggle="tab">Draf Artikel (4)</a></li> -->
                  <li><a href="#add" data-toggle="tab">Tambah Artikel Baru</a></li>
              </ul>
              <div class="tab-content">
              <!-- View Artikel -->
                  <div class="tab-pane active" id="publish">
                    <table class="table table-hover" id="example3">
                      <thead>
                          <tr>
                              <th>Judul</th>
                              <th>Kategori</th>
                              <th>Publisher</th>
                              <th>Tanggal</th>
                              <th>Viewer</th>
                          </tr>
                      </thead>
                      <tbody>
                      <?php
                          $i=1;
                          foreach ($record_artikel as $r)
                          {
                          echo'
                          <tr>
                              <td>'.$r->title.'<br>
                                  <div class="act">
                                      <a href="'.base_url().'dashboard/blog/edit_artikel/'.$r->id.'">
                                          <button type="button" class="btn btn-xs btn-link act">Edit</button> 
                                      </a>    
                                      <a href="'.base_url().'blog/read/'.$r->id.'/'.$r->url.'"  target="_blank">
                                          <button type="button" class="btn btn-xs btn-link act">View</button>
                                      </a>
                                      <a href="'.base_url().'dashboard/blog/delete_artikel/'.$r->id.'">
                                          <button type="submit" class="btn btn-xs btn-link act">Delete</button>
                                      </a>
                                  </div>
                              </td>
                              <td>'.$r->kategori.'</td>
                              <td>'.$r->penulis.'</td>
                              <td>'.$r->tanggal.'</td>
                              <td>'.$r->jumlah_baca.'</td>
                          </tr>';
                          $i++;
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
                 <?php echo form_open_multipart($this->uri->segment(1).'/'.$this->uri->segment(2).'/post_artikel');?>
                       <table class="table table-bordered">
                          <tr class="success"><th colspan="2">Form Artikel</th></tr>
                          <tr><td width="150">Judul Artikel</td>
                          <td>
                             <?php
                              echo inpt('col-md-12','text','judul','Judul Artikel..','','height:35px;');
                             ?>                     
                          </td></tr>
                          <tr><td width="150">Kategori Artikel</td>
                          <td>
                          <div class="col col-md-12">
                              <select class="form-control selectfind" name="kategori" style="width: 100%;" required>
                                <option></option>
                                <?php
                                  foreach ($kategori as $k)
                                  {
                                    echo'<option value="'.$k->id.'">'.$k->nama_kategori.'</option>';
                                  }
                                ?>
                              </select> 
                            </div>                    
                          </td></tr>
                          <tr><td colspan="2">
                            <div class="box-body">
                                <textarea id="editor1" name="isi"></textarea>
                               </div> 
                              </form>
                           </div>   
                          </td></tr>

                       </table>
                       <?php
                          echo btn('col-md-2','btn-primary btn-block','submit','submit','Post Artikel','height:30px;');
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


