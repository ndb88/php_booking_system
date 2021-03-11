<?php
session_start();
if ( !isset( $_SESSION['user_id'] ) )
header( 'location:login.php' );
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Reservation</title>
    
    <!--Load BootstrapCDN stylesheet-->
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-color: #c4d4e0;
        }

        .wrap {
            width: 800px;
            margin: auto;
            margin-top: 0px;
            padding: 40px;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.2);
        }

        form {
            border: 1px dotted white;
            background-color: #f8f5ee;
            padding: 10px;
        }

        h3 {
            text-align: center;
            color: white;
            width: 800px;
            margin: auto;
            margin-top: 25px;
            align-content: center;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.2);
        }

        button[type=submit] {

            background-color: #4682B4;
            color: white;
            padding: 14px 20px;
            border: none;

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

        h4 {
            width: 600px;
            margin: auto;
            padding: 20px;
            align-content: center;
        }
        r1 {
            color:red;}

        }
    </style>
</head>
    
<!--Top navigation bar-->
    
<div class="topnav">
    <a href="home.php">Home</a>
    <a class="active" href="reservation.php">Make a Reservation</a>
    <a href="view_reservation.php">View and Cancel Reservations</a>
    <div class="topnav-right">

        <a href="logout.php">Logout</a>
    </div>
</div>

<body>
    
<!-- Display success message if reservation successfully made-->
    
<?php
if ( isset( $_GET['reservation'] ) ) {

    if ( $_GET['reservation'] == "success" ) {

        echo '<h4 class="bg-success text-center" align="center" >Your reservation was made successfully!</h4>';
    }
}
?>   
<h3><br>Please make sure you complete all required fields.</h3>

    <!-- Form for user input begins-->
    
<div class="wrap">
    <form action="reserve.php" method="post">

        <div class="form-group">
            <label>First Name:<r1>*</r1></label>
            <input type="text" class="form-control" name="fname" placeholder="First Name" required="required">
        </div>

        <div class="form-group">
            <label>Last Name:<r1>*</r1></label>
            <input type="text" class="form-control" name="lname" placeholder="Last Name" required="required">
        </div>

        <div class="form-group">
            <label>Date:<r1>*</r1></label>
            <input type="date" class="form-control" name="date" placeholder="Date" required="required">
        </div>

        <div class="form-group">
            <label>Select a timeslot:<r1>*</r1></label>
            <select class="form-control" name="time">
                <option>12:00 - 13:30</option>
                <option>13:30 - 15:00</option>
                <option>15:00 - 16:30</option>
                <option>16:30 - 18:00</option>
                <option>18:00 - 19:30</option>
                <option>19:30 - 21:00</option>
                <option>21:00 - 22:30</option>
            </select>
        </div>

        <div class="form-group">
            <label>Enter number of guests:<r1>*</r1></label>
            <input type="number" class="form-control" min="1" name="num_guests" placeholder="Guests" required="required">
            <small class="form-text text-muted">If you wish to make a reservation for more than 6 guests, please contact the restaurant directly.</small>
        </div>

        <div class="form-group">
            <label for="guests">Phone number:<r1>*</r1></label>
            <input type="telephone" class="form-control" name="tele" placeholder="Telephone" required="required">
        </div>

        <div class="form-group">
            <label>Booking notes:</label>
            <textarea class="form-control" name="details" placeholder="Other details" rows="3"></textarea>
            <small class="form-text text-muted">Comments must be less than 200 characters<br><r1>*required fields</r1></small>
        </div>

        <div class="form-group">
            <button type="submit" name="reserve-submit" class="btn btn-dark btn-lg btn-block">Submit Reservation</button>
        </div>
    </form>
</div>

</body>

</html>