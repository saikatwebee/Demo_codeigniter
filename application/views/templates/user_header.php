
  
<!-- Adding date picker cdn -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/flatpickr.min.css" />
<script src='<?php echo base_url(); ?>js/flatpickr.js'></script>


<nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 fixed-top">
  <a class="navbar-brand" href="#">iSchool</a>
  <span class='navbar-text'>Learn and Implement</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="navbar-nav custom-nav ">
    <?php if (
        !$this->session->userdata('logged_in') &&
        !$this->session->userdata('access_token')
    ) { ?>
  <li class='nav-item custom-nav-item'><a href='<?= base_url(
      'users/register/user_login'
  ) ?>' class='nav-link'>Home</a></li>
      <?php } else { ?>
       <li class='nav-item custom-nav-item'><a href='<?= base_url(
           'users/register/account_details'
       ) ?>' class='nav-link'>Home</a></li>
      <?php } ?>
      
      <!-- <li class='nav-item custom-nav-item'><a href='#' class='nav-link'>About</a></li> -->
       <li class='nav-item custom-nav-item'><a href='#' class='nav-link'>Contact</a></li>
      <?php if (
          !$this->session->userdata('logged_in') &&
          !$this->session->userdata('access_token')
      ) { ?>
      <li class='nav-item custom-nav-item'><a href='#' class='nav-link'>Courses</a></li>
      <?php } else { ?>
        <li class='nav-item custom-nav-item'><a href='#' class='nav-link'>My Courses</a></li>
        <?php } ?>
      
      <li class='nav-item custom-nav-item'><a href='#' class='nav-link'>Payment Status</a></li>
      <li class='nav-item custom-nav-item'><a href='#' class='nav-link'>Feedback</a></li>
      <?php if (
          $this->session->userdata('logged_in') ||
          $this->session->userdata('access_token')
      ) { ?>
        <li class='nav-item custom-nav-item'><a href='<?= base_url(
            'users/register/profile'
        ) ?>' class='nav-link'>My Profile</a></li>
        <?php } ?>
      
      <?php if (
          !$this->session->userdata('logged_in') &&
          !$this->session->userdata('access_token')
      ) { ?>
        
        <li class='nav-item custom-nav-item'><a href='#' class='nav-link' data-toggle='modal' data-target='#loginModalCenter'>Login</a></li>
      <li class='nav-item custom-nav-item'><a href='#' class='nav-link' data-toggle='modal' data-target='#signModalCenter'>SignUp</a></li>
        
        <?php } ?>
      
      
    </ul>

    <?php if (
        $this->session->userdata('logged_in') ||
        $this->session->userdata('access_token')
    ) { ?>
      
       <ul class='navbar-nav nav-heading ml-auto'>
    <li class='navbar-item nav-heading-item'><a href='#' class='nav-link'>
      <i class="fas fa-user-tie mr-2" style='color:#fff;'></i>
    <?php if ($logged_in = $this->session->userdata('logged_in')) {
        echo 'Welcome ' . $logged_in['nm'];
    } elseif ($guser = $this->session->userdata('user_data')) {
        echo 'Welcome ' . $guser['first_name'];
    } else {
        echo 'unknown';
    } ?></a></li>
    <li class='navbar-item nav-heading-item'>
   <a href='<?= base_url(
       'users/register/logout'
   ) ?>' class='nav-link' id='logout'><i class="fas fa-sign-out-alt mr-1"></i>Logout</a>
   </li>

    </ul>
      
      <?php } ?>

   
    
  </div>
</nav>

