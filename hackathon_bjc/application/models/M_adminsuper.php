<?php
class M_adminsuper extends CI_Model{

	function get_profil_by_kode($email){
		$hsl = $this->db->get_where('satudata_user', ['email' => $email])->row_array();
		return $hsl;
	}
	function get_penduduk_by_kode($id){
		$hsl = $this->db->get_where('satudata_pendduk', ['nomor' => $id])->row_array();
		return $hsl;
	}
	function get_profil_by_id($id){
		$hsl = $this->db->get_where('satudata_user', ['id' => $id])->row_array();
		return $hsl;
	}
	function get_aspirasi_by_id($id){
		$hsl = $this->db->get_where('satudata_aspirasi', ['id' => $id])->row_array();
		return $hsl;
	}
	function get_aspirasi_proses(){
		$hsl = $this->db->query("SELECT * FROM `satudata_aspirasi` WHERE `subject` != 'jawaban' AND `is_active` = 1 ORDER BY id DESC");
		return $hsl;
	}
	function get_aspirasi_selesai(){
		$hsl = $this->db->query("SELECT * FROM `satudata_aspirasi` WHERE `subject` != 'jawaban' AND `is_active` = 2 ORDER BY id DESC");
		return $hsl;
	}
	function count_aspirasi_laki2(){
		$this->db->where('role_id', 3);
		$this->db->where('jenis_kelamin', 'Laki-Laki');
		$this->db->from('satudata_aspirasi');
		$hsl = $this->db->count_all_results();
		return $hsl;
	}
	function count_aspirasi_perempuan(){
		$this->db->where('role_id', 3);
		$this->db->where('jenis_kelamin', 'Perempuan');
		$this->db->from('satudata_aspirasi');
		$hsl = $this->db->count_all_results();
		return $hsl;
	}
	function get_pengguna(){
		$hsl = $this->db->get_where('satudata_user', ['is_active' => 1]);
		return $hsl;
	}
	function get_rumah_tangga(){
		$hsl = $this->db->query('SELECT * FROM `satudata_pendduk` GROUP BY `no_kk`');
		return $hsl;
	}
	function get_pendidikan(){
		$hsl = $this->db->query('SELECT * FROM `satudata_pendduk` GROUP BY `pendidikan_terakhir`');
		return $hsl;
	}
	function get_status_perkawinan(){
		$hsl = $this->db->query('SELECT * FROM `satudata_pendduk` GROUP BY `status_perkawinan`');
		return $hsl;
	}
	function get_pekerjaan(){
		$hsl = $this->db->query('SELECT * FROM `satudata_pendduk` GROUP BY `pekerjaan`');
		return $hsl;
	}
	function get_datatable($sql){
		$hsl = $this->db->query($sql);
 		return $hsl;
	}
	function update_status_aspirasi($id){
		$this->db->set('is_active', 2);
		$this->db->where('id', $id);
		$hsl = $this->db->update('satudata_aspirasi');
		return $hsl;
	}
	function nonaktifkan_user($id){
		$this->db->set('is_active', 0);
		$this->db->where('id', $id);
		$hsl = $this->db->update('satudata_user');
		return $hsl;
	}
	function edit_user_by_id($id,$uname,$nama,$email,$jk,$role){
		$this->db->set('username', $uname);
		$this->db->set('email', $email);
		$this->db->set('nama', $nama);
		$this->db->set('role_id', $role);
		$this->db->set('jenis_kelamin', $jk);
		$this->db->where('id', $id);
		$hsl = $this->db->update('satudata_user');
		return $hsl;
	}
}