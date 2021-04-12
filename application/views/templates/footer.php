

<div class='container-fluid bg-dark text-center p-2' style='line-height: 4;'>
<small class='text-white'>Copyright &copy; 2020 || Designed By E-Learning || Admin Login</small>
</div>
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button> -->

<!--login Modal -->
<div class="modal fade" id="loginModalCenter" tabindex="-1" role="dialog" aria-labelledby="loginModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form id='login_form'>
      <div class="modal-header">
          <h5 class="modal-title" id="loginModalLongTitle"><b>Login </b> <i class="fas fa-arrow-right"></i></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick='clearForm_login()'>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class='form-group'>
       <i class="fas fa-users"></i> <label>Username</label> <small id='error_user'></small>
        <input type='text' class='form-control' name='uname' id='uname' placeholder='Enter Username or Email'> 
       
        </div>
        <div class='form-group'>
       <i class="fas fa-key"></i> <label>Password</label> <small  id='error_pass'></small>
        <input type='password' class='form-control' name='password' id='pass' placeholder='Enter password'> 
       
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick='clearForm_login()'>Close</button>
        <button type="button" class="btn btn-primary" id='btnlog'>Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>



<!-- signup modal-->
<!-- <div class="modal fade" id="signModalCenter" tabindex="-1" role="dialog" aria-labelledby="signModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signModalLongTitle"><b>SignUp </b> <i class="fas fa-sign-in-alt"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick='clearForm_signup()'>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <form name='signform' id='sign_form'>
        <div class='form-group'>
        <i class="fas fa-user-plus"></i> <label>First Name</label> <small id='error_fnm'></small>
        <input type='text' class='form-control' name='first_name' id='Firstst_name' placeholder='Enter frist name'> 
        
        </div>

        <div class='form-group'>
        <i class="fas fa-user-plus"></i> <label>Last Name</label> <small id='error_lnm'></small>
        <input type='text' class='form-control' name='last_name' id='last_name' placeholder='Enter last name'> 
        
        </div>

        <div class='form-group'>
       <i class="fas fa-mobile-alt"></i> <label>Phone No.</label> <small id='error_ph'></small> 
        <input type='text' class='form-control' name='phone' id='phone' placeholder='Enter phone' maxlength='10'>
        
        </div>

        <div class='form-group'>
       <i class="fa fa-envelope" aria-hidden="true"></i>
        <label>Email</label> <small id='error_em'></small>
        <input type='text' class='form-control' name='email' id='email' placeholder='Enter email'> 
        
        </div>

        <div class='form-group'>
       <i class="fa fa-user-circle"></i> <label>Username</label>  <small id='erroruser'></small>
        <input type='text' class='form-control' name='username' id='unm' placeholder='Enter username'> 
       
        </div>

        <div class='form-group'>
       <i class="fa fa-unlock-alt"></i> <label>Password</label>  <small id='errorpass'></small> 
        <input type='password' class='form-control' name='password' id='p1' placeholder='Enter password'>
       <span class="fa fa-fw fa-eye  toggle-password" aria-hidden="true" toggle='#p1' style='float: right;top: -26px;left:-5px;position: relative;z-index: 2;'></span>
        </div>

        <div class='form-group'>
       <i class="fas fa-check-square"></i> <label>Confirm Password</label> <small id='errorcpass'></small>
        <input type='password' class='form-control' name='cpassword' id='p2' placeholder='Enter confirm password'> 
        
        </div>
     </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick='clearForm_signup()'>Close</button>
        <button type="button" class="btn btn-success" id='btnsign'>Register</button>
      </div>
    </div>
  </div>
</div> -->


</body>
<script>

$(document).on('click','#btnlog',function(){
    var user = $('#uname').val().trim();
    var pass = $('#pass').val().trim();

    if(user==''){
      $('#error_user').html('<small class="text-danger font-weight-bolder">Username cannot be blank!</small>');
      $('#uname').addClass('error_border');
      //$('#uname').focus();
    }
    else if(pass==''){
      $('#error_pass').html('<small class="text-danger font-weight-bolder">Password cannot be blank!</small>');
       $('#pass').addClass('error_border');
      //$('#pass').focus();
    }
    else{
       $.ajax({
      type:'post',
      url:'<?= base_url('users/register/validate') ?>',
      data:{
        user:user,
        pass:pass
      },
      success:function(response){
        
        var data = $.parseJSON(response);
        console.log(data.url);
        if(data.code==200){
          clearForm_login();
          swal({
            title:'Success',
            text:'Login Successfull',
            icon:'success',
            button:false,
            dangerMode:false,
            timer:3000
           }).then(()=>{
             window.location.href=data.url;
           });
        }
        else{
          swal({
            title:'Error!',
            text:'Invalid Username or Password',
            icon:'error',
            button:false,
            dangerMode:false,
            timer:3000
           }).then(()=>{
             clearForm_login();
           });
        }
      
      }
    });
    }
    // else{
    //   $('#errorUser').show();
    //   $('#errorPass').show();
    // }
    //console.log(data);
   
  });

  function clearForm_login(){
    $('#login_form').trigger('reset');
    $('#error_user').html('');
    $('#error_pass').html('');
  }

    $(document).ready(function(){

    $('#email').on('keypress blur',function(){

       var email= $('#email').val().trim();

        $.ajax({

             type:'post',
             url:'<?= base_url('users/register/check_mail') ?>',
             data:{
                  checkmail:email
                  },
             success:function(data){
              var response = $.parseJSON(data);
             // console.log(response.code);
             if(response.code == 200){

                 $('#error_em').html('<small class="text-danger font-weight-bolder">Email is already exist!</small>');
                 $('#email').css("border","1px solid #ff000080");
                 $('#btnsign').attr('disabled',true);
                 $('#btnsign').css("cursor","not-allowed");
             }
             else{
              $('#error_em').html('');
                 $('#email').css("border","1px solid #4caf50cc");
                 $('#btnsign').removeAttr('disabled');
                 $('#btnsign').css("cursor","pointer");
             }

            }
        });
    })

    });

  $(document).on('click','#btnsign',function(){
    var regex=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var phregex=/^\d{10}$/;
    var first_name  = $('#first_name').val().trim();
    var last_name  = $('#last_name').val().trim();
    var phone = $('#phone').val().trim();
    var email = $('#email').val().trim();
    var dob = $('#dob').val().trim();
    var unm = $('#unm').val().trim();
    var p1 = $('#p1').val().trim();
    var p2 = $('#p2').val().trim();

    if(first_name==''){
      $('#error_fnm').html('<small class="text-danger font-weight-bolder">First Name cannot be blank!</small>');
      $('#first_name').addClass('error_border');
      //$('#first_name').focus();
    }
   else if(last_name==''){
      $('#error_lnm').html('<small class="text-danger font-weight-bolder">Last Name cannot be blank!</small>');
      $('#last_name').addClass('error_border');
      //$('#last_name').focus();
    }
    else if(phone==''){
      $('#error_ph').html('<small class="text-danger font-weight-bolder">Phone cannot be blank!</small>');
      $('#phone').addClass('error_border');
      //$('#phone').focus();
    }
    else if(phone!='' && !phregex.test(phone)){
      $('#error_ph').html('<small class="text-danger font-weight-bolder">Invalid Phone number!</small>');
      $('#phone').addClass('error_border');
      //$('#phone').focus();
    }
    else if(email==''){
      $('#error_em').html('<small class="text-danger font-weight-bolder">Email cannot be blank!</small>');
      $('#email').addClass('error_border');
     // $('#email').focus();
    }
    else if(email!='' && !regex.test(email)){
      $('#error_em').html('<small class="text-danger font-weight-bolder">Invalid Email!</small>');
       $('#email').addClass('error_border');
      //$('#email').focus();
    }
    else if(dob==''){
      $('#error_dob').html('<small class="text-danger font-weight-bolder">Dob cannot be blank!</small>');
      $('#dob').addClass('error_border');
     //$('#dob').focus();
    }
    else if(unm==''){
      $('#erroruser').html('<small class="text-danger font-weight-bolder">Username cannot be blank!</small>');
       $('#unm').addClass('error_border');
     // $('#unm').focus();
    }
    else if(p1==''){
      $('#errorpass').html('<small class="text-danger font-weight-bolder">Password cannot be blank!</small>');
      $('#p1').addClass('error_border');
      $('#p1').focus();
    }
    else if(p2==''){
      $('#errorcpass').html('<small class="text-danger font-weight-bolder">Confirm password cannot be blank!</small>');
      $('#p2').addClass('error_border');
      $('#p2').focus();
    }
    else if(p2!='' && p2!=p1){
       $('#errorcpass').html('<small class="text-danger font-weight-bolder">Password mismatch!</small>');
     $('#p2').addClass('error_border');
     // $('#p2').focus();
    }
    else{
      $.ajax({
        type:'post',
        url:'<?= base_url('users/register/add') ?>',
        data:$('#sign_form').serializeArray(),
        success:function(data){
         // console.log(data);
          var response = $.parseJSON(data);
          console.log(response);
          if(response.code==200){
           // var br ="</br><b>Now you can Login</b>";
            swal({
              title:'Success',
              text:'Registration Successfull, you can login now',
              icon:'success',
              button:false,
              dangerMode:false,
              timer:5000,

            }).then(()=>{
              clearForm_signup();
              // $('#signModalCenter').modal('hide');
              $('#loginModalCenter').modal('show');
            });
          }
        }
      });
    }
});

function clearForm_signup(){
    $('#sign_form').trigger('reset');
    $('#error_fnm').html('');
    $('#first_name').removeClass('error_border').addClass('success_border');
    $('#error_lnm').html('');
    $('#last_name').removeClass('error_border').addClass('success_border');
    $('#error_ph').html('');
    $('#phone').removeClass('error_border').addClass('success_border');
    $('#error_em').html('');
    $('#email').removeClass('error_border').addClass('success_border');
    $('#error_dob').html('');
    $('#dob').removeClass('error_border').addClass('success_border');
    $('#erroruser').html('');
    $('#unm').removeClass('error_border').addClass('success_border');
    $('#errorpass').html('');
    $('#p1').removeClass('error_border').addClass('success_border');
    $('#errorcpass').html('');
    $('#p2').removeClass('error_border').addClass('success_border');
     
}

$(document).on('click','#info',function(){
  swal({
  title: "Are you a new joinee to iSchool?",
  
  icon: "warning",
  buttons: ['No','Yes'],
  dangerMode: true,
})
.then((willjoinee) => {
  if (willjoinee) {
    
     swal({title:"Please SignUp",text:"You have to SignUp",button:false,icon:'warning',timer:3000}).then(()=>{
     // $('#signModalCenter').modal('show');
     window.location.href='<?= base_url('users/register/registration') ?>';
    });
  } else {
   swal({title:"Please Login",text:"You have to Login to get started",button:false,icon:'warning',timer:3000}).then(()=>{
      $('#loginModalCenter').modal('show');
    });
  }
});
});

$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>
</html>