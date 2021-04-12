<!--start header-->
<?php if (
    !$this->session->userdata('logged_in') ||
    !$this->session->userdata('user_data')
) {
    $this->load->view('templates/header.php');
} else {
    echo "<script>
    window.location.href='http://localhost/DemoProject/users/register/account_details';
    </script>";
} ?>
<!--end header-->

    <!--start Main content-->

        <div class="container mt-5 mb-4">
   <br />
   <h2 align="center">Login using Google Account</h2>
   <br />
   <div class="panel panel-default">
   <?php if (isset($login_button)) {
       // $user_data = $this->session->userdata('user_data');
       // echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
       // echo '<img src="'.$user_data['profile_picture'].'" class="img-responsive img-circle img-thumbnail" />';
       // echo '<h3><b>Name : </b>'.$user_data["first_name"].' '.$user_data['last_name']. '</h3>';
       // echo '<h3><b>Email :</b> '.$user_data['email_address'].'</h3>';
       // echo '<h3><a href="'.base_url().'google_login/logout">Logout</h3></div>';
       echo '<div align="center">' . $login_button . '</div>';
   } ?>
   </div>
  </div>





    <!-- end Main content-->

<!--start footer-->
<?php $this->load->view('templates/footer.php'); ?>
<!--end footer-->
