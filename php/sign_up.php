<?php

	$con=mysqli_connect('localhost', 'root', '', 'neolearn', 3307);
    session_start();
	
    $first_name = "bro";
    $last_name = "name";
	$birth_date = "2023-12-01";
	$status = "PROFESSOR";

	mysqli_query($con, "INSERT INTO user VALUES(13, '$first_name', '$last_name', '$birth_date', '$status')");
	
	if($status=='STUDENT'){
		mysqli_query($con, "INSERT INTO student VALUES(13)");
	}
	
	if($status=='PROFESSOR'){
		mysqli_query($con, "INSERT INTO student VALUES(13)");
	}
	
		if(mysqli_affected_rows($con) >0) {
		echo "<font color =green size =14>Επιτυχής Υποβολή! :)</font><br />";
		}
		else {
		echo "<font color =red size =14>Αποτυχία Υποβολής :(</font> <br />";
		}	

 mysqli_close($con);
 
?>