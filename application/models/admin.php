<?php 
class Admin Extends CI_Model{
    //Below are Ristek Model 
    //PKM
    public function view_pkm(){
        $where = array(
            'status_hapus'=>0
        );
        $query = $this->db->get_where('pkm',$where);
        if($query->num_rows() >= 0){
            return $query->result_array();
        }else{
            return false;
        }
    }
    public function insert_pkm($data){
        $query=$this->db->insert('pkm',$data);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    public function delete($id){
        $where = array(
            'idPKM'=>$id
        );
        $data = array(
            'status_hapus'=>1
        );
        $result = $this->db->update('pkm',$data,$where);
        if($result){
            return true;
        }else{
            return false;
        }
    
    }
    public function get_update($id){
        $where = array(
            'idPKM'=>$id,'status_hapus'=>0
        );
        $query = $this->db->get_where('pkm',$where);
        if($query->num_rows()>0){
            return $query->result_array();
        }else{
            return false;
        }
    }
    public function update_pkm($id,$data){
        $where = array(
            'idPKM'=>$id
        );
        $query = $this->db->update('pkm',$data,$where);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    //BANK SOAL
    public function view_banksoal(){
        $where = array(
            'status_hapus'=>0
        );
        $query = $this->db->get_where('bank_soal',$where);
        if($query->num_rows() >=0){
            return $query->result_array();
        }else{
            return false;
        }
    }
    public function insert_banksoal($data){
        $query=$this->db->insert('bank_soal',$data);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    public function get_update_soal($id){
        $where = array(
            'idBank_soal'=>$id,'status_hapus'=>0
        );
        $query = $this->db->get_where('bank_soal',$where);
        if($query->num_rows()>0){
            return $query->result_array();
        }else{
            return false;
        }
    }
    public function update_banksoal($id,$data){
        $where = array(
            'idBank_soal'=>$id
        );
        $query = $this->db->update('bank_soal',$data,$where);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    public function delete_soal($id){
        
        $where = array(
            'idBank_soal'=>$id
        );
        $data = array(
            'status_hapus'=>1
        );
        $result = $this->db->update('bank_soal',$data,$where);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public function get_all_name(){
            return $this->db->count_all('bank_soal');
        }
    public function fetch_all_data($limit,$offset){
            $this->db->limit($limit,$offset);
            $query = $this->db->get('bank_soal');
            if($query->num_rows() >0){
            return $query->result();
            }else{
            return false;
            }
        }
    public function search_name($nama){
            $this->db->select('*');
            $this->db->from('bank_soal');
            $this->db->like('matkul',$nama);
            $query = $this->db->get();
            if($query->num_rows() >=0){
            return $query->result();
            }else{
            return false;
            }
        }
    //Below are Infokom Model
    //Sponsor
    public function sponsor(){
        $where = array(
            'status_hapus'=>0
        );
        $query = $this->db->get_where('tabel_sponsor',$where);
        if ($query->num_rows()>0){
            return $query->result_array();
        }else{
            return false;
        }
    }
    public function delete_sponsor($id){
        $data = array(
            'status_hapus'=>1
        );
        $where =array(
            'idTabel_sponsor'=>$id
        );
        $query = $this->db->update('tabel_sponsor',$data,$where);
        if($query){
            return true;
        }else{
            return false;
        }
    } 
}