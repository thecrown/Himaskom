<?php 
class Admin_3 extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->curent_bidang_user != 3){
            redirect ('login');
        }
        $this->load->model('admin');
        $this->load->library('form_validation');
    }
    public function index(){
        $data['sidebar3']="sidebar3";
        $data['main_dashboard']="main_dashboard";
        $this->load->view('index_admin',$data);
    }
    public function wirausaha(){
        $data['sidebar3']="sidebar3";
        $data['view_wirausaha']="view_wirausaha";
        $data['wirausaha']=$this->admin->wirausaha();
        $this->load->view('index_admin',$data);
    }
    public function delete_wirausaha($id=null){
        $result = $this->admin->delete_wirausaha($id);
        if($result){
            $data['sidebar3']="sidebar3";
            $data['view_wirausaha']="view_wirausaha";
            $data['wirausaha']=$this->admin->wirausaha();
            $this->load->view('index_admin',$data);
        }else{
            $data['sidebar3']="sidebar3";
            $data['view_wirausaha']="view_wirausaha";
            $data['message']="ada kesalahan penghapusan data";
            $data['wirausaha']=$this->admin->wirausaha();
            $this->load->view('index_admin',$data);
        }
    }
    public function add_wirausaha(){
        $data['sidebar3']="sidebar3";
        $data['add_wirausaha']="add_wirausaha";
        $this->load->view('index_admin',$data);
    }
    public function verifikasi_wirausaha(){
        $this->form_validation->set_rules('Nama_wirausahawan','Nama Wirausaha','required|trim|xss_clean');
        $this->form_validation->set_rules('Jenis','Jenis','required|trim|xss_clean');
        $this->form_validation->set_rules('Lokasi','Alamat / Lokasi','required|trim|xss_clean');
        $this->form_validation->set_rules('Tahun','Tahun','required|trim|xss_clean');
        if($this->form_validation->run()==false){
            $data['sidebar3']="sidebar3";
            $data['add_wirausaha']="add_wirausaha";
            $this->load->view('index_admin',$data);
        }else{
            $query = $this->admin->add_wirausaha();
            
            if($query){
                $data['sidebar3']="sidebar3";
                $data['view_wirausaha']="view_wirausaha";
                $data['wirausaha']=$this->admin->wirausaha();
                $this->load->view('index_admin',$data);
            }else{
                $data['sidebar3']="sidebar3";
                $data['view_wirausaha']="view_wirausaha";
                $data['message']="Ada Kesalahan Penyimpanan data";
                $data['wirausaha']=$this->admin->wirausaha();
                $this->load->view('index_admin',$data);
            }  
        }
    }
    public function update_wirausaha($id=null){
        $data['sidebar3']="sidebar3";
        $data['wirausaha']=$this->admin->get_update_wirausaha($id);
        $data['update_wirausaha']="update_wirausaha";
        $this->load->view('index_admin',$data);
    }
    public function verifikasi_wirausaha_update($id=null){
        $this->form_validation->set_rules('Nama_wirausahawan','Nama Wirausaha','required|trim|xss_clean');
        $this->form_validation->set_rules('Jenis','Jenis','required|trim|xss_clean');
        $this->form_validation->set_rules('Lokasi','Alamat / Lokasi','required|trim|xss_clean');
        $this->form_validation->set_rules('Tahun','Tahun','required|trim|xss_clean');
        if($this->form_validation->run()==false){
            $data['sidebar3']="sidebar3";
            $data['wirausaha']=$this->admin->get_update_wirausaha($id);
            $data['update_wirausaha']="update_wirausaha";
            $this->load->view('index_admin',$data);
        }else{
            $query = $this->admin->update_wirausaha($id);
            
            if($query){
                $this->wirausaha();
            }else{
                $data['sidebar3']="sidebar3";
                $data['view_wirausaha']="view_wirausaha";
                $data['message']="Ada Kesalahan Penyimpanan data";
                $data['wirausaha']=$this->admin->wirausaha();
                $this->load->view('index_admin',$data);
            }  
        }
    }
}