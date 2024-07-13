//insert employee PHP
<?php
include 'connection.php';

$id = $_POST['employeeID'];
$value1 = $_POST['fname'];
$value2 = $_POST['lname'];
$value3 = $_POST['phoneNum'];
$value5 = $_POST['email'];

$sql = "INSERT INTO employee (employeeID, Value1, Value2, Value3, Value4, Value5) VALUES ('$id', '$value1', '$value2', '$value3', '$value4', '$value5')";

if ($conn->query($sql) === TRUE) {
    echo "New employee record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>