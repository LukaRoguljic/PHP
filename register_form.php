<!DOCTYPE html>
<html>
<head>
<title>Register</title>
</head>
<body>

<div>
	<form name="form1" method="post" action="registernext.php">
		<p>Ime: <input type="text" name="name" size="15" maxlength="20" value=""/></p>
		<p>Prezime: <input type="text" name="lastname" size="15" maxlength="20" value=""/></p>
		<p>Username: <input type="text" name="username" size="15" maxlength="20" value=""/></p>
		<p>Password: <input type="password" name="pass" size="15" maxlength="20" value=""/></p>
		<p>Confirm Password: <input type="password" name="pass2" size="15" maxlength="20" value=""/></p>
		<p>Email: <input type="text" name="email" size="30" maxlength="50" value=""/></p>
		<p>Confirm Email: <input type="text" name="email2" size="30" maxlength="50" value=""/></p>
		<p><input type="submit" name="submit" value="Register"/></p>
	</form>
</div>

</body>
</html>