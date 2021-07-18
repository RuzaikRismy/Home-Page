<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- ==== style sheet ====  -->
    <link rel="stylesheet" href="style.css">
    <title>Login Form</title>
    <style>
  form .login .field.error,
            label.error {
                /* remove the next line when you have trouble in IE6 with labels in list */
                color: rgb(248, 0, 0);
                font-family: sans-serif
            }
            form .signup .field.error,
            label.error {
                /* remove the next line when you have trouble in IE6 with labels in list */
                color: rgb(248, 0, 0);
                font-family: sans-serif
            }
    </style>
</head>

<body>
    <div class="container">
        <div class="main-text">
            <div class="title login">
                Login Form
            </div>
            <div class="title signup">
                Register Form
            </div>
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">Register</label>
                <div class="slider-tab"></div>
            </div>
            <!--Signin form-->
            <div class="form-inner">
                <form action="data.php" method="POST" id="loginform" class="login">
                    <div class="field">
                        <input type="text" name="email1"  placeholder="Email Address" required>
                     <!-- <div class="error">* <?php echo $emailErr;?></div>-->
                    </div>
                    <div class="field">
                        <input type="password" name="password1" placeholder="Password" required >
                   <!-- <div class="error">* <?php echo $passwordErr;?></div>-->
                    </div>
                    
                    <div class="pass-link">
                        <a href="#">Forgot password?</a>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" name="login" id="signinform" value="Login">
                    </div>
                    <div class="signup-link">
                        Not a member? <a href="">Signup now</a>
                    </div>
 <!--  sigin form jquery  -->
 <script>
    

    $().ready(function () {
         $('#signinform').on('click', function () {
             var formValidStatus = $("#loginform").valid();
             if (formValidStatus) {
                 $.post("data.php",
                     $("#loginform").serialize(),
                     function (data) {
                         // Display the returned data in browser
                         console.log(data);
                         if (data == 1) {
                             $('#liveToast').toast('show')
                         }
                     });
             }
         });

         $("#loginform").validate({
             rules: {
                 email1: "required",
                 password1: "required",
                 email1: {
                     required:true,
                     minilength:10
                     

                 },
                 password1: {
                     required: true,
                     varchar:true,
                     //number: true
                 }
             },
             messages: {
                 //firstname: "Please enter your firstname",
               //  lastname: "Please enter your lastname",
               //  username: {
                 //    required: "Please enter a username",
                  //   minlength: "Your username must consist of at least 5 characters"
               //  },
                 email1: {
                     required: 'Please enter your email address'
                 },
                // age: {
                   //  required: "Please enter your age",
                    // number: "Please enter a numeric  value"
               //  }
               password1:{
                   required:'Please enter your valid password'
               }
             }
         });
     });

 </script>

                </form>

                

                <!--Signup form-->
                <form action="mydata.php" method="POST" id="#logoutform" class="signup">
                    <div class="field">
                        <input type="email" name="email2" placeholder="Email Address" required>
                    </div>
                    <div class="field">
                        <input type="password" name="password2" placeholder="Password" required>
                    </div>
                    <div class="field">
                        <input type="password" name="cpassword" placeholder="Confirm password" required>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" name="signup" id="signupform" value="Signup">
                    </div>

                    <script>
    

    $().ready(function () {
         $('#signupform').on('click', function () {
             var formValidStatus = $("#logoutform").valid();
             if (formValidStatus) {
                 $.post("mydata.php",
                     $("#logoutform").serialize(),
                     function (data) {
                         // Display the returned data in browser
                         console.log(data);
                         if (data == 1) {
                             $('#liveToast').toast('show')
                         }
                     });
             }
         });

         $("#loginform").validate({
             rules: {
                 email2: "required",
                 password2: "required",
                 email2: {
                     required:true,
                     minilength:10,
                     

                 },
                 password2: {
                     required: true,
                     varchar:true,
                     //number: true
                 }
                 cpassword:{
                     required:true,
                     varchar:true,
                 }
             },
             messages: {
                 //firstname: "Please enter your firstname",
               //  lastname: "Please enter your lastname",
               //  username: {
                 //    required: "Please enter a username",
                  //   minlength: "Your username must consist of at least 5 characters"
               //  },
                 email: {
                     required: 'Please enter your email address'
                 },
                // age: {
                   //  required: "Please enter your age",
                    // number: "Please enter a numeric  value"
               //  }
               password:{
                   required:'Please enter your valid password'
               },
               cpassword:{
                   required:'Please fill your valid password',
               }
             }
         });
     });

 </script>

                </form>
            </div>
        </div>
    </div>
    <script>

const loginText = document.querySelector(".main-text .login");
        const loginForm = document.querySelector("form.login");
        const loginBtn = document.querySelector("label.login");
        const signupBtn = document.querySelector("label.signup");
        const signupLink = document.querySelector("form .signup-link a");
        signupBtn.onclick = (() => {
            loginForm.style.marginLeft = "-50%";
            loginText.style.marginLeft = "-50%";
        });
        loginBtn.onclick = (() => {
            loginForm.style.marginLeft = "0%";
            loginText.style.marginLeft = "0%";
        });
        signupLink.onclick = (() => {
            signupBtn.click();
            return false;
        });

        </script>
    
</body>

</html>