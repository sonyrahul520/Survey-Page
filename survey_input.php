<?php


include 'config.php';

$first_name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
//$employment = $_POST['current_role'];

/*
$sql_insert = $conn->prepare("INSERT INTO survey_results (fullname, age, email, employment) VALUES (:name, :age,:email,:employment)");
$sql_insert->bind_param(':name', $first_name);
$sql_insert->bind_param(':age', $age);
$sql_insert->bind_param(':email',$email);
$sql_insert->bind_param(':employment', $employment);

$sql_insert->execute();

*/

$sql_insert = "Insert into survey_results (full_name, age, email) VALUES ('$first_name','$age','$email')";
if($conn->query($sql_insert) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql_insert. " . $conn->error;
}



$conn->close();

?>

