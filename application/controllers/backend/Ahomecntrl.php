<?php
defined('BASEPATH')or exit("No Acces");

class AHomecntrl extends CI_Controller
{

	public function index()
	{
		$this->Admin_tb->start_session();
		if(!$this->Admin_tb->is_loggedin())
		{
			$this->load->view('login');
		}
		else
		{
			
		
		$this->load->view('backend/home');
		}
	}
}
?>