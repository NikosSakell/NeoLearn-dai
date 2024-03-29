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
          <h4>Additional Resources: (Related videos, PDF files to download etc.)</h4>
            
          <?php
            // $con=mysqli_connect('localhost', 'root', '', 'neolearn');
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
                    <p></br>_____________________________________________ </p>
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
