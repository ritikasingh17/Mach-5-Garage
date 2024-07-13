//delete car PHP
<?php
include 'connection.php';

$id = $_POST['vin'];

$sql = "DELETE FROM car WHERE vin='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Car deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>