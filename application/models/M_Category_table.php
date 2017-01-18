<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Category_table extends CI_Model {

  public function get_all_categories()
  {
    $this->load->database();
    $categories = $this->db->query("SELECT * FROM category");
    if($categories)
    {
      return $categories;
    }else
    {
      return null;
    }
  }

  

}
