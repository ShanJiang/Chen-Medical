<?php
$commentQuery = "SELECT patient.PatientID, first_name, last_name, email, phoneNO, DOB, Description, comments 
    				 FROM patient LEFT JOIN patientcomments 
    				 ON patient.PatientID = patientcomments.PatientID ";

    if (isset($_POST['showTable'])) {
         $commentQuery .= "";
            
         }

          $commentResult= mysqli_query($connection, $commentQuery);
         
 
    if (!$commentResult) {
     die("Database query failed!!.");
    }
?>