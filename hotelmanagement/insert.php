<?php
//Insert config file
require_once "config.php";

// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$tel = mysqli_real_escape_string($link, $_REQUEST['tel']);
$room = mysqli_real_escape_string($link, $_REQUEST['room']);
$hall = mysqli_real_escape_string($link, $_REQUEST['hall']);
$tent = mysqli_real_escape_string($link, $_REQUEST['tent']);
$adults = mysqli_real_escape_string($link, $_REQUEST['adults']);
$children = mysqli_real_escape_string($link, $_REQUEST['children']);
$checkindate = mysqli_real_escape_string($link, $_REQUEST['checkindate']);
$checkoutdate = mysqli_real_escape_string($link, $_REQUEST['checkoutdate']);
$considerations = mysqli_real_escape_string($link, $_REQUEST['considerations']);
$payment = mysqli_real_escape_string($link, $_REQUEST['payment']);
$cardname = mysqli_real_escape_string($link, $_REQUEST['cardname']);
$cardnumber = mysqli_real_escape_string($link, $_REQUEST['cardnumber']);
 
// Attempt insert query execution
$sql = "INSERT INTO reservation_user (name, email, tel, room, hall, tent, adults, children, checkindate, checkoutdate, considerations, payment, cardname, cardnumber )
 VALUES ('$name', '$email', '$tel', '$room', '$hall', '$tent', '$adults', '$children', '$checkindate', '$checkoutdate', '$considerations', '$payment', '$cardname', '$cardnumber')";
if(mysqli_query($link, $sql)){
    echo "Reserved Successfully!";
} else{
    echo "ERROR: Could not able to Reserve. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>