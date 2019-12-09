<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		// $this->load->library('form_validation');
		$this->load->library('form_validation');
        $this->load->model('m_admin');
        // $this->load->model('m_home');
        
		
	}

	public function index()
	{
		$this->session->set_flashdata('breadcrumb', 'Dashboard');
		$this->session->set_flashdata('menu', 'dashboard');
		$this->session->set_flashdata('menuName', 'Dashboard');
		$this->session->set_flashdata('icon', 'fas fa-tachometer-alt');
		$this->load->view('home/overview');
	}
	
	public function pekerjaan()
	{
		$role = $this->session->userdata('role_id');
		if ($role) {
			if ($role == 2) {
				redirect('admin','refresh');
			}else if ($role == 1) {				
				redirect('worker','refresh');
			}else {
				redirect('auth','refresh');
			}			
		}else {		

			// $this->session->set_flashdata('breadcrumb', 'Dashboard');
			// $this->session->set_flashdata('menu', 'dashboard');
			// $this->session->set_flashdata('menuName', 'Dashboard');
			// $this->session->set_flashdata('icon', 'fas fa-tachometer-alt');

			$data['list_pekerjaan'] = $this->m_admin->get_pekerjaan();
			$this->load->view('home/pekerjaan', $data);
		}
	}
	
	
	public function perusahaan()
	{
		$this->session->set_flashdata('breadcrumb', 'Dashboard');
		$this->session->set_flashdata('menu', 'dashboard');
		$this->session->set_flashdata('menuName', 'Dashboard');
		$this->session->set_flashdata('icon', 'fas fa-tachometer-alt');
		$this->load->view('home/perusahaan');
	}
	

}
