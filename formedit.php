<?php
require "header.php";
include('includes/dbh.inc.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $ambil = $conn->query("SELECT * FROM reservation WHERE reserv_id =$id");
    $user = $ambil->fetch_assoc();
    $f_name = $user['f_name'];
    $l_name = $user['l_name'];
    $reserv_date = $user['reserv_date'];
    $time_zone = $user['time_zone'];
    $num_guests = $user['num_guests'];
    $telephone = $user['telephone'];
    $comment = $user['comment'];
}
?>

<br><br>
<div class="container">
    <h3 class="text-center"><br>Edit Reservation<br></h3>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="includes/prosesedit.inc.php" method="POST">
                <fieldset>
                    <div class="form-group">
                        <label>Enter Date</label>
                        <input type="hidden" class="form-control" name="reserv_id" value="<?= $id ?>">
                        <input type="date" class="form-control" name="date" placeholder="Date" value="<?= $reserv_date ?>" />
                    </div>
                    <div class="form-group">
                        <label>Enter Time Zone</label>
                        <select class="form-control" name="time" placeholder="Time">
                            <option <?php if ($time_zone == '11:00 - 13:00') echo 'selected'; ?>>11:00 - 13:00</option>
                            <option <?php if ($time_zone == '12:00 - 14:00') echo 'selected'; ?>>12:00 - 14:00</option>
                            <option <?php if ($time_zone == '13:00 - 15:00') echo 'selected'; ?>>13:00 - 15:00</option>
                            <option <?php if ($time_zone == '14:00 - 16:00') echo 'selected'; ?>>14:00 - 16:00</option>
                            <option <?php if ($time_zone == '15:00 - 17:00') echo 'selected'; ?>>15:00 - 17:00</option>
                            <option <?php if ($time_zone == '16:00 - 18:00') echo 'selected'; ?>>16:00 - 18:00</option>
                            <option <?php if ($time_zone == '117:00 - 19:00') echo 'selected'; ?>>17:00 - 19:00</option>
                            <option <?php if ($time_zone == '19:00 - 21:00') echo 'selected'; ?>>19:00 - 21:00</option>
                            <option <?php if ($time_zone == '20:00 - 22:00') echo 'selected'; ?>>20:00 - 22:00</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Enter number of Guests</label>
                        <input type="number" class="form-control" min="1" name="num_guests" placeholder="Guests" value="<?= $num_guests ?>" />
                    </div>
                    <div class="form-group">
                        <label for="guests">Enter your Telephone Number</label>
                        <input type="number" class="form-control" name="tele" placeholder="Telephone" value="<?= $telephone ?>" />
                    </div>
                    <div class="form-group">
                        <button type="submit" name="simpan" value="simpan" class="btn btn-dark btn-lg btn-block">Edit Reservation</button>
                    </div>
                </fieldset>
            </form>
            <br><br>
        </div>