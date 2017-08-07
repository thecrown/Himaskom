<?php 
class Admin_8 extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->curent_bidang_user != 8){
            redirect ('login');
        }
    }
    public function index(){
        echo "berhasil login PPMB";
        echo $this->session->curent_name_user;
    }
}