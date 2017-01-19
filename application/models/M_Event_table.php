<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Event_table extends CI_Model {

  public function getNewEvents()
  {
    $this->load->database();

    $query = "select event.*,event_allocation.event from event
              left outer join event_allocation on event.event_id = event_allocation.event
              where event is null";
    $result = $this->db->query($query);

    return ($result->result());
  }

  //get event details by given id

  public function getEventDetailsByID($event_id)
  {
    $this->load->database();

    $query = "select event.*,customer.* from event
              left outer join customer on event.customer_nic = customer.nic
              where event.event_id=$event_id";
    $result = $this->db->query($query);
    return ($result->result());
  }


//delete event by id
public function deleteEventByID($event_id)
{
  $this->load->database();

  $query = "delete from event where event_id = $event_id";
  $result = $this->db->query($query);
  return ($result);
}


}
