<?php
    $servername = "localhost";
    $username = "madan";
    $password = "1111";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";
    if($conn != null && $sqlDBCreate != null) {
    $sqlDBCreate = "CREATE DATABASE myDB";
    if ($conn->query($sqlDBCreate) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }
}

    include 'Counsellor_crud.php';
    include 'Student_crud.php';
    include 'Appointment_crud.php';
    include 'Payment_crud.php';
    
    $conn->close();
    
?>