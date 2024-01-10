<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="css\inst_styles.css" />
    <title>NeoLearn - Create Course</title>
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
    <?php
      session_start();
      $con=mysqli_connect('localhost', 'root', '', 'neolearn');
      //If form not submitted, display form.
      if (!isset($_POST['Create']) && !isset($_POST['Cancel'])){
    ?>
    <form method="post" action="" enctype="multipart/form-data">

    <div class="row">
      <div class="form-container">
      <h2>Create New Course</h2>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text"  name="title" class="form-control" id="exampleFormControlInput1" placeholder="ex. HTML Basics" />
          </div>

          <div class="mb-3">
            <label for="formFile" class="form-label">Add a photo</label>
            <input class="form-control" type="file" id="formFile" name="photos"/>

          </div>

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <div class="mb-3">
            <label for="form-select" class="form-label">Related language or framework</label>
            <select class="form-select" aria-label="Default select example" name="dropdown">
              <?php 
                $count = 0;
                $result=mysqli_query($con, "SELECT Title, Id FROM language;");
                while ($row = mysqli_fetch_array($result)) {                    
                  if($count==0){
              ?>
                <option selected value="<?=$row[1]?>"><?=$row[0]?></option>
              <?php
                }
              else{
              ?>            
                <option value="<?=$row[1]?>"><?=$row[0]?></option>
              <?php
              }
              $count++;
              }
              ?>
            </select>
          </div>

          <div class="mb-3">
            <label for="difficulty" class="form-label">Select difficulty</label>
            <div class="difficulty">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Beginner"/>
                <label class="form-check-label" for="inlineRadio1">Beginner</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Easy"/>
                <label class="form-check-label" for="inlineRadio2">Easy</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Medium"/>
                <label class="form-check-label" for="inlineRadio3">Medium</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Hard"/>
                <label class="form-check-label" for="inlineRadio3">Hard</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Expert"/>
                <label class="form-check-label" for="inlineRadio3">Expert</label>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Add related media (Videos, PDF files etc.)</label>
            <input class="form-control" type="file" name="file" id="formFileMultiple" multiple/>
          </div>
           
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Youtube URL</label>
            <input type="text" name="youtube_URL" class="form-control" id="exampleFormControlInput1" placeholder="ex. https://www.youtube.com/..." />
          </div>

          <div class="mb-3" id="last_row">
            <div class="buttons-area">
              <input type="submit" name="Create" class="btn btn-danger" value="Create"/>
              <button type="submit" class="btn btn-secondary" name="Cancel" value="Cancel">Cancel</button>
            </div>
          </div>
        </div>
      </div>
    </form>

    <?php
      }
      elseif(isset($_POST['Cancel'])){
        ?>
        
    <form method="post" action="" enctype="multipart/form-data">

<div class="row">
  <div class="form-container">
  <h2>Create New Course</h2>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input type="text"  name="title" class="form-control" id="exampleFormControlInput1" placeholder="ex. HTML Basics" />
      </div>

      <div class="mb-3">
        <label for="formFile" class="form-label">Add a photo</label>
        <input class="form-control" type="file" id="formFile" name="photos"/>

      </div>

      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>

      <div class="mb-3">
        <label for="form-select" class="form-label">Related language or framework</label>
        <select class="form-select" aria-label="Default select example" name="dropdown">
          <?php 
            $count = 0;
            $result=mysqli_query($con, "SELECT Title, Id FROM language;");
            while ($row = mysqli_fetch_array($result)) {                    
              if($count==0){
          ?>
            <option selected value="<?=$row[1]?>"><?=$row[0]?></option>
          <?php
            }
          else{
          ?>            
            <option value="<?=$row[1]?>"><?=$row[0]?></option>
          <?php
          }
          $count++;
          }
          ?>
        </select>
      </div>

      <div class="mb-3">
        <label for="difficulty" class="form-label">Select difficulty</label>
        <div class="difficulty">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Beginner"/>
            <label class="form-check-label" for="inlineRadio1">Beginner</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Easy"/>
            <label class="form-check-label" for="inlineRadio2">Easy</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Medium"/>
            <label class="form-check-label" for="inlineRadio3">Medium</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Hard"/>
            <label class="form-check-label" for="inlineRadio3">Hard</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Expert"/>
            <label class="form-check-label" for="inlineRadio3">Expert</label>
          </div>
        </div>
      </div>

      <div class="mb-3">
        <label for="formFileMultiple" class="form-label">Add related media (Videos, PDF files etc.)</label>
        <input class="form-control" type="file" name="file" id="formFileMultiple" multiple/>
      </div>
           
      <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Youtube URL</label>
            <input type="text" name="youtube_URL" class="form-control" id="exampleFormControlInput1" placeholder="ex. https://www.youtube.com/..." />
          </div>


      <div class="mb-3" id="last_row">
        <div class="buttons-area">
          <input type="submit" name="Create" class="btn btn-success" value="Create"/>
          <button type="submit" class="btn btn-secondary" name="Cancel" value="Cancel">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</form>

        <?php
      }
      else{
        $instructor_id = $_SESSION['Id'];
        $title = $_POST['title'];
        $photos = $_FILES['photos']['name'];
        $description = $_POST['description'];
        $language_id = $_POST['dropdown'];
        $difficulty = $_POST['inlineRadioOptions'];
        $file = $_FILES['file']['name'];
        $youtube_URL = $_POST['youtube_URL'];

        $con=mysqli_connect('localhost', 'root', '', 'neolearn');
        mysqli_query($con, "INSERT INTO course (Id, Instructor_Id, Related_Language_Id, Title, Image, Description, Difficulty) VALUES (NULL, '$instructor_id', '$language_id', '$title', '$photos', '$description', '$difficulty');");
        $result=mysqli_query($con, "SELECT MAX(Id) FROM course;");
        while ($row = mysqli_fetch_array($result)) {                    
          $course_id = $row[0];
        }
        if(mysqli_affected_rows($con) ==1) {
          if (is_uploaded_file($_FILES['file']['tmp_name']) && !$_FILES['file']['size'] == 0) {
            copy($_FILES['file']['tmp_name'], "./files/".$_FILES['file']['name']);
            mysqli_query($con,"INSERT INTO file (Id, Lesson_Id, URL) VALUES (NULL, '$course_id', '$file');");
          }
          if (!$youtube_URL=="") {
            mysqli_query($con,"INSERT INTO file (Id, Lesson_Id, URL) VALUES (NULL, '$course_id', '$youtube_URL');");
          }
          if (is_uploaded_file($_FILES['photos']['tmp_name'])) {
            copy($_FILES['photos']['tmp_name'], "./images/".$_FILES['photos']['name']);     
          }

        }
  
       header("Location: instructor_main.php?flag=1");

      }
    ?>
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
