<?php
session_start();

session_destroy();
setcookie("user_email", "", time()-60*5);
header("Location:index2.php?success=" . urlencode("Logged Out Successfully!"));
exit();
?>