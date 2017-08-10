<?php 
class Admin_4 extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->curent_bidang_user != 4){
            redirect ('login');
        }
        $this->load->model('admin');
    }
    public function index(){
        $data['main_dashboard']="main_dashboard";
        $data['sidebar4']="sidebar4";
        $this->load->view('index_admin',$data);
    }
    public function anggota(){
        $data['sidebar4']="sidebar4";
        $data['view_anggota']="view_anggota";
        $data['anggota']=$this->admin->anggota();
        $this->load->view('index_admin',$data);
    }
    public function add_Anggota(){
        $data['sidebar4']="sidebar4";
        $data['add_Anggota']="add_Anggota";
        $this->load->view('index_admin',$data);
    }
    public function verifikasi_anggota_pengurus(){
        $this->form_validation->set_rules('nama','Nama Staff','alpha|required|trim|xss_clean|max_length[50]');
        $this->form_validation->set_rules('Penilaian','Penilaian','numeric|required|trim|xss_clean|max_length[3]');
        $this->form_validation->set_rules('Alamat','Alamat','required|trim|xss_clean|max_length[100]');
        $this->form_validation->set_rules('bidang','Bidang','required|trim|xss_clean');
        $this->form_validation->set_rules('Keterangan','Keterangan','required|trim|xss_clean|max_length[200]');

        if($this->form_validation->run()==false){
            $data['add_anggota']="add_anggota";
            $data['sidebar4']="sidebar4";
            $this->load->view('index_admin',$data);
        }else{
            $query = $this->admin->add_anggota();
            if($query){
                $this->anggota();
            }else{
                $data['add_anggota']="add_anggota";
                $data['sidebar4']="sidebar4";
                $data['messages']="terdapat kesalahan penyimpanan data";
                $this->load->view('index_admin',$data);
            }
        }
    }
    public function delete_anggota($id=null){
        $query = $this->admin->delete_anggota($id);
        if($query){
            $data['sidebar4']="sidebar4";
            $data['view_anggota']="view_anggota";
            $data['anggota']=$this->admin->anggota();
            $this->load->view('index_admin',$data);
        }else{
            $data['sidebar4']="sidebar4";
            $data['view_anggota']="view_anggota";
            $data['messages']="terdapat kesalahan penghapusan data";
            $this->load->view('index_admin',$data);
        }
    }
    public function update_anggota($id=null){
        $data['sidebar4']="sidebar4";
        $data['update_anggota']="update_anggota";
        $data['anggota']=$this->admin->get_anggota($id);
        $this->load->view('index_admin',$data);
    }
    public function verifikasi_update_anggota_pengurus($id){
        $this->form_validation->set_rules('nama','Nama Staff','alpha|required|trim|xss_clean|max_length[50]');
        $this->form_validation->set_rules('Penilaian','Penilaian','numeric|required|trim|xss_clean|max_length[3]');
        $this->form_validation->set_rules('Alamat','Alamat','required|trim|xss_clean|max_length[100]');
        $this->form_validation->set_rules('bidang','Bidang','required|trim|xss_clean');
        $this->form_validation->set_rules('Keterangan','Keterangan','required|trim|xss_clean|max_length[200]');

        if($this->form_validation->run()==false){
            $data['sidebar4']="sidebar4";
            $data['update_anggota']="update_anggota";
            $data['anggota']=$this->admin->get_anggota($id);
            $this->load->view('index_admin',$data);
        }else{
            $query = $this->admin->do_update($id);
            if($query){
                $this->anggota();
            }else{
                $data['update_anggota']="update_anggota";
                $data['sidebar4']="sidebar4";
                $data['messages']="terdapat kesalahan penyimpanan data";
                $this->load->view('index_admin',$data);
            }
        }
    }
}