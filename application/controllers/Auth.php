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
        if ($this->session->userdata('email')) {
            redirect('administrator');
        }
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Admin | Login';
            $this->load->view('auth/layout/header', $data);
            $this->load->view('auth/login');
            $this->load->view('auth/layout/footer');
        } else {
            // validasi succes
            $this->_login();
        }
    }

    public function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tbl_user', ['email' => $email])->row_array();
        //jika usernya ada
        if ($user) {
            //jika user aktif
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'level_id' => $user['level_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['level_id'] == 1) {
                        redirect('Administrator');
                    } else {
                        redirect('Admin');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum diaktifkan!!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar!!</div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        if ($this->session->userdata('email')) {
            redirect('administrator');
        }
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_user.email]', [
            'is_unique' => 'This email has already registration!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password to short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registration';
            $this->load->view('auth/layout/header', $data);
            $this->load->view('auth/registration');
            $this->load->view('auth/layout/footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' =>  htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.png',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'level_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];
            $this->db->insert('tbl_user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please Login</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('level_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda Berhasil Logout!!</div>');
        redirect('auth');
    }

    public function blocked()
    {
        $data['title'] = 'Error Pages';
        $this->load->view('auth/layout/header', $data);
        $this->load->view('auth/blocked');
        $this->load->view('auth/layout/footer');
    }
}
