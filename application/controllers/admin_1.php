<?php 
class Admin_1 extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->curent_bidang_user != 1){
            redirect ('login');
        }
    }
    public function index(){
        echo "berhasil login di ristek ";
        echo $this->session->curent_name_user;
    }
}