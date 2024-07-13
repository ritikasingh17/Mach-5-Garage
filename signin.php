<?php
include_once 'connection.php';

// prepare and bind
$stmt = $conn->prepare("INSERT INTO Employee (fName, lName, email, phoneNum, employeeID) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssssd", $fName, $lName, $email, $phoneNum, $employeeID);

// set parameters and execute
$fName = $_POST['fName'];
$fName = $_POST['fName'];
$email = $_POST['email'];
$phoneNum = $_POST['phoneNum'];
$employeeID = $_POST['employeeID'];
$stmt->execute();

header("Location: trylogin.html");

$stmt->close();
$conn->close();
?>