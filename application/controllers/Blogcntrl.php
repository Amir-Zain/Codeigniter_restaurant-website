<?php
defined('BASEPATH')or exit("No Acces");

class Blogcntrl extends CI_Controller
{

	public function index()
	{
		$this->load->view('blog');
	}
}
?>