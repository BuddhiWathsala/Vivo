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
                    <div class="col-lg-4">
                        <h2 class="page-header">
                            <?php echo $photographers->name; ?>
                        </h2>


                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">



                      <div class="row">
                        <div class="col-sm-4">
                          <label>User Name </label>
                        </div>
                        <div class="col-sm-4">
                          <label><?php echo $photographers->username; ?></label>
                        </div>


                      </div>

                      <br />

                      <div class="row">
                        <div class="col-sm-4">
                          <label>E mail </label>
                        </div>
                        <div class="col-sm-4">
                          <label><?php echo $photographers->email; ?></label>
                        </div>


                      </div>

                      <br />


                      <div class="row">
                        <div class="col-sm-4">
                          <label>Mobile Phone </label>
                        </div>
                        <div class="col-sm-4">
                          <label><?php echo $photographers->mobile_phone; ?></label>
                        </div>
                      </div>

                      <br />
                      <div class="row">
                        <div class="col-sm-4">
                          <label>Land Phone </label>
                        </div>
                        <div class="col-sm-4">
                          <label><?php echo $photographers->land_phone; ?></label>
                        </div>
                      </div>


                      <br />

                      <div class="row">
                        <div class="col-sm-4">
                          <label>Join Date </label>
                        </div>


                        <div class="col-sm-4"  >
                          <label><?php echo $photographers->join_date; ?></label>
                        </div>
                      </div>

                      <br />

                      <div class="row">
                        <div class="col-sm-4">
                          <label>Experience </label>
                        </div>
                        <div class="col-sm-4">
                          <label><?php echo $photographers->experience." years"; ?></label>
                        </div>
                      </div>

                      <br />

                      <div class="row">
                        <div class="col-sm-4">
                          <label>District </label>
                        </div>
                        <div class="col-sm-4">
                          <label><?php echo $photographers->district; ?></label>
                        </div>
                      </div>

                      <br />
                      <div class="row">
                        <div class="col-sm-4">
                          <label>Category </label>
                        </div>
                        <div class="col-sm-4">
                          <label><?php echo $photographers->category; ?></label>
                        </div>
                      </div>
                      <br  />

                      <div class="row">
                        <div class="col-sm-4">
                          <label>Number of events </label>
                        </div>
                        <div class="col-sm-4">
                          <label><?php echo $photographers->no_of_events; ?></label>
                        </div>
                      </div>
                      <br  />

                      <div class="row">
                        <div class="col-sm-4">
                          <label>Points </label>
                        </div>
                        <div class="col-sm-4">
                          <label><?php echo $photographers->points; ?></label>
                        </div>
                      </div>
                      <br  />

                    </div>
                  </div>
                  <div class="col-sm-4">
                    <img src="<?php echo base_url();?>/images/team/1.jpg" class="img-rounded" alt="Cinque Terre" width="400" height="400">
                  </div>

                </div>

           <!--div class="row">
             <img src="<?php echo base_url();?>images/team/1.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
           </div-->






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

</body>

</html>
