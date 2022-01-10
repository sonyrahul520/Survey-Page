<?php


include 'config.php';

$first_name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];


$sql_insert = "Insert into survey_results (full_name, age, email) VALUES ('$first_name','$age','$email')";
if($conn->query($sql_insert) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql_insert. " . $conn->error;
}



$conn->close();

?>

