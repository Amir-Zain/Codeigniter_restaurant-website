<?php
defined("BASEPATH")or exit("No acces");
class Admin_tb extends CI_Model
{
	

	public function login($username,$password)
	{
		$query=$this->db->get_where('admin_tb',array('username'=>$username,'password'=>$password));
		foreach($query->result()as $value)
		{
			$this->id=$value->id;
			$this->username=$value->username;
			$this->password=$value->password;
			return true;
		}
		return false;
	}
	public function start_session()
	{
		if($this->session->userdata('id'))
		{
			$this->id=$this->session->userdata('id');
			if($this->user_exist())
			{
				$this->user_exist();
				$this->loggedin=TRUE;
			}
		}
		else
		{
			$this->loggedin=FALSE;
		}
	}
	public function user_exist()
	{
		$query=$this->db->get_where('admin_tb',array('id'=>$this->id));
		foreach($query->result()as $value)
		{
			$this->id=$value->id;
			$this->username=$value->username;
			$this->password=$value->password;
			return $value;
		}
		return false;
	}
	public function is_loggedin()
	{
		return $this->loggedin;
	}
public function logout()
			{
				$this->session->unset_userdata('id');
				$this->session->unset_userdata('username');
				$this->session->unset_userdata('password');
				$this->loggedin=FALSE;
			}
		
}
?>