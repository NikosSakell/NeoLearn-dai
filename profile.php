<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="css\profile_styles.css" />
    <title>NeoLearn - Edit Profile</title>
    <link rel="icon" type="image/x-icon" href="instructor_main.php?flag=0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script src="scripts/edit_profile.js"></script>
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


    <?php
      session_start();
      //If form not submitted, display form.
      if (!isset($_POST['submit'])){
    ?>
    <!-- Edit/Delete/Add Photo Modal -->
    <form method="post" action="" class="row g-3">

    <div class="infoContainer">
      <div class="row g-3" id="basicInfoContainer">
        <div class="col-md-6" id="imageContainer">
          <div class="card">
            <img
              src="images/blank-profile-picture-973460_1280.png"
              class="profilePhoto"
              id="profilePhoto"
            />
            <div class="card-body">
              <button
                type="button"
                class="editPhotoButton"
                id="editButtons"
                data-bs-toggle="modal"
                data-bs-target="#editPhotoModal"
              >
                Edit Photo
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-6" id="name_email_phone">
          <div class="basicInfo">
            <p class="nameHolder" id="nameHolder">Name Surname</p>
            <p class="emailHolder" id="emailHolder">example@email.com</p>
            <p class="phoneHolder" id="phoneHolder">+30 6969696969</p>

            <div id="editBasicInfo">
              <button
                type="button"
                class="editButton"
                id="editButtons"
                data-bs-toggle="modal"
                data-bs-target="#editInfoModal"
              >
                Edit
              </button>
            </div>
          </div>
        </div>
      </div>
        <div class="col-12">
          <div class="mb-3">
            <label for="descriptionArea" class="form-label">Birth Date</label>
            <input type="date" class="form-control" name="birthDate" id="descriptionArea" rows="3"
            ></input>
          </div>
        </div>
        <div class="col-12">
          <label for="inputCompany" class="form-label">Company</label>
          <input
            name="company"
            type="text"
            class="form-control"
            id="inputCompany"
            placeholder="Company Name"
          />
        </div>
        <div class="col-12" id="buttons">
          <button type="submit" name="submit" class="btn btn-primary">Save</button>
          <button type="submit" class="btn btn-secondary">Reset</button>
        </div>
    </div>
    <div
      class="modal fade"
      id="editPhotoModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
              Edit Profile Photo
            </h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label for="formFile" class="form-label">Upload New</label>
              <input class="form-control" type="file" id="formFile" name="image" />
            </div>
          </div>
          <div class="modal-footer">
            <button
              onclick="deleteImage()"
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Delete Photo
            </button>
            <button
              onclick="displayImage()"
              type="button"
              class="btn btn-primary"
              data-bs-dismiss="modal"
            >
              Save changes
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Edit Basic Info Modal -->
    <div
      class="modal fade"
      id="editInfoModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Info</h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <div class="mb-3">
                <label for="fullname" class="col-form-label">Name:</label>
                <input
                  name="name"
                  type="text"
                  class="form-control"
                  id="fullname"
                  placeholder="Name"
                />
              </div>
              <div class="mb-3">
                <label for="phoneNumber" class="col-form-label"
                  >Surname:</label
                >
                <input type="tel" class="form-control" id="phoneNumber" name="surname" placeholder="Surname"/>
              </div>
              <div class="mb-3">
                <label for="email" class="col-form-label">Email:</label>
                <input
                  name="email"
                  type="email"
                  class="form-control"
                  id="email"
                  placeholder="example@email.com"
                />
              </div>
              <div class="mb-3">
                <label for="phoneNumber" class="col-form-label"
                  >Phone Number:</label
                >
                <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber"/>
              </div>
              
            </div>
          </div>

          <div class="modal-footer">
            <button
              onclick="changeText()"
              type="submit"
              name="submit"
              data-bs-dismiss="modal"
              class="btn btn-primary"
            >
              Save changes
            </button>
          </div>
        </div>
      </div>
    </div>
    </form>
    <?php
      }
      else{
        $instructor_id = $_SESSION['Id'];
        $phoneNumber = $_POST['phoneNumber'];
        $email = $_POST['email'];
        $company = $_POST['company'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $image = $_POST['image'];
        $birth_date = $_POST['birthDate'];
        $con=mysqli_connect('localhost', 'root', '', 'neolearn');
        if(!$name==""){
          mysqli_query($con, "UPDATE user SET First_Name = '$name' WHERE user.Id = '$instructor_id';");
        }
        if(!$surname==""){
          mysqli_query($con, "UPDATE user SET Last_Name = '$surname' WHERE user.Id = '$instructor_id';");
        }
        if(!$email==""){
          mysqli_query($con, "UPDATE user SET Email = '$email' WHERE user.Id = '$instructor_id';");
        }
        if(!$phoneNumber==""){
          mysqli_query($con, "UPDATE user SET Phone = '$phoneNumber' WHERE user.Id = '$instructor_id';");
        }
        if(!$image==""){
          mysqli_query($con, "UPDATE user SET Image = '$image' WHERE user.Id = '$instructor_id';");
        }
        if(!$birth_date==""){
          mysqli_query($con, "UPDATE user SET Birth_Date = '$birth_date' WHERE user.Id = '$instructor_id';");
        }
        if(!$company==""){
          mysqli_query($con, "UPDATE user SET Company = '$company' WHERE user.Id = '$instructor_id';");
        }
        header("Location: instructor_main.php?flag=2");

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