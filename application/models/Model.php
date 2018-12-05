<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {


	public function __construct()
	{

	}

	public function insert($table,$data)
	{
		return $this->db->insert($table,$data);
    }

    public function select_all($table)
    {
    	$this->db->select("*");
    	$this->db->from($table);
    	$r =  $this->db->get();
    	return $r->result();


    }

    public function delete($table,$where)
    {
    	return $this->db->delete($table,$where);
    }

    public function select_where($table,$where)
    {

        $this->db->select("*");
        $this->db->from($table);
        $this->db->where($where);
        $r =  $this->db->get();
        return $r->result();
    }

    public function update($table,$data,$where)
    {
       return  $this->db->update($table,$data,$where);

    }

    public function join_two($table1,$table2,$con)
    {
         $this->db->select("*");
        $this->db->from($table1);
        $this->db->join($table2,$con);
         $r =  $this->db->get();
        return $r->result();

    }







	
}
