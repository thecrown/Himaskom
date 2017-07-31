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
    //Sponsor
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
    public function update_sponsor($id){
        $data['sidebar2']="sidebar2";
        $data['update_sponsor']="update_sponsor";
        $data['sponsor']=$this->admin->get_update_sponsor($id);
        $this->load->view('index_admin',$data);
    }
    public function verifikasi_update($id){
        $this->form_validation->set_rules('nama','Nama','required|trim|xss_clean');
        $this->form_validation->set_rules('alamat','Alamat','required|trim|xss_clean');
        $this->form_validation->set_rules('keterangan','Keterangan','required|trim|xss_clean');
        if($this->form_validation->run()==false){
            $data['sidebar2']="sidebar2";
            $data['update_sponsor']="update_sponsor";
            $data['sponsor']=$this->admin->get_update_sponsor($id);
            $this->load->view('index_admin',$data);
        }else{
            $query = $this->admin->update_sponsor($id);
            
            if($query){
                $this->show_sponsor();
            }else{
                $data['sidebar2']="sidebar2";
                $data['view_sponsor']="view_sponsor";
                $data['message']="Ada Kesalahan Penyimpanan data";
                $data['sponsor']=$this->admin->sponsor();
                $this->load->view('index_admin',$data);
            }  
        }
    }
    //Alumni
    public function show_alumni(){
        $data['sidebar2']="sidebar2";
        $data['view_alumni']="show_alumni";
        $data['alumni']=$this->admin->alumni();
        $this->load->view('index_admin',$data);
    }
    public function delete_alumni($id){
        $result = $this->admin->delete_alumni($id);
        if($result){
            $data['sidebar2']="sidebar2";
            $data['view_alumni']="show_alumni";
            $data['alumni']=$this->admin->alumni();
            $data['message']="data alumni berhasil dihapus";
            $this->load->view('index_admin',$data);
        }else{
            $data['sidebar2']="sidebar2";
            $data['view_alumni']="show_alumni";
            $data['alumni']=$this->admin->alumni();
            $data['message']="data alumni gagal dihapus";
            $this->load->view('index_admin',$data);
        }
    }
    public function add_alumni(){
        $data['sidebar2']="sidebar2";
        $data['add_alumni']="add_alumni";
        $this->load->view('index_admin',$data);
    }
    public function verifikasi_alumni(){
        $this->form_validation->set_rules('Nama','Nama','required|trim|xss_clean');
        $this->form_validation->set_rules('NIM','Alamat','required|trim|xss_clean');
        $this->form_validation->set_rules('Angkatan','Angkatan','required|trim|xss_clean');
        $this->form_validation->set_rules('Pekerjaan','Pekerjaan','required|trim|xss_clean');
        $this->form_validation->set_rules('Alamat','Alamat','required|trim|xss_clean');
        if($this->form_validation->run()==false){
            $data['sidebar2']="sidebar2";
            $data['add_alumni']="add_alumni";
            $this->load->view('index_admin',$data);
        }else{
            $query = $this->admin->add_alumni();
            
            if($query){
                $this->show_alumni();
            }else{
                $data['sidebar2']="sidebar2";
                $data['view_alumni']="view_alumni";
                $data['message']="Ada Kesalahan Penyimpanan data";
                $this->load->view('index_admin',$data);
            }  
        }
    }
    public function update_alumni($id=null){
        $data['sidebar2']="sidebar2";
        $data['update_alumni']="update_alumni";
        $data['alumni']=$this->admin->get_update_alumni($id);
        $this->load->view('index_admin',$data);
    }
    public function verifikasi_update_alumni($id){
        $this->form_validation->set_rules('Nama','Nama','required|trim|xss_clean');
        $this->form_validation->set_rules('NIM','Alamat','required|trim|xss_clean');
        $this->form_validation->set_rules('Angkatan','Angkatan','required|trim|xss_clean');
        $this->form_validation->set_rules('Pekerjaan','Pekerjaan','required|trim|xss_clean');
        $this->form_validation->set_rules('Alamat','Alamat','required|trim|xss_clean');
        if($this->form_validation->run()==false){
            $data['sidebar2']="sidebar2";
            $data['update_alumni']="update_alumni";
            $data['alumni']=$this->admin->get_update_alumni($id);
            $this->load->view('index_admin',$data);
        }else{
            $query = $this->admin->alumni_update($id);
            
            if($query){
                $this->show_alumni();
            }else{
                $data['sidebar2']="sidebar2";
                $data['view_alumni']="view_alumni";
                $data['message']="Ada Kesalahan Update data";
                $this->load->view('index_admin',$data);
            }  
        }
    }
}