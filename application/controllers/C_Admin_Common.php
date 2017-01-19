<?php

require 'master/PHPMailerAutoload.php';
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Admin_Common extends CI_Controller {


  //contact customer :accept
  public function viewMoreEvent($event_id)
  {

    $this->load->model('M_Event_table');
    $this->load->model('M_Photographer_table');
    $photographers =  $this->M_Photographer_table->getAllPhotographers();
    $result = $this->M_Event_table->getEventDetailsByID($event_id);

    $data['event'] = $result[0];
    $data['photographers'] = $photographers;
    $this->load->view('admin/viewMoreEvent',$data);
  }

}
