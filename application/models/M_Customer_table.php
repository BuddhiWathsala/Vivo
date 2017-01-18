<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Customer_table extends CI_Model {


  //get details from email

  //get all customer details
  public function getAllCustomers()
	{
    $this->load->database();

    $photographers = $this->db->get("customer");
    return ($photographers->result());
	}

}
