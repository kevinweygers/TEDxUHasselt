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
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->load->library('form_validation');
        if ($this->form_validation->run() == FALSE) {
              $data['title'] = "Contact";
        $this->load->view('template/header', $data);
        $this->load->view('template/navigation');
        $this->load->view('view_contact');
        $this->load->view('template/footer');
        
    
        } else {
            $data['title'] = "Contact";
        $this->load->view('template/header', $data);
        $this->load->view('template/navigation');
        $this->load->view('formsucces');
        $this->load->view('template/footer');
        }
    }

}
