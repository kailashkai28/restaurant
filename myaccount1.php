<?php
session_start();

include('includes/config.php');
include('includes/db.php');
include('includes/functions.php');


if(!loggedIn()){
    
    header("Location:index2.php?err=". urlencode("You need to login to view account!!"));
    exit();
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title><marquee>::Home::</marquee></title>

  
  
<link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" >
      <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap-override.css" /> 
    

    <style media="screen">
      
        body{
            
            padding-top: 50px;
        }
        .starter-template{
            
            padding: 40px 15px;
            text-align: center;
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
  padding-top: 120px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.nav-item{
    font-size: 15px;
   
}
        
.para {
  text-align: justify;
  text-justify: inter-word;
}
 
    </style>
      
    
    
  </head>
  <body>
       
      
    <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color:#D5D5E9;  ">
        
  <a class="navbar-brand" href="home.php">Foodshala</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
 <ul class="navbar-nav mr-auto" style="padding-left:50%; ">
      <li class="nav-item" >
        <a class="nav-link" href="announcement.php" >Announcements</a>
      </li> 
        <li class="nav-item" style="padding-left:30px;">
        <a class="nav-link" href="ask.php" >Ask a Question</a>
      </li> 
      <li class="nav-item" style=" ">
        <a class="nav-link" href="logout.php" onclick="return confirm('Are you sure to logout?');">Logout</a>
      </li>
    
	</ul>    
  </div>
</nav>

      
      <div class="para" style="margin-left:15px;">
         
      </div>

      
      
      
<main role="main" class="container" >
    <div class="jumbotron" style="text-align:center; ">
        <h4>Welcome to Foodshala!!<br><?php  
           
            if(isset($_SESSION['user_email'])){
			echo $_SESSION['user_email'];
					
					echo '<br><button style="background-color:none; display:inline-block;"><a style="text-decoration:none;" href="page1.php">Click here to go ahead</a></button>';
					
					
					
echo '<br><br>';
            echo '<img src="namaste-symbol-115510531424qc69l0sej.png" height="250px" width="300px">';
					  }
            else echo $_COOKIE['user_email'];
			
			?></h4>
        
    </div>
</main>
      
</body>
</html>
