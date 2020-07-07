<?php
defined('BASEPATH')or exit("No Acces");

class Alogincntrl extends CI_Controller
{

	public function index()
	{
		$this->load->view('backend/login');
	}
		public function login()
		{
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		if($this->form_validation->run()==false)
		{
			$this->load->view('backend/login');
		}
		else
		{
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			if($this->Admin_tb->login($username,$password))
			{
				$id=$this->Admin_tb->id;
				if($id>0)
				{
					$this->session->set_userdata('id',$id);
					$this->session->set_userdata('username',$username);
					$this->session->set_userdata('password',$password);
					$this->User_tb->start_session();
					redirect('Bhome');
				}
			}
			else
			{
				$data['error']='invalid email/password';
				$this->load->view('backend/login');
			}
		}
	}
	public function logout()
	{
		$this->User_tb->logout();
		redirect('Admin');
	}
}
?>