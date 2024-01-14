<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class authController extends CI_Controller {
    public function index() {
        redirect(base_url('/login'));
    }

    public function loginView() {
        $this->load->view('auth/login');
    }

    public function registerView() {
        $this->load->view('auth/register');
    }

    public function forgotView() {
        $this->load->view('auth/forgot');
    }
}