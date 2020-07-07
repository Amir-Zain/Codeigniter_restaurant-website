<?php
defined("BASEPATH")or exit("No acces");
class Time_tb extends CI_Model
{
	public function insert($insert)
	{
		$this->db->insert('time_tb',$insert);
	}
	public function view()
	{
		$this->db->select('*')->from('time_tb');
		$query=$this->db->get();
		return $query->result();
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('time_tb');
	}
}
?>