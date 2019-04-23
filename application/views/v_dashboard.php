<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
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
      Selamat Datang 
      <small class="text-muted"><?php echo $this->session->userdata('ses_nama');?> !</small>
    </h3>              
    
    <div class="container">
      <div class="row">
        <div class="col-4 bg-primary rounded">
          <span>&nbsp;</span>
          <p><strong>Informasi Penting !</strong></p>
          <p>Berikut merupakan fitur yang tersedia di server ini :</p>
          <div class="text-center">
            <ul class="list-group">
              <li class="list-group-item list-group-item-info">Radio Online</li>
              <li class="list-group-item list-group-item-warning">Menu Manager</li>
              <li class="list-group-item list-group-item-success">User Manager</li>
              <li class="list-group-item list-group-item-danger">Data Listener</li>
            </ul>
          </div>
        </div>
        <div class="col-8 bg-success">
          <span>&nbsp;</span>
          <p class="justify-content-center"><strong>A</strong>nda dapat masuk kehalaman tersebut dengan menggunakan menu bagian atas. 
          dan adapun server yang sedang kita gunakan adalah XAMPP dan Laragon. Masing-masing memiliki
          kelebihan dan kekurangan. Namun menurut kami laragon lebih lengkap dan lebih mudah</p>
        </div>
      </div>
      
    </div>
  </div>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>

</body>
</html>
