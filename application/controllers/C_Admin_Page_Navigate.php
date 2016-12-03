<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Admin_Page_Navigate extends CI_Controller {


  /* load the view addPhotographer.php with all categories data*/
  public function addPhotographer()
  {
    $this->load->model('M_Category_table');
    $categories = $this->M_Category_table->get_all_categories();
    $data = array();
    $i = 0;
    foreach ($categories->result() as $object) {
      $data[$i] = $object;
      echo $object->name."<br />";
      $i +=1;

    }
    $returnData['data']= $data;
    $this->load->view('admin/addPhotographer',$returnData);
  }

/* load the view viewAllPhotographer.php with all all photographer data*/
  public function viewAllPhotographers()
  {
    $this->load->model('M_Photographer_table');
    $photographers = $this->M_Photographer_table->getAllPhotographers();

    $this->load->model('M_Category_table');
    $categories = $this->M_Category_table->get_all_categories();
    $data = array();

    foreach($categories->result() as $object)
    {
      $data["$object->category_id"] = $object->name;

    }

    $returnData['photographers']= $photographers;
    $returnData['categories']= $data;
    $this->load->view('admin/viewAllPhotographers',$returnData);
  }

  /*view more details about a photographer*/
  public function viewMoreProtographer($photographer_id)
  {
    $this->load->model('M_Photographer_table');
    $photographers = $this->M_Photographer_table->getPhotographerFromID($photographer_id);

    $this->load->model('M_Category_table');
    $categories = $this->M_Category_table->get_all_categories();
    $data = array();

    foreach($categories->result() as $object)
    {
      $data["$object->category_id"] = $object->name;

    }
    $photographers[0]->category=$data[$photographers[0]->category];
    $returnData['photographers']= $photographers[0];

    $this->load->view('admin/viewMorePhotographer',$returnData);
  }
}
