<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class tedxuhasselt2016 extends CI_Controller {

    public function index() {
        $data['title'] = "TEDxUHasselt2016";
        $this->load->view('template/header', $data);
        $this->load->view('template/navigation');

        $this->load->view('view_tedxuhasselt2016');
        $this->load->view('template/footer');
    }

}
