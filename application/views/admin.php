<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Administrator</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Google fonts -->
<link href="http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css";?>

<!-- animate.css -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/animate/animate.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="shortcut icon" href="<?php echo base_url();?>images/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo base_url();?>images/favicon.ico" type="image/x-icon">


<link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">

</head>

<body>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span2">
        <!--Sidebar content-->
          <nav class="navbar navbar-left">
              <br><br><br><br><br><br><br>

              <ul class="nav navbar-left">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Page 1</a></li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
              </ul>

          </nav>
      </div>
      <div class="span10">
        <!--Body content-->
        <div class="navbar-wrapper">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
        <div class="navbar-header">
                <!-- Logo Starts -->
                <a class="navbar-brand" href="#home"><img src="<?php echo base_url();?>images/logo.png" alt="logo"></a>
                <!-- #Logo Ends -->


                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>

                </div>
        <div class="navbar-collapse  collapse">
          <ul class="nav navbar-nav navbar-right scroll">
             <li class="active"><a href="#home">Home</a></li>
             <li ><a href="#about">About</a></li>
             <li ><a href="#works">Works</a></li>
             <li ><a href="#partners">Partners</a></li>
             <li ><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>
</div>
  </div>
<!-- #Header Starts -->


<!-- jquery -->
<script src="<?php echo base_url();?>assets/jquery.js"></script>

<!-- wow script -->
<script src="<?php echo base_url();?>assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="<?php echo base_url();?>assets/mobile/touchSwipe.min.js"></script>
<script src="<?php echo base_url();?>assets/respond/respond.js"></script>

<!-- gallery -->
<script src="<?php echo base_url();?>assets/gallery/jquery.blueimp-gallery.min.js"></script>

<!-- custom script -->
<script src="<?php echo base_url();?>assets/script.js"></script>

</body>
</html>
