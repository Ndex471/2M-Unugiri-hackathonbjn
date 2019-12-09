<?php
class M_home extends CI_Model{

	function get_penduduk(){
		$hsl = $this->db->get('satudata_pendduk');
		return $hsl;
	}	
	function get_row_name($kode){
		$hsl = $this->db->get_where('satudata_data_publik', ['judul'=> $kode]);
		return $hsl;
	}
	function get_rw(){
		$hsl = $this->db->query('SELECT * FROM `satudata_pendduk` GROUP BY `rw`');
		return $hsl;
	}	
	function count_laki(){
		$this->db->where('jenis_kelamin', 'Laki-Laki');
		$this->db->from('satudata_pendduk');
		$hsl = $this->db->count_all_results();
		return $hsl;
	}
	function count_perempuan(){
		$this->db->where('jenis_kelamin', 'Perempuan');
		$this->db->from('satudata_pendduk');
		$hsl = $this->db->count_all_results();
		return $hsl;
	}
	function count_rw($rw){
		$this->db->where('rw', $rw);
		$this->db->from('satudata_pendduk');
		$hsl = $this->db->count_all_results();
		return $hsl;
	}

	function count_rwp($rw){
		$this->db->where('rw', $rw);
		$this->db->where('jenis_kelamin', 'Perempuan');
		$this->db->from('satudata_pendduk');
		$hsl = $this->db->count_all_results();
		return $hsl;
	}

	function count_rwl($rw){
		$this->db->where('rw', $rw);
		$this->db->where('jenis_kelamin', 'Laki-Laki');
		$this->db->from('satudata_pendduk');
		$hsl = $this->db->count_all_results();
		return $hsl;
	}

	function get_row_group($row_name){
		$query = "SELECT * FROM satudata_pendduk GROUP BY ".$row_name;
		$hsl = $this->db->query($query);
		return $hsl;
	}
		
	function count_row_jk($rowname, $rowvalue, $jk){
		$this->db->where($rowname, $rowvalue);
		$this->db->where('jenis_kelamin', $jk);
		$this->db->from('satudata_pendduk');
		$hsl = $this->db->count_all_results();
		return $hsl;
	}

}