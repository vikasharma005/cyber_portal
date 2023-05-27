<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $crimeType = $_POST['crimeType'];
    $crime = $_POST['crime'];
    $otherCrime = $_POST['otherCrime'];
    $name = $_POST['donation-name'];
    $email = $_POST['donation-email'];
    $citizenship = $_POST['DonationPayment'];

    // Create a connection to the MySQL database
    $conn = mysqli_connect('localhost', 'root', '', 'registered');

    // Check if the connection is successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert the form data into the "registered" table
    $sql = "INSERT INTO registered (crimeType, crime, otherCrime, name, email, citizenship) VALUES ('$crimeType', '$crime', '$otherCrime', '$name', '$email', '$citizenship')";
    if (mysqli_query($conn, $sql)) {
        echo "FIR registered successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
