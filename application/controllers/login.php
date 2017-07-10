<?php 
class Login extends CI_Controller{
    function __construct(){
     parent::__construct();
        $this->load->helper('captcha');     
        $this->load->library('form_validation');
        $this->load->library('image_lib');
        $this->load->library('upload');
        $this->load->model('Auth');

    }

    public function create_captcha(){
        $data = array(
        
        'img_path'=>'./assets/captcha/',
        'img_url'=> 'http://localhost/ci_pro/Himaskom/assets/captcha/',
        // 'img_url'=> base_url('/assets/captcha/'),
        'img_width'=>120,
        'img_height'=>70,
        'expiration'=>7200,
        'word_length'=>4,
        'font_size'=>18
        );
        
        $data_captcha = create_captcha($data);

        $this->session->set_userdata('captchaword', $data_captcha['word']);
        
        $data = array(
        'image'=> $data_captcha['image'],
        'word'=> $data_captcha['word'],
        'captcha_time'  => $data_captcha['time'],
        'ip_address'    => $this->input->ip_address(),
        );

        return $data;

    }
    public function index(){
        
        // $query = $this->db->insert_string('captcha', $data2);
        // $this->db->query($query);
        if($this->session->userdata('curent_user_id')==false)
        {
        $data = $this->create_captcha();
        $this->load->view('login',$data);
        }else{
            $this->admin();
        }
    }

    public function validation_user(){
        $this->form_validation->set_rules('username','Username','trim|xss_clean|required');
        $this->form_validation->set_rules('password','Password','trim|xss_clean|required');
        $this->form_validation->set_rules('captcha','Captcha','trim|xss_clean|required|callback_check_captcha');
        
        if ($this->form_validation->run() == FALSE)
        {
            echo validation_errors();
        }else{
            $result = $this->Auth->user_validation();
			 if($result==true){
                 $this->admin();
				// redirect ('admin');
				// echo "berhasil login";
                //var_dump($this->session);
				//print_r($this->session);
			  }else{
                    $data = $this->create_captcha();
			 	    $data['errorLogin']="sorry login error, password or username may wrong";
			  	    $this->load->view('login',$data);
			  }
            // $expiration = time() - 7200; // Two hour limit
		    // $this->db->where('captcha_time < ', $expiration)
			// 	->delete('captcha');
        }
    }
    function admin(){
        switch ($this->session->curent_bidang_user) {
                    case 1:
                        redirect ('admin_1');
                        break;
                    case 2:
                        redirect ('admin_2');
                        break;
                    case 3:
                        redirect ('admin_3');
                        break;
                    case 4:
                        redirect ('admin_4');
                        break;
                    case 5:
                        redirect ('admin_5');
                        break;
                    default:
                        echo "faild to login";
                 }
    }
    public function logout(){
        $this->session->unset_userdata('curent_user_id');
		$this->session->unset_userdata('curent_name_user');
		$this->session->unset_userdata('curent_username');
        $this->session->unset_userdata('curent_status');
		$this->session->unset_userdata('curent_anggota_id');
		$this->session->unset_userdata('curent_bidang_user');

		$this->session->sess_destroy();

        redirect('login');
    }
    public function check_captcha($string)
    {
        if($string == $this->session->userdata('captchaword'))
        {
            return TRUE;
        }
        else
        {
        $this->form_validation->set_message('check_captcha', 'Wrong captcha code');
        return FALSE;
        }
    }
}