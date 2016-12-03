<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Photographer_table extends CI_Model {

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
  //get details from email

  //get all photographer details
  public function getAllPhotographers()
	{
    $this->load->database();

    $photographers = $this->db->get("photographer");
    return ($photographers->result());
	}

//get photographer detail from id
  public function getPhotographerFromID($id)
	{
    $this->load->database();

    $photographers = $this->db->get_where("photographer",array('photographer_id'=>$id));
    return ($photographers->result());
	}

  public function getAllDetailsFromUserName($username)
  {
    //echo "p : ".$username;
    //$photographers = "l";
    $this->load->database();
    $photographers = null;
    $photographers = $this->db->query("SELECT * FROM photographer WHERE username='".$username."'");
    //echo (count($photographers));
    //print_r($photographers->result());


    if(count($photographers) > 0)
    {
      //echo "ok";
      return $photographers->result();
    }else
    {
      echo "no";
      return null;
    }
  }

  public function getAllDetailsFromEmail($email)
  {
    //echo "p : ".$username;
    //$photographers = "l";
    $this->load->database();
    $photographers = null;
    $photographers = $this->db->query("SELECT * FROM photographer WHERE email='".$email."'");
    //echo (count($photographers));
    //print_r($photographers->result());


    if(count($photographers) > 0)
    {
      //echo "ok";
      return $photographers->result();
    }else
    {
      echo "no";
      return null;
    }
  }

  public function insertData($username,$password,$email,$mobile_phone,$land_phone,$join_date,$experience,$district,$category,$name)
  {
    $this->load->database();
    $join_date= date("Y-m-d", strtotime($join_date) );
    $photographers = $this->db->query("insert into photographer
    (username,password,mobile_phone,land_phone,email,join_date,experience,profile_picture,district,no_of_events,points,portfolio_path,category,name)
    values('$username','$password',$mobile_phone,$land_phone,'$email','$join_date',$experience,'/admin','$district',0,0,'admin/',$category,'$name')");

    if($photographers)
    {
      return true;
    }else
    {
      return false;
    }
  }
}
