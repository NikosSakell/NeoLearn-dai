<?php

	$con=mysqli_connect('localhost', 'root', '', 'neolearn', 3307);
    session_start();
	
    $id = 13;
	
	$result=mysqli_query($con, "SELECT * FROM user WHERE Id='$id';");
	while ($row = mysqli_fetch_array($result)) {
		$first_name = $row[1];
		$last_name = $row[2];
		$birth_date = $row[3];
		$role= $row[4];
	}

	echo "$first_name $last_name $birth_date $role";
	
 mysqli_close($con);
 
?>



