<?php
    function StudentCreate() {

        $sqlStudentCreate = "CREATE TABLE Student (
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
            echo "Table Student created successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }

    }    


    function StudentInsert() {

        $sqlStudentInsert = "INSERT INTO Student VALUES(100, 'Madan', 'Krishnan', 20, 'M', 'RNSIT', 8.7, '9348902471')";
        $sqlStudentInsert .= "INSERT INTO Student VALUES(101, 'Rohan', 'Gopal', 22, 'M', 'JSSATE', 8.9, '8609629767')";
        $sqlStudentInsert .= "INSERT INTO Student VALUES(102, 'Angel', 'Priya', 21, 'F', 'SJBIT', 9.1, '8963095712')";
        
        if ($conn->multi_query($sqlStudentInsert) === TRUE) {
            echo "New records created successfully";
        } else {
            echo "Error: " . $sqlStudentInsert . "<br>" . $conn->error;
        }

    }


    function StudentSelect() {

        $sqlStudentSelect = "SELECT StudentID, FirstName, Grades FROM Student";
        $result = $conn->query($sqlStudentSelect);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "StudentID: " . $row["StudentID"]. " - Name: " . $row["FirstName"]. " - Grades: " . $row["Grades"]. "<br>";
            }
        } else {
            echo "0 results";
        }

    }


    function StudentDelete() {

        $sqlStudentDelete = "DELETE FROM Student WHERE StudentID = 101";
        
        if ($conn->query(sqlStudentDelete) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }

    }


    function StudentUpdate(){

        $sqlStudentUpdate = "UPDATE Student SET LastName='Kumar' WHERE StudentID = 103";
        
        if ($conn->query($sqlStudentUpdate) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }

    }

    StudentCreate();
    StudentInsert();
    StudentSelect();
    StudentDelete();
    StudentUpdate();

?>