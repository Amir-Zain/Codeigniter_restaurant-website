<?php
defined('BASEPATH')or exit("No Acces");

class Aboutcntrl extends CI_Controller
{

	public function index()
	{
		$this->load->view('about');
	}
		
}
?>