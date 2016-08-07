<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
* NAME : Dashboard Model
* TYPE : CI_Model
* DEVELOPER : Filjumar Jumamoy	
* DATE DEVELOPED: 01/18/16
* DESCRIPTION: Dashboard
*/

class MdDash extends CI_Model {

	private $table = "dashboard";
	private $client = "client";
	private $sales = "sales";
	public function __construct()
	{
		parent::__construct();
	}
	public function getTotalClients()
	{
		$q = $this->db->select()
			->from($this->client)
			->get();
			return $q->num_rows();
	}
	public function getTotalSales()
	{
		$q = $this->db->select()
			->from($this->sales)
			->get();
			return $q->num_rows();
	}
	public function fetchAll(){
		$this->db->select('')
		->from("proposals as p")
		->join("client as c","p.client_id=c.client_id",'INNER')
		->join("sales as s","s.proposals_id = p.proposals_id",'INNER')
		->join("payment_terms as pt","pt.sales_id = s.sales_id",'INNER');
		$query=$this->db->get();
		return($query->result_array());
	}
}

;?>