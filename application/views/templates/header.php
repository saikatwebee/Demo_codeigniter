<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!--Sweat alert cdn-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!--Google font link-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
<!-- font Awesome kit code-->
<script src="https://kit.fontawesome.com/683d3307d8.js" crossorigin="anonymous"></script>

<!--Adding External Css-->
 <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/nav.css">
 <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/user_signup.css">
<!--Adding External Css for owl carousel-->
 <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/owl.carousel.min.css">
<!--Adding External Css for owl carousel theme-->
<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/owl.theme.default.css">
<!--Adding External Css for testimonial slider-->
<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/testimonial-slider.css">

<!--Adding External -->


<!--Adding External js for owl carousel-->
<script src='<?php echo base_url(); ?>js/owl.carousel.min.js'></script>

<!--Adding External js for testimonial slider-->
<script src='<?php echo base_url(); ?>js/testimonial-slider.js'></script>

<!-- Adding date picker cdn -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/flatpickr.min.css" />
<script src='<?php echo base_url(); ?>js/flatpickr.js'></script>

<style>
  
  .error_border{
    border: 1px solid #ff000080 !important;
  }
  .success_border{
    border: 1px solid #4caf50cc !important;
  }
 
</style>

</head>
<body style="background-color: #607d8b1a;">

<nav class="navbar navbar-expand-sm navbar-dark  pl-5 fixed-top" style='background-color: #4a606b;'>
  <a class="navbar-brand" href="#">iSchool</a>
  <span class='navbar-text'>Learn and Implement</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="navbar-nav custom-nav pl-5">
    <?php if (!$this->session->userdata('logged_in')) { ?>
  <li class='nav-item custom-nav-item'><a href='<?= base_url(
      'users/register/user_login'
  ) ?>' class='nav-link'>Home</a></li>
      <?php } else { ?>
       <li class='nav-item custom-nav-item'><a href='<?= base_url(
           'users/register/account_details'
       ) ?>' class='nav-link'>Home</a></li>
      <?php } ?>
      
      <!-- <li class='nav-item custom-nav-item'><a href='#' class='nav-link'>About</a></li> -->
      <?php if (!$this->session->userdata('logged_in')) { ?>
      <li class='nav-item custom-nav-item'><a href='<?= base_url(
          'users/course/all_course'
      ) ?>' class='nav-link'>Courses</a></li>
      <?php } else { ?>
        <li class='nav-item custom-nav-item'><a href='#' class='nav-link'>My Courses</a></li>
        <?php } ?>
      
      <li class='nav-item custom-nav-item'><a href='<?= base_url(
          'users/order/payment_status'
      ) ?>' class='nav-link'>Payment Status</a></li>
      <li class='nav-item custom-nav-item'><a href='#' class='nav-link'>Feedback</a></li>
      <?php if ($this->session->userdata('logged_in')) { ?>
        <li class='nav-item custom-nav-item'><a href='<?= base_url(
            'users/register/profile'
        ) ?>' class='nav-link'>My Profile</a></li>
        <?php } ?>
      
      <?php if (!$this->session->userdata('logged_in')) { ?>
        
        <li class='nav-item custom-nav-item'><a href='#' class='nav-link' data-toggle='modal' data-target='#loginModalCenter'>Login</a></li>
         <!-- <li class='nav-item custom-nav-item'><a href='<?= base_url(
             'users/google_login/login'
         ) ?>' class='nav-link'><i class="fa fa-google-plus mr-1" aria-hidden="true"></i>Login with Gmail</a></li> -->
      <li class='nav-item custom-nav-item'><a href='<?= base_url(
          'users/register/registration'
      ) ?>' class='nav-link' >SignUp</a></li>
        
        <?php } ?>
      
      
    </ul>

    <?php if ($this->session->userdata('logged_in')) { ?>
      
       <ul class='navbar-nav nav-heading ml-auto'>
    <li class='navbar-item nav-heading-item'><a href='#' class='nav-link'>

      <?php
           $logged_in = $this->session->userdata('logged_in');
    echo 'Welcome ' . $logged_in['user'];
    ?></a></li>
    <li class='navbar-item nav-heading-item'>
   <a href='<?= base_url(
       'users/register/logout'
   ) ?>' class='nav-link' id='logout'><i class="fas fa-sign-out-alt"></i> Logout</a>
   </li>

    </ul>
      
      <?php } ?>

   
    
  </div>
</nav>