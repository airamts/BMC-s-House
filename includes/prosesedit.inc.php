<?php
include('dbh.inc.php');
if (isset($_POST['simpan'])) {
    $conn->query("UPDATE reservation SET reserv_date='$_POST[date]',time_zone='$_POST[time]',num_guests='$_POST[num_guests]',telephone='$_POST[tele]' 
    WHERE reserv_id ='$_POST[reserv_id]'") or die(mysqli_error($conn));
    header("Location: ../view_reservations.php?edit=success");
    exit();
}
