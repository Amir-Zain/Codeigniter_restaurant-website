<?php
defined('BASEPATH')or exit("No Acces");

class Addtimecntrl extends CI_Controller
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
			
		$data['details']=$this->Time_tb->view();
		$this->load->view('backend/addtime',$data);
		}
		
	}
	public function insert()
	{
		
		$this->form_validation->set_rules('time','time','required');
		if($this->form_validation->run()==false)
		{
			$data['details']=$this->Time_tb->view();
			$this->load->view('backend/addtime',$data);
		}
		else
		{
			
			
			$time=$this->input->post('time');
			
			$status=$this->input->post('status');
			
			$data=array('time'=>$time,'status'=>$status);
			$this->Time_tb->insert($data);
			redirect('Addtime');
		}
	}
	public function delete($id)
	{
		$this->Time_tb->delete($id);
		redirect('Addtime');
	}
}
?>