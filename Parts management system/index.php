<?php
    $connection=mysqli_connect("localhost","root","","parts_management");

    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Parts management system</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">



</head>
<style>

.parallax {
    /* The image used */
    background-image: url("bus-people-public-transportation-34171.jpg");
    height: 100%;

    /* Set a specific height */
    min-height: 700px;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

    }

.parallax1 {
    /* The image used */
    background-image: url("pexels-photo-280310 .jpeg");
    height: 100%;

    /* Set a specific height */
    min-height: 600px;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

    }

    .navbar-fixed-top.scrolled {
       background-color: ghostwhite;
      transition: background-color 200ms linear;
    }

</style>
<body data-spy="scroll" data-target=".navbar" data-offset="50" onload="myFunction()">


    <div class="parallax foo">
       <?php include 'navbar.php';?>

        <div class="hero-text" style="font-size:80px text-align: center; position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);color: white;">

            <h1 class="animated rubberBand" ><b>Parts Management System</b></h1>
            <p>A management system where you can easily manage motor vehicle parts</p>

            <?php if(isset($_SESSION['username'])==true) { ?>
            <a class="btn btn-success" style="text-align: center" href="login.php">Login To Manage your Account</a>

            <?php } else{  ?>
            <a class="btn btn-success" style="text-align: center" href="login.php">Login To Manage your Account</a>
            <?php } ?>

          </div>
    </div>

    <div>
       <br><br>
        <div id="bus_route" class="container">
          <div class="page-header">
            <h1 style="text-align: center">Bus Route</h1>
          </div>
          <div class="row">
              <div class="col-md-6 foo">
                <p><b>The system manages the parts transactions winthin the borders of Kenya.</b></p>
                <img src="pexels-photo-136739.jpeg" class="img-responsive" >
              </div>
              <!-- <div class="col-md-6">
                  <br>
                   <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d932412.1267521078!2d88.9639724042315!3d24.093234513307983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x39fbefd0a55ea957%3A0x2f9cac3357d62617!2sRajshahi+University+of+Engineering+%26+Technology%2C+6204%2C%2C+Rajshahi+-+Dhaka+Hwy%2C+Rajshahi!3m2!1d24.363568299999997!2d88.6283773!4m5!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!3m2!1d23.810332!2d90.4125181!5e0!3m2!1sen!2sbd!4v1522267261303" width="500" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                   <p>The Bus Route</p>
              </div> -->
          </div>
        </div>

        <br>
        <div class="page-header">
            <h1 style="text-align: center">Staff</h1>
        </div>
        <div class="parallax1"></div>
        <div id="driver" class="container">

          <div class="row">
              <div class="col-md-12">
                  <p style="font-size: 20px;">The support team of parts management system are very punctual and they provides great service. Every one of them is professional and great at their jobs</p>

              </div>
          </div>

        </div>


        <div id="bus" class="container">
          <div class="page-header">
            <h1 style="text-align: center">Background Info </h1>
          </div>
          <div class="row">
              <div class="col-md-6">

                <img src="pexels-photo-385998.jpeg" class="img-responsive" >
              </div>
              <div class="col-md-6 foo1">
                  <p style="font-size:20px;"><b>In parts management sysytem we offer an integrated system to manage your parts,</b></p>
              </div>

          </div>
        </div>



          <p></p>

        </div>

        <footer style="background-color: #228B22;
          color: #fff; padding-top: 70px;
          padding-bottom: 70px;" class="container-fluid text-center">
                <p><u>Contact us</u></p>
                <p>Email:info@parts.co.ke
                  alanitobett97@gmail.com</p>
                <p> Parts Management System</p>
        </footer>







<script>
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $a= $(".parallax");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $a.height());
  });
});

    </script>


  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>


  <script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
    </script>

</body>
</html>
