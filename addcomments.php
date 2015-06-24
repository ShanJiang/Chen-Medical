<?php

if(isset($_POST['submitComments'])){

    $PatientID_Input= $_POST['PatientID_Input'];
    $comments = $_POST['comments'];
    $submitComments = $_POST['submitComments'];

    if($PatientID_Input&&$comments)
    {


      $insertQuery = "INSERT INTO patientcomments(PatientID, comments) VALUES('$PatientID_Input','$comments')"; 
      $insertResult = mysqli_query($connection, $insertQuery);

    }
    else{
      echo "Please fill out all the fields";
    }
}

?>