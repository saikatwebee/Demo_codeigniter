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

    <!--start  courses details main container-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo base_url(
                        'img/phppic.jpg'
                    ); ?>" class='card-img-top' alt='Php'/>
                </div>
                <div class="col-md-8">
                    <div class="card-boy">
                    <h5 class="card-title">Course Name: Learn Php</h5>
                    <p class="card-text">Description: PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages. PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP. PHP 7 is the latest stable release. Start learning PHP now </p>
                    <p class="card-text">Duration: 15 Days</p>
                    <form action='' method='post'>
                        <p class="card-text d-inline">
                        Price<small><del>&#8377 2000</del></small>
                        <span class='font-weight-bolder'>&#8377 200</span>
                        </p>
                        <button type='submit' class='btn btn-primary text-white font-weight-bolder float-right'>Buy Now</button>
                        
                    </form>
                    </div>
                </div>
            </div>

                    <!--start course details sub container-->
                        <div class="container mt-4">
                            <div class="row">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th scope='col'>Lession No.</th>
                                            <th scope='col'>Lession Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope='row'>1</th>
                                        <td>Introduction</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <!--start course details sub container-->

        </div>
     <!--end  courses details main container-->

            



<!--start footer-->
<?php $this->load->view('templates/footer.php'); ?>
<!--end footer-->
