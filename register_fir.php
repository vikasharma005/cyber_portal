<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $crimeType = $_POST['crimeType'];
    $crime = $_POST['crime'];
    $otherCrime = $_POST['otherCrime'];
    $crimeDescription = $_POST['crimeDescription'];
    $name = $_POST['donation-name'];
    $email = $_POST['donation-email'];
    $citizenship = $_POST['DonationPayment'];

    // Create a connection to the MySQL database
    $conn = mysqli_connect('localhost', 'root', '', 'registered');

    // Check if the connection is successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert the form data into the "register_fir" table
    $sql = "INSERT INTO register_fir (crimeType, crime, otherCrime, crimeDescription, name, email, citizenship) VALUES ('$crimeType', '$crime', '$otherCrime', '$crimeDescription', '$name', '$email', '$citizenship')";
    if (mysqli_query($conn, $sql)) {
        // Get the last inserted FIR ID
        $firNumber = mysqli_insert_id($conn);

        // Close the database connection
        mysqli_close($conn);

        // Display the FIR number as a prompt
        echo "<script>
                var firNumber = $firNumber;
                alert('FIR registered successfully. FIR Number: ' + firNumber);
                window.location.href = 'register_fir.html';
              </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        mysqli_close($conn);
    }
}
?>
