<?php 
class Admin_1 extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->curent_bidang_user != 1){
            redirect ('login');
        }
        $this->load->library('upload');
        $this->load->model('admin');
        $this->load->helper('form');
    }
    public function index(){
        $data['sidebar']="sidebar";
        $data['main_dashboard']="main_dashboard";
        $this->load->view('index_admin',$data);
    }
    public function view_pkm(){
        $data['sidebar']="sidebar";
        $data['PKM']= $this->admin->view_pkm();
        $data['view_pkm']="view_pkm";
        $this->load->view('index_admin',$data);
    }
    public function add_pkm(){
        $data['sidebar']="sidebar";
        $data['add_pkm']="add_pkm";
        $this->load->view('index_admin',$data);
    }
    public function verifikasi_PKM(){
        $this->form_validation->set_rules('judul','Judul PKM','xss_clean|trim|required');
        $this->form_validation->set_rules('penulis','Penulis','xss_clean|trim|required');
        $this->form_validation->set_rules('jenis','Jenis PKM','xss_clean|trim|required');
        $this->form_validation->set_rules('date','Date','xss_clean|trim|required');
        
        $judul_pkm = $this->input->post('judul');
        $penulis = $this->input->post('penulis');
        $jenis = $this->input->post('jenis');
        $date = $this->input->post('date');
        
                $config['upload_path'] = './assets/file/pkm/';
   				$config['allowed_types'] = 'pdf|doc|xml|docx|PDF|DOC|XML|DOCX|xls|xlsx';
  				$config['max_size'] = 200048;

   				$config['file_name'] = url_title($judul_pkm,'dash',TRUE);
				
                $this->upload->initialize($config);

                if($this->upload->do_upload('file_pkm')){
					$upload_data = $this->upload->data(); 
  					$file_name = $upload_data['file_name'];
				}else{
					echo "gagal";
				}

        if($this->form_validation->run()==false){
            $data['sidebar']="sidebar";
            $data['add_pkm']="add_pkm";
            $this->load->view('index_admin',$data);
        }else{
                $data=array(
                'judul_pkm'=>$judul_pkm,
				'Penulis'=>$penulis,
				'Jenis'=>$jenis,
				'Tahun'=>$date,
				'File'=>$file_name,
                'Bidang_idBidang'=>1,
                'status_hapus'=>0
            	);
                $datas = $this->admin->insert_pkm($data);
                if($datas){
                    $data['sidebar']="sidebar";
                    $data['add_pkm']="add_pkm";
                    $data['message']="PKM berhasil disimpan";
                    $this->load->view('index_admin',$data);
                }else{
                    $data['sidebar']="sidebar";
                    $data['add_pkm']="add_pkm";
                    $data['message']="data PKM gagal disimpan";
                    $this->load->view('index_admin',$data);
                }
        }
    }
    public function view_banksoal(){
        $data['sidebar']="sidebar";
        $data['view_banksoal']="view_banksoal";
        $this->load->view('index_admin',$data);
    }
    public function delete_pkm($id=null){
        $query = $this->admin->delete($id);
        if($query){
            $data['sidebar']="sidebar";
            $data['PKM']= $this->admin->view_pkm();
            $data['view_pkm']="view_pkm";
            $data['message']="PKM berhasil dihapus";
            $this->load->view('index_admin',$data);
        }else{
            $data['sidebar']="sidebar";
            $data['PKM']= $this->admin->view_pkm();
            $data['view_pkm']="view_pkm";
            $data['message']="terdapat kesalahan penghapusan data";
            $this->load->view('index_admin',$data);
        }
    }
    public function update($id=null){
        $data['sidebar']="sidebar";
        $data['update_pkm']="update_pkm";
        $data['PKM']=$this->admin->get_update($id);
        $this->load->view('index_admin',$data);
    }
    public function do_update($id){
        $this->form_validation->set_rules('judul','Judul PKM','xss_clean|trim|required');
        $this->form_validation->set_rules('penulis','Penulis','xss_clean|trim|required');
        $this->form_validation->set_rules('jenis','Jenis PKM','xss_clean|trim|required');
        $this->form_validation->set_rules('date','Date','xss_clean|trim|required');
        
        $judul_pkm = $this->input->post('judul');
        $penulis = $this->input->post('penulis');
        $jenis = $this->input->post('jenis');
        $date = $this->input->post('date');
        
                $config['upload_path'] = './assets/file/pkm/';
   				$config['allowed_types'] = 'pdf|doc|xml|docx|PDF|DOC|XML|DOCX|xls|xlsx';
  				$config['max_size'] = 200048;

   				$config['file_name'] = url_title($judul_pkm,'dash',TRUE);
				
                $this->upload->initialize($config);

                if($this->upload->do_upload('file_pkm')){
					$upload_data = $this->upload->data(); 
  					$file_name = $upload_data['file_name'];
				}else{
					echo "gagal";
				}

        if($this->form_validation->run()==false){
            $data['sidebar']="sidebar";
            $data['update_pkm']="update_pkm";
            $data['PKM']=$this->admin->get_update($id);
            $this->load->view('index_admin',$data);
        }else{
                $data=array(
                'judul_pkm'=>$judul_pkm,
				'Penulis'=>$penulis,
				'Jenis'=>$jenis,
				'Tahun'=>$date,
				'File'=>$file_name,
                'Bidang_idBidang'=>1
            	);
                $datas = $this->admin->update_pkm($id,$data);
                if($datas){
                    $data['sidebar']="sidebar";
                    $data['view_pkm']="view_pkm";
                    $data['PKM']= $this->admin->view_pkm();
                    $data['message']="PKM berhasil diupdate";
                    $this->load->view('index_admin',$data);
                }else{
                    $data['sidebar']="sidebar";
                    $data['view_pkm']="view_pkm";
                    $data['PKM']= $this->admin->view_pkm();
                    $data['message']="data PKM gagal diupdate";
                    $this->load->view('index_admin',$data);
                }
        }
    }
    public function bank_soal(){
        $data['sidebar']="sidebar";
        $data['soal']=$this->admin->view_banksoal();
        $data['view_banksoal']="view_banksoal";
        $this->load->view('index_admin',$data);
    }
    public function add_soal(){
        $data['sidebar']="sidebar";
        $data['add_banksoal']="add_banksoal";
        $this->load->view('index_admin',$data);
    }
    public function verifikasi_BankSoal(){
        $this->form_validation->set_rules('matkul','Matkul','xss_clean|trim|required');
        $this->form_validation->set_rules('keterangan','Keterangan','xss_clean|trim|required');
        $this->form_validation->set_rules('date','Date','xss_clean|trim|required');
        
        $matkul = $this->input->post('matkul');
        $keterangan = $this->input->post('keterangan');
        $date = $this->input->post('date');
        
                $config['upload_path'] = './assets/file/banksoal/';
   				$config['allowed_types'] = 'pdf|doc|xml|docx|PDF|DOC|XML|DOCX|xls|xlsx';
  				$config['max_size'] = 200048;

   				$config['file_name'] = url_title($matkul,'dash',TRUE);
				
                $this->upload->initialize($config);

                if($this->upload->do_upload('file_soal')){
					$upload_data = $this->upload->data(); 
  					$file_name = $upload_data['file_name'];
				}else{
					echo "gagal";
				}

        if($this->form_validation->run()==false){
            $data['sidebar']="sidebar";
            $data['add_banksoal']="add_banksoal";
            $this->load->view('index_admin',$data);
        }else{
                $data=array(
                'matkul'=>$matkul,
				'Keterangan'=>$keterangan,
				'Tahun'=>$date,
				'File'=>$file_name,
                'Bidang_idBidang'=>1,
                'status_hapus'=>0
            	);
                $datas = $this->admin->insert_banksoal($data);
                if($datas){
                    $data['sidebar']="sidebar";
                    $data['add_banksoal']="add_banksoal";
                    $data['message']="Soal berhasil disimpan";
                    $this->load->view('index_admin',$data);
                }else{
                    $data['sidebar']="sidebar";
                    $data['add_banksoal']="add_banksoal";
                    $data['message']="data Soal gagal disimpan";
                    $this->load->view('index_admin',$data);
                }
        }
    }
    public function update_banksoal($id){
        $data['sidebar']="sidebar";
        $data['update_banksoal']="update_banksoal";
        $data['soal']=$this->admin->get_update_soal($id);
        $this->load->view('index_admin',$data); 
    }
    public function verifikasi_update($id){
        $this->form_validation->set_rules('matkul','Matkul','xss_clean|trim|required');
        $this->form_validation->set_rules('keterangan','Keterangan','xss_clean|trim|required');
        $this->form_validation->set_rules('date','Date','xss_clean|trim|required');
        
        $matkul = $this->input->post('matkul');
        $keterangan = $this->input->post('keterangan');
        $date = $this->input->post('date');
        
                $config['upload_path'] = './assets/file/banksoal/';
   				$config['allowed_types'] = 'pdf|doc|xml|docx|PDF|DOC|XML|DOCX|xls|xlsx';
  				$config['max_size'] = 200048;

   				$config['file_name'] = url_title($matkul,'dash',TRUE);
				
                $this->upload->initialize($config);

                if($this->upload->do_upload('file_soal')){
					$upload_data = $this->upload->data(); 
  					$file_name = $upload_data['file_name'];
				}else{
					echo "gagal";
				}

        if($this->form_validation->run()==false){
            $data['sidebar']="sidebar";
            $data['update_banksoal']="update_banksoal";
            $data['soal']=$this->admin->get_update_soal($id);
            $this->load->view('index_admin',$data); 
        }else{
                $data=array(
                'matkul'=>$matkul,
				'Keterangan'=>$keterangan,
				'Tahun'=>$date,
				'File'=>$file_name,
                'Bidang_idBidang'=>1,
                'status_hapus'=>0
            	);
                $datas = $this->admin->update_banksoal($id,$data);
                if($datas){
                    $data['sidebar']="sidebar";
                    $data['soal']=$this->admin->view_banksoal();
                    $data['view_banksoal']="view_banksoal";
                    $data['message']="Soal berhasil diupdate";
                    $this->load->view('index_admin',$data);
                }else{
                    $data['sidebar']="sidebar";
                    $data['soal']=$this->admin->view_banksoal();
                    $data['view_banksoal']="view_banksoal";
                    $data['message']="data Soal gagal diupdate";
                    $this->load->view('index_admin',$data);
                }
            }
        }
        public function delete_banksoal($id=null){
            $query = $this->admin->delete_soal($id);
            if($query){
                $data['sidebar']="sidebar";
                $data['soal']= $this->admin->view_banksoal();
                $data['view_banksoal']="view_banksoal";
                $data['message']="Soal berhasil dihapus";
                $this->load->view('index_admin',$data);
            }else{
                $data['sidebar']="sidebar";
                $data['soal']= $this->admin->view_banksoal();
                $data['view_banksoal']="view_banksoal";
                $data['message']="terdapat kesalahan penghapusan data";
                $this->load->view('index_admin',$data);
            }
        }
        
}