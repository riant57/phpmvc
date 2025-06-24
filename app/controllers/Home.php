<?php
class Home extends Controller{
    public function index()
    {
        //echo "home/index";
        $data['judul'] = 'Home';
        $data['nama']  = $this->model('User_model')->getUser();
        //print_r($data); exit;
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
?>