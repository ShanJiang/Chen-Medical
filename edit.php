<?php

	include_once('db.php');
	include_once('showcomments.php');
    include_once('addcomments.php');
    include_once('showtable.php');

	if(isset($_GET['edit']))
	{	
		$PatientID = $_GET['edit'];
		$sql="SELECT * FROM patientcomments";
		$res = mysqli_query($connection,$sql);
		$row = mysqli_fetch_assoc($res);

	}
	if(isset($_POST['newComments']) )
	{
		$newComments = $_POST['newComments'];
		$PatientID = $_POST['PatientID'];
		$sql = "UPDATE patientcomments 
				SET comments = '$newComments'
				WHERE PatientID ='$PatientID'";
		$res = mysqli_query($connection,$sql) or die("Could not update".mysql_error());
		echo "<meta http-equiv='refresh' content='0; url=index.php'>";

	}
?>
<div class="panel panel-info">
<div class="panel-heading"><b>Edit Comments:</b></div>
<div class="panel-body">
<form action="index.php" method="POST">
  
    PatientID:<input type="text" name="PatientID" value="<?php echo $row["PatientID"];?>"/> <br>  
    <b>Comments: </b>
    <textarea name="currentComments"><?php echo $row["comments"];?></textarea> <br><br>
    New Comments:
    <textarea name="newComments" value="<?php echo $row["comments"]?>"></textarea>
    <input type="submit" class= "btn btn-info"  name="submitNewComments"value="Update Comments"/>

 
  
</form>
</div>
</div>


