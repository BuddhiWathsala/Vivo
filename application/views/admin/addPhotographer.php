<?php
defined('BASEPATH') OR exit('No direct script access ds allowed');
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/admin/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/admin_js.js"></script>


</head>
<?php

  $this->load->library('session');

  if(isset($_SESSION['insertPhotographerMessage']))
  {
    echo "<script type='text/javascript'>alert('".$_SESSION['insertPhotographerMessage']."')</script>";
    $_SESSION['insertPhotographerMessage'] =null;
  }
?>
<body>

    <div id="wrapper">

      <!-- Navigation -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <!-- Brand and toggle get grouped for better mobile display -->
          <?php $this->load->view('includes/header.php'); ?>
          <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <?php $this->load->view('includes/admin_nav/admin_nav_active_profile.php'); ?>
          <!-- /.navbar-collapse -->
      </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Register a Photographer
                        </h1>

                    </div>
                </div>
                <!-- /.row -->




                <form role="form" method=post action="<?php echo base_url();?>index.php/C_Admin_Forms/insertData/">

                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-2">
                          <label>Name </label>
                        </div>
                        <div class="col-sm-6">
                          <input id="name" class="form-control" name="name" required>
                        </div>
                      </div>

                      <br />

                      <div class="row">
                        <div class="col-sm-2">
                          <label>User Name </label>
                        </div>
                        <div class="col-sm-6">
                          <input id="username" class="form-control" name="username">
                        </div>

                        <div id="validate_username" class="col-sm-4">

                        </div>
                      </div>

                      <br />

                      <div class="row">
                        <div class="col-sm-2">
                          <label>E mail </label>
                        </div>
                        <div class="col-sm-6">
                          <input id="email" type="email" class="form-control" name="email" />
                        </div>

                        <div id="validate_email" class="col-sm-4">

                        </div>
                      </div>

                      <br />
                      <div class="row">
                        <div class="col-sm-2">
                          <label>Password </label>
                        </div>
                        <div class="col-sm-6">
                          <input id="password" type="password" class="form-control" name="password" />
                        </div>
                        <div id="validate_password" class="col-sm-4">

                        </div>
                      </div>

                      <br />

                      <div class="row">
                        <div class="col-sm-2">
                          <label>Re enter Password </label>
                        </div>
                        <div class="col-sm-6">
                          <input id="repassword" type="password" class="form-control" name="repassword" />
                        </div>

                        <div id="validate_repassword" class="col-sm-4">

                        </div>
                      </div>

                      <br />

                      <div class="row">
                        <div class="col-sm-2">
                          <label>Mobile Phone </label>
                        </div>
                        <div class="col-sm-6">
                          <input id="mobile_phone" class="form-control" name="mobile_phone" />
                        </div>
                      </div>

                      <br />
                      <div class="row">
                        <div class="col-sm-2">
                          <label>Land Phone </label>
                        </div>
                        <div class="col-sm-6">
                          <input id="land_phone" class="form-control" name="land_phone" />
                        </div>
                      </div>


                      <br />

                      <div class="row">
                        <div class="col-sm-2">
                          <label>Join Date </label>
                        </div>


                        <div class="col-sm-6"  >
                          <input  type="text" placeholder="Pickup Date" id="datepicker"  name="join_date" class="form-control" >
                        </div>
                      </div>

                      <br />

                      <div class="row">
                        <div class="col-sm-2">
                          <label>Experience </label>
                        </div>
                        <div class="col-sm-6">
                          <input id = "experience" type="text" class="form-control" name="experience" />
                        </div>
                      </div>

                      <br />

                      <div class="row">
                        <div class="col-sm-2">
                          <label>District </label>
                        </div>
                        <div id="district" class="col-sm-6">
                          <select name="district">
                            <option value="Colombo">Colombo</option>
                            <option value="Gampaha">Gampaha</option>
                            <option value="Kaluthara">Kaluthara</option>
                            <option value="Kandy">Kandy</option>
                            <option value="Galle">Galle</option>
                            <option value="Matara">Matara</option>
                            <option value="Hambantota">Hambantota</option>
                            <option value="Badulla">Badulla</option>
                            <option value="Monaragala">Monaragal</option>
                            <option value="Nuwara-eliya">Nuwara Eliya</option>
                            <option value="Batticaloa">Batticaloa</option>
                            <option value="Anuradhapura">Anuradhapura</option>
                            <option value="Polonnaruwa">Polonnaruwa</option>
                            <option value="Ampara">Ampara</option>
                            <option value="Jaffna">Jaffna</option>
                            <option value="Kegalle">Kegalle</option>
                            <option value="Kilinochchi">Kilinochchi</option>
                            <option value="Kurunegala">Kurunegala</option>
                            <option value="Mullaitiv">Mullaitiv</option>
                            <option value="Puttalam">Puttalam</option>
                            <option value="Ratnapura">Ratnapura</option>
                            <option value="Vavunia">Vaunia</option>
                          </select>
                        </div>
                      </div>

                      <br />
                      <div class="row">
                        <div class="col-sm-2">
                          <label>Category </label>
                        </div>
                        <div class="col-sm-6">
                          <select name="category">
                            <?php

                              foreach ($data as $object) {
                                echo "<option value=$object->category_id >".$object->name."</option>";
                              }
                            ?>
                          </select>
                        </div>
                      </div>
                      <br  />

                      <div class="row">
                        <div class="col-sm-2">

                        </div>
                        <div class="col-sm-6" >
                          <button id="addPhotographer" type="submit" class="btn btn-primary btn-lg">Add Photographer</button>

                        </div>
                      </div>

                      <br />
                </form>

                    </div>


                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/admin/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css" />
    <script type="text/javascript">
    $(function() {
       $( "#datepicker" ).datepicker();
    });

    $("#username").on("input",function ()
    {
    //$("#results").show();

    	$username = $("#username").val();

    	//alert($repassword);
    	if ($username.length > 0)
    	{
          //alert($username);
    	    $.get("<?php echo base_url();?>index.php/C_Admin_Forms/validateAddPhotographer/"+$username,{},function ($data) {
    	        $("#validate_username").html($data);

              if(($data.search("User Already exists") > 0) )
              {
                document.getElementById('addPhotographer').disabled = true;
              }else{
                document.getElementById('addPhotographer').disabled = false;
              }
    	    });


    	}

    });

    $("#email").on("input",function ()
    {
    //$("#results").show();

    	$email = $("#email").val();

    	//alert($repassword);
    	if ($email.length > 0)
    	{
          //alert($username);
    	    $.post("<?php echo base_url();?>index.php/C_Admin_Forms/validateEmail/",{'email':$email},function ($data) {
    	        $("#validate_email").html($data);

              if(($data.search("Invalid E-mail address") > 0) || ($data.search("This E mail Already exists") > 0))
              {
                document.getElementById('addPhotographer').disabled = true;
              }else{
                document.getElementById('addPhotographer').disabled = false;
              }
    	    });


    	}

    });

    $("#repassword").on("input",function ()
    {
    //$("#results").show();

    	$password = $("#password").val();
      $repassword = $("#repassword").val();
    	//alert($repassword);
    	if ($repassword.length > 0)
    	{
          //alert($username);
    	    $.post("<?php echo base_url();?>index.php/C_Admin_Forms/validateRePassword/",{'password':$password,'repassword':$repassword},function ($data) {
    	        $("#validate_repassword").html($data);

              if($data.search("Password does't match") > 0)
              {
                document.getElementById('addPhotographer').disabled = true;
              }else{
                document.getElementById('addPhotographer').disabled = false;
              }
    	    });
    	}

    });

    $("#password").on("input",function ()
    {
    //$("#results").show();

    	$password = $("#password").val();

    	//alert($repassword);
    	if ($password.length > 0)
    	{
          //alert($username);
    	    $.post("<?php echo base_url();?>index.php/C_Admin_Forms/validatePassword/",{'password':$password},function ($data) {
    	        $("#validate_password").html($data);
              if($data.search("Need numbers,symbols and length > 8") > 0)
              {
                document.getElementById('addPhotographer').disabled = true;
              }else{
                document.getElementById('addPhotographer').disabled = false;
              }
    	    });
    	}

    });

    /*$("#addPhotographer").on("click",function ()
    {
      //alert('s');
      $name = $("#name").val();
      /*$username = $("#username").val();
      $email = $("#email").val();
      $password = $("#password").val();
      $mobile_phone = $("#mobile_phone").val();
      $land_phone = $("#land_phone").val();
      $join_date = $("#datepicker").val();
      $experience = $("#experience").val();
      $district= $("#district").val();
      $category= $("#category").val();
      alert($name);
      if($name.length > 0)
      {
      $.post( base_url();?>index.php/C_Admin_Forms/insertData/",{},function ($data) {
          $("#validate_password").html($data);

      });

    }


  });*/

    </script>
</body>

</html>
