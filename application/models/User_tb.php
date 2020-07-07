<?php
defined("BASEPATH")or exit("No acces");
class User_tb extends CI_Model
{
	public function insert($insert)
	{
		$this->db->insert('user_tb',$insert);
	}

	public function login($email,$password)
	{
		$query=$this->db->get_where('user_tb',array('email'=>$email,'password'=>$password));
		foreach($query->result()as $value)
		{
			$this->id=$value->id;
			$this->email=$value->email;
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
		$query=$this->db->get_where('user_tb',array('id'=>$this->id));
		foreach($query->result()as $value)
		{
			$this->id=$value->id;
			$this->email=$value->email;
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
				$this->session->unset_userdata('email');
				$this->session->unset_userdata('password');
				$this->loggedin=FALSE;
			}
		
}
?>