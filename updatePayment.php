//update payment PHP
<?php
include 'db.php';

$id = $_POST['paymentID'];
$value1 = $_POST['paymentDateTime'];
$value2 = $_POST['amount'];

$sql = "UPDATE payment SET Value1='$value1', Value2='$value2' WHERE paymentID='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Payment updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}