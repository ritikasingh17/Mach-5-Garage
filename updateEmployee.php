//update employee PHP
<?php
include 'connection.php';

$id = $_POST['employeeID'];
$value1 = $_POST['fname'];
$value2 = $_POST['lname'];
$value3 = $_POST['phoneNum'];
$value5 = $_POST['email'];

$sql = "UPDATE employee SET Value1='$value1', Value2='$value2', Value3='$value3', Value4='$value4', Value5='$value5' WHERE employeeID='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Employee record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
