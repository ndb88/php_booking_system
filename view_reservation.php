<?php
session_start();
if ( !isset( $_SESSION['user_id'] ) )
header( 'location:login.php' );

?>
<!DOCTYPE html>
<html>
<head>

<link rel = "stylesheet" href = "css/bootstrap.min.css">

<style>


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
<a  href = "home.php">Home</a>
<a href = "reservation.php">Make a Reservation</a>
<a  class = "active"href = "view_reservation.php">View and Cancel Reservations</a>
<div class = "topnav-right">
<a href = "logout.php">Logout</a>
</div>
</div>

<body>

<?php
$db = mysqli_connect( "localhost", "root", "", "restaurant" );

if ( isset( $_SESSION['user_id'] ) ) {
    echo '<p class="text-white bg-dark text-center"><big>Hello ' . $_SESSION['username'] .', these are your current reservations:</p><br></big>';

    if ( isset( $_GET['delete'] ) ) {
        if ( $_GET['delete'] == "error" ) {

            echo '<h5 class="bg-danger text-center">Something has gone wrong. Please either contact the restaurant directly or try again later.</h5>';
        }
        if ( $_GET['delete'] == "success" ) {

            echo '<h5 class="bg-success text-center">The reservation was succesfully cancelled</h5>';
        }
    }

}

$id = $_SESSION['user_id'];
$list = "SELECT * FROM reservation WHERE user_id='$id'";
$result = mysqli_query( $db, $list );
?>

<table class = "table table-hover table-responsive-sm text-center">
<thead>
<tr>
<th scope = "col">Full Name</th>
<th scope = "col">Guests</th>
<th scope = "col">Reservation Date</th>
<th scope = "col">Time</th>
<th scope = "col">Mobile</th>
<th scope = "col">Booking comments</th>
<th class = "table-danger" scope = "col"></th>
</tr>
</thead>
<?php
while( $row = $result->fetch_assoc() ) {
    ?>

    <tbody>
    <tr>
    <form action = 'delete.php' method = 'POST'>
    <input name = 'reserve_id' type = 'hidden' value = "<?php echo $row["reserve_id"]; ?>"/>
    <th scope = 'row'>
    <?php echo $row["fname"]; echo " ";
    echo $row["lname"];
    ?>
    </th>
    <td> <?php echo $row["num_guests"];
    ?></td>
    <td> <?php echo $row["date"];
    ?></td>
    <td> <?php echo $row["time"];
    ?></td>
    <td> <?php echo $row["mobile"];
    ?></td>
    <td> <?php  echo $row["details"];
    ?></td>

    <td class = 'table-danger'><button type = 'submit' name = 'delete-submit' class = 'btn btn-danger btn-sm'>Cancel</button></td>
    </form>
    </tr>
    </tbody>
    <?php
}

?>
</table>
</body>
</html>