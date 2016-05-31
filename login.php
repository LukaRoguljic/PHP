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

	if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($dbc,$_POST['username']);
      $mypassword = mysqli_real_escape_string($dbc,$_POST['password']); 
      
      $sql = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($dbc,$sql);
	  
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
	  
	  // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         header("location: welcome.php");
      }else {
         echo "Not valid";
      }
   }

?>