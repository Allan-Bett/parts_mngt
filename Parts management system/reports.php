<?php
    $connection= mysqli_connect("localhost","root","","parts_management");

    session_start();

    $sql= "SELECT * FROM `vehicle`";
    $res=mysqli_query($connection,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Parts</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">

      <style>
          body {
            font-family: "Lato", sans-serif;
          }

          .sidenav {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1;
            top: 10;
            left: 0;
            background-color: #228B22;
            overflow-x: hidden;
            padding-top: 20px;
          }

          .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 25px;
            color: #000000;
            display: block;
          }

          .sidenav a:hover {
            color: #f1f1f1;
          }

          .main {
            margin-left: 300px; /* Same as the width of the sidenav */
            font-size: 28px; /* Increased text to enable scrolling */
            padding: 0px 10px;
          }

          @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
          }
      </style>

</head>

<body  >

   <div id="myDiv">

   <?php include 'navbar_admin.php'; ?>
   <br><br><br>

   <div class="sidenav">
  <a href="#about">Progress Report</a>
  <a href="#services">Fraud Transfers</a>
  <a href="#clients">Registered Parts</a>
  <a href="#contact">Rejected Parts</a>
  <a href="indexbill.php">Fees Paid</a>
  <a href="summary">Summary Report</a>

</div>

<div class="main">
  <h2>Main Content</h2>

</div>
   <    </div>

 <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>


  <script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
    </script>




</body>
</html>
