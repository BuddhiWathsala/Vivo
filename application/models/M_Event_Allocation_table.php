<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Event_Allocation_table extends CI_Model {

  //confirm event with adding photographer
  public function confirmEvent($event,$photographer)
  {
    $this->load->database();
    $flag = $this->db->query("INSERT INTO event_allocation VALUES($event,$photographer)");
    if($flag)
    {
      return true;

    }else{
      return false;
    }
  }

}
