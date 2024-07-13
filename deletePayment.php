//delete payment PHP
<?php
include 'connection.php';

$id = $_POST['paymentID'];

$sql = "DELETE FROM payment WHERE paymentID='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Payment deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>