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
        if ($query->num_rows()>=0){
            return $query->result_array();
        }else{
            return false;
        }
    }
    public function add_sponsor(){
        $nama = $this->input->post('nama');
        $alamat =  $this->input->post('alamat');
        $keterangan =  $this->input->post('keterangan');
        $data = array(
            'nama' =>$nama,
            'alamat'=>$alamat,
            'keterangan'=>$keterangan,
            'status_hapus'=>0,
            'Bidang_idBidang'=>2
        );
        $query = $this->db->insert('tabel_sponsor',$data);
        if($query){
            return true;
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
    public function get_update_sponsor($id){
        $where = array(
            'idTabel_sponsor'=>$id
        );
        $query = $this->db->get_where('tabel_sponsor',$where);
        if($query->num_rows()>0){
            return $query->result_array();
        }else{
            return false;
        }
    }
    public function update_sponsor($id){
        $where = array(
            'idTabel_sponsor'=>$id
        );
        $data = array(
            'nama'=>$this->input->post('nama'),
            'alamat'=>$this->input->post('alamat'),
            'keterangan'=>$this->input->post('keterangan'),
            'status_hapus'=>0,
            'Bidang_idBidang'=>2
        );
        $query = $this->db->update('tabel_sponsor',$data,$where);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    public function alumni(){
        $where =array(
            'status_hapus'=>0
        );
        $query = $this->db->get_where('alumni',$where);
        if($query->num_rows()>=0){
            return $query->result_array();
        }else{
            return true;
        }
    }
    public function delete_alumni($id){
        $data = array(
            'status_hapus'=>1
        );
        $where = array(
            'idAlumni'=>$id
        );
        $query = $this->db->update('alumni',$data,$where);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    public function add_alumni(){
        $data = array(
            'nama'=>$this->input->post('Nama'),
            'nim'=>$this->input->post('NIM'),
            'Angkatan'=>$this->input->post('Angkatan'),
            'Pekerjaan'=>$this->input->post('Pekerjaan'),
            'Alamat'=>$this->input->post('Alamat'),
            'status_hapus'=>0,
            'Bidang_idBidang'=>2
        );
        $query = $this->db->insert('alumni',$data);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    public function get_update_alumni($id){
        $where = array(
            'idAlumni'=>$id
        );
        $query =$this->db->get_where('alumni',$where);
        if($query->num_rows()>0){
            return $query->result_array();
        }else{
            return false;
        }
    }
    public function alumni_update($id){
        $data = array(
            'nama'=>$this->input->post('Nama'),
            'nim'=>$this->input->post('NIM'),
            'Angkatan'=>$this->input->post('Angkatan'),
            'Pekerjaan'=>$this->input->post('Pekerjaan'),
            'Alamat'=>$this->input->post('Alamat'),
        );
        $where = array(
            'idAlumni'=>$id
        );
        $query = $this->db->update('alumni',$data,$where);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    //pembicara
    public function get_pembicara(){
        $where =array(
            'status_hapus'=>0
        );
        $query = $this->db->get_where('pembicara',$where);
        if($query->num_rows()>=0){
            return $query->result_array();
        }else{
            return true;
        }
    }
    public function add_pembicara(){
        $data = array(
            'nama'=>$this->input->post('nama'),
            'kontak'=>$this->input->post('Kontak'),
            'email'=>$this->input->post('email'),
            'alamat'=>$this->input->post('alamat'),
            'keterangan'=>$this->input->post('keterangan'),
            'status_hapus'=>0,
            'Bidang_idBidang'=>2
        );
        $query = $this->db->insert('pembicara',$data);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    public function delete_pembicara($id){
        $where = array(
            'status_hapus'=>1
        );
        $data = array(
            'idpembicara'=>$id
        );
        $query = $this->db->update('pembicara',$where,$data);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    public function get_update_pembicara($id){
        $where =array(
            'idpembicara'=>$id
        );
        $query = $this->db->get_where('pembicara',$where);
        if($query->num_rows()>=0){
            return $query->result_array();
        }else{
            return true;
        }
    }
    public function update_pembicara($id){
        $data = array(
            'nama'=>$this->input->post('nama'),
            'kontak'=>$this->input->post('Kontak'),
            'email'=>$this->input->post('email'),
            'alamat'=>$this->input->post('alamat'),
            'keterangan'=>$this->input->post('keterangan')
        );
        $where = array(
            'idpembicara'=>$id
        );
        $query = $this->db->update('pembicara',$data,$where);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    //Below are ekobis model
    //wirausaha
    public function wirausaha(){
        $where = array(
            'status_hapus'=>0
        );
        $query = $this->db->get_where('wirausaha',$where);
        if($query->num_rows()>=0){
            return $query->result_array();
        }else{
            return false;
        }
    }
    public function delete_wirausaha($id){
        $where = array(
            'idWirausaha'=>$id
        );
        $data = array(
            'status_hapus'=>1
        );
        $query = $this->db->update('wirausaha',$data,$where);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    
    public function add_wirausaha(){
         $data = array(
            'Nama_wirausahawan'=>$this->input->post('Nama_wirausahawan'),
            'Jenis'=>$this->input->post('Jenis'),
            'Lokasi'=>$this->input->post('Lokasi'),
            'Tahun'=>$this->input->post('Tahun'),
            'status_hapus'=>0,
            'Bidang_idBidang'=>3
        );
        $query = $this->db->insert('wirausaha',$data);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    public function get_update_wirausaha($id){
        $where = array(
            'idWirausaha'=>$id
        );
        $query = $this->db->get_where('wirausaha',$where);
        if($query->num_rows()>=0){
            return $query->result_array();
        }else{
            return false;
        }
    }
    public function update_wirausaha($id){
        $data = array(
            'Nama_wirausahawan'=>$this->input->post('Nama_wirausahawan'),
            'Jenis'=>$this->input->post('Jenis'),
            'Lokasi'=>$this->input->post('Lokasi'),
            'Tahun'=>$this->input->post('Tahun')
        );
        $where = array(
            'idWirausaha'=>$id
        );
        $query = $this->db->update('wirausaha',$data,$where);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    //Below are kesma model
    //beasiswa
    public function beasiswa(){
        $where = array(
            'status_hapus'=>0
        );
        $query = $this->db->get_where('beasiswa',$where);
        if($query->num_rows()>=0){
            return $query->result_array();
        }else{
            return false;
        }
    }
    public function delete_beasiswa($id){
        $where = array(
            'idBeasiswa'=>$id
        );
        $data = array(
            'status_hapus'=>1
        );
        $query = $this->db->update('beasiswa',$data,$where);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    public function add_beasiswa(){
        $data = array(
            'nama_beasiswa'=>$this->input->post('Nama_beasiswa'),
            'penerima'=>$this->input->post('Penerima'),
            'Besar'=>$this->input->post('Besar'),
            'Tahun'=>$this->input->post('Tahun'),
            'status_hapus'=>0,
            'Bidang_idBidang'=>7
        );
        $query = $this->db->insert('beasiswa',$data);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    public function get_update_beasiswa($id){
        $where = array(
            'idBeasiswa'=>$id
        );
        $query = $this->db->get_where('beasiswa',$where);
        if($query->num_rows()>=0){
            return $query->result_array();
        }else{
            return false;
        }
    }
    public function do_update_beasiswa($id){
        $where = array(
            'idBeasiswa'=>$id
            );
        $data = array(
            'nama_beasiswa'=>$this->input->post('Nama_beasiswa'),
            'penerima'=>$this->input->post('Penerima'),
            'Besar'=>$this->input->post('Besar'),
            'Tahun'=>$this->input->post('Tahun'),
        );
        $query = $this->db->update('beasiswa',$data,$where);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    //below are belong to PPMB
    //Mahasiswa
    public function mahasiswa(){
        $where = array(
            'status_hapus'=>0
        );
        $query = $this->db->get_where('mahasiswa',$where);
        if($query->num_rows()>=0){
            return $query->result_array();
        }else{
            return false;
        }
    }
    public function add_mahasiswa(){
        $data = array(
            'Nama'=>$this->input->post('Nama'),
            'Jalur_Masuk'=>$this->input->post('Jalur_Masuk'),
            'Alamat_kos'=>$this->input->post('Alamat_kos'),
            'Alamat_Rumah'=>$this->input->post('Alamat_Rumah'),
            'No_hp'=>$this->input->post('No_hp'), 
            'Email'=>$this->input->post('Email'),
            'Keterangan'=>$this->input->post('Keterangan'),
            'status_hapus'=>0,
            'Bidang_idBidang'=>8
        );
        $query = $this->db->insert('mahasiswa',$data);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    public function delete_mahasiswa($id){
        $where = array(
            'idMahasiswa'=>$id
        );
        $data = array(
            'status_hapus'=>1
        );
        $query = $this->db->update('mahasiswa',$data,$where);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    public function get_mahasiswa($id){
        $where = array(
            'idMahasiswa'=>$id
        );
        $query = $this->db->get_where('mahasiswa',$where);
        if($query->num_rows()>=0){
            return $query->result_array();
        }else{
            return false;
        }
    }
    public function do_update_mahasiswa($id){
        $where = array(
            'idMahasiswa'=>$id
        );
        $data = array(
            'Nama'=>$this->input->post('Nama'),
            'Jalur_Masuk'=>$this->input->post('Jalur_Masuk'),
            'Alamat_kos'=>$this->input->post('Alamat_kos'),
            'Alamat_Rumah'=>$this->input->post('Alamat_Rumah'),
            'No_hp'=>$this->input->post('No_hp'), 
            'Email'=>$this->input->post('Email'),
            'Keterangan'=>$this->input->post('Keterangan'),
        );
        $query = $this->db->update('mahasiswa',$data,$where);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    //below are Organisasi model
    //anggota kepengurusan
    public function anggota(){
        $where =array(
            'status_hapus'=>0
        );
        $query = $this->db->get_where('anggota_kepengurusan',$where);
        if($query->num_rows()>=0){
            return $query->result_array();
        }else{
            return false;
        }
    }
    public function add_anggota(){
        $data = Array(
            'Nama_staff'=>$this->input->post('nama'),
            'Penilaian'=>$this->input->post('Penilaian'),
            'Alamat'=>$this->input->post('Alamat'),
            'Bidang'=>$this->input->post('bidang'),
            'Keterangan'=>$this->input->post('Keterangan'),
            'status_hapus'=>0,
            'Bidang_idBidang'=>4
        );
        $query = $this->db->insert('anggota_kepengurusan',$data);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    public function delete_anggota($id){
        $where = array(
            'idAnggota_kepengurusan'=>$id
        );
        $data = array(
            'status_hapus'=>1
        );
        $query = $this->db->update('anggota_kepengurusan',$data,$where);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    public function get_anggota($id){
        $where = array(
            'idAnggota_kepengurusan'=>$id
        );
        $query = $this->db->get_where('anggota_kepengurusan',$where);
        if($query->num_rows()>=0){
            return $query->result_array();
        }else{
            return false;
        }
    }
    public function do_update($id){
    	$where = array(
            'idAnggota_kepengurusan'=>$id
        );
        $data = Array(
            'Nama_staff'=>$this->input->post('nama'),
            'Penilaian'=>$this->input->post('Penilaian'),
            'Alamat'=>$this->input->post('Alamat'),
            'Bidang'=>$this->input->post('bidang'),
            'Keterangan'=>$this->input->post('Keterangan')
        );
        $query = $this->db->update('anggota_kepengurusan',$data,$where);
        if($query){
            return true;
        }else{
            return false;
        }
    }
}