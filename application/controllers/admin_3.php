<?php 
class Admin_3 extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->curent_bidang_user != 3){
            redirect ('login');
        }
    }
    public function index(){
        echo "berhasil login mikat";
        echo $this->session->curent_name_user;
    }
}