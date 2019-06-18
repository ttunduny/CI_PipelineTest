<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testcase extends CI_Controller {

	public function get_testcase(){
		$this->load->view('view_testcase');
	}
}
