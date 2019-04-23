<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
  }

  function index(){
    $this->load->view('v_dashboard');
  }

  function control_radio(){
  // function ini hanya boleh diakses oleh admin dan dosen
  if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
    $this->load->view('v_radio_control');
  }else{
    echo "Anda tidak berhak mengakses halaman ini";
  }

  }

  function user_manager(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->model("model_data");
      $data['list_karyawan'] = $this->model_data->load_karyawan();
      $this->load->view('v_user_manager',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function add(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->model("model_data");
      $data['tipe'] = "Add";

      if(isset($_POST['tombol_submit'])){
        //proses simpan dilakukan
        $this->model_data->simpan($_POST);
        redirect("data");
    }

    $this->load->view("form_karyawan",$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
        
  }

  function input_nilai(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->view('v_input_nilai');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function krs(){
    // function ini hanya boleh diakses oleh admin dan mahasiswa
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
      $this->load->view('v_krs');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
  function lhs(){
    // function ini hanya boleh diakses oleh admin dan mahasiswa
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
      $this->load->view('v_lhs');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}
