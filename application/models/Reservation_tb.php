<?php
defined("BASEPATH")or exit("No acces");
class Reservation_tb extends CI_Model
{
	public function insert($insert)
	{
		$this->db->insert('reservation_tb',$insert);
	}
	public function view()
	{
		$this->db->select('*')->from('reservation_tb');
		$query=$this->db->get();
		return $query->result();
	}
		public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('reservation_tb');
	}
	
}
?>