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
<a href='#' class='btn btn-danger' style='border-radius:10px;' id='info'>Get Started</a>
</div>
</div>
<!--end video bacground-->

<!--start text banner-->
<div class='container-fluid bg-danger txt-banner'>
 <div class='row bottom-banner'>
   <div class='col-sm'>
      <h5><i class='fas fa-book-open mr-3'></i>100+ Online Courses</h5>
    </div>
    <div class='col-sm'>
      <h5><i class='fas fa-users mr-3'></i>Expert Instructors</h5>
    </div>
    <div class='col-sm'>
      <h5><i class='fas fa-keyboard mr-3'></i>Lifetime Access</h5>
    </div>
    <div class='col-sm'>
      <h5><i class="fas fa-rupee-sign mr-3"></i>Money Back Guarantee*</h5>
    </div>
  </div>
</div>
<!--end text banner-->

<!--start popular courses container-->
<div class='container mt-5'>
<h1 class='text-center'>Popular Courses</h1>
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
</div> <br/>
<!--end most popular courses 2nd-deck-->
<div class='text-center m-2'>
<a href='#' class='btn btn-danger btn-sm'>View All Courses</a>
</div>
</div> <!--end popular courses container-->

<!--start contact us form container-->
<div class='container mt-4' id='contact'>
<?php $this->load->view('templates/contact.php'); ?>
</div><!--end contact us form container-->

<!-- TESTIMONIALS -->
<section class="testimonials">
	<div class="container">

      <div class="row">
        <div class="col-sm-12">
          <div id="customers-testimonials" class="owl-carousel">

            <!--TESTIMONIAL 1 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">EMILIANO AQUILANI</div>
            </div>
            <!--END OF TESTIMONIAL 1 -->
            <!--TESTIMONIAL 2 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">ANNA ITURBE</div>
            </div>
            <!--END OF TESTIMONIAL 2 -->
            <!--TESTIMONIAL 3 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">LARA ATKINSON</div>
            </div>
            <!--END OF TESTIMONIAL 3 -->
            <!--TESTIMONIAL 4 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">IAN OWEN</div>
            </div>
            <!--END OF TESTIMONIAL 4 -->
            <!--TESTIMONIAL 5 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">MICHAEL TEDDY</div>
            </div>
            <!--END OF TESTIMONIAL 5 -->
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- END OF TESTIMONIALS -->

    <div class='container-fluid bg-danger' style='line-height:3;'> <!--start social link-->
    <div class='row'>
      <div class='col-sm-3 social-div text-center'>
      <a class='text-white social-hover' href='#'><i class='fab fa-facebook mr-2'></i>Facebook</a>
      </div>
      <div class='col-sm-3 social-div text-center'>
      <a class='text-white social-hover' href='#'><i class='fab fa-twitter mr-2'></i>Twitter</a>
      </div>
      <div class='col-sm-3 social-div text-center'>
      <a class='text-white social-hover' href='#'><i class='fab fa-instagram mr-2'></i>Instagram</a>
      </div>
      <div class='col-sm-3 social-div text-center'>
      <a class='text-white social-hover' href='#'><i class='fab fa-whatsapp mr-2'></i>Whatsapp</a>
      </div>
      </div>
    </div><!--end social link-->
    <!--start About Section-->
    <div class='container-fluid p-4' style='background-color:#d8dbde;'>
      <div class='container pt-2' style='background-color:#d8dbde;'>
      <div class='row'>
        <div class='col-sm-4'>
          <h5>About Us</h5>
            <p>iSchool provides universal access to the world's best education, partnering, top universities and organizations to offer courses online</p>
        </div>
        <div class='col-sm-4'>
          <h5>Category</h5>
            <a class='text-dark' href='#'>Web Development</a><br/>
            <a class='text-dark' href='#'>Web Designing</a><br/>
            <a class='text-dark' href='#'>Android App Dev</a><br/>
            <a class='text-dark' href='#'>IOS Development</a><br/>
            <a class='text-dark' href='#'>Data Analysis</a><br/>
            
        </div>
        <div class='col-sm-4'>
          <h5>Contact Us</h5>
          <p>iSchool Pvt Ltd<br/>Near Singur Police Station</br>Singur,Hooghly,Westbengal<br/>Ph.+917449761817</p>
        </div>

        </div>
      </div>
    </div>
    <!--end about section-->

    <!--end main content-->

<!--start footer-->
<?php $this->load->view('templates/footer.php'); ?>
<!--end footer-->



<script>

jQuery(document).ready(function($) {
        		"use strict";
        		//  TESTIMONIALS CAROUSEL HOOK
		        $('#customers-testimonials').owlCarousel({
		            loop: true,
		            center: true,
		            items: 3,
		            margin: 0,
		            autoplay: true,
		            dots:true,
		            autoplayTimeout: 8500,
		            smartSpeed: 450,
		            responsive: {
		              0: {
		                items: 1
		              },
		              768: {
		                items: 2
		              },
		              1170: {
		                items: 3
		              }
		            }
		        });
        	});



 
</script>




