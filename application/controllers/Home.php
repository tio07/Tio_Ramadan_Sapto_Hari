<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = "Home";
        $this->load->view('header', $data);
        $this->load->view('navbar');
        $this->load->view('index');
    }

    public function accounts()
    {

        $data['title'] = "Account";
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('header', $data);
        $this->load->view('account', $data);
    }

    public function list()
    {

        $data['title'] = "User List";
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('header', $data);
        $this->load->view(' user-list', $data);
    }
}
