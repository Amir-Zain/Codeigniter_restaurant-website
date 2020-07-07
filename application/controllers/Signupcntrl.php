<?php
defined('BASEPATH')or exit("No Acces");

class Signupcntrl extends CI_Controller
{

	public function index()
	{
		$this->load->view('signup');
	}
	public function insert()
	{
		$this->form_validation->set_rules('name','name','required');
		
		$this->form_validation->set_rules('mobile','mobile','required');
		$this->form_validation->set_rules('place','place','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('password','password','required');
		
		if($this->form_validation->run()==false)
		{
			$data['details']=$this->User_tb->view();
			$this->load->view('signup',$data);
		}
		else
		{
			
			$name=$this->input->post('name');
			
			$mobile=$this->input->post('mobile');
			$place=$this->input->post('place');
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			
			$data=array('name'=>$name,'mobile'=>$mobile,'place'=>$place,'email'=>$email,'password'=>$password);
			$this->User_tb->insert($data);
			redirect('Login');
		}
	}
}
?>