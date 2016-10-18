<!DOCTYPE html>
<html lang="en">
<head>
	<title>The Greenhouse - Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/login.css">
	<script src="js/jquery-3.1.1.min.js"></script>
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
				<div id="loginform">
				<!-- INSERT LOGIN FORM HERE -->
					<h3>Login</h3>
					<form method="GET" action="membership_insert_record.php">
						<label>Username </label><br>
						<input type=text name=loginusername size=30><br>
						<label>Password</label><br>
						<input type=password name=loginpassword size=30><br>
						<input type=submit value=Login><br>
					</form>
				</div>
			</main>
		</div>


	</div>
</body>
</html>
