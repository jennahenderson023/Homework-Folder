<html>
	<head>
	
	</head>
	
	<body>
		<form method='post' action='useradd.php'>
			<pre>
				Username: <input type='text' name='username'>
				Forename: <input type='text' name='forename'>
				Surname: <input type='text' name='surname'>
				Password: <input type='text' name='password'>
				<input type='submit' value='Add User'>
			</pre>
		</form>
	</body>
</html>


<?php
//import credentials for db
$page_roles = array('admin');

require_once 'login.php';
require_once  'checksession.php';

//connect to db
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

//check if Username exists
if(isset($_POST['username'])) 
{

	//Get data from POST object
	$username = $_POST['username'];
	$forename = $_POST['forename'];
	$surname = $_POST['surname'];
	$password = $_POST['password'];
	
	
	$query = "INSERT INTO user (username, forename, surname, password) VALUES ('$username', '$forename','$surname', '$password')";
	
	//echo $query.'<br>';
	$result = $conn->query($query); 
	if(!$result) die($conn->error);
	
	header("Location: userlist.php");//this will return you to the view all page
	
	
	
	
}

echo "<pre><a href='logout.php'>Logout</a></pre>";

?>