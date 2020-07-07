<?php
defined('BASEPATH')or exit("No Acces");

class Indexcntrl extends CI_Controller
{

	public function index()
	{
		$this->load->view('index');
	}
}
?>