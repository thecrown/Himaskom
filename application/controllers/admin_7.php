<?php 
class Admin_7 extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->curent_bidang_user != 7){
            redirect ('login');
        }
        $this->load->model('admin');
        $this->load->helper('form');
    }
    public function index(){
        $data['sidebar7']="sidebar7";
        $data['main_dashboard']="main_dashboard";
        $this->load->view('index_admin',$data);
    }
    public function Beasiswa(){
        $data['sidebar7']="sidebar7";
        $data['view_beasiswa'] = "view_beasiswa";
        $data['beasiswa'] = $this->admin->beasiswa();
        $this->load->view('index_admin',$data); 
    }
    public function delete_beasiswa($id=null){
        $query = $this->admin->delete_beasiswa($id);
        if($query){
            $data['sidebar7']="sidebar7";
            $data['view_beasiswa'] = "view_beasiswa";
            $data['beasiswa'] = $this->admin->beasiswa();
            $this->load->view('index_admin',$data);
        }else{
            $data['sidebar7']="sidebar7";
            $data['view_beasiswa'] = "view_beasiswa";
            $data['beasiswa'] = $this->admin->beasiswa();
            $data['messages']="terdapat kesalahan ketika menghapus data";
            $this->load->view('index_admin',$data);
        }  
    }
    public function add_Beasiswa(){
        $data['sidebar7']="sidebar7";
        $data['add_beasiswa'] = "add_beasiswa";
        $this->load->view('index_admin',$data); 
    }
    public function verifikasi_beasiswa(){
        $this->form_validation->set_rules('Nama_beasiswa','Nama Beasiswa','required|trim|xss_clean');
        $this->form_validation->set_rules('Penerima','Penerima','required|trim|xss_clean');
        $this->form_validation->set_rules('Besar','Besar','numeric|required|trim|xss_clean');
        $this->form_validation->set_rules('Tahun','Tahun','required|trim|xss_clean');
        if($this->form_validation->run()==false){
            $data['sidebar7']="sidebar7";
            $data['add_beasiswa']="add_beasiswa";
            $this->load->view('index_admin',$data);
        }else{
            $query = $this->admin->add_beasiswa();
            
            if($query){
                $this->Beasiswa();
            }else{
                $data['sidebar7']="sidebar7";
                $data['add_beasiswa']="add_beasiswa";
                $data['message']="Ada Kesalahan Penyimpanan data";
                $this->load->view('index_admin',$data);
            }  
        }
    }
    public function update_beasiswa($id=null){
        $data['sidebar7']="sidebar7";
        $data['update_beasiswa']="update_beasiswa";
        $data['beasiswa']=$this->admin->get_update_beasiswa($id);
        $this->load->view('index_admin',$data);
    }
    public function verifikasi_update_beasiswa($id=null){
        $this->form_validation->set_rules('Nama_beasiswa','Nama Beasiswa','required|trim|xss_clean');
        $this->form_validation->set_rules('Penerima','Penerima','required|trim|xss_clean');
        $this->form_validation->set_rules('Besar','Besar','numeric|required|trim|xss_clean');
        $this->form_validation->set_rules('Tahun','Tahun','required|trim|xss_clean');
        if($this->form_validation->run()==false){
            $data['sidebar7']="sidebar7";
            $data['update_beasiswa']="update_beasiswa";
            $data['beasiswa']=$this->admin->get_update_beasiswa($id);
            $this->load->view('index_admin',$data);
        }else{
            $query = $this->admin->do_update_beasiswa($id);
            if($query){
                $this->Beasiswa();
            }else{
                $data['sidebar7']="sidebar7";
                $data['update_beasiswa']="update_beasiswa";
                $data['message']="Ada Kesalahan Pengupdatean data";
                $this->load->view('index_admin',$data);
            }  
        }
    }
}