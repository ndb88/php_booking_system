<html>

<head>
    <title>User registration</title>
    
  <!--Load icon set etc. from FontAwesome--->
<link rel = "stylesheet" href = "css/bootstrap.min.css">
    <style>
        
     /*Import fontawesome CSS into stylesheet*/
        
      @import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";  

        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: url(img/1.jpg) no-repeat;
            background-size: cover;
        }

        .login-box {
            width: 280px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }

        .placeholder {
            color: white;
            opacity: 0.4;
        }

        .login-box h1 {
            float: left;
            font-size: 40px;
            border-bottom: 6px solid #4682B4;
            margin-bottom: 50px;
            padding: 13px 0;
        }

        .textbox {
            width: 100%;
            overflow: hidden;
            font-size: 20px;
            padding: 8px 0;
            margin: 8px 0;
            border-bottom: 1px solid #4682B4;
        }

        .textbox i {
            width: 26px;
            float: left;
            text-align: center;
        }

        .textbox input {
            border: none;
            outline: none;
            background: none;
            color: white;
            font-size: 18px;
            width: 80%;
            float: left;
            margin: 0 10px;
        }

        .btn {
            width: 100%;
            background: none;
            border: 2px solid #4682b4;
            color: white;
            padding: 5px;
            font-size: 18px;
            cursor: pointer;
            margin: 12px 0;
        }

        a:link,
        a:visited {

            color: white;

            text-align: center;

        }

        a:hover {
            color: darkblue;
        }


        .form-control {
            border: none;
            height: 28px;
            margin: 2px;
            border: 1px solid #6B7363;
            font-size: 1.2em;
            padding: 5px;
            width: 95%;
        }

        .form-control:focus {
            outline: none;
        }
    </style>
    
    <!--Javascript validation function-->
    
    <script type="text/javascript">
        function Validate() {

            var alpha = /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/;
            var num = /^\[0-9]{10}$/;

            // Declare working variables 
            
            var username = document.forms['vform']['user'];
            var email = document.forms['vform']['email'];
            var password = document.forms['vform']['password'];
            var password_confirm = document.forms['vform']['password_confirm'];
            var name = document.forms['vform']['name'];
            var phone = document.forms['vform']['mobile'];

            // Declare error message variables
            
            var username_error = document.getElementById('username_error');
            var email_error = document.getElementById('email_error');
            var password_error = document.getElementById('password_error');
            var name_error = document.getElementById('name_error');
            var phone_error = document.getElementById('phone_error');





            // Validation to check username text box has been filled. Alert user if it has not.
            
            if (username.value == "") {
                username.style.border = "1px solid red";
                document.getElementById('username_div').style.color = "red";
                document.getElementById('username_error').style.fontSize = "17px";
                username_error.textContent = "Username is required";
                username.focus();
                return false;
            }

            // Validation to check username is greater than three characters. Alert user if not.
            
            if (username.value.length < 3) {
                username.style.border = "1px solid red";
                document.getElementById('username_div').style.color = "red";
                document.getElementById('username_error').style.fontSize = "17px";
                username_error.textContent = "Username must be at least three characters";
                username.focus();
                return false;
            }

                        
             // Validation to check if username contains invalid characters. Alert user if true.
            
            if (!alpha.test(username.value)) {

                username.style.border = "1px solid red";
                document.getElementById('username_div').style.color = "red";
                document.getElementById('username_error').style.fontSize = "17px";
                username_error.textContent = "Username can only contain letters.";
                username.focus();
                return false;

            }

            // Validation to check email input box has been filled. Alert user if it has not.
            
            if (email.value == "") {
                email.style.border = "1px solid red";
                document.getElementById('email_div').style.color = "red";
                document.getElementById('email_error').style.fontSize = "17px";
                email_error.textContent = "An Email address is required";
                email.focus();
                return false;
            }
            
            // Validation to check if password box has been filled. Alert user if it has not.

            if (password.value == "") {

                password.style.border = "1px solid red";
                document.getElementById('password_div').style.color = "red";
                document.getElementById('password_confirm_div').style.color = "red";
                document.getElementById('password_error').style.fontSize = "17px";
                password_confirm.style.border = "1px solid red";
                password_error.textContent = "A password is required";
                password.focus();
                return false;
            }
            
            // Validation to check if both password inputs match. Alert user if not.
            
            if (password.value != password_confirm.value) {

                password.style.border = "1px solid red";
                document.getElementById('password_confirm_div').style.color = "red";
                document.getElementById('password_error').style.fontSize = "17px";
                password_confirm.style.border = "1px solid red";
                password_error.textContent = "The passwords do not match";
                return false;
            }

            // Validation to check if Name input has been filled. Alert user if not.
            
            if (name.value == "") {
                name.style.border = "1px solid red";
                document.getElementById('name_div').style.color = "red";
                document.getElementById('name_error').style.fontSize = "17px";
                name_error.textContent = "Name is required";
                name.focus();
                return false;

            }
            
             // Validation to check if name contains invalid characters. Alert user if true.
            
            if (!alpha.test(name.value)) {

                name.style.border = "1px solid red";
                document.getElementById('name_div').style.color = "red";
                document.getElementById('name_error').style.fontSize = "17px";
                name_error.textContent = "Name should contain only letters";
                name.focus();
                return false;

            }

            // Validation to check if phone number input has been filled. Alert user if not.
            
            if (phone.value == "") {
                phone.style.border = "1px solid red";
                document.getElementById('phone_div').style.color = "red";
                document.getElementById('phone_error').style.fontSize = "17px";
                phone_error.textContent = "A phone number is required";
                phone.focus();
                return false;

            }
            
            // Validation to check if phone number is valid. Alert user if not.
            
            if (num.test(phone.value)) {

                phone.style.border = "1px solid red";
                document.getElementById('phone_div').style.color = "red";
                document.getElementById('phone_error').style.fontSize = "17px";
                phone_error.textContent = "Invalid number";
                phone.focus();
                return false;

            }


        }
    </script>



</head>

<body>
      <?php
if ( isset( $_GET['duplicate'] ) ) {

    if ( $_GET['duplicate'] == "error" ) {

        echo '<h4 class="bg-danger text-center" align="center" >There is already a user by that username. Please try again.</h4>';
    }
}
?>
            <!--Form for user input begins-->
    
    <form action="registration.php" onsubmit="return Validate()" name="vform" method="post" align="center" enctype="multipart/form-data">
        <div class="login-box">
            <h1>Register</h1>
            
           <!--Username input field and user icon.-->
            
            <div class="textbox" id="username_div">
                <i class="fas fa-user"></i>
                <input type="text" name="user" id="user" class="form-control" placeholder="Username">
                <div id="username_error"></div>
            </div>

             <!--Password and password confirm input field and padlock icon.-->
            
            <div class="textbox" id="password_div">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            
            <div class="textbox" id="password_confirm_div">
                <i class="fas fa-lock"></i>
                <input type="password" name="password_confirm" id="password_confirm" class="form-control" placeholder="Confirm password">
                <div id="password_error"></div>
            </div>
            
             <!-- Name input field and user icon in a circle-->

            <div class="textbox" id="name_div">
                <i class="fas fa-user-circle"></i>
                <input type="text" name="name" id="name" class="form-control" placeholder="Full name">
                <div id="name_error"></div>
            </div>

             <!--Email input field and @ icon-->
            
            <div class="textbox" id="email_div">
                <i class="fas fa-at"></i>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                <div id="email_error"></div>
            </div>
            
            <!--Phone input field and phone icon.-->

            <div class="textbox" id="phone_div">
                <i class="fas fa-phone"></i>
                <input type="tel" name="mobile" id=" mobile" class="form-control" placeholder="Phone number">
                <div id="phone_error"></div>
            </div>
            
            <!--Register button and link through to login.php page-->

            <input type="submit" class="btn" value="Register">
            <hr>

            <br><br><a href="login.php">Already registered with Fishers?<br> Login here</a>

        </div>
    </form>
</body>

</html>