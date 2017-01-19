<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Customer_table extends CI_Model {


  //get details from email

  //get all customer details
  public function getAllCustomers()
	{
    $this->load->database();

    $customers = $this->db->get("customer");
    return ($customers->result());
	}

  //get all customer details from nic
  public function getCustomerFromNIC($nic)
  {
    $this->load->database();

    $customer = $this->db->get_where("customer",array('nic'=> $nic));
    return ($customer->result());
  }

}
