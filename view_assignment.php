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
                        <a href="instructor_dashboard.php" class="nav__link">Dashboard</a>
                    </li>

                    <li class="nav__item">
                        <a href="view_assignment.php" class="nav__link">View Assignments</a>
                    </li>

                </ul>
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



    <section style="margin-top: 150px;">
        <div class="table_to_edit">
            <table class="table table table-striped table-hover">
                <h3> Assignments Submitted</h3>

                <?php
                include 'db.php';

                $sql = "SELECT assignment_id, title, description FROM assignment";
                $query = mysqli_query($conn, $sql);

                if (mysqli_num_rows($query) > 0) {
                ?>

                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>

                        </tr>
                    </thead>
                    <?php
                    $i = 1;
                    while ($info = mysqli_fetch_array($query)) {
                        $assignment_id = $info['assignment_id'];
                        $title = $info['title'];
                        $description = $info['description']

                    ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?= $i++ ?></th>
                                <td><?= $assignment_id ?></td>
                                <td><?= $title ?></td>
                                <td><?= $description ?></td>

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