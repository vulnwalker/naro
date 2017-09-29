  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>assets/img/naro.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('nama');?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->`
      <ul class="sidebar-menu">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <?php
          $mainmenu=$this->db->get_where('mainmenu',array('aktif'=>'y'))->result();
           foreach ($mainmenu as $m)
           {
            if($m->sub == 'y')
            {
              if($this->uri->segment('2') == $m->nama_menu)
              {
                echo'<li class="treeview active">
                      <a href="#"><i class="'.$m->icon.'"></i>
                          <span>'.$m->nama_menu.'</span> <i class="fa fa-angle-left pull-right"></i>
                      </a><ul class="treeview-menu">';
                      $submenu=$this->db->get_where('submenu',array('id_mainmenu'=>$m->id_mainmenu))->result();
                      foreach ($submenu as $s)
                      if ($this->uri->segment('3') == $s->link)
                      {
                        echo '<li class="active">'.  anchor('dashboard/blog/'.$s->link,  '<i class="'.$s->icon.'"></i>'.$s->nama_submenu)."</li>";
                       } 
                       else 
                       {
                           echo "<li>".  anchor('dashboard/blog/'.$s->link, '<i class="'.$s->icon.'"></i>'.$s->nama_submenu)."</li>";
                       } 
              }else{
                echo'<li class="treeview">
                      <a href="#"><i class="'.$m->icon.'"></i>
                          <span>'.$m->nama_menu.'</span> <i class="fa fa-angle-left pull-right"></i>
                      </a><ul class="treeview-menu">';
                      $submenu=$this->db->get_where('submenu',array('id_mainmenu'=>$m->id_mainmenu))->result();
                      foreach ($submenu as $s)
                      { 
                         echo "<li>".  anchor('dashboard/blog/'.$s->link, '<i class="'.$s->icon.'"></i>'.$s->nama_submenu)." </li>";
                      }
                echo'</ul>
                     </li>'; 
              }
              
            }else
            {
              if($this->uri->segment('2') == $m->link)
               {
                echo '<li class="active">'.  anchor('dashboard/'.$m->link,  '<i class="'.$m->icon.'"></i> <span>'.$m->nama_menu)."</span></li>";
               } 
               else 
               {
                   echo "<li>".  anchor('dashboard/'.$m->link, '<i class="'.$m->icon.'"></i> <span>'.$m->nama_menu)."</span></li>";
               } 
            }
          }
            
         
        ?>
        
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>