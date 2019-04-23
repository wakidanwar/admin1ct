<!DOCTYPE html>
<html>
<head>
  <title>Data Mahasiswa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Produk By Mfikri.com">
  <meta name="author" content="M Fikri Setiadi">
  <!-- Bootstrap -->
  <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">


</head>
<body>
  <?php $this->load->view('menu');?> <!--Include menu-->

    <div class="container">
  <h1>Latihan CRUD</h1>

  <a href="data/add" class="btn btn-primary">Tambah Data Karyawan</a>

  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Nama Karyawan</th>
        <th>Alamat</th>
        <th>Email</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <!-- ISI DATA AKAN MUNCUL DISINI -->
      <?php
      $no = 1; //untuk menampilkan no
      foreach($list_karyawan as $row){
        echo "
        <tr>
          <td>$no</td>
          <td>$row[name]</td>
          <td>$row[alamat]</td>
          <td>$row[email]</td>
          <td>
            <a href='data/edit/$row[id]' class='btn btn-sm btn-info'>Update</a>
            <a href='data/delete/$row[id]' class='btn btn-sm btn-danger'>Hapus</a>
          </td>
        </tr>
        ";
        $no++;
      }
      ?>
    </tbody>
  </table>
</div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>

</body>
</html>
