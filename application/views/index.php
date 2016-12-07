<?php

defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>VIVO Photography</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" />

<!-- animate.css -->
<link rel="stylesheet" href="<?php echo base_url('assets/animate/animate.css'); ?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/animate/set.css'); ?>" />

<!-- gallery -->
<link rel="stylesheet" href="<?php echo base_url('assets/gallery/blueimp-gallery.min.css'); ?>">

<!-- favicon -->
<link rel="shortcut icon" href="<?php echo base_url('images/favicon.ico');?>" type="image/x-icon">
<link rel="icon" href="<?php echo base_url('images/favicon.ico');?>" type="image/x-icon">


<link rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>">

</head>

<body>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="#home"><img src="<?php echo base_url('images/logo1.png'); ?>" alt="logo"></a>
              <!-- #Logo Ends -->


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">
                 <li class="active"><a href="#home">Home</a></li>
                 <li ><a href="#about">About</a></li>
                 <li ><a href="#works">Works</a></li>
                 <li ><a href="#partners">Partners</a></li>
                 <li ><a href="#contact">Contact</a></li>
                 <!--<li><a href="#catagory">Catagory</a></li>-->
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>
<!-- #Header Starts -->




<div id="home">

<!-- Slider Starts -->
<div id="myCarousel" class="carousel slide banner-slider animated bounceInDown" data-ride="carousel">
      <div class="carousel-inner">
        <!-- Item 1 -->
        <!--<div class="item active">
          <img src="images/back1.jpg" alt="banner">
        </div>-->
        <!-- #Item 1 -->

        <!-- Item 1 -->
    <div class="item active">
          <img src="<?php echo base_url('images/back2.jpg'); ?>" alt="banner">
        </div>
        <!-- #Item 1 -->

        <!-- Item 1 -->
        <div class="item">
          <img src="<?php echo base_url('images/back3.jpg'); ?>" alt="banner">
        </div>
        <!-- #Item 1 -->

        <!-- Item 1 -->
        <div class="item">
          <img src="<?php echo base_url('images/back4.jpg'); ?>" alt="banner">
        </div>
        <!-- #Item 1 -->
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon-chevron-left"><i class="fa fa-angle-left"></i></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon-chevron-right"><i class="fa fa-angle-right"></i></span></a>
    </div>
<!-- #Slider Ends -->
</div>









<!-- Cirlce Starts -->
<div id="about"  class="container spacer about">
<h2 class="text-center wowload fadeInUp" style="color: white">Creative photographers of VIVO</h2>
  <div class="row">
  <div class="col-sm-6 wowload fadeInLeft">
    <h4 style="color: white"><i class="fa fa-camera-retro"></i> Introduction</h4>
    <p style="color: white">We are the total event solution company that believes great work comes from the heart, mind, and gut! Which provides one stop for all event requirements.We ensure all your special events are captured by us.Vivo photography prides ourselves on giving maximum value for money, researching options and working at all times to your exact budget and requirements. It is our success in this area that allows our clients to come back to us time and time again for fantastic events.</p>
  </div>

  <div class="col-sm-6 wowload fadeInRight">
  <h4 style="color: white"><i class="fa fa-flag"></i> Vision</h4>
  <p style="color: white">We all photograph for our own reasons. For many of us, photography is a long journey, starting with capturing images that might be considered snapshots such as a vacation or family celebration. For many, the satisfaction of taking those snapshots is enough.  We dig for deeper meaning by seeking to convey our inspiration, emotions and ideals of our own perfect world.</p>
  </div>
  </div>

  <div class="services">
  <h3 class="text-center wowload fadeInUp" style="color: white">Services</h3>
	<ul class="row text-center list-inline  wowload bounceInUp">



   		<li>
            <span><i class="fa fa-camera-retro"></i><b>Photography</b></span>
        </li>
        <li>
            <span><i class="fa fa-cube"></i><b>Studio</b></span>
        </li>
        <li>
            <span><i class="fa fa-graduation-cap"></i><b>Convocations</b></span>
        </li>
        <li>
            <span><i class="fa fa-umbrella"></i><b>Travel</b></span>
        </li>
        <li>
            <span><i class="fa fa-heart-o"></i><b>Wedding</b></span>
        </li>
  	</ul>
  </div>
</div>
<!-- #Cirlce Ends -->

<?php echo base_url(); ?>
<!-- works -->
<div id="works"  class=" clearfix grid">
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo base_url('images/portfolio/1.png');?>" alt="img01"/>
        <figcaption>
            <h2>Nature</h2>
            <p>Vivo Photography<br>
            <a href="<?php echo base_url('images/portfolio/1.png');?>" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo base_url('images/portfolio/2.jpg');?>" alt="img01"/>
        <figcaption>
            <h2>Wedding</h2>
            <p>Vivo Photography<br>
            <a href="<?php echo base_url('images/portfolio/2.jpg');?>" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo base_url('images/portfolio/3.jpg');?>" alt="img01"/>
        <figcaption>
            <h2>Functions</h2>
            <p>Vivo Photography<br>
            <a href="<?php echo base_url('images/portfolio/3.jpg');?>" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo base_url('images/portfolio/4.jpg');?>" alt="img01"/>
        <figcaption>
            <h2>Products</h2>
            <p>Vivo Photography<br>
            <a href="<?php echo base_url('images/portfolio/4.jpg');?>" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo base_url('images/portfolio/5.jpg');?>" alt="img01"/>
        <figcaption>
            <h2>BirthDays</h2>
            <p>Vivo Photography<br>
            <a href="<?php echo base_url('images/portfolio/5.jpg');?>" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>

     <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo base_url('images/portfolio/6.jpg');?>" alt="img01"/>
        <figcaption>
            <h2>Convocations</h2>
            <p>Vivo Photography<br>
            <a href="<?php echo base_url('images/portfolio/6.jpg');?>" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo base_url('images/portfolio/7.jpg');?>" alt="img01"/>
        <figcaption>
            <h2>Ceramony</h2>
            <p>Vivo Photography<br>
            <a href="<?php echo base_url('images/portfolio/7.jpg');?>" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo base_url('images/portfolio/8.jpg');?>" alt="img01"/>
        <figcaption>
            <h2>Dicrap</h2>
            <p>Vivo Photography<br>
            <a href="<?php echo base_url('images/portfolio/8.jpg');?>" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo base_url('images/portfolio/9.jpg');?>" alt="img01"/>
        <figcaption>
            <h2>Coffee</h2>
            <p>Vivo Photography<br>
            <a href="<?php echo base_url('images/portfolio/9.jpg');?>" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo base_url('images/portfolio/10.jpg');?>" alt="img01"/>
        <figcaption>
            <h2>cameras</h2>
            <p>Vivo Photography<br>
            <a href="<?php echo base_url('images/portfolio/10.jpg');?>" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo base_url('images/portfolio/11.jpg');?>" alt="img01"/>
        <figcaption>
            <h2>design</h2>
            <p>Vivo Photography<br>
            <a href="<?php echo base_url('images/portfolio/11.jpg');?>" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo base_url('images/portfolio/12.jpg');?>" alt="img01"/>
        <figcaption>
            <h2>studio</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="<?php echo base_url('images/portfolio/12.jpg');?>" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>



</div>
<!-- works -->


<div id="partners" class="container spacer ">
	<h2 class="text-center  wowload fadeInUp">Some of our happy clients</h2>
  <div class="clearfix">
    <div class="col-sm-6 partners  wowload fadeInLeft">
         <img src="images/partners/1.jpg" alt="partners">
         <img src="images/partners/2.jpg" alt="partners">
         <img src="images/partners/3.jpg" alt="partners">
         <img src="images/partners/4.jpg" alt="partners">
    </div>
    <div class="col-sm-6">


    <div id="carousel-testimonials" class="carousel slide testimonails  wowload fadeInRight" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active animated bounceInRight row">
      <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="images/team/1.jpg" width="100" class="img-circle img-responsive"></div>
      <div  class="col-xs-10">
      <p> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </p>
      <span>Angel Smith - <b>eshop Canada</b></span>
      </div>
      </div>
      <div class="item  animated bounceInRight row">
      <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="images/team/2.jpg" width="100" class="img-circle img-responsive"></div>
      <div  class="col-xs-10">
      <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
      <span>John Partic - <b>Crazy Pixel</b></span>
      </div>
      </div>
      <div class="item  animated bounceInRight row">
      <div class="animated slideInLeft  col-xs-2"><img alt="portfolio" src="images/team/3.jpg" width="100" class="img-circle img-responsive"></div>
      <div  class="col-xs-10">
      <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue.</p>
      <span>Harris David - <b>Jet London</b></span>
      </div>
      </div>
  </div>

   <!-- Indicators -->
   	<ol class="carousel-indicators">
    <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-testimonials" data-slide-to="1"></li>
    <li data-target="#carousel-testimonials" data-slide-to="2"></li>
  	</ol>
  	<!-- Indicators -->
  </div>



    </div>
  </div>


<!-- team -->
<h3 class="text-center  wowload fadeInUp" style="color: white">Our team</h3>
<p class="text-center  wowload fadeInLeft" style="color: white">Our creative team that is making everything possible</p>
<div class="row grid team  wowload fadeInUpBig">
	<div class=" col-sm-3 col-xs-6">
	<figure class="effect-chico">
        <img src="<?php echo base_url('images/team/8.jpg');?>" alt="img01" class="img-responsive" />
        <figcaption>
            <p><b>Lahiru Sen</b><br>Senior Designer<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></p>
        </figcaption>
    </figure>
    </div>

    <div class=" col-sm-3 col-xs-6">
	<figure class="effect-chico">
        <img src="<?php echo base_url('images/team/10.jpg');?>" alt="img01"/>
        <figcaption>
            <p><b>Mahesh Bansa</b><br>Senior Designer<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></p>
        </figcaption>
    </figure>
    </div>

    <div class=" col-sm-3 col-xs-6">
	<figure class="effect-chico">
        <img src="<?php echo base_url('images/team/12.jpg');?>" alt="img01"/>
        <figcaption>
            <p><b>Pramod Weera</b><br>Senior Designer<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></p>
        </figcaption>
    </figure>
    </div>

    <div class=" col-sm-3 col-xs-6">
	<figure class="effect-chico">
        <img src="<?php echo base_url('images/team/17.jpg');?>" alt="img01"/>
        <figcaption>
            <p><b>Dhanu Kalshan</b><br>Senior Designer<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></p>
        </figcaption>
    </figure>
    </div>


</div>
<!-- team -->

</div>









<!-- About Starts -->
<div class="highlight-info">
<div class="overlay spacer">
<div class="container">
<div class="row text-center  wowload fadeInDownBig">
	<div class="col-sm-3 col-xs-6" style="position: left">
	<i class="fa fa-smile-o  fa-5x"></i><h4>24 Clients</h4>
	</div>
	<div class="col-sm-3 col-xs-6" style="position: right">
	<i class="fa fa-rocket  fa-5x"></i><h4>75 Projects</h4>
	</div>
	<div class="col-sm-3 col-xs-6">
	<i class="fa fa-cloud-download  fa-5x"></i><h4>454 Downloads</h4>
	</div>
	<div class="col-sm-3 col-xs-6" style="position: middle">
	<i class="fa fa-map-marker fa-5x"></i><h4>2 Offices</h4>
	</div>
</div>
</div>
</div>
</div>
<!-- About Ends -->








<div id="contact" class="spacer">
<!--Contact Starts-->
<div class="container contactform center">
<h2 class="text-center  wowload fadeInUp" style="color: white">Get in touch to Login</h2>
  <div class="row wowload fadeInLeftBig">
      <div class="col-sm-6 col-sm-offset-3 col-xs-12">
      <form action="<?php echo base_url('index.php/User/login');?>" method="POST">

        <input class="fa fa-user-o" type="text" placeholder="User Name" name="username">
        <input type="Password" placeholder="Password" name="password">
        <!--<textarea rows="5" placeholder="Message"></textarea>-->
        <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Login</button>
      </form>
      </div>
  </div>



</div>
</div>
<!--Contact Ends-->



<!-- Footer Starts -->
<div class="footer text-center spacer">
<p class="wowload flipInX"><a href="#"><i class="fa fa-facebook fa-2x"></i></a> <a href="#"><i class="fa fa-instagram fa-2x"></i></a> <a href="#"><i class="fa fa-twitter fa-2x"></i></a> <a href="#"><i class="fa fa-flickr fa-2x"></i></a> </p>
Copyright 2014 VIVO Creative Studio. All rights reserved.
</div>
<!-- # Footer Ends -->
<a href="#home" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>





<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
</div>



<!-- jquery -->
<script src="<?php echo base_url('assets/jquery.js'); ?>"></script>

<!-- wow script -->
<script src="<?php echo base_url('assets/wow/wow.min.js');?>"></script>


<!-- boostrap -->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.js');?>" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="<?php echo base_url('assets/mobile/touchSwipe.min.js');?>"></script>
<script src="<?php echo base_url('assets/respond/respond.js'); ?>"></script>

<!-- gallery -->
<script src="<?php echo base_url('assets/gallery/jquery.blueimp-gallery.min.js');?>"></script>

<!-- custom script -->
<script src="<?php echo base_url('assets/script.js');?>"></script>

</body>
</html>
