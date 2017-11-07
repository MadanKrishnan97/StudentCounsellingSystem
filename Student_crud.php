<?php

/*
$sqlTableCreate = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";
*/

$sqlStudentCreate = "CREATE TABLE Students (
    StudentID INT PRIMARY KEY,
    FirstName VARCHAR(20) NOT NULL,
    LastName VARCHAR(20),
    Age INT NOT NULL,
    Sex CHAR(1) NOT NULL,
    College VARCHAR(20),
    Grades FLOAT NOT NULL,
    Phone VARCHAR(10)
    )";

if ($conn->query($sqlStudentCreate) === TRUE) {
    echo "Table Students created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

?>