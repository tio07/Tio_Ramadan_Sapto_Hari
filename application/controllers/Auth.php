<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', "trim|required");

		if ($this->form_validation->run() == false) {
			$data['title'] = "Login";
			$this->load->view('header', $data);
			$this->load->view('login');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('users', ['email' => $email])->row_array();

		if ($user) {
			if ($user['active'] == 1) {
				if (password_verify($password, $user['password'])) {
					$data = [
						'email' => $user['email']
					];
					$this->session->set_flashdata($data);
					redirect('home');
				} else {
					$this->session->set_flashdata('message', '<div class="alert-danger" role="alert">Wrong Password! </div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert-danger" role="alert">This Email Has Not Activated! </div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert-danger" role="alert">Email Is Not Registered!</div>');
			redirect('auth');
		}
	}

	public function registration()
	{
		$this->form_validation->set_rules('fullname1', 'First Name', "required|regex_match[/^[a-zA-Z'.]+$/]");
		$this->form_validation->set_rules('fullname2', 'Last Name', "required|regex_match[/^[a-zA-Z'.]+$/]");
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]', [
			'is_unique' => 'This Email Has Already Registered!'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|min_length[5]|matches[password2]', [
			'matches' => 'Password Dont Match!',
			'min_length' => 'Password Too Short!'
		]);
		$this->form_validation->set_rules('password2', 'Confirm Password', "required|matches[password1]");

		if ($this->form_validation->run() == false) {
			$data['title'] = "Register";
			$this->load->view('header', $data);
			$this->load->view('register');
		} else {
			$data = [
				'email' => htmlspecialchars($this->input->post('email', true)),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT, ['cost' => 10]),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'fullname' => $this->input->post('fullname1', true) . ' ' . $this->input->post('fullname2', true),
				'active' => 1
			];

			$this->db->insert('users', $data);
			$this->session->set_flashdata('message', '<div class="alert-success" role="alert">Congratulation! Your Account Has Been Created. Please Login</div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');

		$this->session->set_flashdata('message', '<div class="alert-danger" role="alert">You Have Been Logout! </div>');
		redirect('auth');
	}
}
