<?php 
class Admin_5 extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->curent_bidang_user != 5){
            redirect ('login');
        }
        $this->load->model('admin');
    }
    public function index(){
        $data['main_dashboard']="main_dashboard";
        $data['sidebar5']="sidebar5";
        $this->load->view('index_admin',$data);
    }
    public function surat(){
        $data['view_surat']="view_surat";
        $data['sidebar5']="sidebar5";
        $data['surat']=$this->admin->surat();
        $this->load->view('index_admin',$data);
    }
    public function delete_surat($id=null){
        $query = $this->admin->delete_surat($id);
        if($query){
            $data['view_surat']="view_surat";
            $data['sidebar5']="sidebar5";
            $data['surat']=$this->admin->surat();
            $this->load->view('index_admin',$data);
        }else{
            $data['view_surat']="view_surat";
            $data['sidebar5']="sidebar5";
            $data['message']="terjadi kesalahan ketika penghapusan data";
            $data['surat']=$this->admin->surat();
            $this->load->view('index_admin',$data); 
        }
    }
    public function add_surat(){
        $data['add_surat']="add_surat";
        $data['sidebar5']="sidebar5";
        $this->load->view('index_admin',$data);
    }
    public function verifikasi_surat(){
        $this->form_validation->set_rules('judul_surat','Judul Surat','required|trim|xss_clean');
        $this->form_validation->set_rules('tanggal','Tanggal','required|trim|xss_clean');
        $this->form_validation->set_rules('keterangan','Keterangan','required|trim|xss_clean');

        $judul_surat = $this->input->post('judul_surat');
        $tanggal = $this->input->post('tanggal');
        $keterangan = $this->input->post('keterangan');

        $config['upload_path'] = './assets/file/surat/';
   				$config['allowed_types'] = 'pdf|doc|xml|docx|PDF|DOC|XML|DOCX|xls|xlsx';
  				$config['max_size'] = 200048;
   				$config['file_name'] = url_title($judul_surat,'dash',TRUE);
				
                $this->upload->initialize($config);

                if($this->upload->do_upload('file_surat')){
					$upload_data = $this->upload->data(); 
  					$file_name = $upload_data['file_name'];
				}else{
					echo "gagal";
				}
        if($this->form_validation->run()==false){
            $data['add_surat']="add_surat";
            $data['sidebar5']="sidebar5";
            $this->load->view('index_admin',$data);
        }else{
                $data=array(
                'judul_surat'=>$judul_surat,
				'tanggal'=>$tanggal,
				'file_surat'=>$file_name,
				'keterangan'=>$keterangan,
                'Bidang_idBidang'=>5,
                'status_hapus'=>0
            	);
                $datas = $this->admin->insert_surat($data);
                if($datas){
                    $data['add_surat']="add_surat";
                    $data['sidebar5']="sidebar5";
                    $data['message']="Surat berhasil disimpan";
                    $this->load->view('index_admin',$data);
                }else{
                    $data['add_surat']="add_surat";
                    $data['sidebar5']="sidebar5";
                    $data['message']="data Surat gagal disimpan";
                    $this->load->view('index_admin',$data);
                }
        }

    }
    public function update_surat($id){
        $data['update_surat']="update_surat";
        $data['sidebar5']="sidebar5";
        $data['surat']=$this->admin->get_update_surat($id);
        $this->load->view('index_admin',$data);
    }
    public function verifikasi_update_surat($id){
        $this->form_validation->set_rules('judul_surat','Judul Surat','required|trim|xss_clean');
        $this->form_validation->set_rules('tanggal','Tanggal','required|trim|xss_clean');
        $this->form_validation->set_rules('keterangan','Keterangan','required|trim|xss_clean');

        $judul_surat = $this->input->post('judul_surat');
        $tanggal = $this->input->post('tanggal');
        $keterangan = $this->input->post('keterangan');

        $config['upload_path'] = './assets/file/surat/';
   		$config['allowed_types'] = 'pdf|doc|xml|docx|PDF|DOC|XML|DOCX|xls|xlsx';
  		$config['max_size'] = 200048;
   		$config['file_name'] = url_title($judul_surat,'dash',TRUE);
				
                $this->upload->initialize($config);

                if($this->upload->do_upload('file_surat')){
					$upload_data = $this->upload->data(); 
  					$file_name = $upload_data['file_name'];
				}else{
					echo "gagal";
				}
        if($this->form_validation->run()==false){
            $data['update_surat']="update_surat";
            $data['sidebar5']="sidebar5";
            $data['surat']=$this->admin->get_update_surat($id);
            $this->load->view('index_admin',$data);
        }else{
                $data=array(
                'judul_surat'=>$judul_surat,
				'tanggal'=>$tanggal,
				'file_surat'=>$file_name,
				'keterangan'=>$keterangan,
            	);

                $datas = $this->admin->do_update_surat($id,$data);
                if($datas){
                    $data['view_surat']="view_surat";
                    $data['sidebar5']="sidebar5";
                    $data['surat']=$this->admin->surat();
                    $data['message']="Surat berhasil diUpdate";
                    $this->load->view('index_admin',$data);
                }else{
                    $data['view_surat']="view_surat";
                    $data['sidebar5']="sidebar5";
                    $data['surat']=$this->admin->surat();
                    $data['message']="data Surat gagal diUpdate";
                    $this->load->view('index_admin',$data);
                }
        }
    }
    public function proposal(){
        $data['view_proposal']="view_proposal";
        $data['sidebar5']="sidebar5";
        $data['proposal']=$this->admin->proposal();
        $this->load->view('index_admin',$data);
    }
    public function add_proposal(){
        $data['add_proposal']="add_proposal";
        $data['sidebar5']="sidebar5";
        $this->load->view('index_admin',$data);
    }
    public function verifikasi_proposal(){
        $this->form_validation->set_rules('judul_proposal','Judul Proposal','required|trim|xss_clean');
        $this->form_validation->set_rules('no_proposal','No Proposal','required|trim|xss_clean');
        $this->form_validation->set_rules('idbidang','Bidang','required|trim|xss_clean');
        $this->form_validation->set_rules('keterangan','Keterangan','required|trim|xss_clean');

        $judul_proposal = $this->input->post('judul_proposal');
        $no_proposal = $this->input->post('no_proposal');
        $idbidang = $this->input->post('idbidang');
        $keterangan = $this->input->post('keterangan');

        $config['upload_path'] = './assets/file/proposal/';
   		$config['allowed_types'] = 'pdf|doc|xml|docx|PDF|DOC|XML|DOCX|xls|xlsx';
  		$config['max_size'] = 200048;
   		$config['file_name'] = url_title($judul_proposal,'dash',TRUE);
				
                $this->upload->initialize($config);

                if($this->upload->do_upload('file_proposal')){
					$upload_data = $this->upload->data(); 
  					$file_name = $upload_data['file_name'];
				}else{
					echo "gagal";
				}
        if($this->form_validation->run()==false){
            $data['add_proposal']="add_proposal";
            $data['sidebar5']="sidebar5";
            $this->load->view('index_admin',$data);
        }else{
                $data=array(
                'judul_proposal'=>$judul_proposal,
				'no_proposal'=>$no_proposal,
				'idbidang'=>$idbidang,
				'keterangan'=>$keterangan,
                'file_proposal'=>$file_name,
                'status_hapus'=>0,
                'Bidang_idBidang'=>5,
            	);

                $datas = $this->admin->insert_proposal($data);
                if($datas){
                    $data['view_proposal']="view_proposal";
                    $data['sidebar5']="sidebar5";
                    $data['proposal']=$this->admin->proposal();
                    $data['message']="Proposal berhasil disimpan";
                    $this->load->view('index_admin',$data);
                }else{
                    $data['view_proposal']="view_proposal";
                    $data['sidebar5']="sidebar5";
                    $data['proposal']=$this->admin->proposal();
                    $data['message']="Proposal gagal disimpan";
                    $this->load->view('index_admin',$data);
                }
        }
    }
    public function delete_proposal($id){
        $query = $this->admin->delete_proposal($id);
        if($query){
            $data['view_proposal']="view_proposal";
            $data['sidebar5']="sidebar5";
            $data['proposal']=$this->admin->proposal();
            $data['message']="Proposal berhasil dihapus";
            $this->load->view('index_admin',$data);
        }else{
            $data['view_proposal']="view_proposal";
            $data['sidebar5']="sidebar5";
            $data['proposal']=$this->admin->proposal();
            $data['message']="Proposal gagal dihapus";
            $this->load->view('index_admin',$data);
        }
    }
    public function update_proposal($id){
        $data['update_proposal']="update_proposal";
        $data['sidebar5']="sidebar5";
        $data['proposal']=$this->admin->get_update_proposal($id);
        $this->load->view('index_admin',$data);
    }
    public function verifikasi_update_proposal($id=null){
        $this->form_validation->set_rules('judul_proposal','Judul Proposal','required|trim|xss_clean');
        $this->form_validation->set_rules('no_proposal','No Proposal','required|trim|xss_clean');
        $this->form_validation->set_rules('idbidang','Bidang','required|trim|xss_clean');
        $this->form_validation->set_rules('keterangan','Keterangan','required|trim|xss_clean');

        $judul_proposal = $this->input->post('judul_proposal');
        $no_proposal = $this->input->post('no_proposal');
        $idbidang = $this->input->post('idbidang');
        $keterangan = $this->input->post('keterangan');

        $config['upload_path'] = './assets/file/proposal/';
   		$config['allowed_types'] = 'pdf|doc|xml|docx|PDF|DOC|XML|DOCX|xls|xlsx';
  		$config['max_size'] = 200048;
   		$config['file_name'] = url_title($judul_proposal,'dash',TRUE);
				
                $this->upload->initialize($config);

                if($this->upload->do_upload('file_proposal')){
					$upload_data = $this->upload->data(); 
  					$file_name = $upload_data['file_name'];
				}else{
					echo "gagal";
				}
        if($this->form_validation->run()==false){
            $data['update_proposal']="update_proposal";
            $data['sidebar5']="sidebar5";
            $data['proposal']=$this->admin->get_update_proposal($id);
            $this->load->view('index_admin',$data);
        }else{
                $data=array(
                'judul_proposal'=>$judul_proposal,
				'no_proposal'=>$no_proposal,
				'idbidang'=>$idbidang,
				'keterangan'=>$keterangan,
                'file_proposal'=>$file_name,
            	);

                $datas = $this->admin->do_update_proposal($id,$data);
                if($datas){
                    $this->proposal();
                }else{
                    $data['update_proposal']="update_proposal";
                    $data['sidebar5']="sidebar5";
                    $data['proposal']=$this->admin->get_update_proposal($id);
                    $data['message']="Proposal gagal diupdate";
                    $this->load->view('index_admin',$data);
                }
        }

    }
}