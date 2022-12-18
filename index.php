<?php
require "header.php";
?>

<header class="header">
    <div class="row">
        <div class="col-md-12 text-center">
    <a class="logo"><img src="img/logo1.png" alt="logo1" style="width:350px;height:350px;"></a>
    </div>
    <div class="col-md-12 text-center">
        <h3 class="text-center"><br><br>Welcome to BMC's House</h3>
        <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-light btn-lg"><em>Make a Reservation Now!</em></button>
    </div>
</header>

<!----menu -->
<div class id="menu"><br>
    <div class="container">
    <h3 class="text-center"><br>Menu<br><br></h3>
    <div class="d-flex flex-row flex-wrap justify-content-center">
        <img src="img/Menu BMC.png" alt="Menu" style="width:707px;height:1000px;">
        </div>
    </div>
</div><br><br>
<!----end of menu -->

<!----gallery -->
<div class id="gallery"><br>
    <div class="container">
    <h3 class="text-center"><br>Gallery<br><br></h3>
        <div class="d-flex flex-row flex-wrap justify-content-center">
            <div class="d-flex flex-column">
              <img src="img/ayam.png" class="img-fluid">
              <img src="img/gado2.jpg" class="img-fluid">
            </div>
            <div class="d-flex flex-column">
              <img src="img/dawet.jpg" class="img-fluid">
              <img src="img/nasgor.jpg" class="img-fluid">
            </div>
            <div class="d-flex flex-column">
               <img src="img/sate.png" class="img-fluid">
               <img src="img/klepon.png" class="img-fluid">
            </div>
            <div class="d-flex flex-column">
               <img src="img/es teh.png" class="img-fluid">
               <img src="img/soto.png" class="img-fluid">
           </div>
        </div>
    </div>
</div><br><br>
<!----end of gallery -->

<!--about us section-->
<section id="aboutus">
<div class="container">
    <div class="row">

    <div class="col-sm">
    	<div class="arranging"><br><hr>
	<h4 class="text-center">Our Story</h4>
    <div class="d-flex flex-row flex-wrap justify-content-center">
        <div class="d-flex flex-column">
        <img src="img/bmc.jpg" class="img-fluid">
    </div>
    <div class="col-md-12 text-center">
	    <p><br>BMC's House is created by Bella, Maria, and Cheisha for Basic Data Project. Our website is about our restaurant, BMC's House reservations. 
        We are passionate about finding the best ways to rate, search, and find delicious traditional food of Indonesia. 
        By providing our users with meticulous information about BMC's House, we enable them to make informed choices. 
        Our website is designed to help everyone find their next delicious meal and make a reservation.<br><br><br></p><hr>
	</div>
    </div>
    </div><br>
  </div>
</section>
<!--end of about us section-->

<div class="header2">
</div>

<div class="container" id="reservation">
    <img src="img/myrn.png" class="img-fluid rounded">
    <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-dark btn-block btn-lg">Make a Reservation Now!</button>
</div><br><br>

<!-- main page map section-->
<section class="map" id="footer">
    <div class="container">
    <h3 class="text-center"><br><br>Find us!</h3><br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.711838657324!2d106.72912831399876!3d-6.558013965931345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c4b758d5c1b5%3A0x89b0802179c78bdf!2sDepartemen%20Ilmu%20Komputer%20FMIPA%20IPB!5e0!3m2!1sen!2sid!4v1668919969518!5m2!1sen!2sid" style= "width:100%;  height:250px; border:0;" allowfullscreen></iframe>
                    
<?php

?>        
            </div><br>
            </div>
            <div class="col">
            <h4 class="text-center"><strong>Visit Us</strong></h4>
            <p class="text-center">BMC's House<br><i class="fa fa-map-marker"></i>&nbsp; Computer Science 58 <br><br>
            </div>

	</div>
    </div>
</section>
<!--end of main page map section-->


<?php
require "footer.php";
?>