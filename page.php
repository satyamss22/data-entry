<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$databasename = 'user';

$connection = mysqli_connect($hostname, $username, $password, $databasename);

// Check if the connection was successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// $fname = $_POST['fname'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$query = "INSERT INTO users (name, email, phone)
 VALUES ('$name','$email','$phone')";

if (mysqli_query($connection, $query)) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
}

// Close the database connection
mysqli_close($connection);
?>