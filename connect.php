<?php
$servername = "localhost";
$username = "root";
$password = "suhas";
$dbname = "file_up";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$htmlcode = '
// comment section
<!-- suk -->
<div id="intro">
suhasxxx
</div>';

$sql = "INSERT INTO temp (namex, file_namex, description)
VALUES ('temp1', 'hotel', '$htmlcode')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>