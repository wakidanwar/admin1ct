<!DOCTYPE html>
<html>
<head>
  <title>Radio Control</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Produk By Mfikri.com">
  <meta name="author" content="M Fikri Setiadi">
  <!-- Bootstrap -->
  <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/css/bootstrap-grid.css'?>" rel="stylesheet">


</head>
<body>
  <?php $this->load->view('menu');?> <!--Include menu-->
  <div class="container">
    <h3>
      Radio Control 
      <small class="text-muted">Panel</small>
    </h3>   
    <div class="alert alert-info" role="alert"><strong>Control Server Utama [Icecast]</strong><br><br>
      <!-- Split button -->
      <div class="btn-group">
        <button type="button" class="btn btn-primary">Service</button>
        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="caret"></span>
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url().'addons/start.php'?>" target="_blank">Start</a></li>
          <li><a href="<?php echo base_url().'addons/stop.php'?>" target="_blank">Stop</a></li>
          <!-- <li><a href="#">Something else here</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Separated link</a></li> -->
        </ul>
      </div>
      &nbsp;
      <div class="btn-group">
        <button type="button" class="btn btn-danger">Cheking</button>
        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="caret"></span>
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="http://<?php echo $_SERVER['SERVER_NAME'];?>:8000" target="_blank">Cek Icecast</a></li>
          <li><a href="http://36.66.198.202/apps/radio0/" target="_blank">Buka Player</a></li>
          <!-- <li><a href="#">Something else here</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Separated link</a></li> -->
        </ul>
      </div>                    
    </div>
    <div class="alert alert-success" role="alert">
      <strong>Setting Server Utama [Icecast] !</strong>
      <p>
        <table>
          <tbody>
            <tr>
              <td>Server Address&nbsp;</td>
              <td>:&nbsp;</td>
              <td>&nbsp;36.66.198.202</td>
            </tr>
            <tr>
              <td>Port&nbsp;</td>
              <td>:&nbsp;</td>
              <td>&nbsp;8000</td>
            </tr>
            <tr>
              <td>Mount&nbsp;</td>
              <td>:&nbsp;</td>
              <td>&nbsp;/radiojatayu?type=.mp3</td>
            </tr>
            <tr>
              <td>Password&nbsp;</td>
              <td>:&nbsp;</td>
              <td>&nbsp;radiojatayu1</td>
            </tr>
            <tr>
              <td>Admin Password&nbsp;</td>
              <td>:&nbsp;</td>
              <td>&nbsp;adminjatayu1</td>
            </tr>
          </tbody>
        </table>
      </p>
    </div>                      
    <div class="alert alert-info" role="alert"><strong>Link Server Alternatif [Shoutcast]</strong>
      <br>
      <br>
      <div class="btn-group">
        <button type="button" class="btn btn-primary">Service</button>
        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="caret"></span>
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="http://newl2mr.listen2myradio.com/login-free.php" target="_blank">Listen2MyRadio Site</a></li>
          <!-- <li><a href="<?php echo base_url().'addons/stop.php'?>" target="_blank">Stop</a></li> -->
          <!-- <li><a href="#">Something else here</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Separated link</a></li> -->
        </ul>
      </div>
      &nbsp;
      <div class="btn-group">
        <button type="button" class="btn btn-danger">Cheking</button>
        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="caret"></span>
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="http://162.210.196.145:15242/admin.cgi?user=admin&pass=adminjatayu1" target="_blank">Cek Shoutcast</a></li>
          <li><a href="http://36.66.198.202/apps/radio0/radio_2.php" target="_blank">Buka Player</a></li>
          <!-- <li><a href="#">Something else here</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Separated link</a></li> -->
        </ul>
      </div>
    </div>
    <div class="alert alert-success" role="alert">
      <strong>Setting Server Alternatif [shoutcast 2] !</strong>
      <p>
        <table>
          <tbody>
            <tr>
              <td>Server Address&nbsp;</td>
              <td>:&nbsp;</td>
              <td>&nbsp;162.210.196.145</td>
            </tr>
            <tr>
              <td>Port&nbsp;</td>
              <td>:&nbsp;</td>
              <td>&nbsp;15242</td>
            </tr>
            <tr>
              <td>Mount&nbsp;</td>
              <td>:&nbsp;</td>
              <td>&nbsp; -</td>
            </tr>
            <tr>
              <td>Password&nbsp;</td>
              <td>:&nbsp;</td>
              <td>&nbsp;radiojatayu1</td>
            </tr>
            <tr>
              <td>Admin Password&nbsp;</td>
              <td>:&nbsp;</td>
              <td>&nbsp;adminjatayu1</td>
            </tr>
          </tbody>
        </table>
      </p>
    </div>                      
    <div class="alert alert-warning">
      <strong>System Feature !</strong> New Feature use to handle more server options<br><br>
      <p>
        <a href="#" target="_blank" class="btn btn-danger btn-xs disabled" role="button" >Reboot PC [Delay 80ms]</a>
        <a href="#" target="_blank" class="btn btn-warning btn-xs" role="button" >Delete Cache</a>
        <a href="#" target="_blank" class="btn btn-primary btn-xs" role="button" >Cek Port Server</a>
        <a href="#" target="_blank" class="btn btn-danger btn-xs" role="button">IP Information</a>
      </p>
    </div>
    <div class="panel-footer">Admin Radio Panel</div>
  </div>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>

</body>
</html>
