<?php
include_once("../db.php"); // Include the Database class file
include_once("../town_city.php");




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = [    
    'id' => $_POST['id'],
    'name' => $_POST['name'],
    ];

    // Instantiate the Database and Student classes
    $database = new Database();
    $towncity = new TownCity($database);
    $towncity_id = $towncity->create($data);
    
    if ($towncity_id) {
        // Student record successfully created
        
        // Retrieve student details from the form
        $townCityDetailsData = [
            'id' => $towncity_id, // Use the obtained student ID
            'name' => $_POST['name'],
            // Other student details fields
        ];

    }

    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">

    <title>Add Town City Data</title>
</head>
<body>
    <!-- Include the header and navbar -->
    <?php include('../templates/header.html'); ?>
    <?php include('../includes/navbar.php'); ?>

    <div class="content">
    <h1>Add Town City Data</h1>
    <form action="" method="post" class="centered-form">
        <label for="id">id:</label>
        <input type="text" name="id" id="id" required>

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <input type="submit" value="Add Town City">
    </form>
    </div>
    
    <?php include('../templates/footer.html'); ?>
</body>
</html>
