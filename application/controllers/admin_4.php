<?php 
class Admin_4 extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->curent_bidang_user != 4){
            redirect ('login');
        }
    }
    public function index(){
        echo "berhasil login ekobis ";
        echo $this->session->curent_name_user;
    }
}