<?php 
class Admin_5 extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->curent_bidang_user != 6){
            redirect ('login');
        }
    }
    public function index(){
        echo "berhasil login psdm";
        echo $this->session->curent_name_user;
    }
}