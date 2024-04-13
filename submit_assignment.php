<?php
include 'db.php';

session_start();
$id = $_SESSION['ID'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Skill Synergy</title>
</head>
<style>
  #img-logo {
    position: fixed;
    top: 150px;
    left: 0;
    width: 100vw;
    height: 100vh;
    object-fit: cover;
    opacity: .8;
  }
</style>

<body>
  <header class="header" id="header">
    <nav class="navbar_custom nav-container">
      <img src="skill-Synergy.png" alt="" class="nav__logo">

      <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="student_dashboard.php" class="nav__link">Dashboard</a>
          </li>

          <li class="nav__item">
            <a href="course.php" class="nav__link">View Courses</a>
          </li>

          <li class="nav__item">
            <a href="submit_assignment.php" class="nav__link">Submit Assignment</a>
          </li>
        </ul>
      </div>

      <div class="nav__actions">
        <div class="nav__toggle" id="nav-toggle">
          <i class="ri-menu-line"></i>
        </div>
        <!-- Logout button -->
        <a href="homepage.php"><i class="ri-logout-box-r-line" id="login-btn"></i></a>

        <!-- Toggle button -->

      </div>
    </nav>
  </header>
  <!-- <img src="IUB tech 360 logo-01.png" alt="" id="img-logo"> -->
  <div class="row project-submit" style="margin: 150px 0px auto auto; justify-content: center;">
    <div class="col-lg-6 mb-3 mb-sm-0">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">Submission Entry</h3>
          <form class="row g-3" action="submission_connect.php" method="post" enctype="multipart/form-data">
            <div class="col-md-8">
              <label for="validationDefault06" class="form-label">Assignment Title</label>
              <input type="text" class="form-control" id="validationDefault06" name="title" required />
            </div>

            <div class="col-md-4">
              <label for="validationDefaultUsername" class="form-label">Assignment ID</label>
              <div class="input-group">
                <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="assignment_id" required />
              </div>
            </div>
            <div class="col-md-8">
              <label for="validationDefault06" class="form-label">Description</label>
              <input type="text" class="form-control" id="validationDefault07" name="description" required />
            </div>
            <div class="col md-4">
              <label for="validationDefault04" class="form-label">Upload pdf </label>
              <input type="file" class="form-control" name="pdf" id="pdf">

            </div>


            <div class="col-12">
              <button class="btn btn-primary" type="submit" name="submit">
                Submit form
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="homepage.js"></script>
</body>

</html>