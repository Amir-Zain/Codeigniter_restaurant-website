<?php
defined('BASEPATH')or exit("No Acces");

class Areservationscntrl extends CI_Controller
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
			
		
		$data['details']=$this->Reservation_tb->view();
		$this->load->view('backend/reservations',$data);
		}
		
	}
	public function delete($id,$seats)
	{
		$this->Reservation_tb->delete($id);
		$this->Table_tb->update2($seats);
		redirect('Breservations');
	} 
}
?>