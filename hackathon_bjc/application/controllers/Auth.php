<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim',[
			'required' => 'Username Harus Diisi',
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim',[
			'required' => 'Password Harus Diisi',
		]);
		if ($this->form_validation->run() == false) {
			$role = $this->session->userdata('role_id');
			if ($role == 1) {
				redirect('adminsuper','refresh');
			}else if ($role == 2) {
				redirect('admin','refresh');
			}else {

        		$this->session->set_flashdata('title', 'login');
				$this->load->view('auth/_partials/header');
				$this->load->view('auth/login');
				$this->load->view('auth/_partials/footer');			
			}
		}else {
			// echo "validasi berhasil";
			// validasi berhasil
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('username', true);
		$password = $this->input->post('password', true);

		$admin = $this->db->get_where('bjc_user', ['email' => $email])->row_array();
		$admin1 = $this->db->get_where('bjc_user', ['username' => $email])->row_array();
		
		
		if ($admin || $admin1) {
			if (password_verify($password, $admin['password']) || password_verify($password, $admin1['password'])) {
				if (empty($admin1)) {
						$admin1 = $admin;
					} else {
						$admin = $admin1;
					}
					$data = [
						'email' => $admin['email'],
						'role_id' => $admin['role_id'],
						'uname' => $admin['nama'],
					];
					$this->session->set_userdata($data);
					// var_dump($data);
					if ($admin['role_id'] == 2){
						redirect('admin','refresh');						
					}else if ($admin['role_id'] == 1){
						redirect('adminsuper','refresh');						
					}
			}
		} else {
			//user kosong
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username belum terdaftar!</div>');
			redirect('auth','refresh');
		}
	}

	public function daftar()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim',[
			'required' => 'Nama Harus Diisi',
		]);
		$this->form_validation->set_rules('uname', 'uname', 'required|trim',[
			'required' => 'Nama Harus Diisi',
		]);
		$this->form_validation->set_rules('telpon', 'Telpon', 'required|trim',[
			'required' => 'Telpon Harus Diisi',
		]);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[bjc_user.email]',[
			'required' => 'Email Harus Diisi',
			'valid_email' => 'Format Email Tidak Sesuai',
			'is_unique' => 'Email Sudah Terpakai',
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]',[
			'required' => 'Password Harus Diisi',
			'matches' => 'Konfirmasi Password Tidak Sesuai',
			'min_length' => 'Password Minimal 5 Karakter',
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]',[
			'matches' => 'Konfirmasi Password Tidak Sesuai',
			'required' => 'Password Harus Diisi',
		]);;
		// $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim',[
		// 	'required' => 'Alamat Harus Diisi',
		// ]);;

		if ($this->form_validation->run() == false) {

        	$this->session->set_flashdata('title', 'Daftar - ');
			$this->load->view('auth/_partials/header');
			$this->load->view('auth/daftar');
			$this->load->view('auth/_partials/footer');
		}else {
			// echo "validasi berhasil";
			$email = $this->input->post('email', true);
			$data = [
				'username' => htmlspecialchars($this->input->post('uname', true)),
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'nik' => '',
				'jenis_kelamin' => htmlspecialchars($this->input->post('jk', true)),
				'alamat' => htmlspecialchars($this->input->post('alamat', true)),
				'email' => htmlspecialchars($email),
				'telpon' => htmlspecialchars($this->input->post('telpon', true)),
				'gambar' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 4,
				'is_active' => 0,
				'date_created' => time(),
			];

			

			// siapkan token
			
			$token = substr(md5(mt_rand()), 0, 32);
		    
			$user_token = [
				'email' => $email,
				'token' => $token,
				'date_created' => time()

			];

			$this->db->insert('bjc_user', $data);
			$this->db->insert('bjc_user_token', $user_token);

			$this->_sendEmail($token, 'verify');
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Akun Anda Berhasil di Buat. Cek Email untuk vertifikasi. Cek di spam jika tidak ada di inbox!!!</div>');
			redirect('auth','refresh');
		}
	}


	private function _sendEmail($token, $type)
	{
		$config = [
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'siippnet0@gmail.com',
			'smtp_pass' => 'temayang',
			'smtp_port' => 465,
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'newline'   => "\r\n"
		];

		$this->load->library('email', $config);
		$this->email->initialize($config);

		$this->email->from('siippnet0@gmail.com', 'siipp.net');
		$this->email->to($this->input->post('email'));

		if ($type == 'verify') {
			$this->email->subject('Account Verivication');
			$this->email->message('Clik link berikut untuk vartifikasi akun anda : <a href="'.base_url().'auth/verify?email='.$this->input->post('email').'&token='.$token.'">Aktivate</a>');
		} else if ($type == 'forgot') {			
			$this->email->subject('Reset Password');
			$this->email->message('Clik link berikut untuk Reset Password akun anda : <a href="'.base_url().'auth/resetpassword?email='.$this->input->post('email').'&token='.$token.'">Reset Password</a>');
		}

		if ($this->email->send()) {
			return true;
		}else {
			echo $this->email->print_debugger();
			die;
		}
	}

	public function verify() {
		$email = $this->input->get('email');
		$token = $_GET['token'];

		$user = $this->db->get_where('bjc_user', ['email' =>$email])->row_array();
		if ($user) {
			$user_token = $this->db->get_where('bjc_user_token', ['token' => $token])->row_array();
			if ($user_token) {
				if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
					$this->db->set('is_active', 1);
					$this->db->where('email', $email);
					$this->db->update('bjc_user');
					$this->db->delete('bjc_user_token', ['email' => $email]);
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Akun Anda Berhasil di Buat. Silahkan Login </div>');
					redirect('auth');

				}else {
					$this->db->delete('bjc_user', ['email' => $email]);
					$this->db->delete('bjc_user_token', ['email' => $email]);
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Token Expired!!!</div>');
					redirect('auth');					
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Vertifikasi Gagal, Token salah!!!</div>');
				// redirect('auth');	
				echo "token =".$token;
			}
			
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Vertifikasi Gagal, email salah!!!</div>');
			redirect('auth');
		}
	}

	public function daftaradmin()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim',[
			'required' => 'Nama Harus Diisi',
		]);
		$this->form_validation->set_rules('uname', 'uname', 'required|trim',[
			'required' => 'Nama Harus Diisi',
		]);
		$this->form_validation->set_rules('nik', 'NIK', 'required|trim',[
			'required' => 'NIK Harus Diisi',
		]);
		// $this->form_validation->set_rules('telpon', 'Telpon', 'required|trim',[
		// 	'required' => 'Telpon Harus Diisi',
		// ]);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email',[
			'required' => 'Email Harus Diisi',
			// 'valid_email' => 'Format Email Tidak Sesuai',	
			'is_unique' => 'Email Sudah Terpakai',
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]',[
			'required' => 'Password Harus Diisi',
			'matches' => 'Konfirmasi Password Tidak Sesuai',
			'min_length' => 'Password Minimal 5 Karakter',
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]',[
			'matches' => 'Konfirmasi Password Tidak Sesuai',
			'required' => 'Password Harus Diisi',
		]);;
		// $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim',[
		// 	'required' => 'Alamat Harus Diisi',
		// ]);;

		if ($this->form_validation->run() == false) {
			$this->load->view('auth/_partials/header');
			$this->load->view('auth/daftar');
			$this->load->view('auth/_partials/footer');
		}else {
			// echo "validasi berhasil";
			$data = [
				'kd_satker' => htmlspecialchars($this->input->post('nik', true)),
				'username' => htmlspecialchars($this->input->post('uname', true)),
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'gambar' => 'default.jpg',
				'role_id' => htmlspecialchars($this->input->post('admin', true)),
				'is_active' => 1,
				'date_created' => time(),
			];

			$this->db->insert('bjc_user_admin', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! akun anda berhasil di buat </div>');
			redirect('adminsuper/overview/tambahuser','refresh');
		}
	}

	
	public function gantipassword(){
		
		$role_id = $this->session->userdata('role_id');
		$email = $this->session->userdata('email');
		$role = $this->db->get_where('bjc_user_role', ['id' => $role_id])->row_array();
		$user = $this->db->get_where('bjc_user', ['email' => $email])->row_array();
		$dbuser = 'bjc_user';
		
		$this->form_validation->set_rules('passwordlama', 'Nama', 'required|trim',[
			'required' => 'Password Lama Harus Diisi',
		]);
		$this->form_validation->set_rules('passwordbaru1', 'Passwordbaru1', 'required|trim|matches[passwordbaru2]|min_length[6]',[
			'required' => 'Password Baru Harus Diisi',
			'matches' => 'Password Tidak Sama',
			'min_length' => 'Password Terlalu Pendek!min 6 karakter',
		]);
		$this->form_validation->set_rules('passwordbaru2', 'Passwordbaru2', 'required|matches[passwordbaru1]|min_length[6]',[
			'required' => 'Ulangi Password Harus Diisi',
			'matches' => 'Password Tidak Sama',
			'min_length' => 'Password Terlalu Pendek!min 6 karakter',
		]);
		$role_name = $role['role'];
		if ($this->form_validation->run() == false) {	
		    $this->load->view("admin/_partials/head.php"); 
		    $this->load->view("$role_name/_partials/sidebar.php"); 
		    $this->load->view("$role_name/_partials/navbar.php"); 
		    $this->load->view("$role_name/editpassword");
		    // echo $role_id;
		    $this->load->view("$role_name/_partials/footer.php");
		
		} else {

			$passwordlama = $this->input->post('passwordlama');
			$passwordbaru1 = $this->input->post('passwordbaru1');
			$passwordbaru2 = $this->input->post('passwordbaru2');

			if (!password_verify($passwordlama, $user['password'])) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password lama tidak cocok!</div>');
				// echo "Password sama";
				header("location:".$_SERVER['HTTP_REFERER']); 		
			}else {
				if ($passwordlama == $passwordbaru1) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password baru tidak boleh Sama dengan Password lama!</div>');
					header("location:".$_SERVER['HTTP_REFERER']); 	
				}else {
					//password ok
					$password_hash = password_hash($passwordbaru1, PASSWORD_DEFAULT);

					$this->db->set('password', $password_hash);
					$this->db->where('email', $email);
					$this->db->update($dbuser);
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Berhasil Diganti!</div>');
					header("location:".$_SERVER['HTTP_REFERER']); 	
				}
			}
		}


	}

	public function forgotPassword(){
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email',[
			'required' => 'Email Harus Diisi',
			'valid_email' => 'Format Email Tidak Sesuai',
		]);
		if ($this->form_validation->run() == false) {

        	$this->session->set_flashdata('title', 'Lupa Sandi - ');
			$this->load->view('auth/_partials/header');
			$this->load->view('auth/forgot-password');
			$this->load->view('auth/_partials/footer');			
		}else {
			$email = $this->input->post('email');
			$user = $this->db->get_where('bjc_user', ['email' => $email, 'is_active' => 1])->row_array();
			if ($user) {
				$token = substr(md5(mt_rand()), 0, 32);
				$user_token = [
					'email' => $email,
					'token' => $token,
					'date_created' => time()

				];
				$this->db->insert('bjc_user_token', $user_token);
				$this->_sendEmail($token, 'forgot');
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Check Email Anda Untuk Reset Password!!!</div>');
				redirect('auth/forgotPassword');
				
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Belum Terdaftar!!!</div>');
				redirect('auth/forgotPassword');
			}
		}

	}

	public function resetPassword(){
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('bjc_user', ['email' => $email])->row_array();

		if ($user) {
			$user_token = $this->db->get_where('bjc_user_token', ['token' => $token])->row_array();			
			
			if ($user_token) {
				if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
					$this->session->set_userdata('reset_email', $email);
					$this->changePassword();
				}else {					
					$this->db->delete('bjc_user', ['email' => $email]);
					$this->db->delete('bjc_user_token', ['email' => $email]);
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Token Expired!!!</div>');
					redirect('auth');
				}

			}else{				
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Reset Password, Token Salah!!!</div>');
				redirect('auth');
			}
			
		}else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Reset Password, Email Salah!!!</div>');
			redirect('auth');
		}
	}

	public function changePassword(){
		if (!$this->session->userdata('reset_email')) {
			redirect('auth');
		}
		$this->form_validation->set_rules('passwordbaru1', 'Passwordbaru1', 'required|trim|matches[passwordbaru2]|min_length[6]',[
			'required' => 'Password Baru Harus Diisi',
			'matches' => 'Password Tidak Sama',
			'min_length' => 'Password Terlalu Pendek!min 6 karakter',
		]);
		$this->form_validation->set_rules('passwordbaru2', 'Passwordbaru2', 'required|matches[passwordbaru1]|min_length[6]',[
			'required' => 'Ulangi Password Harus Diisi',
			'matches' => 'Password Tidak Sama',
			'min_length' => 'Password Terlalu Pendek!min 6 karakter',
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view('auth/_partials/header');
			$this->load->view('auth/change-password');
			$this->load->view('auth/_partials/footer');			
		}else {
			$password = password_hash($this->input->post('passwordbaru1'), PASSWORD_DEFAULT);
			$email = $this->session->userdata('reset_email');

			$this->db->set('password', $password);
			$this->db->where('email', $email);
			$this->db->update('bjc_user');

			$this->session->unset_userdata('reset_email');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Telah di Ganti!!!</div>');
			redirect('auth');	
		}
		
	}

	public function logout(){
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->unset_userdata('uname');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda berhasil log out! </div>');
		redirect('auth','refresh');	

	}
}
