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
    .h11 {
        margin-top: 150px;
        margin-bottom: 50px;
        text-align: center;
        color: black;
        font-weight: bold;
    }

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
    <!--==================== View Courses ====================-->
    <h1 class="h11">Courses</h1>

    <table class="table table table-striped table-hover table-bordered">

        <?php
        include 'db.php';

        $sql = "SELECT course_id, name, description FROM courses";
        $query = mysqli_query($conn, $sql);

        if (mysqli_num_rows($query) > 0) {
        ?>
            <thead>
                <tr>
                    <th scope="col">Serial Number</th>
                    <th scope="col">Course ID</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <?php
            $i = 1;
            while ($info = mysqli_fetch_array($query)) {
                $course_id = $info['course_id'];
                $course_name = $info['name'];
                $description = $info['description'];
            ?>
                <tbody>
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td><?= $course_id ?></td>
                        <td><?= $course_name ?></td>
                        <td><?= $description ?></td>
                    </tr>
                </tbody>
        <?php
            }
        }
        ?>
    </table>


    <script src="homepage.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>