<?php
defined("BASEPATH")or exit("No acces");
class Menu_tb extends CI_Model
{
	public function insert($insert)
	{
		$this->db->insert('menu_tb',$insert);
	}
	public function view()
	{
		$this->db->select('*')->from('menu_tb');
		$query=$this->db->get();
		return $query->result();
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('menu_tb');
	}
	public function view1()
	{
		
         $a='Breakfast';

		$this->db->select('*');
		$this->db->where('type',$a);
		$query=$this->db->get('menu_tb');
		//Print_r($this->db->last_query());exit;
		return $query->result(); 
	}
	public function view2()
	{
		
         $a='Lunch';

		$this->db->select('*');
		$this->db->where('type',$a);
		$query=$this->db->get('menu_tb');
		//Print_r($this->db->last_query());exit;
		return $query->result(); 
	}
	public function view3()
	{
		
         $a='Dinner';

		$this->db->select('*');
		$this->db->where('type',$a);
		$query=$this->db->get('menu_tb');
		//Print_r($this->db->last_query());exit;
		return $query->result(); 
	}
	public function view4()
	{
		
         $a='Desserts';

		$this->db->select('*');
		$this->db->where('type',$a);
		$query=$this->db->get('menu_tb');
		//Print_r($this->db->last_query());exit;
		return $query->result(); 
	}
	public function view5()
	{
		
         $a='Drinks';

		$this->db->select('*');
		$this->db->where('type',$a);
		$query=$this->db->get('menu_tb');
		//Print_r($this->db->last_query());exit;
		return $query->result(); 
	}
}
?>