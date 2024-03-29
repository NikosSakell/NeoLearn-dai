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
    <link rel="stylesheet" href="css\student-courses.css">
    <title>NeoLearn | Course Title Here</title>
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

    <div class="row">
        <div class="col-11 col-sm-8 col-md-6 col-lg-5">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <?php
                        session_start();
                        $student_Id=$_SESSION['Id'];
                        $count = 0;
                        $con=mysqli_connect('localhost', 'root', '', 'neolearn');
                        $result=mysqli_query($con, "SELECT course.Title, course.Description , course.Image, course.Id FROM course;");
                        
                        while ($row = mysqli_fetch_array($result)) {                    
                            $title = $row[0];
                            $description = $row[1];
                            $image = $row[2];    
                            $id = $row[3];            
                    ?>
                    <div class="carousel-item <?php if($count==0) :?> active <?php endif;?>">
                        <div class="card">
                            <img
                                src="images/<?=$image?>"
                                class="card-img-top"
                                alt="..."
                            />
                            <div class="card-body">
                                <h5 class="card-title"><?=$title?></h5>
                                <p class="card-text">
                                <?php
                                    $words = str_word_count($description, 1);
                                    $first_20_words = implode(' ', array_slice($words, 0, 20)); 
                                    echo $first_20_words.'...';?>
                                </p>
                            </div>
                            <a href="studet_course_page.php?id=<?=$id?>" class="btn btn-primary">Select</a>
                        </div>
                    </div>
                    
                    <?php
                        $count++;
                        }
                    ?>
                    <button
                        class="carousel-control-prev"
                        type="button"
                        data-bs-target="#carouselExample"
                        data-bs-slide="prev"
                    >
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#carouselExample"
                    data-bs-slide="next"
                    >
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
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