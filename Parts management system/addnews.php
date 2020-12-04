<?php
    if(!isset($_SESSION))
    {
        session_start();
    }


    $connection= mysqli_connect('localhost','root','','parts_management');
    $msg= "" ;


    if(isset($_POST['submit'])){
        // $news_id=$_POST['$news_id'];
        $newsTitle=$_POST['newsTitle'];
        $newsSubTitle=$_POST['newsSubTitle'];
        $newsPublishDate=$_POST['newsPublishDate'];
        $noticeDeadline=$_POST['noticeDeadline'];
        $newsContent=$_POST['newsContent'];
        //$contentPhoto=$_FILES['file']['name'];
        $contentPhoto= $_FILES['file']['name'];

        //image Upload

       move_uploaded_file($_FILES['file']['tmp_name'],"pictures/".$_FILES['file']['name']);

        $res=false;
        $insert_query="INSERT INTO news(newsTitle, newsSubTitle, newsPublishDate, noticeDeadline, newsContent, contentPhoto) VALUES ('$newsTitle','$newsPublishDate','$newsSubTitle','$noticeDeadline','$newsContent','$contentPhoto')";

        $res= mysqli_query($connection,$insert_query);

        if($res==true){
            $msg= "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'Registration Completed!',
                                            'success'
                                            );
				          </script>";
        }
        else{
            die('unsuccessful' .mysqli_error($connection));
        }


    }





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add News and Notices</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>


  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animate.css">
</head>
<body>
 <?php include 'navbar_admin.php'; ?>
 <br>


   <div class="container">
     <div class="row">

        <div class="page-header">
            <h1 style="text-align: center;">Add News and Notices</h1>
            <?php echo $msg; ?>



      </div>
       <div class="col-md-3">

       </div>
        <div class="col-md-6 animated bounceIn">



                <br>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" >


                <div class="input-group">
                  <span class="input-group-addon"><b>News Title</b></span>
                  <input id="newsTitle" type="text" class="form-control" name="newsTitle" placeholder="Title">
                </div>
                <br>

                 <div class="input-group">
                  <span class="input-group-addon"><b>News Subtitle</b></span>
                  <input id="newsSubTitle" type="text" class="form-control" name="newsSubTitle" placeholder="Subtitle">
                </div>
                <br>

                <div class="input-group">
                  <span class="input-group-addon"><b>News Publish Date</b></span>
                  <input id="newsPublishDate" type="text" class="form-control" name="newsPublishDate" placeholder="Date published">
                </div>
                <br>



                 <script>
                      $( function() {
                        $( "#newsPublishDate" ).datepicker();
                      } );
                </script>


                 <div class="input-group">
                  <span class="input-group-addon"><b>Notice Deadline</b></span>
                  <input id="noticeDeadline" type="text" class="form-control" name="noticeDeadline" placeholder="Validity date">
                </div>
                <br>



                 <script>
                      $( function() {
                        $( "#noticeDeadline" ).datepicker();
                      } );
                </script>


                <br>

                 <div class="input-group">
                  <span class="input-group-addon"><b>Notice and News Content</b></span>
                     <textarea rows="10" id="newsContent" type="text" class="form-control" name="newsContent" placeholder="Type the news content here"> </textarea>

                </div>
                <br>

                 <div class="input-group">
                  <span class="input-group-addon"><b>Photo</b></span>
                  <input  type="file" class="form-control" name="file">

              </div>




                <div class="input-group">
                  <input type="submit" name="submit" class="btn btn-success"  >

                </div>
              </form>
        </div>
        <div class="col-md-3"></div>

     </div>


    </div>



</body>
</html>
