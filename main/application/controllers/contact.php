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

}