
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Blog
        <small>Edit Artikel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-dashboard"></i> Dasboard</a></li>
        <li><a href="#">Blog</a></li>
        <li class="active">Edit Artikel</li>
      </ol>
    </section>

    <!-- Main content -->
     <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Artikel</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col col-md-12">
              <?php echo form_open_multipart($this->uri->segment(1).'/'.$this->uri->segment(2).'/do_edit_artikel');?>
                       <table class="table table-bordered">
                          <tr class="success"><th colspan="2">Form Edit Artikel</th></tr>
                          <tr><td width="150">Judul Artikel</td>
                          <td>
                             <?php
                              echo inpt('col-md-12','text','judul','Judul Artikel..',''.$title.'','height:35px;');
                             ?>                     
                          </td></tr>
                          <tr><td width="150">Kategori Artikel</td>
                          <td>
                          <div class="col col-md-12">
                              <select class="form-control selectfind" name="kategori" style="width: 100%;" required>
                                <option></option>
                                <?php
                                $sql  = "SELECT *from kategori";
                                $record = $this->db->query($sql)->result();
                                  foreach ($record as $k)
                                  {
                                    if($k->id == $kategori)
                                    {
                                      echo'<option value="'.$k->id.'" selected>'.$k->nama_kategori.'</option>';
                                    }else{
                                      echo'<option value="'.$k->id.'">'.$k->nama_kategori.'</option>';
                                    }
                                  }
                                  echo inpt('','hidden','id','',''.$id.'','');
                                ?>
                              </select> 
                            </div>                    
                          </td></tr>
                          <tr><td colspan="2">
                            <div class="box-body">
                                <textarea id="editor1" name="isi"><?php echo $body; ?></textarea>
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
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        
      </div>
      <!-- /.box -->

     
      <!-- /.row -->

    </section>
    <!-- /.content -->
