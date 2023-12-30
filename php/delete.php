<?php

	$con=mysqli_connect('localhost', 'root', '', 'neolearn', 3307);
    session_start();
	
	$id = 13;
	
	$result=mysqli_query($con, "SELECT user.status FROM user WHERE Id='$id';");
	$row = mysqli_fetch_array($result);
	
	if($row[0]!=NULL){
		if($row[0]="STUDENT"){
			mysqli_query($con, "DELETE FROM student WHERE id = '$id'");
		}
		
		else if($row[0]="PROFESSOR"){
			mysqli_query($con, "DELETE FROM professor WHERE id = '$id'");
		}
		
		mysqli_query($con, "DELETE FROM user WHERE id = '$id'");
	}
	
	if (mysqli_affected_rows($con) > 0) {
		echo "Row deleted.";
	}
 mysqli_close($con);
 
?>