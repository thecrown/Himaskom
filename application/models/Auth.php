<?php 
class Auth extends CI_Model {
    public function user_validation(){
        $username  = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $datauser = array(
            'username' =>$username,
            'password' =>$password
        );
        
        $query = $this->db->get_where('users',$datauser);

        if($query->num_rows() >=0){
        
            $attr = array(
            'curent_user_id' => $query->row(0)->idusers,
            'curent_name_user'=>  $query->row(0)->nama,
            'curent_username'=>  $query->row(0)->username,
            'curent_status'=>  $query->row(0)->status,
            'curent_anggota_id'=>  $query->row(0)->anggota_idanggota,
            'curent_bidang_user'=> $query->row(0)->anggota_Bidang_idBidang
            );  
            $this->session->set_userdata($attr);

            return $query->result();
        }else{
            return false;
        }
    }
    
}