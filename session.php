<?php
   $dbc = mysqli_connect('localhost','root','');
if (!$dbc) {
    die("Database connection failed: " . mysqli_error());
}

// 2. Select a database to use 
$db_selected = mysqli_select_db($dbc, "final");
if (!$db_selected) {
    die("Database selection failed: " . mysqli_error());
}


   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($dbc,"SELECT username FROM users where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>