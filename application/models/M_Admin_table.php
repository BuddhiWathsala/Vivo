<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin_table extends CI_Model {

  public function validate($username,$password)
  {
    $this->load->database();
    
    $admindata = $this->db->get_where("admin",array('username' => $username));
    if($admindata)
    {

      return $admindata->result();
    }else
    {
      return null;
    }
  }



}
