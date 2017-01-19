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
                    <div class="col-lg-8">
                        <h3 class="page-header">
                            Event Details
                        </h3>


                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">

                      <div class="row">
                        <div class="col-sm-6">
                          <label>Name</label>
                        </div>
                        <div class="col-sm-6">
                          <label><?php echo $event->name; ?></label>
                        </div>


                      </div>
                      <br />

                      <div class="row">
                        <div class="col-sm-6">
                          <label>Date</label>
                        </div>
                        <div class="col-sm-6">
                          <label><?php echo $event->date; ?></label>
                        </div>


                      </div>

                      <br />

                      <div class="row">
                        <div class="col-sm-6">
                          <label>Time </label>
                        </div>
                        <div class="col-sm-6">
                          <label><?php echo $event->time; ?></label>
                        </div>


                      </div>

                      <br />


                      <div class="row">
                        <div class="col-sm-6">
                          <label>Location </label>
                        </div>
                        <div class="col-sm-6">
                          <label><?php echo $event->location; ?></label>
                        </div>
                      </div>
                      <br />

                      <div class="row">
                        <div class="col-sm-6">
                          <label>Description </label>
                        </div>


                        <div class="col-sm-6"  >
                          <label><?php echo $event->description; ?></label>
                        </div>
                      </div>

                      <br />


                      <div class="row">
                          <div class="col-lg-8">
                              <h3 class="page-header">
                                  Customer Details
                              </h3>


                          </div>
                      </div>
                      <br />


                      <div class="row">
                        <div class="col-sm-6">
                          <label>User name </label>
                        </div>
                        <div class="col-sm-6">
                          <label><?php echo $event->username; ?></label>
                        </div>
                      </div>


                      <br />



                      <div class="row">
                        <div class="col-sm-6">
                          <label>NIC</label>
                        </div>
                        <div class="col-sm-6">
                          <label><?php echo $event->nic; ?></label>
                        </div>
                      </div>

                      <br />

                      <div class="row">
                        <div class="col-sm-6">
                          <label>Contact No </label>
                        </div>
                        <div class="col-sm-6">
                          <label><?php echo $event->contact_no; ?></label>
                        </div>
                      </div>

                      <br />


                      <div class="row">
                        <div class="col-sm-6">
                          <label>E-mail</label>
                        </div>
                        <div class="col-sm-6">
                          <label><?php echo $event->email; ?></label>
                        </div>
                      </div>
                      <br  />

                      <div class="row">
                        <div class="col-sm-6">
                          <label>Join Date </label>
                        </div>
                        <div class="col-sm-6">
                          <label><?php echo $event->join_date; ?></label>
                        </div>
                      </div>
                      <br  />

                    </div>
                  </div>

                  <div class="col-sm-6">

                    <div class="row">
                        <div class="col-lg-8">
                            <h3 class="page-header">
                                Select Photographer
                            </h3>


                        </div>
                    </div>
                    <br />

                    <form action="<?php echo base_url();?>index.php/C_Admin_Forms/confirmEvent/" method="post" onsubmit= "return confirm('Are you sure to accept this event !!')" >
                    <select name="photographer">
                      <?php

                      foreach ($photographers as $single_photographer) {
                        $id = $single_photographer->photographer_id;
                        $name = $single_photographer->name;
                        echo "<option value =".$id." >";
                        echo $name;
                        echo "</option>";
                      }
                      ?>
                    </select>
                    <br/><br /><br/><br />
                    <input name="event" type="hidden" value=<?php echo $event->event_id ;?> />
                    <input  style="background-color:green" class="btn btn-success btn-xs" type="submit" name="accept" value="Accept" />
                  </form>
                  </div>


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

</body>

</html>
