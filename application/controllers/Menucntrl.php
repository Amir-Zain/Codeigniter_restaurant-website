<?php
defined('BASEPATH')or exit("No Acces");

class Menucntrl extends CI_Controller
{

	public function index()
	{
		$data['breakfast']=$this->Menu_tb->view1();
		$data['lunch']=$this->Menu_tb->view2();
		$data['dinner']=$this->Menu_tb->view3();
		$data['desserts']=$this->Menu_tb->view4();
		$data['drinks']=$this->Menu_tb->view5();
		$this->load->view('menu',$data);
	}
}
?>