<?php 
class Front extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('pagination');
		$this->load->model('admin');
	}
	public function index()
	{
		$config = array();
		$config['base_url'] = base_url().'Front/index';
		$config['total_rows'] = $this->admin->get_all_name();
		$config['per_page'] = 5;
		$config['num_links'] = 2;
		//$config['uri_segment'] = 2;

		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] = "</ul>";
		$config['num_tag_open'] = "<li>";
		$config['num_tag_close'] = "</li>";
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tag_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tag_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tag_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tag_close'] = "</li>";
		$config['uri_segment'] = 3;

		$this->pagination->initialize($config);
		$page = $this->uri->segment(3);
		$data['name'] = $this->admin->fetch_all_data($config['per_page'],$page);
		$data['pagination']=$this->pagination->create_links();
		$this->load->view('admin_1/bank_soal',$data);
	}
	public function search_name(){
		$nama = $this->input->post('search');
		if(isset($nama) and !empty($nama)){
			$data['name'] = $this->admin->search_name($nama);
			$data['pagination']='';
			$this->load->view('admin_1/bank_soal',$data);
		}else{
			redirect('Front');
		}
	}
}
