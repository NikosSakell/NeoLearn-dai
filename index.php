<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    //If form not submitted, display form.
    $flag = $_GET['flag'];
    if($flag==1) echo "<script type='text/javascript'>alert('New Register added successfully!');</script>";
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css\index_styles.css">
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
      <a class="navbar-brand" href="#"><img src="images\neolearn_logo.svg" alt="" width="80" height="40"></a>
  </div>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
          <!-- <li class="nav-item">
              <a class="nav-link" href="#">Help</a>
          </li> -->
          <li class="nav-item">
              <a class="nav-link" href="#">About us </a>
          </li>
          <a class="nav-link" href="#">
            <button type="button" id="logButton" class="btn btn-outline-light" onclick="window.location.href='login.php'">Login</button>
        </a>
        <a class="nav-link" href="#">
          <button type="button" id="regButton" class="btn btn-outline-light" onclick="window.location.href='register.php'">Register</button>
      </a>

      </ul>
  </div>
  
</nav>

<div class="row chat">
      <div class="chat-container">
        <div class="container">
          <div class="message1 mb-3">
            <div class="bubble left">Hey, how can I add Java to my HTML?</div>
          </div>
          <div class="message2 mb-3 offset-md-4">
            <div class="bubble right">Um, you mean JavaScript?</div>
          </div>
          <div class="message1 mb-3">
            <div class="bubble left">Yes, that one</div>
          </div>
        </div>
        <div class="message-field">
          <div class="text-field">Just go to nlrn.co|</div>
          <div class="send-icon">Send</div>
        </div>
      </div>
    </div>

    <div class="header-container">
      <h1>
        Welcome to NeoLearn, the online school of programming
        <img
          src="images/laptop_prog.png"
          alt="white computer side emoji "
          class="image"
        />
      </h1>
    </div>

    <div class="row justify-content-evenly">
      <div class="col-12 col-md-4 order-md-1 order-2">
        <div class="container">
          <div class="box-container">
            <div class="box learn">
              <h2>Do You Want to Learn</h2>
            </div>
            <div class="box share">
              <h2>Or You Want to Share Your Knowledge</h2>
            </div>
          </div>
        </div>
      </div>

      <div class="w-100 d-md-none"></div>

      <div class="row justify-content-evenly">
        <div class="col-12 col-md-4 order-md-2 order-1">
          <div class="imag1">
            <img
              class="logos-img"
              src="images/pngkey.com-coding-icon-png-3598627.png"
              alt=" black and white programming languages logos "
              width="400"
              height="150"
            />
          </div>
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