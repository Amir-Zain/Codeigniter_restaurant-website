<?php
defined('BASEPATH')or exit("No Acces");

class Reservationcntrl extends CI_Controller
{

	public function index()
	{
		$this->load->view('reservation');
	}
}
?>