<?php
class M_admin extends CI_Model{

	function get_profil_by_kode($id){
		$hsl = $this->db->get_where('bjc_detail_worker', ['id_user' => $id])->row_array();
		return $hsl;
	}
	function get_nilai_karakter($id){
		$hsl = $this->db->get_where('bjc_nilai_karakter', ['id_user' => $id])->row_array();
		return $hsl;
	}
	function get_user_data($email){
		$hsl = $this->db->get_where('bjc_user', ['email' => $email])->row_array();
		return $hsl;
	}
	function get_pekerjaan(){		
		$hsl = $this->db->get_where('bjc_pekerjaan', ['active' => 1]);
		return $hsl;	
	}
	
	function get_pertanyaan($id){		
		$hsl = $this->db->get_where('bjc_pertanyaan', ['id_pertanyaan' => $id])->row_array();
		return $hsl;	
	}
	function get_jawaban($id){		
		$hsl = $this->db->get_where('bjc_nilai_jawaban', ['id_pertanyaan' => $id]);
		return $hsl;	
	}
	
	function get_skor($id){		
		$hsl = $this->db->get_where('bjc_skor', ['id_user' => $id]);
		return $hsl;	
	}

	
}