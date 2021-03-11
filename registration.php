<?php

session_start();

$conn = mysqli_connect( 'localhost', 'root', '' );
mysqli_select_db( $conn, 'restaurant' );
$username = $_POST['user'];
$pass = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$s = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query( $conn, $s );
$num = mysqli_num_rows( $result );
if ( $num == 1 ) {
    header( "Location:register.php?duplicate=error" );
} else {
    $register = "INSERT INTO users(username,password,name,email,mobile) 
    VALUES('$username','$pass','$name','$email','$mobile')";
    mysqli_query( $conn, $register );
    header( "Location:login.php?registration=success" ); 
    ?>
    <a href = "login.php">Login</a>
    <?php
}

?>