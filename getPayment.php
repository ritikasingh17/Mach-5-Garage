//get payment PHP
<?php
include 'db.php';

$id = $_GET['paymentID'];

$sql = "SELECT * FROM payment WHERE paymentID = '$id'";
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
} else {
    echo json_encode([]);
}

$conn->close();
?>