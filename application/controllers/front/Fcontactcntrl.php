<?php
defined('BASEPATH')or exit("No Acces");

class Fcontactcntrl extends CI_Controller
{

	public function index()
	{
		$this->User_tb->start_session();
		if(!$this->User_tb->is_loggedin())
		{
			$this->load->view('index');
		}
		else
		{
			
			$this->load->view('front/contact');
		}
	}
}
?>