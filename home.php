<?php
session_start();
if ( !isset( $_SESSION['user_id'] ) )
header( 'location:login.php' );
?>

<!DOCTYPE html>

<html>
<head>

<title>Home</title>

<meta name = "viewport" content = "width=device-width, initial-scale=1">
<link rel = "stylesheet" href = "css/bootstrap.min.css">
    
<script src = "js/jquery.min.js"></script>
<script src = "js/bootstrap.min.js"></script>
    
<link rel = "stylesheet" href = "css/font-awesome.min.css">
<link rel = "stylesheet" href = "css/w3.css">

</head>

<style>
    
body {
    background-color:#c4d4e0;
}
img {
    width: 200px;
    height: 200px;
    border: 20px;
    padding: 20px;

}
div {

    font-family:Arial, Helvetica, sans-serif;
    color:black;

}
.topnav {
    overflow: hidden;
    background-color: #696969;
}

.topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

.topnav a:hover {
    background-color: #ddd;
    color: black;
}

.topnav a.active {
    background-color: #4682b4;
    color: white;
}

.topnav-right {
    float: right;
}

</style>
</head>

<div class = "topnav">
<a class = "active" href = "home.php">Home</a>
<a href = "reservation.php">Make a Reservation</a>
<a href = "view_reservation.php">View and Cancel Reservations</a>

<div class = "topnav-right">

<a href = "logout.php">Logout</a>
</div>
</div>
<div class = "w3-content" style = "max-width:1300px">

<!-- Main sections of home page text.-->
    
<div class = "w3-row w3-padding-64" id = "main">
<div class="w3-col m6 w3-padding-large w3-hide-small">
<img src="img/6.jpg" class="w3-round w3-image " alt="Table Setting" style="width:500px;height:300px;">
</div>
<div class = "w3-col m6 w3-padding-large">
<h1 class = "w3-center">Fishers at the Shore <br> online booking system.</h1><br>
<h5 class = "w3-center">
    
<!-- PHP code to display the current logged in user-->
    
    <?php
    if ( isset( $_SESSION['user_id'] ) ) {
    echo '<p class="text-white bg-dark text-center"><u> You are logged in as <b>'. $_SESSION['username'] .'</u></b></p><br>';
    }?>
    </h5>
<p class = "w3-large"> Please use the navigation bar above to either make a reservation or to view and cancel your booked reservations. <br><br>Remember to log out when finished. </p>
<p class = "w3-large w3-text-grey w3-hide-medium"></p>
</div>
</div>
</div>
</html>