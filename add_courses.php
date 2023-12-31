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
        <a class="navbar-brand" href="instructor_main.html"
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
                <a class="dropdown-item" href="course_list.html">View List</a>
              </li>
              <li><a class="dropdown-item" href="#">More</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.html">Profile</a>
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
              <li><a class="dropdown-item" href="#">Support</a></li>
              <li><a class="dropdown-item" href="#">Log Out</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>

    <div class="row">
      <div class="form-container">
        <h2>Create New Course</h2>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Title</label>
          <input
            type="text"
            name="title"
            class="form-control"
            id="exampleFormControlInput1"
            placeholder="ex. HTML Basics"
          />
        </div>

        <div class="mb-3">
          <label for="formFile" class="form-label">Add a photo</label>
          <input class="form-control" type="file" id="formFile" name="photos"/>
          
        </div>

        <?php
          session_start();
          if (isset($_FILES['photos'])) {
            $uploadsDirectory = "images";
            $targetFile = $uploadsDirectory . basename($_FILES['photos']['name']);

            if (move_uploaded_file($_FILES['photos']['tmp_name'], $targetFile)) {
              echo "File uploaded successfully.";
            } else {
              echo "Error uploading file.";
            }
          }
        ?>

        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label"
            >Description</label
          >
          <textarea
            class="form-control"
            name="description"
            id="exampleFormControlTextarea1"
            rows="3"
          ></textarea>
        </div>

        <div class="mb-3">
          <label for="form-select" class="form-label"
            >Related language or framework</label
          >
          <select class="form-select" aria-label="Default select example" name="dropdown">
            <option selected>HTML</option>
            <option value="1">CSS</option>
            <option value="2">Javascript</option>
            <option value="3">Bootstrap</option>
            <option value="3">React</option>
            <option value="3">Node.js</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="difficulty" class="form-label">Select difficulty</label>
          <div class="difficulty">
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="inlineRadioOptions"
                id="inlineRadio1"
                value="option1"
              />
              <label class="form-check-label" for="inlineRadio1"
                >Beginner</label
              >
            </div>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="inlineRadioOptions"
                id="inlineRadio2"
                value="option2"
              />
              <label class="form-check-label" for="inlineRadio2">Easy</label>
            </div>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="inlineRadioOptions"
                id="inlineRadio3"
                value="option3"
              />
              <label class="form-check-label" for="inlineRadio3">Medium</label>
            </div>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="inlineRadioOptions"
                id="inlineRadio3"
                value="option3"
              />
              <label class="form-check-label" for="inlineRadio3">Hard</label>
            </div>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="inlineRadioOptions"
                id="inlineRadio3"
                value="option3"
              />
              <label class="form-check-label" for="inlineRadio3">Expert</label>
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="formFileMultiple" class="form-label"
            >Add related media (Videos, PDF files etc.)</label
          >
          <input
            class="form-control"
            type="file"
            name="file"
            id="formFileMultiple"
            multiple
          />
        </div>

        <?php

          if (isset ($_POST['Create'])) {

              $instructor_id = $_SESSION['Id'];
	            $title = $_POST['title'];
	            $photos = $_POST['photos'];
              $description = $_POST['description'];
              $language = $_POST['dropdown'];
              $difficulty = $_POST['inlineRadioOptions'];
              $file = $_POST['file'];
              
              
              $con=mysqli_connect('localhost', 'root', '', 'neolearn');
              mysqli_query($con, "INSERT INTO courses VALUES(DEFAULT, '$instructor_id', '$title', '$photos', '$description', '$language', '$difficulty', '$file',)");
              if(mysqli_affected_rows($con) ==1) {
                echo "<font color =green size =14>Επιτυχής Δημιουργία! :)</font><br />";
              }
              else {
                echo "<font color =red size =14>Αποτυχία Δημιουργίας :(</font> <br />";
              }	

    
            } else{

           
        ?>

        <div class="mb-3" id="last_row">
          <div class="buttons-area">
            <input type="submit" name="Create" class="btn btn-danger" value="Create"/>
            <button type="button" class="btn btn-secondary">Cancel</button>
          </div>
        </div>
      </div>
    </div>
    
    <?php
          }
    ?>

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
