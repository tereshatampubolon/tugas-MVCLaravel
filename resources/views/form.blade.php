<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body background="background.jpg">
		<h2>Buat Account Baru!</h2>
		<h3>Sign Up Form</h3>

		<form action="/welcome" method="POST">
		@csrf
		<fieldset>
			<legend>Personal Information</legend>
				<legend>First Name :</legend><br>
				<input type="text" name="First name"><br><br>
				<legend>Last Name :</legend><br>
				<input type="text" name="Last name"><br><br>

				Gender : <br><br>
				<input type="radio" name="Gender" value="male">Male<br>
				<input type="radio" name="Gender" value="male">Female<br>
				<input type="radio" name="Gender" value="female">Other<br><br>


				Nationality: <br><br>
				<select name="Cities">
					<option value="Indonesian">Indonesian</option>
					<option value="British">British</option>
					<option value="German">German</option>
					<option value="Chinese">Chinese</option>
					<option value="Australian">Australian</option>
				</select><br><br>
				
				Language Spoken: <br><br>
				<input type="checkbox" name="bahasa indonesia">Bahasa Indonesia<br>
				<input type="checkbox" name="english">English<br>
				<input type="checkbox" name="other">Other<br>
		</fieldset>
		<fieldset>
			<legend>General Information</legend>
			Bio: <br><br>
			<textarea name="Comment" rows="10" cols="30"></textarea>

		</fieldset>
	<br>

		<input type="Submit" name="submitbutton" value="Sign Up">
	</form>
</body>
</html>