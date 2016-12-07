

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Admin_Forms extends CI_Controller {

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

  public function index()
  {
    echo "hello";
  }

  //validate email
  public function validateAddPhotographer($username)
  {

    $this->load->model('M_Photographer_table');

    $photographers = $this->M_Photographer_table->getAllDetailsFromUserName($username);
    //print_r($photographers);
    if (count($photographers) > 0)
    {
      echo "<div style=color:red>User Already exists</div>";
    }else
    {
      echo "<i style=color:green class=\"fa fa-check fa-2x\" aria-hidden=\"true\"></i>";

    }

  }

  public function validateEmail()
  {
    $email = $_POST['email'];
    $this->load->model('M_Photographer_table');

    $photographers = $this->M_Photographer_table->getAllDetailsFromEmail($email);

    if ( !filter_var($email, FILTER_VALIDATE_EMAIL))
    {
      echo "<div style=color:red>Invalid E-mail address</div>";
    }elseif ((count($photographers) > 0))
    {
      echo "<div style=color:red>This E mail Already exists</div>";
    }else
    {
      echo "<i style=color:green class=\"fa fa-check fa-2x\" aria-hidden=\"true\"></i>";

    }

  }

  public function validateRePassword()
  {
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    if($password != $repassword )
    {
      echo "<div style=color:red>Password does't match</div>";
    }else {

      echo "<i style=color:green class=\"fa fa-check fa-2x\" aria-hidden=\"true\"></i>";
    }
  }

  public function validatePassword()
  {
    $password = $_POST['password'];

    if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,30}$/', $password) )
    {
      echo "<div style=color:red>Need numbers,symbols and length > 8 </div>";

    }
    else {
      echo "<i style=color:green class=\"fa fa-check fa-2x\" aria-hidden=\"true\"></i>";
    }
  }



  public function insertData()
  {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile_phone = $_POST['mobile_phone'];
    $land_phone = $_POST['land_phone'];
    $join_date = $_POST['join_date'];
    $experience = $_POST['experience'];
    $district = $_POST['district'];
    $category = $_POST['category'];
    $password = sha1($password);

    $this->load->model('M_Photographer_table');

    $photographers = $this->M_Photographer_table->insertData($username,$password,$email,$mobile_phone,$land_phone,$join_date,$experience,$district,$category,$name);
    $this->load->library('session');
    if($photographers)
    {
      $_SESSION['insertPhotographerMessage']="Photographer insert successfully";
    }else {
      $_SESSION['insertPhotographerMessage']="Photographer insert fails";
    }

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
}

?>
