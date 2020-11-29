<?php

include('includes/config.php');
include('includes/db.php');
include('includes/functions.php');



?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>::Home::</title>

  
  
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
        
  <a class="navbar-brand" href="home.php" style="font-size:28px;font-weight:bold;">Foodshala</a>
  
  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
 <ul class="navbar-nav mr-auto" style="padding-left:60%;"> 
      <li class="nav-item" style="width:140px;">
        <a class="nav-link" href="index2.php" style="font-weight:bold ;">Login(Customer)</a>
      </li> 
    <li class="nav-item" style="width:180px;">
        <a class="nav-link" href="index1.php" style="font-weight:bold ;">Login(Staff member)</a>
      </li> 
    
	</ul>    
  </div>
</nav>

      
      <div class="para" style="margin-left:15px;">
         
      </div>

      
      
      
<main role="main" class="container" >
    <div class="jumbotron" style="text-align:center; ">
        <h4>&#9786;Foodshala: The Food hub&#9786;</h4>
        Welcome to the perfect food website.<br>
		<h2>
        <a class="nav-link" href="mainmenu.php" style="font-weight:bold ;">Click here</a></h2> to see today's menu.
 
 </div>
</main>
      
</body>
</html>
