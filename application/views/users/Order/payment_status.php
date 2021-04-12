<!--start header-->
<?php if (!$this->session->userdata('logged_in')) {
    $this->load->view('templates/header.php');
} else {
    echo "<script>
    window.location.href='http://localhost/DemoProject/users/register/account_details';
    </script>";
} ?>
<!--end header-->
<!--start payment content-->
    <!--Start payment page banner-->
<div class='container-fluid bg-dark '>
    <div class='row'>
        <img src='https://cdn.pixabay.com/photo/2016/07/31/14/37/paper-1559010_960_720.jpg' alt='courses' style='height:500px; width:100%; object-fit:cover; box-shadow:10px;' />
    </div>
</div>
    <!--end payment status banner-->

    <!--start payment page container-->
            <div class='container'>
                <h2 class='text-center my-4'>Payment Status</h2>
                    <form method='post' action=''>
                        <div class='form-group row'>
                            <label class='offset-sm-3 col-form-label'>Order Id:</label>
                                <div>
                                    <input type='text' class='form-control mx-3'>
                                </div>
                                <div>
                                    <input type='submit' class='btn btn-primary mx-4' value='View'>
                                </div>
                        </div>
                            
                    </form> 
            </div>
    <!--end payment status container-->
           
            <!--contact Section-->
        <div class="container">
            <?php $this->load->view('templates/contact.php'); ?>
        </div>
            <!--end contact section-->

<!--start payment content-->

<!--start footer-->
<?php $this->load->view('templates/footer.php'); ?>
<!--end footer-->
