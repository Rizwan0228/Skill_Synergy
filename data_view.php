<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <title>Skill Synergy</title>
</head>
<style>
    .table_to_edit {
        margin-top: 100px;
        margin-bottom: 100px;
    }

    h3 {
        text-align: center;
    }

    a {
        text-decoration: none;
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

    tr {
        text-align: center;
    }
</style>

<body>
    <header class="header" id="header">
        <nav class="navbar_custom nav-container">
            <img src="skill-Synergy.png" alt="" class="nav__logo">

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="admin_dashboard.php" class="nav__link">Dashboard</a>
                    </li>
                    <li class="nav__item">
                        <a href="data_entry.php" class="nav__link">Data Entry</a>
                    </li>
                    <li class="nav__item">
                        <a href="notice.php" class="nav__link">Notice Review and Post</a>
                    </li>
                    <li class="nav__item">
                        <a href="data_view.php" class="nav__link">Data View</a>
                    </li>
                </ul>

                 <!-- Close button -->
                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>

            <div class="nav__actions">
                <!-- Logout button -->
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line"></i>
                </div>
                <!-- Logout button -->
                <a href="homepage.php">
                    <i class="ri-logout-box-r-line" id="login-btn"></i>
                </a>
            </div>
        </nav>
    </header>
        <div class="table_to_edit">
            <table class="table table table-striped table-hover">
                <h3> Student Database</h3>
                <?php
                include 'db.php';

                $sql = "SELECT s_id, f_name, l_name, contact, password, age, gender, userType FROM  students";
                $query = mysqli_query($conn, $sql);

                if (mysqli_num_rows($query) > 0) {
                ?>

                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Contact Num</th>
                            <th scope="col">Password</th>
                            <th scope="col">Age</th>
                            <th scope="col">Gender</th>
                            <th scope="col">type</th>

                        </tr>
                    </thead>
                    <?php
                    $i = 1;
                    while ($info = mysqli_fetch_array($query)) {
                        $notice_id = $info['s_id'];
                        $project_title = $info['f_name'];
                        $mentor_id = $info['l_name'];
                        $student_id1 = $info['contact'];
                        $student_id2 = $info['password'];
                        $status = $info['age'];
                        $pdf = $info['gender'];
                        $pdf_1 = $info['userType'];

                    ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?= $i++ ?></th>
                                <td><?= $notice_id ?></td>
                                <td><?= $project_title ?></td>
                                <td><?= $mentor_id ?></td>
                                <td><?= $student_id1 ?></td>
                                <td><?= $student_id2 ?></td>
                                <td><?= $status ?></td>
                                <td><?= $pdf ?></td>
                                <td><?= $pdf_1 ?></td>

                            </tr>
                        <?php
                    }
                } else {
                        ?>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">Content</th>
                                <th scope="col">Posted By</th>
                                <th scope="col">Pririty</th>
                            </tr>
                        </thead>
                    <?php
                }
                    ?>

                        </tbody>
            </table>
        </div>
        <div class="table_to_edit">
            <table class="table table table-striped table-hover">
                <h3> User Database</h3>
                <?php
                include 'db.php';

                $sql = "SELECT user_id, f_name, l_name, contact, password, age, gender, userType FROM  user";
                $query = mysqli_query($conn, $sql);

                if (mysqli_num_rows($query) > 0) {
                ?>

                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Contact Num</th>
                            <th scope="col">Password</th>
                            <th scope="col">Age</th>
                            <th scope="col">Gender</th>
                            <th scope="col">type</th>

                        </tr>
                    </thead>
                    <?php
                    $i = 1;
                    while ($info = mysqli_fetch_array($query)) {
                        $notice_id = $info['user_id'];
                        $project_title = $info['f_name'];
                        $mentor_id = $info['l_name'];
                        $student_id1 = $info['contact'];
                        $student_id2 = $info['password'];
                        $status = $info['age'];
                        $pdf = $info['gender'];
                        $pdf_1 = $info['userType'];

                    ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?= $i++ ?></th>
                                <td><?= $notice_id ?></td>
                                <td><?= $project_title ?></td>
                                <td><?= $mentor_id ?></td>
                                <td><?= $student_id1 ?></td>
                                <td><?= $student_id2 ?></td>
                                <td><?= $status ?></td>
                                <td><?= $pdf ?></td>
                                <td><?= $pdf_1 ?></td>

                            </tr>
                        <?php
                    }
                } else {
                        ?>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">Content</th>
                                <th scope="col">Posted By</th>
                                <th scope="col">Pririty</th>
                            </tr>
                        </thead>
                    <?php
                }
                    ?>

                        </tbody>
            </table>
        </div>
        <div class="table_to_edit">
            <table class="table table table-striped table-hover">
                <h3> Admin Database</h3>
                <?php
                include 'db.php';

                $sql = "SELECT i_id, f_name, l_name, contact, password, age, gender, userType FROM  admins";
                $query = mysqli_query($conn, $sql);

                if (mysqli_num_rows($query) > 0) {
                ?>

                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Contact Num</th>
                            <th scope="col">Password</th>
                            <th scope="col">Age</th>
                            <th scope="col">Gender</th>
                            <th scope="col">type</th>

                        </tr>
                    </thead>
                    <?php
                    $i = 1;
                    while ($info = mysqli_fetch_array($query)) {
                        $notice_id = $info['i_id'];
                        $project_title = $info['f_name'];
                        $mentor_id = $info['l_name'];
                        $student_id1 = $info['contact'];
                        $student_id2 = $info['password'];
                        $status = $info['age'];
                        $pdf = $info['gender'];
                        $pdf_1 = $info['userType'];

                    ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?= $i++ ?></th>
                                <td><?= $notice_id ?></td>
                                <td><?= $project_title ?></td>
                                <td><?= $mentor_id ?></td>
                                <td><?= $student_id1 ?></td>
                                <td><?= $student_id2 ?></td>
                                <td><?= $status ?></td>
                                <td><?= $pdf ?></td>
                                <td><?= $pdf_1 ?></td>

                            </tr>
                        <?php
                    }
                } else {
                        ?>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">Content</th>
                                <th scope="col">Posted By</th>
                                <th scope="col">Pririty</th>
                            </tr>
                        </thead>
                    <?php
                }
                    ?>

                        </tbody>
            </table>
        </div>
        <div class="table_to_edit">
            <table class="table table table-striped table-hover">
                <h3> Instructor Database</h3>
                <?php
                include 'db.php';

                $sql = "SELECT i_id, f_name, l_name, contact, password, age, gender, userType FROM  instructors";
                $query = mysqli_query($conn, $sql);

                if (mysqli_num_rows($query) > 0) {
                ?>

                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Contact Num</th>
                            <th scope="col">Password</th>
                            <th scope="col">Age</th>
                            <th scope="col">Gender</th>
                            <th scope="col">type</th>

                        </tr>
                    </thead>
                    <?php
                    $i = 1;
                    while ($info = mysqli_fetch_array($query)) {
                        $notice_id = $info['i_id'];
                        $project_title = $info['f_name'];
                        $mentor_id = $info['l_name'];
                        $student_id1 = $info['contact'];
                        $student_id2 = $info['password'];
                        $status = $info['age'];
                        $pdf = $info['gender'];
                        $pdf_1 = $info['userType'];

                    ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?= $i++ ?></th>
                                <td><?= $notice_id ?></td>
                                <td><?= $project_title ?></td>
                                <td><?= $mentor_id ?></td>
                                <td><?= $student_id1 ?></td>
                                <td><?= $student_id2 ?></td>
                                <td><?= $status ?></td>
                                <td><?= $pdf ?></td>
                                <td><?= $pdf_1 ?></td>

                            </tr>
                        <?php
                    }
                } else {
                        ?>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">Content</th>
                                <th scope="col">Posted By</th>
                                <th scope="col">Pririty</th>
                            </tr>
                        </thead>
                    <?php
                }
                    ?>

                        </tbody>
            </table>
        </div>
        <div class="row" style="margin-bottom: 50px">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Delete Data </h3>
                        <form class="row g-3" action="delete_data.php" method="post">
                            <div class="col-md-4">
                                <label for="validationDefault06" class="form-label">ID</label>
                                <input type="text" class="form-control" id="validationDefault06" name="ID" required />
                            </div>


                            <div class="col-md-4">
                                <!-- <label for="validationDefaultUsername" class="form-label">Table Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="table_name" required />
                                </div> -->
                                <label for="validationDefault04" class="form-label">Table Name</label>
                                <select class="form-select" id="validationDefault04" name="table_name" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="students">Students</option>
                                    <option value="instructors">Instructors</option>
                                    <option value="admins">Admin</option>
                                    <option value="courses">Courses</option>
                                    <option value="assignment">Assignment</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                    <label class="form-check-label" for="invalidCheck2">
                                        Are you sure you want to delete?
                                    </label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">
                                    Delete
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



        </div>



    </section>

    <!--==================== LOGIN ====================-->
    <!-- <div class="login" id="login">
    <form action="" class="login__form">
      <h2 class="login__title">Log In</h2>

      <div class="login__group">
        <div>
          <label for="email" class="login__label">Email</label>
          <input type="email" placeholder="Write your email" id="email" class="login__input" />
        </div>

        <div>
          <label for="password" class="login__label">Password</label>
          <input type="password" placeholder="Enter your password" id="password" class="login__input" />
        </div>
      </div>

      <div>
        <p class="login__signup">
          You do not have an account? <a href="#">Sign up</a>
        </p>

        <a href="#" class="login__forgot"> You forgot your password </a>

        <button type="submit" class="login__button">Log In</button>
      </div>
    </form>

    <i class="ri-close-line login__close" id="login-close"></i>
  </div> -->

    <script src="data_entry.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>