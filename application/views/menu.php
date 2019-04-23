<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img style="height: 20px;" alt="Brand" src="<?php echo base_url().'assets/images/Bootstrap.png'?>">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!--Akses Menu Untuk Admin-->
        <?php if($this->session->userdata('akses')=='1'):?>
            <li class="active"><a href="<?php echo base_url().'page'?>">Dashboard</a></li>
            <li><a href="<?php echo base_url().'page/control_radio'?>">Radio Control</a></li>
            <li><a href="<?php echo base_url().'page/user_manager'?>">User Manager</a></li>
            <li><a href="<?php echo base_url().'index.php/page/input_nilai'?>">Input Nilai</a></li>
            <li><a href="<?php echo base_url().'index.php/page/krs'?>">KRS</a></li>
            <li><a href="<?php echo base_url().'index.php/page/lhs'?>">LHS</a></li>
        <!--Akses Menu Untuk Dosen-->
        <?php elseif($this->session->userdata('akses')=='2'):?>
            <li class="active"><a href="<?php echo base_url().'index.php/page'?>">Dashboard</a></li>
            <li><a href="<?php echo base_url().'index.php/page/data_mahasiswa'?>">Data Mahasiswa</a></li>
            <li><a href="<?php echo base_url().'index.php/page/input_nilai'?>">Input Nilai</a></li>
        <!--Akses Menu Untuk Mahasiswa-->
        <?php else:?>
            <li class="active"><a href="<?php echo base_url().'index.php/page'?>">Dashboard</a></li>
            <li><a href="<?php echo base_url().'index.php/page/krs'?>">KRS</a></li>
            <li><a href="<?php echo base_url().'index.php/page/lhs'?>">LHS</a></li>
        <?php endif;?>          
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li> -->
      </ul>
      <!-- <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> -->
      <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url().'index.php/login/logout'?>">Sign Out</a></li>
      </ul>
      <!-- <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul> -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>