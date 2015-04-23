<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function index() {
        $data['title'] = "Contact";
        $this->load->view('template/header', $data);
        $this->load->view('template/navigation');

        $this->load->view('view_contact');
        $this->load->view('template/footer');
    }

    public function login() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('username', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('view_contact');
        } else {
            echo 'walla';
        }
    }

}
