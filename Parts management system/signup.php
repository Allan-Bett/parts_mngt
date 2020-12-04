<?php
    $connection=mysqli_connect("localhost","root","","parts_management");

    session_start();
    $msg="";

    if(isset($_POST['submit'])){
        $firstname= mysqli_real_escape_string($connection,strtolower($_POST['firstname']));
        $lastname= mysqli_real_escape_string($connection,strtolower($_POST['lastname']));
        $email= mysqli_real_escape_string($connection,strtolower($_POST['email']));
        $User_DOB= mysqli_real_escape_string($connection,strtolower($_POST['User_DOB']));
        $User_gender= mysqli_real_escape_string($connection,strtolower($_POST['User_gender']));
        $PIN= mysqli_real_escape_string($connection,strtolower($_POST['PIN']));
        $Box_No= mysqli_real_escape_string($connection,strtolower($_POST['Box_No']));
        $username= mysqli_real_escape_string($connection,strtolower($_POST['username']));
        $password= mysqli_real_escape_string($connection,strtolower($_POST['password']));


        $signup_query= "INSERT INTO `user`(`user_id`, `first_name`, `last_name`, `register_Date`, `email`, `User_DOB`, `User_gender`, `PIN`, `Box_No`, `username`, `password`) VALUES ('','$firstname','$lastname','$register_Date', '$email', '$User_DOB', '$User_gender', '$PIN', '$Box_No','$username','$password')";

        $check_query= "SELECT * FROM `user` WHERE username='$username' or email='$email'";

        $check_res=mysqli_query($connection,$check_query);

        if(mysqli_num_rows($check_res)>0){
             $msg= '<div class="alert alert-warning" style="margin-top:30px";>
                      <strong>Failed!</strong> Username or Email already exists.
                      </div>';

        }

        else{
            $signup_res= mysqli_query($connection,$signup_query);
                 $msg= '<div class="alert alert-success" style="margin-top:30px";>
                      <strong>Success!</strong> Registration Succefull.
                      </div>';

        }

    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="swal/sweetalert.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="swal/sweetalert.js"></script>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
  <?php include 'navbar.php';?>






    <br>
    <div class="container">
     <div class="row">
       <div class="col-md-3"></div>
        <div class="col-md-6">
           <?php echo $msg; ?>
            <div class="page-header">
                <h1 style="text-align: center;">Sign Up</h1>
          </div>
            <form class="form-horizontal animated bounce" action="" method="post">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="firstname" type="text" class="form-control" name="firstname" placeholder="First Name" required>
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="lastname" type="text" class="form-control" name="lastname" placeholder="Lastname" required>
                </div>
                <br>
                 <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="email" type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon-user"></i></span>
                  <input id="User_DOB" type="date" class="form-control" name="User_DOB" placeholder="Date of birth" required>
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon-user"></i></span>
                  <input id="User_gender" type="radio" name="gender" value="male" Male >
                  <label for="male">Male</label><br>
                  <input id="User_gender" type="radio" name="gender" value="female" Female>
                  <label for="female">Female</label><br>
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon-user"></i></span>
                  <input id="PIN" type="text" class="form-control" name="KRA PIN" placeholder="Input your KRA PIN" required>
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon-user"></i></span>
                  <input id="Box_No" type="text" class="form-control" name="Box_No" value="" placeholder="Post office number" required>
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="username" type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <br>

                <div class="input-group">
                  <button type="submit" name="submit" class="btn btn-success">Sign Up</button>

                </div>

              </form>
        </div>
        <div class="col-md-3"></div>

     </div>

    </div>



</body>
</html>
