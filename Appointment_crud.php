<?php
    function AppointmentCreate() {

        $sqlAppointmentCreate = "CREATE TABLE Appointment (
            AppointmentID INT,
            AppointmentDate DATE,
            StudentID REFERENCES Student(StudentID) ON DELETE CASCADE,
            CounsellorID REFERENCES Counsellor(CounsellorID) ON DELETE CASCADE,
            PRIMARY KEY(AppointmentID, StudentID, CounsellorID) 
            )";

        if ($conn->query($sqlAppointmentCreate) === TRUE) {
            echo "Table Appointment created successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }

    }    


    function AppointmentInsert() {

        $sqlAppointmentInsert = "INSERT INTO Appointment VALUES(1, '2017-11-20', 102, 503)";
        $sqlAppointmentInsert .= "INSERT INTO Appointment VALUES(2, '2017-12-15', 101, 502)";
        $sqlAppointmentInsert .= "INSERT INTO Appointment VALUES(3, '2017-12-29', 103, 501)";
        
        if ($conn->multi_query($sqlAppointmentInsert) === TRUE) {
            echo "New records created successfully";
        } else {
            echo "Error: " . $sqlCounsellorInsert . "<br>" . $conn->error;
        }

    }


    function AppointmentSelect() {

        $sqlAppointmentSelect = "SELECT AppointmentID, AppointmentDate FROM Appointment";
        $result = $conn->query($sqlAppointmentSelect);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "AppointmentID: " . $row["AppointmentID"]. " - AppointmentDate: " . $row["AppointmentDate"]. "<br>";
            }
        } else {
            echo "0 results";
        }

    }


    function AppointmentDelete() {

        $sqlAppointmentDelete = "DELETE FROM Appointment WHERE AppointmentID = 2";
        
        if ($conn->query(sqlAppointmentDelete) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }

    }


    function AppointmentUpdate(){

        $sqlAppointmentUpdate = "UPDATE Appointment SET AppointmentDate = '2017-11-27' WHERE AppointmentID = 1";
        
        if ($conn->query($sqlAppointmentUpdate) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }

    }

    AppointmentCreate();
    AppointmentInsert();
    AppointmentSelect();
    AppointmentDelete();
    AppointmentUpdate();
    
?>