<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class News extends CI_Controller {

    public function index() {
        $data['title'] = "News";
        $this->load->view('template/header', $data);
        $this->load->view('template/navigation');
        $this->load->view('view_news');
        $this->load->view('template/footer');
    }

}
