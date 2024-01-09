<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="css\course_page_styles.css" />
    <title>NeoLearn - Course Title Here</title>
    <!-- Adding library for icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="icon" type="image/x-icon" href="images\neolearn_logo.png" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
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
              <li><a class="dropdown-item" href="#" onclick="window.location.href='index.php?flag=0'">Log out</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>


    <?php
        session_start();
        if(isset($_GET["id"])) $id=$_GET["id"];

        $con=mysqli_connect('localhost', 'root', '', 'neolearn');

        $result=mysqli_query($con, "SELECT course.Title, course.Description , course.Image FROM course WHERE course.Id=$id;");
        
        while ($row = mysqli_fetch_array($result)) {                    
            $title = $row[0];
            $description = $row[1];
            $image = $row[2];      
        }
                
        // Function to check string starting 
        // with given substring 
        function startsWith ($string, $startString) 
        { 
            $len = strlen($startString); 
            return (substr($string, 0, $len) === $startString); 
        }
    ?>

    <header>
      <div class="row">
        <div class="col-10 container">
          <img src="images/<?=$image?>" alt="Avatar" class="image" />
          <div class="overlay"><?=$title?></div>
        </div>
      </div>
    </header>

    <div class="row">
      <div class="col-10">
        <div class="title_container">
          <p class="main-text">
            <?=$description?>
          </p>
        </div>
      </div>
    </div>

    <div class="row" id="last_row">
      <div class="col-10">
        <div class="additional_info_container">
          <h4>Additional Resources:</h4>
            
          <?php
            $result=mysqli_query($con, "SELECT URL FROM file WHERE Lesson_Id=$id;");
            
            while ($row = mysqli_fetch_array($result)) {                    
                $url = $row[0];
            ?>

          <div class="video_container">
            <div class="row justify-content-start">
              <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">
                <div
                  class="embed-responsive embed-responsive-16by9 iframe-container"
                >

                <?php
                    if(startsWith("$url","https://www.youtube.com/")){
                ?>

                  <iframe
                    width="420pt"
                    height="315pt"
                    src="<?=$url?>"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen
                  ></iframe>

                  <?php
                    }
                    else{
                  ?>
                    <a href="files/<?=$url?>" ><?=$url?></a>
                <?php
                    }
                 ?>
                </div>
              </div>
            </div>
          </div>
            
            <?php
                    
                }
            ?>
          <h5>
            Download additional files and media related to this course here:
          </h5>
          <button class="btn btn-primary">
            <i class="fa fa-download" id="download_icon"></i>Download
          </button>
        </div>
      </div>
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
  </body>
</html>
