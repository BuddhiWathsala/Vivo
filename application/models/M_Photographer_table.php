<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Photographer_table extends CI_Model {

 
  //get details from email

  //get all photographer details
  public function getAllPhotographers()
	{
    $this->load->database();

    $photographers = $this->db->get("photographer");
    return ($photographers->result());
	}

  //get all photographer details
  public function getRankings()
{
    $this->load->database();
    $this->db->select('name, points,no_of_events');
    
    $this->db->where('points !=',0 );
    $this->db->order_by("points");
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

  public function insertData($username,$password,$email,$mobile_phone,$land_phone,$join_date,$experience,$district,$category,$name,$path)
  {
    $this->load->database();
    $join_date= date("Y-m-d", strtotime($join_date) );
    $photographers = $this->db->query("insert into photographer
    (username,password,mobile_phone,land_phone,email,join_date,experience,district,no_of_events,points,portfolio_path,category,name,profile_picture)
    values('$username','$password',$mobile_phone,$land_phone,'$email','$join_date',$experience,'$district',0,0,'admin/',$category,'$name','$path')");

    if($photographers)
    {
      return true;
    }else
    {
      return false;
    }
  }
}
