<?php 
class Login extends CI_Controller{
    function __construct(){
     parent::__construct();
        $this->load->library('form_validation');
    }

    public function index(){
        $this->load->view('login');
    }
    public function validation_user(){
        $this->form_validation->set_rules('','','');
        $this->form_validation->set_rules('','','');
        $this->form_validation->set_rules('','','');
    }
}