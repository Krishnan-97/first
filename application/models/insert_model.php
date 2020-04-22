<?php
class Insert_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function create_file(){
		$data = array(
			'name' => $this->input->post('name'),
			'age' => $this->input->post('age'),
		);
		return $this->db->insert('exp',$data);

	}

	public function create_file2(){
		$data = array(
			'name' => $this->input->post('name'),
			'age' => $this->input->post('age'),
			'salary' => $this->input->post('salary'),
		);
		return $this->db->insert('expsal',$data);

	}

	public function create_file3(){
		$data = array(
			'name' => $this->input->post('plr'),
			'lw' => $this->input->post('lw3'),
			'st' => $this->input->post('st3'),
			'rw' => $this->input->post('rw3'),
			'lcb' => $this->input->post('lcb3'),
			'cb' => $this->input->post('cb3'),
			'rcb' => $this->input->post('rcb3'),
			'gk' => $this->input->post('gk3'),
		);
		return $this->db->insert('fant',$data);

	}

	function displayrecords()
	{
	$query=$this->db->query("select * from exp");
	return $query->result();
	}

	function displayrecords1()
	{
	$query=$this->db->query("select * from expsal");
	return $query->result();
	}

	function displayrecords2()
	{
	$query=$this->db->query("select exp.name,exp.age,expsal.salary from exp left outer join expsal on exp.name=expsal.name order by exp.id");
	return $query->result();
	}

	function displayrecords3()
	{
	$query=$this->db->query("select * from exp where not exists(select * from expsal where exp.name=expsal.name)");
	return $query->result();
	}

	
		

}
