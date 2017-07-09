<?php 
class Admin_2 extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->curent_bidang_user != 2){
            redirect ('login');
        }
    }
    public function index(){
        echo "berhasil login diinfokom";
        echo $this->session->curent_name_user;
    }
}