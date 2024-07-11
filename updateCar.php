//update car PHP
<?php
include 'db.php';

$id = $_POST['vin'];
$value1 = $_POST['year'];
$value2 = $_POST['make'];
$value3 = $_POST['model'];

$sql = "UPDATE car SET Value1='$value1', Value2='$value2', Value3='$value3' WHERE vin='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Car updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}