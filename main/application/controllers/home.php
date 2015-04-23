<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    

	public function index()
	{
            $this->load->view('template/header');
            $this->load->view('template/navigation');
            
		$this->load->view('home');
                 $this->load->view('template/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */