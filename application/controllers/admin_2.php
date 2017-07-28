<?php 
class Admin_2 extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->curent_bidang_user != 2){
            redirect ('login');
        }
        $this->load->model('admin');
    }
    public function index(){
        $data['sidebar2']="sidebar2";
        $data['main_dashboard']="main_dashboard";
        $this->load->view('index_admin',$data);
    }
    public function show_sponsor(){
        $data['sidebar2']="sidebar2";
        $data['view_sponsor']="view_sponsor";
        $data['sponsor']=$this->admin->sponsor();
        $this->load->view('index_admin',$data);
    }
    public function delete_sponsor($id=null){
        $query = $this->admin->delete_sponsor($id);
        if($query){
        $data['sidebar2']="sidebar2";
        $data['view_sponsor']="view_sponsor";
        $data['message']="Data Sponsor Berhasil Dihapus";
        $data['sponsor']=$this->admin->sponsor();
        $this->load->view('index_admin',$data);
        }else{
        $data['sidebar2']="sidebar2";
        $data['view_sponsor']="view_sponsor";
        $data['sponsor']=$this->admin->sponsor();
        $data['message']="Data Sponsor Gagal Dihapus";
        $this->load->view('index_admin',$data);    
        }
    }
    public function show_alumni(){}
}