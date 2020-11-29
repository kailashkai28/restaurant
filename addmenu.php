<?php
session_start();
error_reporting(0);
include('includes/config.php');
include('includes/db.php');
include('includes/functions.php');


if(!loggedIn()){
    
    header("Location:index1.php?err=". urlencode("You need to login to view account!!"));
    exit();
}

if(isset($_POST['add'])){


        $code = mysqli_real_escape_string($db, $_POST['code']);
        $food = mysqli_real_escape_string($db, $_POST['food']);
        $dishes = mysqli_real_escape_string($db, $_POST['dishes']);
        $restaurant = mysqli_real_escape_string($db, $_POST['res']);
        $status = mysqli_real_escape_string($db, $_POST['status']);        
        $rate = mysqli_real_escape_string($db, $_POST['rate']);
        
        $query = "insert into veg(code,dishes,food,restaurant,status,rate) values('$code','$dishes','$food','$restaurant','$status','$rate')";
        $db->query($query);
		echo "<script type='text/javascript'>";
		echo "alert('Successfully addded!!')";
		echo "</script>";
}




?>


<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Add Menu</title>
    
<link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" >
 <script src="bootstrap-4.3.1-dist/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="w3.css">
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css"/>
<script src="bootstrap-4.3.1-dist/popper.min.js"></script>
      
      <link rel="icon" href="220px-NCERT_300px.svg.png">


    <style>
      
        
html,
body {
  height: 100%;
}

body {
  
 
  padding-top: 80px;
 
  background-color: #f5f5f5;
}

.nav-item{
    font-size: 15px;
   
}
.bul{
     list-style-type: none;    
    
            
}   


.bul ul li{
    font-size:12px;
    padding: 12px ;
            
        }
.bul li a:hover{
    color:red;
}
.menu {
    font-size:15px;
    overflow:hidden; 
    overflow-y:scroll;
}
.para {
  text-align: justify;
  text-justify: inter-word;
}
.nested li{
            list-style-type: none;
            font-weight:bold; letter-spacing:2px;
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
    <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color:#D5D5E9;  ">
        
  <a class="navbar-brand" href="home.php">Foodshala</a>
  
  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto" style="margin-left:1000px;"> 
      
      <li class="nav-item" >
 <a class="nav-link" href="logout.php" onclick="return confirm('Are you sure to logout?');">Logout</a>      </li>
      
    </ul>
    
  </div>
</nav>
<div>
<h5 style="background-color:yellow;"><a href="seemenu.php" target="_blank">>>>>>>Click here to see the today's menu</a></h5>
<h2 style="text-align:center; color:blue;font-weight:bold; font-size:50px; text-decoration:underline overline;">Add food item in the Menu</h2>
 <main role="main" class="container">
 <form action="addmenu.php" method="post" class="form-signin" ><br><br>
  <input type="text"  class="form-control" placeholder="Code" name="code"  required autofocus>
     <select id="prefer" name="food"  class="form-control">
         <option value="">Food Type</option>
         <option value="Veg">Veg</option>
         <option value="Non-veg">Non-Veg</option>
     </select>
  <input type="text" class="form-control" placeholder="Dishes" name="dishes" required autofocus>
  <input type="text"  class="form-control" placeholder="Restaurant" name="res"  required autofocus>
  <select id="status" name="status"  class="form-control">
         <option value="">Status</option>
         <option value="Available">Available</option>
         <option value="Not available">Not available</option>
     </select>
  <input type="text"  class="form-control" placeholder="Rate/Price(per plate.)" name="rate"  required autofocus>
  <br>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="add">Add to the Menu</button>
    
</form>
</main>
</div>
<?php

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}



$db->close();
?>
      
      <script>
var toggler = document.getElementsByClassName("caret");
var i;

for (i = 0; i < toggler.length; i++) {
  toggler[i].addEventListener("click", function() {
    this.parentElement.querySelector(".nested").classList.toggle("active");
    this.classList.toggle("caret-down");
  });
}
</script>


</body>
</html>
