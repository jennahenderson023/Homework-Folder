<html>
	<head>
	
	<h1> Add New User </h1>
	
	</head>
	
	<body>
		<form method='post' action='3add-new-user.php'>
			<pre>
				Username: <input type='text' name='Username'>
				Forename: <input type='text' name='Forename'>
				Surname: <input type='text' name='Surname'>
				Password: <input type='text' name='Password'>
				<input type='submit' value='Add Record'>
			</pre>
		</form>
	</body>
</html>


<?php
//import credentials for db
require_once  'login.php';

//connect to db
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

//check if ISBN exists
if(isset($_POST['Username'])) 
{
	//Get data from POST object
	$Username = $_POST['Username'];
	$Forename = $_POST['Forename'];
	$Surname = $_POST['Surname'];
	$Password = $_POST['Password'];
	
	//echo $Username.'<br>';
	
	$query = "INSERT INTO user (Username, Forename, Surname, Password) VALUES ('$Username','$Forename', '$Surname', '$Password')";
	
	//echo $query.'<br>';
	$result = $conn->query($query); 
	if(!$result) die($conn->error);
	
	header("Location: 3user-details.php");//this will return you to the view all page
	
	
	
	
}



?>