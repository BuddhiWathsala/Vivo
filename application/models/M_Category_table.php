<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Category_table extends CI_Model {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see https://codeigniter.com/user_guide/general/urls.html
   */
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
