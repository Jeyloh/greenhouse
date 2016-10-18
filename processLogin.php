<head>
<title>Membership</title>
</head>
<body>

<?php


// Converts the ID to upper case
$mail=strtolower($_GET['email']);
$pass1=$_GET['pass1'];    
$conf_pass=$_GET['pass2']; // REMOVE?
$firstname=$_GET['fname'];
$lastname=$_GET['lastname'];
$age=$_GET['age'];
$gender=$_GET['gender'];
$memtype=$_GET['memtype'];
$year=$_GET['year'];

// Array with all fields
$allFields = array($mail, $pass1, $firstname, $lastname, $age, $gender, $memtype, $year);
$errors = array();


$db ='question';
$con = mysqli_connect('localhost', 'root', 'usbw', $db);
if (mysqli_connect_errno()) 
{
	trigger_error('Database connection failed: ' . mysqli_connect_error(), E_USER_ERROR);
}


// check if each field in fields isset() or empty
foreach($allFields AS $field) 
{
	if(isset($_GET[$field]))
	{
		$errors[] = "Please fill in $field";
	}
}

// Checks that passwords match
if($pass1 != $conf_pass)
{
	$errors[] = "Passwords doesn't match.";
}
// Checks password length
else if(strlen($pass1) < 8)
{
	$errors[] = "Password must be more than 8 characters long.";
}
// Encrypts the password with md5 and stores it in a variable
else 
{
	$encrypt_pass=md5($pass1);
}

// Checks the email format
if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
  $errors[] = "Please use the correct email format.";
}

// Checks that the email is not in the DB
if($mail){
	$sql = "SELECT * FROM `membership` WHERE `email`='".$mail."'";
	$res = mysqli_query($con, $sql) or die(mysql_error());
	if(mysqli_num_rows($res) > 0){
		$errors[] = "This mail is already registered";
	}
}

//Check that the membership year is greater than 2000 and less than 2017
if($year < 2000 && $year > 2017)
{
	$errors[] = "Membership is wrong.";
}

//Check that the age is atleast 6 or under 105
if($age <= 6 && $age >= 105)
{
	$errors[] = "You are not in the appropriate age group.";
}




// Check the error array for any errors, if none then append to the database!
if(count($errors) > 0) 
{
	echo "Ran into errors:<br> ";
	foreach ($errors as $errorMessage) {
    	echo " - $errorMessage <br>";
	}
} 
else 
{	
	// Used to insert all the variables from the form into the database!
	$result=mysqli_query($con,"INSERT INTO membership (email, Password, First_name, Surname, age, gender, MembershipType, YearsOfMembership) VALUES ('$mail', '$pass1', '$firstname', '$lastname','$age', '$gender', '$memtype', '$year')") or die("Insert Error: ".mysqli_error($con));
	echo "Record added<br>";
	echo "No errors found. Registration complete!<br>";
	// Close the connection to the mysql server
	mysqli_close($con);       
}

?>

<br>
<form method="POST" action="membership_insert_form.php">
<input type="submit" value="Insert a new Record">
</form>


</body>
</html>