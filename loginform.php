<?php
require_once('newheader.php');
require_once('class/user.class.php');
$user = new User;


if(isset($_POST["login"]))  
 {  
      $field = array(  
           'email'     =>     $_POST["email"],  
           'password'     =>     $_POST["password"]  
      );  
      if($data->required_validation($field))  
      {  
           if($data->can_login("user", $field))  
           {  
                $_SESSION["email"] = $_POST["email"];  
                header("location:Dashboard.php");  
           }  
           else  
           {  
                $message = $data->error;  
           }  
      }  
      else  
      {  
           $message = $data->error;  
      }  
 }
?>

    <div class="container" id="login">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">

                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <span id="errSignup"></span>
                    <!-- <?php if(isset($status)) { echo '<div class="alert alert-danger">
                    <strong>Username and Password doesnot match!</strong>
                    </div>'; } ?> -->
                    <div class="panel-body">
                        <form role="form" method="post" action="" id="loginForm">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="email" name="email" type="email" autofocus required
                                    id="email" ></span>
                                    <?php if(isset($err['email'])){echo $err['email'];} ?>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="password" name="password" type="password" value="" minlength="6" required id="loginPassword"  autocomplete="off"><span id="errlpassword"></span>
                                    <?php if(isset($err['password'])){echo $err['password'];} ?>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label> - 
                                    <a href="signup.php" id = "createNew">Create a new account </a>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="login"  class="btn btn-lg btn-success btn-block" value="Login" id="btnLogin">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


 

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
    <script type="text/javascript" src="dist/js/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            // var $form = $("form"),
            //     $successMsg = $(".alert");
            //     $.validate({
            //         errorMessageClass: "error",
            //         onSuccess: function(){
            //             $successMsg.show();
            //             return false; // stops submitting
            //         }
            //     });
            $('#submitNow').click(function()
            {
                $('.form-control').validate();
            });
            $('#btnLogin').click(function()
            {
                $('#loginForm').validate();
            });
            
            
            $('#createNew').click(function(){
                $('#loader').fadeOut(2000);
                $('#login').fadeOut(2000);
                $('#signup').fadeIn();
                $('#loader').fadeIn();
                  $('#loader').fadeOut();
            });
            $('#doLogin').click(function(){
                $('#loader').fadeOut(2000);
                $('#signup').fadeOut(2000);
                $('#login').fadeIn();
                $('#loader').fadeIn();


            });
       
            $("#email").keyup(function(){
            var mail = $('#email').val();
             $.ajax({
                url:'check_register.php',
                data: {'email': mail},
                type: 'POST',
                success:function(res){

                    $('#errEmail').css('color','red');
                    $('#errEmail').text(res);
                    return false;

                }
            });
           return false;
        }); // end of the click function
        
  
            $("#loginEmail").keyup(function(){
            var lmail = $('#loginEmail').val();
             $.ajax({
                url:'check_login.php',
                data: {'email': lmail},
                type: 'POST',
                success:function(res){
                    $('#errlemail').css('color','red');
                    $('#errlemail').text(res);
                }
            });
           return false;
        });
         // end of the click function
        
         $('#submitNow').click(function(){
            var str = $( "#Register" ).serialize();
            $.ajax({
                url:'register.php',
                data:$( "#Register" ).serialize(),
                method:'post',
                dataType:'text',
                success:function(res){
                    $('#errForm').css('color','red');
                    $('#errForm').text(res);
                    $('#Register')[0].reset();
                }
            });
          return false;
            
         });
         $('#btnLogin').click(function(){
            var str = $('#loginForm').serialize();
            $.ajax({
                url:'checklogin.php',
                data:$('#loginForm').serialize(),
                method:'post',
                dataType:'text',
                success:function(re){
                    if(re=='success'){
                       $(location).attr('href', 'dashboard.php');
                    }else{
                        $('#errSignup').css('color','red');
                    $('#errSignup').text(re);
                    $('#loginForm')[0].reset();
                    }
                    
                }
            });
            return false;
         });     
    }); // end of document ready function
    </script>


<?php
include ('footer.php');
?>

</body>

</html>
