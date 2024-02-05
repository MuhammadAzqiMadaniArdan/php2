<?php

class Home extends Controller{
    public function index(){
        $data['nama_peminjam'] = 'Home';
        $this->view(
            'templates/header',$data
        );
        $this->view(
            'home/index'
        );
        $this->view(
            'templates/footer'
        );

    }

    public function page(){
        $data['nama_peminjam'] = 'Page';
        $data['gambar'] = 'c.jfif';
        $data['nama'] = 'azqi';
        $data['pekerjaan'] = 'Pelajar';
        $this->view(
            'templates/header',$data
        );
        $this->view(
            'home/page',$data
        );
        $this->view(
            'templates/footer'
        );
    }
}




?>