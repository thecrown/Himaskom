<?php 
class Admin_1 extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->curent_bidang_user != 1){
            redirect ('login');
        }
    }
    public function index(){
        $data['sidebar']="sidebar";
        $data['main_dashboard']="main_dashboard";
        $this->load->view('index_admin',$data);

    }
    public function view_pkm(){
        $data['sidebar']="sidebar";
        $data['view_pkm']="view_pkm";
        $this->load->view('index_admin',$data);
    }
    public function view_banksoal(){
        $data['sidebar']="sidebar";
        $data['view_banksoal']="view_banksoal";
        $this->load->view('index_admin',$data);
    }
}