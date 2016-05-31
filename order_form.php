<!DOCTYPE html>
<html>
<head>
<title>Register</title>
</head>
<body>

<div>
	<form name="form2" method="post" action="order_script.php">
		<h2>Pošiljatelj</h2>
			<p><!--Ovdje ide ime $_GET od ulogiranog--></p>
			<p><!--Ovdje ide $_GET prezime od ulogiranog--></p>
			<p>Grad/Mjesto: <input type="text" name="city" size="25" maxlength="20" value=""/></p>
			<p>Kontakt broj: <input type="text" name="contact" size="25" maxlength="20" value=""/></p>
			<p>Adresa: <input type="text" name="adress" size="25" maxlength="20" value=""/></p>
			<!--select for box_size-->
			<p>Brzina dostave/Prioritet: <select name="priority">
			<option value="Da">Da</option>
			<option value="Ne">Ne</option>
			</select></p>
			
		<p>Velièina kutije: <select name="box_size">
			<option value="sm">1*1*1</option>
			<option value="md">2*2*2</option>
			<option value="lg">3*3*3</option>
			<option value="xl">4*4*4</option>
			</select></p>
		
		<h2>Primatelj</h2>
			<p>Ime: <input type="text" name="name" size="25" maxlength="20" value=""/></p>
			<p>Prezime: <input type="text" name="lname" size="25" maxlength="20" value=""/></p>
			<p>Adresa: <input type="text" name="del_adress" size="25" maxlength="40" value=""/></p>
			<p>Poštanski broj: <input type="text" name="pob" size="25" maxlength="20" value=""/></p>
			
			<!--Price of delivery hidden -->
			<p><input type="hidden" name="price" value="" size="25"></p>
			<p><input type="submit" name="order" value="Naruèi"/></p><br></br>
	</form>
</div>

</body>
</html>