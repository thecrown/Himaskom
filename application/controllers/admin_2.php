<?php 
class Admin_2 extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->curent_bidang_user != 2){
            redirect ('login');
        }
        $this->load->model('admin');
        $this->load->library('form_validation');
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
    public function add_sponsor(){
        $data['sidebar2']="sidebar2";
        $data['add_sponsor']="add_sponsor";
        $this->load->view('index_admin',$data);
    }

    public function verifikasi_sponsor(){
        $this->form_validation->set_rules('nama','Nama','required|trim|xss_clean');
        $this->form_validation->set_rules('alamat','Alamat','required|trim|xss_clean');
        $this->form_validation->set_rules('keterangan','Keterangan','required|trim|xss_clean');
        if($this->form_validation->run()==false){
            $data['sidebar2']="sidebar2";
            $data['add_sponsor']="add_sponsor";
            $this->load->view('index_admin',$data);
        }else{
            $query = $this->admin->add_sponsor();
            
            if($query){
                $data['sidebar2']="sidebar2";
                $data['view_sponsor']="view_sponsor";
                $data['sponsor']=$this->admin->sponsor();
                $this->load->view('index_admin',$data);
            }else{
                $data['sidebar2']="sidebar2";
                $data['view_sponsor']="view_sponsor";
                $data['message']="Ada Kesalahan Penyimpanan data";
                $data['sponsor']=$this->admin->sponsor();
                $this->load->view('index_admin',$data);
            }  
        }
    }
    public function show_alumni(){}
}