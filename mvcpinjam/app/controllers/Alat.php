<?php

class Alat extends Controller{

    public function index(){
        $data['page'] = 'Data Alat';
        $data['alat'] = $this->model('AlatModel')->getAllAlat();
        $this->view('templates/header',$data);
        // jaga-jaga
        $this->view('alat/index',$data);
        $this->view('templates/footer');
    }

    public function tambah(){
        $data['page'] = 'Tambah Alat';
        $this->view('templates/header',$data);
        // jaga-jaga
        $this->view('alat/create');
        $this->view('templates/footer');
    }

    public function simpanAlat()
    {
        // print_r($_POST);
        if( $this->model('AlatModel')->tambahAlat($_POST) > 0)
        {
            header('location: '.BASE_URL. 'alat/index');
            exit;
        }
        else{
            header('location: '.BASE_URL. 'alat/index');
            exit;
        }

    }
    public function edit($id){
        $data['page'] = 'Edit Alat';
        $data['alat'] = $this->model('AlatModel')->getAlatById($id);
        // Tambahkan kode untuk menampilkan pesan kesalahan jika diperlukan
        if (isset($_SESSION['error_message'])) {
            $data['error_message'] = $_SESSION['error_message'];
            unset($_SESSION['error_message']);
        }
        $this->view('templates/header',$data);
        // jaga-jaga
        $this->view('alat/edit',$data);
        $this->view('templates/footer');

    }
    
    
    public function updateAlat()
    {
        $data['tgl_kembali'] = $_POST['tgl_kembali'];
        $data['tgl_pinjam'] = $_POST['tgl_pinjam'];
    
        $model = $this->model('AlatModel');
    
        // untuk memvalidasi tanggal
        if ($model->tanggalLewat($data)) {
            if ($model->updateDataAlat($_POST) > 0) {
                header('location: '.BASE_URL. 'alat/index');
                exit;
            } else {
                header('location: '.BASE_URL. 'alat/index');
                exit;
            }
        } else {
            $this->edit($_POST['id']);
            echo "<h2 class='mb-3' style='display:flex;justify-content:center;margin:20px 0px;color:red;'>Anda Gagal Mengupdate (Tanggal harus sesudah waktu Meminjam)</h2>";
            // untuk menampilkan jika Tanggal kembali tidak lebih besar dari tanggal pinjam
        }
    }
    
    public function hapus($id)
    {
        if( $this->model('AlatModel')->deleteAlat($id) > 0)
        {
            header('location: '.BASE_URL. 'alat/index');
            exit;
        }
        else{
            header('location: '.BASE_URL. 'alat/index');
            exit;
        }

    }
    public function cari(){

        $data['page'] = 'Data Alat';
        $data['alat'] = $this->model('AlatModel')->cariAlat($_POST['search']);
        $this->view('templates/header',$data);
        // jaga-jaga
        $this->view('alat/index',$data);
        $this->view('templates/footer');
    }
}


?>