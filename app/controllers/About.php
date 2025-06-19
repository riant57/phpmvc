<?php
class About extends Controller{

    public function index($nama = "Sandhika",$pekerjaan = "Dosen")
    {
        //echo "Halo nama saya $nama, saya seorang $pekerjaan";   
        $data['nama'] = $nama;
        $data['pekerjaan'] =  $pekerjaan;
        $data['judul'] = 'About me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        //echo "About/page";
        $data['judul'] = 'Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
?>