//insert car PHP
<?php
include 'db.php';

$id = $_POST['vin'];
$value1 = $_POST['year'];
$value2 = $_POST['make'];
$value3 = $_POST['model'];

$sql = "INSERT INTO car (vin, Value1, Value2, Value3) VALUES ('$id', '$value1', '$value2', '$value3')";

if ($conn->query($sql) === TRUE) {
    echo "New car record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>