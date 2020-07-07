<?php
defined('BASEPATH')or exit("No Acces");

class Logincntrl extends CI_Controller
{

	public function index()
	{
		$this->load->view('login');
	}
	public function login()
	{
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('password','password','required');
		if($this->form_validation->run()==false)
		{
			$this->load->view('login');
		}
		else
		{
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			if($this->User_tb->login($email,$password))
			{
				$id=$this->User_tb->id;
				if($id>0)
				{
					$this->session->set_userdata('id',$id);
					$this->session->set_userdata('email',$email);
					$this->session->set_userdata('password',$password);
					$this->User_tb->start_session();
					redirect('Home');
				}
			}
			else
			{
				$data['error']='invalid email/password';
				$this->load->view('login');
			}
		}
	}
	public function logout()
	{
		$this->User_tb->logout();
		redirect('Indexcntrl');
	}
}
?>