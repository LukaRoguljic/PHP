<?php
include('connection.php');


if(ctype_alnum($_POST['username'])){
	
	//test for duplicate names
	$query="SELECT * FROM users WHERE username = '$_POST[username]'";
	$result=mysql_query($query);
	$num=mysql_num_rows($result);
	
	if($num == 0){
		
		//test for duplicate email
		$query2="SELECT * FROM users WHERE email = '$_POST[email]'";
		$result2=mysql_query($query2);
		$num2=mysql_num_rows($result2);
		
			if($num2 == 0){
				//if emails and passwords match up
				if($_POST['pass'] == $_POST['pass2'] && $_POST['email'] == $_POST['email2']){
					
					strip_tags($_POST['name']);
					strip_tags($_POST['lastname']);
					strip_tags($_POST['username']);
					strip_tags($_POST['email']);
					strip_tags($_POST['pass']);
					//Insert data into database
					$sql = "INSERT INTO users SET name = '$_POST[name]',lastname = '$_POST[lastname]' ,username = '$_POST[username]', password = '$_POST[pass]', email = '$_POST[email]' ";
				    $result=mysql_query($sql);
				}	
			}
	else{
		echo "Ova e-mail adresa se već koristi!";}
	}else{
		echo "Vaše željeno korisničko ime se već koristi";} 								// insert include('xxxxx.html'); GO BACK TO REGISTER TRY ANOTHER USERNAME
	}
	else{
		echo "Unesite Vaše korisničko ime sa alfanumeričkim znakovima [A-Z] [a-z] [0-9]";}	// insert include('xxxxx.html'); GO BACK TO REGISTER TRY ANOTHER USERNAME


?>