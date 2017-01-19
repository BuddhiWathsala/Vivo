

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'master/PHPMailerAutoload.php';
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

//validate re password
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

//validate password
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


//insetrt data into photographers
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
      $this->load->model('M_Event_table');
      $result = $this->M_Event_table->getNewEvents();
      $data['newEvents'] = $result;
      $this->load->view('admin/addPhotographer',$data);
    }else {
      $this->load->library('session');
      $_SESSION['loginMessage'] = "Incorrect Username/Password";
      $this->load->view('admin/adminLoginPage');
    }

  }

  //confirm event and add photographer with sending e-mail
  public function confirmEvent()
  {
    if(isset($_POST['photographer']) && isset($_POST['event']))
    {
      $this->load->library('session');
      $photographer = $_POST['photographer'];
      $event = $_POST['event'];
      echo $photographer;
      $this->load->model('M_Event_Allocation_table');
      $flag = $this->M_Event_Allocation_table->confirmEvent($event,$photographer);
      $this->load->model('M_Event_table');
      $this->load->model('M_Photographer_table');
      $customerDetails = $this->M_Event_table->getEventDetailsByID($event);
      $photographerDeatils = $this->M_Photographer_table->getPhotographerFromID($photographer);
      if($flag)
      {
        $mail = new PHPMailer;
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';              // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'webmisproject@gmail.com';                 // SMTP username
        $mail->Password = '#5group135#';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->From = 'webmisproject@gmail.com';
        $mail->FromName = 'Mailer';
    //$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
        $mail->addAddress('b.wathsala.bw@gmail.com');
        //$mail->addAddress($photographerDeatils[0]->email);
        //print_r(($customerDetails[0]));
        //$mail->addAddress($email);// Name is optional
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment("img/vendor images/" . $_FILES['desimage']['name']);    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Your Event added successfully';
        $mail->Body = 'ok';
        $mail->AltBody = 'ok';

        if (!$mail->send()) {
             $_SESSION['confirmEventMessage'] = "Successfuly confirm but contact error please send mail to customer mannualy";
        } else {
            $_SESSION['confirmEventMessage'] = "Successfuly confirm this event";
        }

      }else{
        $_SESSION['confirmEventMessage'] = "Confirmation error";
      }

    }else{
      $_SESSION['confirmEventMessage'] = "Confirmation error";
    }


    $this->load->model('M_Customer_table');
    $events = $this->M_Event_table->getNewEvents();
    $customers = $this->M_Customer_table->getAllCustomers();

    $returnData['newEventsMore']= $events;
    $returnData['customers'] = $customers;

    $this->load->view('admin/viewNewEvents',$returnData);
  }

  //reject event


  public function rejectEvent($event_id,$customer_nic)
  {

      $this->load->library('session');


      $this->load->model('M_Event_table');
      $flag = $this->M_Event_table->deleteEventByID($event_id);

      $this->load->model('M_Customer_table');
      $customerDetails = $this->M_Customer_table-> getCustomerFromNIC($customer_nic);

      if($flag)
      {
        $mail = new PHPMailer;
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';              // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'webmisproject@gmail.com';                 // SMTP username
        $mail->Password = '#5group135#';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->From = 'webmisproject@gmail.com';
        $mail->FromName = 'Mailer';

        $mail->addAddress('b.wathsala.bw@gmail.com');

        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Your event was rejected';
        $mail->Body = 'ok';
        $mail->AltBody = 'ok';

        if (!$mail->send()) {
             $_SESSION['confirmEventMessage'] = "Successfuly reject the event";
        } else {
            $_SESSION['confirmEventMessage'] = "Successfuly reject the event";
        }

      }else{
        $_SESSION['confirmEventMessage'] = "Rejection  error";
      }




    $this->load->model('M_Customer_table');
    $events = $this->M_Event_table->getNewEvents();
    $customers = $this->M_Customer_table->getAllCustomers();

    $returnData['newEventsMore']= $events;
    $returnData['customers'] = $customers;

    $this->load->view('admin/viewNewEvents',$returnData);
  }

}

?>
