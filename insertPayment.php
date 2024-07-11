//insert payment PHP
<?php
include 'db.php';

$id = $_POST['paymentID'];
$value1 = $_POST['paymentDateTime'];
$value2 = $_POST['amount'];

$sql = "INSERT INTO payment (paymentID, Value1, Value2) VALUES ('$id', '$value1', '$value2')";

if ($conn->query($sql) === TRUE) {
    echo "New employee record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>