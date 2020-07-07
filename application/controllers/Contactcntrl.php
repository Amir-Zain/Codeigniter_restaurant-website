<?php
defined('BASEPATH')or exit("No Acces");

class Contactcntrl extends CI_Controller
{

	public function index()
	{
		$this->load->view('contact');
	}
}
?>