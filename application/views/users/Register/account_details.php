<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <!-- adding external css-->
    <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>css/nav.css">
    <title>Account Details</title>

    <style>
    /* body,html{
        height:100%;
        margin:0;
    } */
    /* .cover{
         background-image:url("http://localhost/DemoProject/img/cover_img.jpg"); 
        background-size:cover;
        background-repeat:no-repeat;
        background-position:center;
        height:100%;

        
    } */
    
    .vid-parent{
         position:relative;
        
    }
    .remove-vid-marg{
       margin:0px;
        padding:0px;
    }
    video{
        width:100%;
        height:100%;
    }
    .vid-overlay{
        position:absolute;
        top:0px;
        left:0px;
        height:100%;
        width:100%;
        background-color:#466575;
        z-index:1;
        opacity:0.8;
    }
    .vid-content{
        position:absolute;
        z-index:2;
        top:35%;
        left:35%;
        text-align:center;
        color:#fff;
    }
    /* .nav-heading-item{
        color:#fff !important;
    } */
    .card {
    overflow:hidden;
}

.card-body .rotate {
    z-index: 8;
    float: right;
    height: 100%;
}

.card-body .rotate i {
    color: rgba(20, 20, 20, 0.15);
    position: absolute;
    left: 0;
    left: auto;
    right: -10px;
    bottom: 0;
    display: block;
    -webkit-transform: rotate(-44deg);
    -moz-transform: rotate(-44deg);
    -o-transform: rotate(-44deg);
    -ms-transform: rotate(-44deg);
    transform: rotate(-44deg);
}
    @media only screen and (min-width:0px) and (max-width:700px){
  .my-content,
  .txt-banner{
    display:none;
  }
  .vid-content{
    top:12%;
    left:40%;
  }
  .custom-nav .custom-nav-item a {
    padding: 10px 20px;
    background-color: #225470;
  }

 .nav-heading .nav-heading-item a {
     padding: 10px 20px;
    background-color: #225470;
 }
  .custom-nav-item:hover {
    background-color: none;
    border: none;
    border-radius: none;
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
) { ?>
<!--Start Navbar-->
<?php $this->load->view('templates/user_header.php'); ?>
<!--end nav bar-->
<!--start main content-->
<!--start video background-->
<div class='container-fluid remove-vid-marg'>
<div class='vid-parent'>
<video playsinline autoplay muted loop>
<source src='<?php echo base_url('video/new_bg2.mp4'); ?>'></source>
</video>
<div class='vid-overlay'></div>
</div>
<div class='vid-content'>
<h1 class='my-content'>Welcome to iSchool</h1>
<small class='my-content'>Learn and Implement</small> <br/>
<a href='<?= base_url(
    'users/register/profile'
) ?>' class='btn btn-danger' style='border-radius:10px;'>My Profile</a>
</div>
</div>
<!--end video bacground-->
     <div class="row mb-3">
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body bg-success">
                            <div class="rotate">
                                <i class="fa fa-user fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Users</h6>
                            <h1 class="display-4">134</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-danger h-100">
                        <div class="card-body bg-danger">
                            <div class="rotate">
                                <i class="fa fa-list fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Posts</h6>
                            <h1 class="display-4">87</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-info h-100">
                        <div class="card-body bg-info">
                            <div class="rotate">
                                <i class="fa fa-twitter fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Tweets</h6>
                            <h1 class="display-4">125</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-warning h-100">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa fa-share fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Shares</h6>
                            <h1 class="display-4">36</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!--/row-->
<!--end main content-->
<?php } else {echo "<script>
    window.location.href='http://localhost/DemoProject/users/register/user_login';
    </script>";} ?>

</body>
</html>