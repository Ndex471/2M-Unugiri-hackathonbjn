<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		// $this->load->library('form_validation');
		$this->load->library('form_validation');
        $this->load->model('m_admin');
        $this->load->helper('file');
		$role_id = $this->session->userdata('role_id');
		if ($role_id == 2) {					
		} else if ($role_id == 1) {			
			redirect('adminsuper','refresh');	
		} else {
			redirect('auth','refresh');
		}
	}

	public function index()
	{
		// $this->session->set_flashdata('breadcrumb', 'Dashboard');
		// $this->session->set_flashdata('menu', 'dashboard');
		// $this->session->set_flashdata('menuName', 'Dashboard');
		// $this->session->set_flashdata('icon', 'fas fa-tachometer-alt');
		$email = $this->session->userdata('email');

		$id_user = $this->m_admin->get_user_data($email);
		$data['profil'] = $id_user;
		$id_user = $id_user['id'];
		$data['nilai_karakter'] = $this->m_admin->get_nilai_karakter($id_user); 
		$data['detail_profil'] = $this->m_admin->get_profil_by_kode($id_user);
		$data['list_pekerjaan'] = $this->m_admin->get_pekerjaan();

		// var_dump($data);
		$this->load->view('admin/overview', $data);

	}
	public function pertanyaan()
	{
		// $this->session->set_flashdata('breadcrumb', 'Dashboard');
		// $this->session->set_flashdata('menu', 'dashboard');
		// $this->session->set_flashdata('menuName', 'Dashboard');
		// $this->session->set_flashdata('icon', 'fas fa-tachometer-alt');
		
		$no_pertanyaan = $this->session->userdata('no_pertanyaan');
		if (!$no_pertanyaan) {
			$no_pertanyaan = 1;
		}
		if ($no_pertanyaan < 4) {
			$email = $this->session->userdata('email');

			$id_user = $this->m_admin->get_user_data($email);
			$data['profil'] = $id_user;
			$id_user = $id_user['id'];
			$data['nilai_karakter'] = $this->m_admin->get_nilai_karakter($id_user); 
			$data['detail_profil'] = $this->m_admin->get_profil_by_kode($id_user);
			$data['list_pertanyaan'] = $this->m_admin->get_pertanyaan($no_pertanyaan);		
			$data['jawaban'] = $this->m_admin->get_jawaban($no_pertanyaan);
			// var_dump($data);
			$this->load->view('admin/pertanyaan', $data);

			}	else {

				$email = $this->session->userdata('email');

				$id_user = $this->m_admin->get_user_data($email);
				$data['profil'] = $id_user;
				$id_user = $id_user['id'];
				$data['jawaban'] = $this->m_admin->get_skor($id_user);
				$skor = 0;
				foreach ($data['jawaban']->result() as $row) {
					$skor = $skor+$row->skor;
				}
				$data['skor'] = $skor;
				$data['nilai_karakter'] = $this->m_admin->get_nilai_karakter($id_user); 
				$data['detail_profil'] = $this->m_admin->get_profil_by_kode($id_user);
				$this->load->view('admin/skor', $data);
				$dt = [
					'no_pertanyaan' => NULL
				];
				$this->session->set_userdata($dt);


			}

	}
	public function submit_pertanyaan()
	{

		// var_dump($data);
		$no_pertanyaan = $this->session->userdata('no_pertanyaan');
		if (!$no_pertanyaan) {
			$no_pertanyaan = 0;
		}
		$no_pertanyaan = $no_pertanyaan + 1;	
		$dt = [
			'no_pertanyaan' => $no_pertanyaan
		];
		$this->session->set_userdata($dt);
		$data = [
			'id_pertanyaan' => $no_pertanyaan,
			'id_nilai' => 0,
			'id_user' => $this->input->post('id_user', true),
			'skor' => $this->input->post('jawaban', true),
			'active' => 1,
		];
		// var_dump($data);
		$this->db->insert('bjc_skor', $data);
		redirect('admin/pertanyaan','refresh');

	}
	

}
