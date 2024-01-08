<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
 </head>
    <link rel="stylesheet" href="css\chaltest_styles.css">
    <title>NeoLearn</title>
    <link rel="icon" type="image/x-icon" href="images\neolearn_logo.png">
</head>
<body>
     <!-- Navbar -->
     <nav class="navbar sticky-top navbar-expand-sm navbar-dark" style="background-color: #192370;">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div>
          <a class="navbar-brand" href="#"><img src="images\neolearn_logo.svg" onclick="window.location.href='student_main.php'" alt="" width="80" height="40"></a>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#" onclick="window.location.href='student_courses.php'">Courses</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#" onclick="window.location.href='test_challenges.php'">Challenges</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Profile
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Support</a></li>
                  <li><a class="dropdown-item" href="#" onclick="window.location.href='index.php?flag=0'">Log out</a></li>

                </ul>
              </li>
          </ul>
      </div>

  </nav>




    <div class="container">
        <h2>Available Tests</h2>
    
        <div class="card-deck">

            <?php
                session_start();
                $count = 0;

                $con=mysqli_connect('localhost', 'root', '', 'neolearn', 3307);
                $result=mysqli_query($con, "SELECT Title, Description, Image FROM quiz;");
                
                while ($row = mysqli_fetch_array($result)) {    
                    $count++;
                    $title = $row[0];
                    $description = $row[1];
                    $image = $row[2];
            ?>

            <div class="card mb-4" >
                <img src="images\<?= $image ?>"style="max-width: 1920px; height: 250px; margin: 0px; width: 465px;" class="card-img-top" alt="example picture with html code ">
                <div class="card-body">
                    <h5 class="card-title"> <?= $title ?> </h5>
                    <p class="card-text"> <?= $description ?> </p>
                    <a href="#"  id="quizButton<?= $count ?>" class="btn btn-primary">Take quiz now</a>
                </div>
            </div>

            <?php
                }
            ?>
  
        </div>


      <footer class="footer">
        <p>NeoLearn &copy; 2023</p>
        <nav>
            <a href="https://www.uom.gr/">Πανεπιστήμιο Μακεδονίας</a>
        </nav>
      </footer>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="script\chalenges_script.js"></script>


    
</body>
</html>