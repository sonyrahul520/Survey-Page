<?php


$servername = "127.0.0.1:3306";
$username = "root";
$password = "sonyrahul";
$dbname = "survey_db";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql_table = "CREATE TABLE survey_results(
id INT(6) AUTO_INCREMENT PRIMARY KEY,
full_name VARCHAR(30),
email VARCHAR(30),
age VARCHAR(30),
employment VARCHAR(30),
recommendation VARCHAR(30)
)";
if ($conn->query($sql_table) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
