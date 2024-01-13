<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css\login_styles.css">
    <title>NeoLearn | Register</title>
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
                    <a class="nav-link" href="about_us.html">About us </a>
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
        
    <form method="post" action="" enctype="multipart/form-data">

    <div class="row">
        <div class="col-1 col-sm-2 col-md-3 col-lg-4"></div>
        <div class="col-10 col-sm-8 col-md-6 col-lg-4">
            <div class="register-field">
                <h3>Complete the form to register...</h3>
                <div class="row">
                    <input type="text" id="textfield" placeholder="Firstname" name="firstname">
                </div>
                <div class="row">
                    <input type="text" id="textfield" placeholder="Lastname" name="lastname">
                </div>
                <div class="row">
                    <input type="date" id="textfield" placeholder="Birth Date" name="birth_date">
                </div>
                <div class="row">
                    <input type="email" id="textfield" placeholder="Email Address" name="email">
                </div>
                <div class="row">
                    <input type="text" id="textfield" placeholder="Company" name="company">
                </div>
                <div class="row">
                    <input type="password" id="textfield" placeholder="Password" name="password">
                </div>
                <div class="row">
                    <input type="text" id="textfield" placeholder="Phone Number" name="phone">
                </div>

                
                <div class="row" id="selector">
                    <div class="col">  
                        <p id="select-tag">Select your role:</p>
                    </div>
                    <div class="col" id="select-label">
                        <input type="radio" id="html" name="role" value="INSTRUCTOR">
                        <label for="html">INSTRUCTOR</label>
                    </div>
                    <div class="col" id="select-label">
                        <input type="radio" id="css" name="role" value="STUDENT">
                        <label for="css">STUDENT</label>
                    </div>
                </div>

                <div class="row" id="selector">
                    <div class="col">  
                        <p id="select-tag">Profil Picture: </p>
                    </div>
                    <div class="col" id="select-label">
                    <input type="file"  placeholder="Profil Picture" name="image"> 
                    </div>
                </div>
                <div id="agree-field">
                    <input type="checkbox" id="check" name="check">
                    <label for="check" id="agree-label"> I Agree with Terms and Conditions</label><br>
                </div>
                <div class="row">
                    <button class="register_button btn-success" name="submit">Register</button>
                </div>
            </div>
        </div>
        <div class="col-1 col-sm-2 col-md-3 col-lg-4"></div>
    </div>
    </form>

        
    <?php
    //If form submitted, process input.
    }else{
 
	$con=mysqli_connect('localhost', 'root', '', 'neolearn');
    session_start();

    $password = $_POST["password"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
	$birth_date = $_POST["birth_date"];
	$email = $_POST["email"];
	$company = $_POST["company"];
	$phone = $_POST["phone"];
	$role = $_POST["role"];
    $image = $_FILES["image"]["name"];
    
	mysqli_query($con, "INSERT INTO user VALUES('NULL', '$password', '$firstname', '$lastname', '$birth_date', '$email', '$company', '$role', '$phone', '$image')");
	$result = mysqli_query($con, "SELECT MAX(Id) FROM user;");
    $max_id = mysqli_fetch_array($result);
    $id = $max_id[0];
	
		if(mysqli_affected_rows($con) >0) {
            if($role=='STUDENT'){
                mysqli_query($con, "INSERT INTO student VALUES('$id')");
            }
            
            if($role=='INSTRUCTOR'){
                mysqli_query($con, "INSERT INTO instructor (`Id`) VALUES ('$id');");
            }
             
            if (is_uploaded_file($_FILES['image']['tmp_name'])) {
                copy($_FILES['image']['tmp_name'], "./images/".$_FILES['image']['name']);
               //  move_uploaded_file($_FILES['userfile']['tmp_name'], 					                                   
            }
            mysqli_close($con);
            header("Location: index.php?flag=1");
            exit();
        }
		else {
            mysqli_close($con);
            header("Location: register.php");
            exit();
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