<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css\login_styles.css">
    <title>NeoLearn | Login</title>
    <link rel="icon" type="image/x-icon" href="images\neolearn_logo.svg">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-sm navbar-dark" style="background-color: #192370;">


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" id="toggler">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div>
            <a class="navbar-brand" href="index.php?flag=0"><img src="images\neolearn_logo.svg" alt="" width="80" height="40"></a>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About us </a>
                </li>

            </ul>
        </div>
        <!-- <div class="nav-item">
            <a class="nav-link" href="#">
                <button type="button" class="btn btn-danger collapsible">Login</button>
                <div class="content">
                    <button type="button" class="btn btn-light">Register</button>
                </div>
            </a>
        </div> -->
    </nav>



    <?php
		//If form not submitted, display form.
		if (!isset($_POST['submit'])){
		?>
		 
			<form method="post" action="">

            <div class="row">
            <div class="col-1 col-sm-2 col-md-3 col-lg-4"></div>
            <div class="col-10 col-sm-8 col-md-6 col-lg-4">
                <div class="login-field">
                    <h1>Welcome </br>Back!</h1>
                    <div class="row" id="username">
                        <input type="text" id="username" name="username" placeholder="Username or email">
                    </div>
                    <div class=row id="password">
                        <input type="password" id="password" name="password" placeholder="Password">
                    </div>
                    <p>Forgot your password?</p>
                    <div class="row">
                        <button class="login_button btn-danger" name="submit">Login</button>
                    </div>
                </div>
            </div>
            <div class="col-1 col-sm-2 col-md-3 col-lg-4"></div>
            </div>
		 
		<?php
		//If form submitted, process input.
		}else{
            {
                $username= $_POST["username"];
                $password=$_POST["password"];
            
                $con=mysqli_connect('localhost', 'root', '', 'neolearn');
                session_start();
                    
                $result=mysqli_query($con, "SELECT Id, Role FROM user WHERE Id='$username' AND  Password='$password';");
                while ($row = mysqli_fetch_array($result)) {                    
                    $_SESSION['Id'] = $row[0];
                    $role = $row[1];
                    echo "$role";
                }
                mysqli_close($con);

                if($role=="STUDENT"){
                    header("Location: student_main.php");
                    exit();    
                }

                if($role=="INSTRUCTOR"){
                    header("Location: instructor_main.php?flag=0");
                    exit();    
                }                     
            }		
		}
		?>


    

    <!-- <footer>
        <p>footer</p>

    </footer> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>