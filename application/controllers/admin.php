<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin.php');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */