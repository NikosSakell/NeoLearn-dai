<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    //If form not submitted, display form.
    $flag = $_GET['flag'];
    if($flag==1)    echo "<script type='text/javascript'>alert('Course added successfully!');</script>";
    if($flag==2)    echo "<script type='text/javascript'>alert('Profile changed successfully!');</script>";
    ?>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="css\inst_styles.css" />
    <title>NeoLearn - Instructor</title>
    <link rel="icon" type="image/x-icon" href="images\neolearn_logo.png" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script src="instructor_main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
      integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <!-- Navbar -->
    <nav
      class="navbar sticky-top navbar-expand-sm navbar-dark"
      style="background-color: #192370"
    >
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div>
        <a class="navbar-brand" href="instructor_main.php?flag=0"
          ><img src="images\neolearn_logo.svg" alt="" width="80" height="40"
        /></a>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Courses
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="add_courses.php">Add New</a>
              </li>
              <li>
                <a class="dropdown-item" href="course_list.php">View List</a>
              </li>
              <li><a class="dropdown-item" href="#">More</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.php">Profile</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Settings
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="about_us.html">Support</a></li>
              <li><a class="dropdown-item" href="index.php?flag=0">Log Out</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>

    <div class="row">
      <div class="container">
        <div class="col-10 card-container-blue">
          <p>We are happy to see you share your knowledge!</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="container">
        <div class="col-10 card-container-white">
          <p>Create courses and add media...</p>
        </div>
      </div>
    </div>

    <div class="row card-container-blue">
      <div class="col-5 col-lg-6">
        <div class="container">
          <p>Welcome! Let the fun begin!</p>
        </div>
      </div>
      <div class="col-5 col-lg-4">
        <div class="container">
          <img
            src="images/pc.svg"
            class="card-img-top"
            alt="Icon of a laptop"
            id="card_photo"
          />
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
