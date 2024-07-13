//get employee PHP
<?php
include 'connection.php';

$id = $_GET['employeeID'];

$sql = "SELECT * FROM employee WHERE employeeID = '$id'";
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