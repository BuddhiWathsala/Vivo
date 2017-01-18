

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Admin_Forms extends CI_Controller {


  public function index()
  {
    echo "hello";
  }

  //validate email
  public function validateAddPhotographer()
  {
     $username = $_POST['username'];
     //echo $username;
     if($username == null || (!isset($username)))
     {
         echo "<div style=color:red>Please enter a user name</div>";
         return;
     }
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

    $uploadfile = $_SERVER['DOCUMENT_ROOT'] ;
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

    $base = base_url();

    //move uploaded file
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    //$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

    move_uploaded_file($file_tmp,"images/team/".$file_name);

    $path = "images/team/".$file_name;


    $this->load->model('M_Common_Functions');
    $password = $this->M_Common_Functions->cryptPassword($password);

    $this->load->model('M_Photographer_table');

    $photographers = $this->M_Photographer_table->insertData($username,$password,$email,$mobile_phone,$land_phone,$join_date,$experience,$district,$category,$name,$path);
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

  //validate admin login
  public function adminLogin()
  {

    if(!isset($_POST['username']) || !isset($_POST['password']))
    {
      $this->load->library('session');
      $_SESSION['loginMessage'] = "Incorrect Username/Password";
      $this->load->view('admin/adminLoginPage');
      return;
    }
    $username = $_POST['username'];
    $password = $_POST['password'];

    $this->load->model('M_Admin_table');
    $this->load->model('M_Common_Functions');
    $admindata = $this->M_Admin_table->validate($username,$password);
    $encryptedPassword = crypt($password,$admindata[0]->password);

    if(count($admindata)<=0)
    {
      $this->load->library('session');
      $_SESSION['loginMessage'] = "Incorrect Username/Password";
      $this->load->view('admin/adminLoginPage');
      return;
    }
    if($admindata[0]->password == $encryptedPassword)
    {
      $this->load->view('admin');
    }else {
      $this->load->library('session');
      $_SESSION['loginMessage'] = "Incorrect Username/Password";
      $this->load->view('admin/adminLoginPage');
    }

  }
}

?>
