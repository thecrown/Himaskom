<?php 
class Admin_8 extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->curent_bidang_user != 8){
            redirect ('login');
        }
        $this->load->model('admin');
        $this->load->helper('form');
    }
    public function index(){
        $data['sidebar8']="sidebar8";
        $data['main_dashboard']="main_dashboard";
        $this->load->view('index_admin',$data);
    }
    public function Mahasiswa(){
        $data['sidebar8']="sidebar8";
        $data['view_mahasiswa']="view_mahasiswa";
        $data['mahasiswa']=$this->admin->mahasiswa();
        $this->load->view('index_admin',$data);
    }
    public function add_mahasiswa(){
        $data['sidebar8']="sidebar8";
        $data['add_mahasiswa']="add_mahasiswa";
        $this->load->view('index_admin',$data);
    }
    public function verifikasi_mahasiswa(){
        $this->form_validation->set_rules('Nama','Nama','required|trim|xss_clean');
        $this->form_validation->set_rules('Jalur_Masuk','Jalur Masuk','required|trim|xss_clean');
        $this->form_validation->set_rules('Alamat_kos','Alamat Kos','max_length[60]|required|trim|xss_clean');
        $this->form_validation->set_rules('No_hp','No Hp','numeric|required|trim|xss_clean');
        $this->form_validation->set_rules('Email','Email','valid_email|required|trim|xss_clean');
        $this->form_validation->set_rules('Alamat_Rumah','Alamat Rumah','max_length[60]required|trim|xss_clean');
        $this->form_validation->set_rules('Keterangan','Keterangan','max_length[100]required|trim|xss_clean');
        if($this->form_validation->run()==false){
            $data['sidebar8']="sidebar8";
            $data['add_mahasiswa']="add_mahasiswa";
            $this->load->view('index_admin',$data);
        }else{
            $query = $this->admin->add_mahasiswa();
            
            if($query){
                $this->Mahasiswa();
            }else{
                $data['sidebar8']="sidebar8";
                $data['add_mahasiswa']="add_mahasiswa";
                $data['message']="Ada Kesalahan Penyimpanan data";
                $this->load->view('index_admin',$data);
            }  
        }
    }
    public function delete_mahasiswa($id=null){
        $query = $this->admin->delete_mahasiswa($id);
        if($query){
            $this->Mahasiswa();
        }else{
            $data['sidebar8']="sidebar8";
            $data['view_mahasiswa']="view_mahasiswa";
            $data['message']="Ada Kesalahan Penghapusan data";
            $this->load->view('index_admin',$data);
        }
    }
    public function update_mahasiswa($id=null){
        $data['sidebar8']="sidebar8";
        $data['update_mahasiswa']="update_mahasiswa";
        $data['mahasiswa']=$this->admin->get_mahasiswa($id);
        $this->load->view('index_admin',$data);
    }
    public function verifikasi_update_mahasiswa($id=null){
        $this->form_validation->set_rules('Nama','Nama','required|trim|xss_clean');
        $this->form_validation->set_rules('Jalur_Masuk','Jalur Masuk','required|trim|xss_clean');
        $this->form_validation->set_rules('Alamat_kos','Alamat Kos','max_length[60]|required|trim|xss_clean');
        $this->form_validation->set_rules('No_hp','No Hp','numeric|required|trim|xss_clean');
        $this->form_validation->set_rules('Email','Email','valid_email|required|trim|xss_clean');
        $this->form_validation->set_rules('Alamat_Rumah','Alamat Rumah','max_length[60]required|trim|xss_clean');
        $this->form_validation->set_rules('Keterangan','Keterangan','max_length[100]required|trim|xss_clean');
        if($this->form_validation->run()==false){
            $data['sidebar8']="sidebar8";
            $data['update_mahasiswa']="update_mahasiswa";
            $data['mahasiswa']=$this->admin->get_mahasiswa($id);
            $this->load->view('index_admin',$data);
        }else{
            $query = $this->admin->do_update_mahasiswa($id);
            
            if($query){
                $this->Mahasiswa();
            }else{
                $data['sidebar8']="sidebar8";
                $data['update_mahasiswa']="update_mahasiswa";
                $data['mahasiswa']=$this->admin->get_mahasiswa($id);
                $data['message']="Ada Kesalahan Penyimpanan data";
                $this->load->view('index_admin',$data);
            }  
        }
    }
}