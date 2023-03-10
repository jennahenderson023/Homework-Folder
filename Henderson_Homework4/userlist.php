<?php



$page_roles = array('admin', 'user');

require_once 'login.php';
require_once 'checksession.php';



$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);



$query = "SELECT * FROM user";

$result = $conn->query($query);
if (!$result) die($conn->error);

$rows = $result->num_rows;

for ($j = 0; $j < $rows; $j++) {
    $row = $result->fetch_array(MYSQLI_ASSOC);

    echo <<< _END
    <pre>
    User: <a href='userdetails.php?id=$row[id]'>$row[username]</a>
    </pre>
_END;
}

echo "<pre><a href='logout.php'>Logout</a></pre>";

$conn->close();



?>