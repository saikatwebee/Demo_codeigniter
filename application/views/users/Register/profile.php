<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
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
 <!-- font Awesome kit code-->
<script src="https://kit.fontawesome.com/683d3307d8.js" crossorigin="anonymous"></script>
<!--Google font link-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <!-- adding external css-->
    <link rel = "stylesheet" type = "text/css" 
         href = "<?= base_url('css/user_nav.css') ?>">

         <style>

             @media only screen and (min-width:0px) and (max-width:700px){
  
  .custom-nav .custom-nav-item a {
    padding: 10px 20px;
    background-color: #225470;
  }

  .custom-nav-item:hover {
    background-color: none;
    border: none;
    border-radius: none;
  }
.nav-heading{
    padding-left:47px;
}
  .nav-heading .nav-heading-item a {
    padding: 10px 20px;
    background-color: #225470;
  }

  .nav-heading-item:hover {
    background-color: none;
    border: none;
    border-radius: none;
  }
  
}
         </style>
</head>
<body>

    <?php if (
        $this->session->userdata('logged_in') ||
        $this->session->userdata('access_token')
    ) {
        $this->load->view('templates/user_header.php');
    } else {
        echo "<script>
    window.location.href='http://localhost/DemoProject/users/register/user_login';
    </script>";
    } ?>
<!--start main content-->

<div class='main'>
  <div class='container-fluid mt-3'>

  <div class="card">
      <h5 class="card-header bg-info text-white">User Details</h5>
     <div class="card-body">
       <h5 class="card-title">View and Edit User Details*</h5>
         <div class='row'>
             <div class='form-group col-sm-4'>
                 <label>Name</label>
                 <input type='text' class='form-control'>
             </div>
             <div class='form-group col-sm-4'>
                 <label>Phone</label>
                 <input type='text' class='form-control'>
             </div>
             <div class='form-group col-sm-4'>
                 <label>Email</label>
                 <input type='text' class='form-control'>
             </div>
             <div class='form-group col-sm-4'>
                 <label>Username</label>
                 <input type='text' class='form-control'>
             </div>
             <div class='form-group col-sm-4'>
                 <label>Password</label>
                 <input type='text' class='form-control'>
             </div>
            
             <div class='form-group col-sm-4'>
                 <label>Profile Picture</label>
                 <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="filename">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                 </div>
             </div>
            
                <div class='form-group col-sm-4'>
                    <label>State</label>
                    <input type='text' class='form-control'>
                </div>
                 <div class='form-group col-sm-4'>
                    <label>City</label>
                    <input type='text' class='form-control'>
                </div>
                 <div class='form-group col-sm-4'>
                    <label>Zip</label>
                    <input type='text' class='form-control'>
                </div>
            

         </div>
             </div>
                <div class='card-footer'>
                   <div class='text-center'>
                <button class='btn btn-success'>Update</button>
        </div>
       </div>
    </div>
   </div>
</div>

<script>

    var onResize = function() {
  // apply dynamic padding at the top of the body according to the fixed navbar height
  $("body").css("padding-top", $(".fixed-top").height());
};

// attach the function to the window resize event
$(window).resize(onResize);

// call it also when the page is ready after load or reload
$(function() {
  onResize();
});

// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
  
</body>
</html>