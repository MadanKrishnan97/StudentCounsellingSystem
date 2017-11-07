<?php
    function CounsellorCreate() {

        $sqlCounsellorCreate = "CREATE TABLE Counsellor (
            CounsellorID INT PRIMARY KEY,
            FirstName VARCHAR(20) NOT NULL,
            LastName VARCHAR(20),
            Location VARCHAR(20),
            Phone VARCHAR(10)
            )";

        if ($conn->query($sqlCounsellorCreate) === TRUE) {
            echo "Table Counsellor created successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }

    }    


    function CounsellorInsert() {

        $sqlCounsellorInsert = "INSERT INTO Counsellor VALUES(501, 'Arjun', 'Ram', 'Koramangala', '8204509156')";
        $sqlCounsellorInsert .= "INSERT INTO Counsellor VALUES(502, 'John', 'Newman', 'Indiranagar', '9683017297')";
        $sqlCounsellorInsert .= "INSERT INTO Counsellor VALUES(503, 'Naveen', 'Reddy', 'Rajajinagar', '9306239851')";
        
        if ($conn->multi_query($sqlCounsellorInsert) === TRUE) {
            echo "New records created successfully";
        } else {
            echo "Error: " . $sqlCounsellorInsert . "<br>" . $conn->error;
        }

    }


    function CounsellorSelect() {

        $sqlCounsellorSelect = "SELECT CounsellorID, FirstName, Location FROM Counsellor";
        $result = $conn->query($sqlCounsellorSelect);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "CounsellorID: " . $row["CounsellorID"]. " - Name: " . $row["FirstName"]. " - Location: " . $row["Location"]. "<br>";
            }
        } else {
            echo "0 results";
        }

    }


    function CounsellorDelete() {

        $sqlCounsellorDelete = "DELETE FROM Counsellor WHERE CounsellorID = 503";
        
        if ($conn->query(sqlCounsellorDelete) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }

    }


    function CounsellorUpdate(){

        $sqlCounsellorUpdate = "UPDATE Counsellor SET Location='Vijayanagar' WHERE CounsellorID = 501";
        
        if ($conn->query($sqlCounsellorUpdate) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }

    }

    CounsellorCreate();
    CounsellorInsert();
    CounsellorSelect();
    CounsellorDelete();
    CounsellorUpdate();
    
?>