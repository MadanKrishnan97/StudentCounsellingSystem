<?php
    function PaymentCreate() {

        $sqlPaymentCreate = "CREATE TABLE Payment (
            #PaymentID INT,
            Amount INT, 
            PaymentDate DATE,
            PaymentType VARCHAR(10),
            AppointmentID REFERENCES Appointment(AppointmentID) ON DELETE CASCADE,
            PRIMARY KEY(AppointmentID) 
            )";

        if ($conn->query($sqlPaymentCreate) === TRUE) {
            echo "Table Payment created successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }

    }    


    function PaymentInsert() {

        $sqlPaymentInsert = "INSERT INTO Payment VALUES(2000, '2017-11-23', 'Card', 1)";
        $sqlPaymentInsert .= "INSERT INTO Payment VALUES(1500, '2017-12-18', 'Cash', 2)";
        $sqlPaymentInsert .= "INSERT INTO Payment VALUES(2500, '2017-12-26', 'Cash', 3)";
        
        if ($conn->multi_query($sqlPaymentInsert) === TRUE) {
            echo "New records created successfully";
        } else {
            echo "Error: " . $sqlCounsellorInsert . "<br>" . $conn->error;
        }

    }


    function PaymentSelect() {

        $sqlPaymentSelect = "SELECT AppointmentID, Amount FROM Payment";
        $result = $conn->query($sqlPaymentSelect);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "AppointmentID: " . $row["AppointmentID"]. " - Amount: " . $row["Amount"]. "<br>";
            }
        } else {
            echo "0 results";
        }

    }


    function PaymentDelete() {

        $sqlPaymentDelete = "DELETE FROM Payment WHERE AppointmentID = 1";
        
        if ($conn->query($sqlPaymentDelete) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }

    }


    function PaymentUpdate(){

        $sqlPaymentUpdate = "UPDATE Payment SET Amount = 3000 WHERE AppointmentID = 2";
        
        if ($conn->query($sqlPaymentUpdate) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }

    }

    PaymentCreate();
    PaymentInsert();
    PaymentSelect();
    PaymentDelete();
    PaymentUpdate();
    
?>