<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "institute";



$name= $_POST["name"];
$mobileno= $_POST["mobileno"];
$email= $_POST["email"];
$course= $_POST["course"];
$college= $_POST["college"];
$qual= $_POST["qualification"];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO register (name, mobileno, email, course, college, qualification)
VALUES ('$name', '$mobileno', '$email', '$course', '$college', '$qual')";

if (mysqli_query($conn, $sql)) {
    echo "Enquiry form submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
