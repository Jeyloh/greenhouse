<!DOCTYPE html>
<html lang="en">
<head>
	<title>The Greenhouse - Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/login.css">
	<script src="jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		// Jquery code here
	});
	</script>

</head>
<body>
	<div id="outer-image">
		<!-- Add tabs here for either Creating user or logging in -->
		<div id="wrapper">
			<main>
				<span>this is in front</span>
				<!-- INSERT LOGIN FORM HERE -->
							<h3>Register</h3>
								<form method="GET" action="processLogin.php">
									Username <input type=text name=email size=30><br>
									Password <input type=password name=pass1 size=30><br>
									Re-enter Password : <input type=password name=pass2 size=30><br>
									Enter Firstname: <input type=text name=fname color=blue size=30><br>
									Enter Lastname: <input type=text name=lastname color=blue size=30><br>
									Enter Age: <input type=text name=age color=blue size=30><br>
									Enter Gender: <br><input type="radio" name="gender" value="m" checked> Male<br>
									<input type="radio" name="gender" value="f"> Female<br>
									<br>
									Enter Membership Type: <select name="memtype">
									<option value="Adult playing">Adult playing</option>
									<option value="Adult Non-playing">Adult Non-playing</option>
									<option value="Juv playing">Juv playing</option>
									<option value="Juv Non-playing">Juv Non-playing</option>
									<option value="Other">Other</option>
								</select><br>
								Enter year of membership: <input type=numeric name=year color=blue size=30><br><br>
								<br><br>
								<input type=submit value=Insert_Member_Details><input type=reset>
							</form>


				
			</main>
		</div>


	</div>
</body>
</html>
