<?php
// Database connection
$servername = "localhost"; // Change this to your MySQL server address
$username = "username"; // Change this to your MySQL username
$password = "password"; // Change this to your MySQL password
$dbname = "smulo"; // Change this to your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$firstName = $_POST['inputFirstName'];
$lastName = $_POST['inputLastName'];
$clinicName = $_POST['inputClinicName'];
$gender = $_POST['inputGender'];
$dob = $_POST['inputDOB'];
$phoneNumber = $_POST['inputPhoneNumber'];
$email = $_POST['inputEmail'];
$password = $_POST['inputPassword'];

// Insert data into the database
$sql = "INSERT INTO your_table_name (first_name, last_name, clinic_name, gender, dob, phone_number, email, password)
        VALUES ('$firstName', '$lastName', '$clinicName', '$gender', '$dob', '$phoneNumber', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// Close connection
$conn->close();
?>
