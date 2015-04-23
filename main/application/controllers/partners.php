<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Partners extends CI_Controller {

    public function index() {
        $data['title'] = "Partners";
        $this->load->view('template/header', $data);
        $this->load->view('template/navigation');

        $this->load->view('view_partners');
        $this->load->view('template/footer');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */