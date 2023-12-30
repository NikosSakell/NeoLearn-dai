<html>
	<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<title>Form Response with If-Else Statement</title>
	</head>
	 
    <body>
        
        <?php
            session_start();
            $student_Id=$_SESSION['Id'];
            $con=mysqli_connect('localhost', 'root', '', 'neolearn', 3307);
            $count=0;
            
            $result=mysqli_query($con, "SELECT courses.Title, courses.Description , courses.Image FROM courses JOIN student_has_courses WHERE courses.Id=student_has_courses.Course_Id;");
            while ($row = mysqli_fetch_array($result)) {                    
                $title = $row[0];
                $description = $row[1];
                $image = $row[2];   
                echo "$count $title $description $image <br>";             
                $count++;
            }
                mysqli_close($con);
           ?>
    </body>

</html>