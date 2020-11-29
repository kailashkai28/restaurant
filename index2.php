<?php
session_start();
include('includes/config.php');
include('includes/db.php');
include('includes/functions.php');


if(loggedIn()){
    
    header("Location:myaccount1.php");
    exit();
}


if(isset($_POST['login'])){
    
    $email=mysqli_real_escape_string($db, $_POST['email']);
    $password=mysqli_real_escape_string($db, $_POST['password']);
	$name=mysqli_real_escape_string($db,$_POST['name']);
    $query="select * from customer where email='$email' and password='$password'";
    $result=$db->query($query);
    if($row = $result->fetch_assoc()){
            $_SESSION['user_name']=$name;
            $_SESSION['user_email']=$email;
            if(isset($_POST['remmember_me'])){
                
                setcookie("user_email", $email, time()+60*5);
            }
            header("Location:myaccount1.php");
            exit();
        
    }
    else{
            
            header("Location:index2.php?err=" . urlencode("Wrong E-mail or Password!"));
            exit();
        }
        
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Customer Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

   
<link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" >


    <style>
      
        body{
            
            padding-top: 50px;
			background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
			background-size: 100%;
			
        }
        .starter-template{
            
            padding: 40px 15px;
            text-align: center;
        }
        .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
        html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
     border-block-end: 5px solid black;
}

.form-signin {
  width: 100%;
  max-width: 430px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav-item{
    font-weight: bold;
    font-size: 20px;
}
footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 2.5rem;            /* Footer height */
}

    </style>
    
    

  </head>
  <body>
  
       
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color:#D5C4E4;">
        
  <a class="navbar-brand" href="home.php">Foodshala</a>
	 
</nav>
    

<main role="main" class="container" >

     <h2 style="text-align:center;"><span style='font-size:100px;'>&#9786;</span>Not a customer?&nbsp;<a href="index1.php">Click here</a>&nbsp; if you are a staff member<span style='font-size:100px;'>&#9786;</span></h2>
    
 <form class="form-signin" method="post" action="index2.php">
  
      <b style="font-size:20px;">Customer Login</b>(New user, <a href="register.php">click here</a>)
     <br>
    
  
      <?php 
     if(isset($_GET['err'])){ ?>
     
     <div class="alert alert-danger"><?php echo $_GET['err']; ?></div>  
    <?php
                            }
     ?>
     <?php if(isset($_GET['success'])){ ?>
     <div class="alert alert-success"><?php echo $_GET['success']; ?></div>
     <?php }
     ?>
     <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email"  class="form-control" placeholder="Email address" name="email" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" class="form-control" placeholder="Password" name="password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me" name="remmember_me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
   <a href="forgot_password.php">Forgot Password?</a>
</form>
</main>
      

</body>
</html>
