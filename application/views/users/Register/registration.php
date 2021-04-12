<!--start header-->

<?php if ( !$this->session->userdata('logged_in') || !$this->session->userdata('user_data')) {

    
    $this->load->view('templates/header.php');
    ?>
    
<div class="regimg">
<div class="container-fluid" >
  <!-- <div class="row h-100 justify-content-center align-items-center"> -->
    <div class="card" style='width: 70%; margin: 12% auto 8% auto;'>
  <div class="card-header" style='background-color: #009688;
    color: #ffffff;'>
    <h3>Create An Account <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
</h3>
  </div>
  <div class="card-body">
    <form id='sign_form'>
        <div class='row'>
      <div class='form-group col-sm-6'>
        <i class="fas fa-user-plus"></i> <label>First Name</label> <small id='error_fnm'></small>
        <input type='text' class='form-control' name='first_name' id='first_name' placeholder='Enter first name'> 
        
        </div>

        <div class='form-group col-sm-6'>
        <i class="fas fa-user-plus"></i> <label>Last Name</label> <small id='error_lnm'></small>
        <input type='text' class='form-control' name='last_name' id='last_name' placeholder='Enter last name'> 
        
        </div>
         <div class='form-group col-sm-6'>
        <i class="fas fa-user-plus"></i> <label>Date of Birth</label> <small id='error_dob'></small>
        <input type='text' class='form-control' name='dob' id='dob' placeholder='Select date'  data-input> 
        
        </div>
       <div class='form-group col-sm-6'>
       <i class="fas fa-mobile-alt"></i> <label>Phone No.</label> <small id='error_ph'></small> 
        <input type='text' class='form-control' name='phone' id='phone' placeholder='Enter phone' maxlength='10'>
        
        </div>

        <div class='form-group col-sm-6'>
       <i class="fa fa-envelope" aria-hidden="true"></i>
        <label>Email</label> <small id='error_em'></small>
        <input type='text' class='form-control' name='email' id='email' placeholder='Enter email'> 
        
        </div>

        <div class='form-group col-sm-6'>
       <i class="fa fa-user-circle"></i> <label>Username</label>  <small id='erroruser'></small>
        <input type='text' class='form-control' name='username' id='unm' placeholder='Enter username'> 
       
        </div>

        <div class='form-group col-sm-6'>
       <i class="fa fa-unlock-alt"></i> <label>Password</label>  <small id='errorpass'></small> 
        <input type='password' class='form-control' name='password' id='p1' placeholder='Enter password'>
       <span class="fa fa-fw fa-eye  toggle-password" aria-hidden="true" toggle='#p1' style='float: right;top: -26px;left:-5px;position: relative;z-index: 2;'></span>
        </div>

        <div class='form-group col-sm-6'>
       <i class="fas fa-check-square"></i> <label>Confirm Password</label> <small id='errorcpass'></small>
        <input type='password' class='form-control' name='cpassword' id='p2' placeholder='Enter confirm password'> 
        
        </div>
       
        
    </div>
    
    </form>
    
  </div>
  <div class="card-footer text-muted text-center">
    <!-- <p class='text-center font-weight-bolder'>Or</p> -->
        <div class='text-center'>
         <button class="btn btn-success signup-button" id='btnsign'><i class="fa fa-plus mr-2" aria-hidden="true"></i>SignUp</button>
        </div>
        <p class='text-center font-weight-bolder'>Or</p>
   <div class='row' style='margin-top:-10px!important;'> 
   <?php if (isset($login_button)) {
       // $user_data = $this->session->userdata('user_data');
       // echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
       // echo '<img src="'.$user_data['profile_picture'].'" class="img-responsive img-circle img-thumbnail" />';
       // echo '<h3><b>Name : </b>'.$user_data["first_name"].' '.$user_data['last_name']. '</h3>';
       // echo '<h3><b>Email :</b> '.$user_data['email_address'].'</h3>';
       // echo '<h3><a href="'.base_url().'google_login/logout">Logout</h3></div>';
       echo '<div  class="col-sm-6 mb-1">' . $login_button . '</div>';
   } ?>
      <!-- <div class="col-sm-6 mb-1"> <a href='#' class="btn btn-danger btn-block"><i class="fa fa-google mr-2" aria-hidden="true"></i>Login with Gmail</a> </div> -->
       <div class='col-sm-6'> <a href='#' class="btn btn-primary btn-block"><i class="fa fa-facebook mr-2" aria-hidden="true"></i>Login with Facebook</a></div>
    </div>

  </div>
<!-- </div> -->
   
  </div>
</div>
    
    </div>
    <?php
} else {
    echo "<script>
    window.location.href='http://localhost/DemoProject/users/register/account_details';
    </script>";
} ?>
<!-- </div> -->

<!--start footer-->
<?php $this->load->view('templates/footer.php'); ?>
<!--end footer-->
<script type="text/javascript">
  document.getElementById("dob").flatpickr({
  dateFormat: 'd-m-Y'
});
</script>