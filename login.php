<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
  <title>Login</title>
      
      <!---Load stylesheet from BootstrapCDN-->
      
    <link rel = "stylesheet" href = "css/bootstrap.min.css">

    <style>
        
    /*Import fontawesome CSS into stylesheet*/
        
    @import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
        
body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: url(img/1.jpg) no-repeat;
  background-size: cover;
}
.placeholder {
  color: white;
  opacity: 0.4; 
}
.login-box{
  width: 280px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: white;
}
.login-box h1{
  float: left;
  font-size: 40px;
  border-bottom: 6px solid #4682B4;
  margin-bottom: 50px;
  padding: 13px 0;
}
.textbox{
  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px 0;
  margin: 8px 0;
  border-bottom: 1px solid #4682B4;
}
.textbox i{
  width: 26px;
  float: left;
  text-align: center;
}
.textbox input{
  border: none;
  outline: none;
  background: none;
  color: white;
  font-size: 18px;
  width: 80%;
  float: left;
  margin: 0 10px;
}
.btn{
  width: 100%;
  background: none;
  border: 2px solid #4682b4;
  color: white;
  padding: 5px;
  font-size: 18px;
  cursor: pointer;
  margin: 12px 0;
}
a:link, a:visited {
  
  color: white;
  text-align: center;
 
}
a:hover {
  color: darkblue;
}
</style>
  
  </head>
  <body>
      
      <?php
if ( isset( $_GET['registration'] ) ) {

    if ( $_GET['registration'] == "success" ) {

        echo '<h4 class="bg-success text-center" align="center" >You were successfully registered! Please log-in below.</h4>';
    }
}
?>
      <?php
if ( isset( $_GET['error'] ) ) {

    if ( $_GET['error'] == "True" ) {

        echo '<h4 class="bg-danger text-center" align="center" >The username or password was incorrect. Please try again.</h4>';
    }
}
?>
  <form action="validate.php" method="post" enctype="multipart/form-data" align="center">
<div class="login-box">
  <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username" name="user">
  </div>
  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" name="password">
  </div>
  <input type="submit" class="btn" value="Sign in">
  <hr>
  
<br><br><a href="register.php" >New to Fishers?<br> Click here to register an account.</a>
</div>
</form>
</body>
</html>