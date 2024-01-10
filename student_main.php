<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is the main page for a student user">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
 </head>
    <link rel="stylesheet" href="css\studentmain_style.css">
    <title>NeoLearn | Student</title>
    <link rel="icon" type="image/x-icon" href="images\neolearn_logo.png">
</head>

<?php
session_start();
?>

<body>
     <!-- Navbar -->
     <nav class="navbar sticky-top navbar-expand-sm navbar-dark" style="background-color: #192370;">


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div>
            <a class="navbar-brand" href="#" alt="neolearn logo"><img src="images\neolearn_logo.svg" onclick="window.location.href='student_main.php'" alt="" width="80" height="40"></a>
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
                      <li><a class="dropdown-item" href="about_us.html">Support</a></li>
                      <li><a class="dropdown-item" href="#" onclick="window.location.href='index.php?flag=0'">Log out</a></li>

                    </ul>
                  </li>
            </ul>
        </div>

    </nav>

    
    <div class="row">
      <div class="col-10 col-lg-3 icon-holder">
        <div class="icons">
          <img class="code-icon" alt="Code brackets icon" src="images/code-icon.svg">
        </div>
        <div class="tag-holder">
          <p>Code</p>
        </div>
      </div>
      <div class="col-10 col-lg-3 icon-holder">
        <div class="icons">
          <img class="code-icon" alt="Graduation cap icon" src="images/grad-cap.svg">
        </div>
        <div class="tag-holder">
          <p>Learn</p>
        </div>
      </div>
      <div class="col-10 col-lg-3 icon-holder">
        <div class="icons">
          <img class="code-icon" alt="World sphere icon" src="images/world-icon.svg">
        </div>
        <div class="tag-holder">
          <p>Create</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-11 col-md-8">

      <div class="header-container">
        <h1 class="header-text">Get ready to explore a new world full of opportunities</h1>
      </div>

      </div>
    </div>

    <div class="row">
      <div class="col-11 col-md-8">

      <div class="info-container">
        <p class="info-text">Complete the challenges and get certifications 
          <div class="image-container"> 
            <img src="images\clipart2614681.png" alt="Black medal emoji " width="50" height="50" class="image"> </p>
          </div>
      </div>

      </div>
    </div>



    <footer class="footer">
    
    <nav>
    <p>NeoLearn &copy; 2024 |
      <a href="https://www.uom.gr/">University of Macedonia</a> | All rights reserved. </p>
      <p>Contact: Department of Applied Informatics <a href="mailto:daisecr@uom.edu.gr">dai@uom.gr</a></p>
      <p class="p2">Course: Special Web Programming Topics (Computer Science Major 7th semester) </p>
    </nav>
    
</footer>

     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

