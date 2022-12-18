<?php

//delete reservation

if(isset($_POST['delete-submit'])) {
 
 require 'dbh.inc.php';
 
 $reservation_id = $_POST['reserv_id'];
    
 $sql = "DELETE FROM reservation WHERE reserv_id =$reservation_id";
if (mysqli_query($conn, $sql)) {
    header("Location: ../view_reservations.php?delete=success");
} else {
    header("Location: ../view_reservations.php?delete=error");
}
}