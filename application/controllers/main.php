<?php if ( ! defined('APPPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index() {
		$data["site_name"] = "blah";
		$this->load->view('global/page_redirect', $data);
	}
}

?>