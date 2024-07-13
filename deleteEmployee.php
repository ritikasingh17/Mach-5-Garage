//delete Employee PHP
<?php
include 'connection.php';

$id = $_POST['employeeID'];

$sql = "DELETE FROM employee WHERE employeeID='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Employee record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>