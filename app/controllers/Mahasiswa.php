<?php 
class Mahasiswa extends Controller{
    public function index()
    {
        $data['judul'] = "Daftar Mahasiswa";
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        //print_r($data);exit;
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }
    public function detail($id)
    {
        //echo $id;
        $data['judul'] = "Detail Mahasiswa";
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        //print_r($data);exit;
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        //var_dump($_POST);
        if($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0){
            Flasher::setFlash('berhasil','ditambahkan','success');
            header('Location:' .BASEURL.'/Mahasiswa');
            exit;
        }else{
            Flasher::setFlash('gagal','ditambahkan','danger');
            header('Location:' .BASEURL.'/Mahasiswa');
            exit;
        }
    }
    public function hapus($id)
    {
        //var_dump($_POST);
        if($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0){
            Flasher::setFlash('berhasil','dihapus','success');
            header('Location:' .BASEURL.'/Mahasiswa');
            exit;
        }else{
            Flasher::setFlash('gagal','dihapus','danger');
            header('Location:' .BASEURL.'/Mahasiswa');
            exit;
        }
    }
}



?>