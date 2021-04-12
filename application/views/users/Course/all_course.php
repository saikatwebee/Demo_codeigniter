<!--start header-->
<?php if (!$this->session->userdata('logged_in')) {
    $this->load->view('templates/header.php');
} else {
    echo "<script>
    window.location.href='http://localhost/DemoProject/users/register/account_details';
    </script>";
} ?>
<!--end header-->
<!--start course content-->
    <!--Start course page banner-->
<div class='container-fluid bg-dark '>
    <div class='row'>
        <img src='https://cdn.pixabay.com/photo/2016/07/31/14/37/paper-1559010_960_720.jpg' alt='courses' style='height:500px; width:100%; object-fit:cover; box-shadow:10px;' />
    </div>
</div>
    <!--end course page banner-->

    <!--start popular courses container-->
<div class='container mt-5'>
<h1 class='text-center'>All Courses</h1>
<!--start most popular courses 1st card-deck-->
<div class='card-deck mt-4'>
<a href='#' class='btn' style='text-align:left; padding:0px; margin:0px;'>
      <div class='card'>
      <img src="<?php echo base_url(
          'img/phppic.jpg'
      ); ?>" class='card-img-top' alt='Php' style='width:25%;'/>
        <div class='card-body'>
        <h5 class='card-title'>Learn Php Easy Way</h5>
        <p class='card-text'>PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages. PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP. PHP 7 is the latest stable release. Start learning PHP now »</p>
        </div>
        <div class='card-footer'>
        <p class='card-text d-inline'>Price: <small><del>&#8377 2000</del></small>
        <span class='font-weight-bolder'>&#8377 200</span>
        </p>
        <a href='<?= base_url(
            'users/course/course_details'
        ) ?>' class='btn btn-primary text-white font-weight-bolder float-right'>Enroll</a>
        </div>
      </div>
</a>

<a href='#' class='btn' style='text-align:left; padding:0px; margin:0px;'>
      <div class='card'>
      <img src="<?php echo base_url(
          'img/phppic.jpg'
      ); ?>" class='card-img-top' alt='Php' style='width:25%;'/>
        <div class='card-body'>
        <h5 class='card-title'>Learn Php Easy Way</h5>
        <p class='card-text'>PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages. PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP. PHP 7 is the latest stable release. Start learning PHP now »</p>
        </div>
        <div class='card-footer'>
        <p class='card-text d-inline'>Price: <small><del>&#8377 2000</del></small>
        <span class='font-weight-bolder'>&#8377 200</span>
        </p>
        <a href='#' class='btn btn-primary text-white font-weight-bolder float-right'>Enroll</a>
        </div>
      </div>
</a>

<a href='#' class='btn' style='text-align:left; padding:0px; margin:0px;'>
      <div class='card'>
      <img src="<?php echo base_url(
          'img/phppic.jpg'
      ); ?>" class='card-img-top' alt='Php' style='width:25%;'/>
        <div class='card-body'>
        <h5 class='card-title'>Learn Php Easy Way</h5>
        <p class='card-text'>PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages. PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP. PHP 7 is the latest stable release. Start learning PHP now »</p>
        </div>
        <div class='card-footer'>
        <p class='card-text d-inline'>Price: <small><del>&#8377 2000</del></small>
        <span class='font-weight-bolder'>&#8377 200</span>
        </p>
        <a href='#' class='btn btn-primary text-white font-weight-bolder float-right'>Enroll</a>
        </div>
      </div>
</a>
</div>
<!--end most popular courses 1st card-deck-->

<!--Start most popular courses 2nd-deck-->
<div class='card-deck mt-4'>
<a href='#' class='btn' style='text-align:left; padding:0px; margin:0px;'>
      <div class='card'>
      <img src="<?php echo base_url(
          'img/pythonpic.jpeg'
      ); ?>" class='card-img-top' alt='Php' style='width:25%;'/>
        <div class='card-body'>
        <h5 class='card-title'>Learn Python Easy Way</h5>
        <p class='card-text'>Python is an interpreted, high-level and general-purpose programming language. Python's design philosophy emphasizes code readability with its notable use of significant whitespace.</p>
        </div>
        <div class='card-footer'>
        <p class='card-text d-inline'>Price: <small><del>&#8377 3000</del></small>
        <span class='font-weight-bolder'>&#8377 300</span>
        </p>
        <a href='#' class='btn btn-primary text-white font-weight-bolder float-right'>Enroll</a>
        </div>
      </div>
</a>
<a href='#' class='btn' style='text-align:left; padding:0px; margin:0px;'>
      <div class='card'>
      <img src="<?php echo base_url(
          'img/pythonpic.jpeg'
      ); ?>" class='card-img-top' alt='Php' style='width:25%;'/>
        <div class='card-body'>
        <h5 class='card-title'>Learn Python Easy Way</h5>
        <p class='card-text'>Python is an interpreted, high-level and general-purpose programming language. Python's design philosophy emphasizes code readability with its notable use of significant whitespace.</p>
        </div>
        <div class='card-footer'>
        <p class='card-text d-inline'>Price: <small><del>&#8377 3000</del></small>
        <span class='font-weight-bolder'>&#8377 300</span>
        </p>
        <a href='#' class='btn btn-primary text-white font-weight-bolder float-right'>Enroll</a>
        </div>
      </div>
</a>
<a href='#' class='btn' style='text-align:left; padding:0px; margin:0px;'>
      <div class='card'>
      <img src="<?php echo base_url(
          'img/pythonpic.jpeg'
      ); ?>" class='card-img-top' alt='Php' style='width:25%;'/>
        <div class='card-body'>
        <h5 class='card-title'>Learn Python Easy Way</h5>
        <p class='card-text'>Python is an interpreted, high-level and general-purpose programming language. Python's design philosophy emphasizes code readability with its notable use of significant whitespace.</p>
        </div>
        <div class='card-footer'>
        <p class='card-text d-inline'>Price: <small><del>&#8377 3000</del></small>
        <span class='font-weight-bolder'>&#8377 300</span>
        </p>
        <a href='#' class='btn btn-primary text-white font-weight-bolder float-right'>Enroll</a>
        </div>
      </div>
</a>
</div> 

</div> <!--end popular courses container-->

            <!--contact Section-->
        <div class="container mt-4">
            <?php $this->load->view('templates/contact.php'); ?>
        </div>
            <!--end contact section-->



<!--start footer-->
<?php $this->load->view('templates/footer.php'); ?>
<!--end footer-->
