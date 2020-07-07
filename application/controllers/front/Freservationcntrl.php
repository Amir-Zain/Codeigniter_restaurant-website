<?php
defined('BASEPATH')or exit("No Acces");

class Freservationcntrl extends CI_Controller
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
			
		$data['rows']=$this->Table_tb->view1();
		$data['table']=$this->Table_tb->viewA();

		$data['time']=$this->Time_tb->view();
		$this->load->view('front/reservation',$data);
		}
		
	}
	public function insert()
	{

		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('mobile','mobile','required');
		$this->form_validation->set_rules('datex','datex','required');
		$this->form_validation->set_rules('seats','seats','required');
		$this->form_validation->set_rules('time','time','required');
		if($this->form_validation->run()==false)
		{
			$data['details']=$this->Table_tb->view();
			$this->load->view('backend/addtable',$data);
		}
		else
		{
			
			
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$mobile=$this->input->post('mobile');
			$datex=$this->input->post('datex');
			$seats=$this->input->post('seats');
			$time=$this->input->post('time');
			
			
			
			
			$data=array('name'=>$name,'email'=>$email,'mobile'=>$mobile,'datex'=>$datex,'seats'=>$seats,'time'=>$time);
			$this->Reservation_tb->insert($data);
			
			$this->Table_tb->update($seats);
			redirect('Freservation');


		}
	}
}
?>