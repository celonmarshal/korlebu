
<?php
if (isset($_POST['submit'])){
    $user= $_POST ['username'];
    $passwd= $_POST ['password'];
        if ($user =="user" && $passwd=="123456t"){
            echo ('<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong> Successful LOGIN.
          </div');
        }
        else{
            echo ('<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Warning!</strong> CHECK INPUT!!!!!!.
          </div');
        }
}
?> 


<!DOCTYPE HTML>
<html>
<head>
<title>Employee Info</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">   
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstra.min.css">
    <link rel="stylesheet" href="assets/css/info.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
 
</head>
<body>
<section class="body">
    <div class="center">
    <form method="post" action="#">
    <!-- https://kbth.gov.gh/ -->
                <span><img src="assets/img/bannerlogo" alt="no-image"> </span>
                <br>
                <br>
               <label for="sign in">
                   Sign In 
                </label><br>
                <input type="text" name="username" placeholder="Email or Username..." required><br><br>
                <input type="password" name="password" placeholder="password" required><br><br>
                <a href="">can't access your account?</a><br><br>
                <a href="">Sign-in options</a>
                            <br><br>
                <input type="submit" name="submit" value="NEXT">
           
            </form>
    
    </div>
    </section>









<script src=""></script>
</body>
</html>