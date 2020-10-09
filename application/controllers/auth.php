<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        // echo base_url();


        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[12]');


        if ($this->form_validation->run() == false) {
            $data['title'] = "Login";
            $this->load->view('template/login_header', $data);
            $this->load->view('auth');
            $this->load->view('template/login_footer');
        } else {
            $this->__login();
        }
    }

    private function __login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $data = ['email' => $email];
        $user = $this->db->get_where('form_user', $data)->row_array();
        if ($user == null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email, Does Not Exists ! </div>');
            redirect('auth');
        } else {
            if (password_verify($password, $user['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Success, Login ! </div>');
                $datasession = ['email' => $email];
                $this->session->set_userdata($datasession);
                redirect('auth/user');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Error, Wrong Password ! </div>');
                redirect('auth');
            }
        }
    }

    public function user()
    {
        $this->load->view('user');
    }

    private function logout()
    {
        $this->session->unset_userdata('email');
        redirect('auth');
    }

    public function registration()
    {
        $this->form_validation->set_rules('fullname', 'Full Name', 'required|trim', ['required' => 'Isilah Jangan Malas!']);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email||is_unique[form_user.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|max_length[12]');
        $this->form_validation->set_rules('passwordCon', 'Confirm Password', 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Registration";
            $this->load->view('template/register_header', $data);
            $this->load->view('registration');
            $this->load->view('template/register_footer');
        } else {

            $data = [
                'fullname' => $this->input->post('fullname'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            ];
            $this->db->insert('form_user', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Success, User Has Been Created ! </div>');

            redirect('auth');
        }
    }
}
