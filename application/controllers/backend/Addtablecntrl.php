<?php
defined('BASEPATH')or exit("No Acces");

class Addtablecntrl extends CI_Controller
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
			
		$data['details']=$this->Table_tb->view();
		$this->load->view('backend/addtable',$data);
		}
		
	}
	public function insert()
	{
		
		$this->form_validation->set_rules('table','table','required');
		if($this->form_validation->run()==false)
		{
			$data['details']=$this->Table_tb->view();
			$this->load->view('backend/addtable',$data);
		}
		else
		{
			
			
			$table=$this->input->post('table');
			
			$status=$this->input->post('status');
			
			$nul = '';
			$data=array('table_name'=>$nul,'status'=>$status);
			$this->Table_tb->insert($data);
			redirect('Addtable');
		}
	}
	public function delete($id)
	{
		$this->Table_tb->delete($id);
		redirect('Addtable');
	}
}
?>