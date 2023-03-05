

<html>
	<head>
	
	<h1> User List </h1>
	
	</head>
</html>


<?php

require_once  'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM User";

$result = $conn->query($query); 
if(!$result) die($conn->error);

$rows = $result->num_rows;

for($j=0; $j<$rows; $j++)
{
	//$result->data_seek($j); 
	$row = $result->fetch_array(MYSQLI_ASSOC); 

echo <<<_END
	<pre>
	<a href='http://localhost:8888/Henderson_Homework3/3user-details.php'>$row[Forename] $row[Surname]
</a> 
	</pre>
	
_END;

}

$conn->close();



?>

<html>

<form action="http://localhost:8888/Henderson_Homework3/3user-details.php">
        <button>All User Details</button>
      </form>

<form action="http://localhost:8888/Henderson_Homework3/3add-new-user.php">
        <button>Add New Users</button>
      </form>
</html>