<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $data['title'] = "Home";
        $this->load->view('template/header', $data);
        $this->load->view('template/navigation');

        $this->load->view('view_home');
        $this->load->view('template/footer');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */