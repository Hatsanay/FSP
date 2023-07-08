<?php 
 session_start();
 // Check if the user is logged in
 if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
   // The user is logged in, so retrieve their name from the session
   $user_name = $_SESSION['user_fullname'];
   session_destroy();
 } else {
   // The user is not logged in, so redirect them to the login page
   header('Location: index.php');
   exit;
 }
    echo "<meta http-equiv='refresh'content='0;URL=index.php'/>";   
?>