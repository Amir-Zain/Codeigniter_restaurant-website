<?php
defined('BASEPATH')or exit("No Acces");

class Addmenucntrl extends CI_Controller
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
			
		$data['details']=$this->Menu_tb->view();
		$this->load->view('backend/addmenu',$data);
		}
		
	}
	public function insert()
	{
		$config['upload_path']='./uploaded/';
		$config['allowed_types']='gif|jpg|png';
		$config['max_size']='';
		$config['max_width']='';
		$config['max_height']='';
		$this->load->library('upload',$config);

		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('price','price','required');
		$this->form_validation->set_rules('type','type','required');
		
		$this->form_validation->set_rules('info','info','required');
		
		if($this->form_validation->run()==false)
		{
			$data['details']=$this->Menu_tb->view();
			$this->load->view('backend/addmenu',$data);
		}
		else{
			if(!$this->upload->do_upload('image'))
			{
				$data['error']=$this->upload->display_errors();
				$this->load->view('backend/addmenu',$data);
			}
			else
			{
				$image=$this->upload->data('file_name');
			}

			$name=$this->input->post('name');
			$price=$this->input->post('price');
			$type=$this->input->post('type');
			
			$info=$this->input->post('info');
			
			$data=array('name'=>$name,'price'=>$price,'type'=>$type,'info'=>$info,'image'=>$image);
			$this->Menu_tb->insert($data);
			redirect('Addmenu');
		}


	}
	
	public function delete($id)
	{
		$this->Menu_tb->delete($id);
		redirect('Addmenu');
	}
}
?>