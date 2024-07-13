<?php
include_once 'connection.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve data from the Car table
$sql = "SELECT * FROM Car";
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    // Loop through each row and display a card
    while($row = $result->fetch_assoc()) {
        ?>
        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <img id="carImage-<?php echo $row['id']; ?>" src="img/car<?php echo $row['id']; ?>.jpg" alt="Car Image" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['make']; ?> <?php echo $row['model']; ?></h5>
                    <p class="card-text">VIN: <?php echo $row['vinNum']; ?></p>
                    <p class="card-text">Year: <?php echo $row['year']; ?></p>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    echo "No cars found";
}

// Close the database connection
$conn->close();
?>

<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M5 Garage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- Logo on the left -->
            <a class="navbar-brand" href="main.php">
                <img src="img/logo.png" class="img-fluid logo-image" alt="Logo" style="max-width: 200px; height: auto;">
            </a>
    
            <!-- Navbar toggler button for responsive -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <!-- Navbar after log-in links aligned to the right -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link"  href="inventory.php">Inventory</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="create.html">Create</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="payment.html">Payment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home.html">Sign Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Display the car cards here -->
    <div class="row">
        <?php // Loop through each row and display a card ?>
    </div>

</body>
</html>