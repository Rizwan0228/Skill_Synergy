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
  /* .table_to_edit {
        margin-top: 100px;
        margin-bottom: 100px;
    } */

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
      <img src="skill-Synergy.png" alt="" class="nav__logo" />

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

          <!-- Close button
          <div class="nav__close" id="nav-close">
            <i class="ri-close-line"></i>
          </div> -->
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
    <h3> Notice Review Request</h3>

    <table class="table table table-striped table-hover">

      <?php
      include 'db.php';

      $sql = "SELECT notice_review_id, title, content, posted_by, priority_level FROM  notice_review";
      $query = mysqli_query($conn, $sql);

      if (mysqli_num_rows($query) > 0) {
      ?>

        <thead>
          <tr style="text-align: center;">
            <th scope="col">#</th>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Posted By</th>
            <th scope="col">Priority</th>
          </tr>
        </thead>
        <?php
        $i = 1;
        while ($info = mysqli_fetch_array($query)) {
          $notice_review_id = $info['notice_review_id'];
          $title = $info['title'];
          $content = $info['content'];
          $posted_by = $info['posted_by'];
          $pririty_level = $info['priority_level'];

        ?>
          <tbody>
            <tr>
              <th scope="row"><?= $i++ ?></th>
              <td><?= $notice_review_id ?></td>
              <td><?= $title ?></td>
              <td><?= $content ?></td>
              <td><?= $posted_by ?></td>
              <td><?= $pririty_level ?></td>

            </tr>
          <?php
        }
      } else {
          ?>
          <thead>
            <tr style="text-align: center;">
              <th scope="col">#</th>
              <th scope="col">ID</th>
              <th scope="col">Title</th>
              <th scope="col">Content</th>
              <th scope="col">Posted By</th>
              <th scope="col">Priority</th>
            </tr>
          </thead>
        <?php
      }
        ?>

          </tbody>
    </table>




    <div class="row" style="width:100%; margin: 0 0 auto auto; justify-content:center;">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Notice Board Data Entry</h3>
            <form class="row g-3" action="admin_notice_board_connect.php" method="post">
              <div class="col-md-4">
                <label for="validationDefault06" class="form-label">Title</label>
                <input type="text" class="form-control" id="validationDefault06" name="title" required />
              </div>
              <div class="col-md-4">
                <label for="validationDefault04" class="form-label">Priority lecvel</label>
                <select class="form-select" id="validationDefault04" name="priority_level" required>
                  <option selected disabled value="">Choose...</option>
                  <option value="high">High</option>
                  <option value="mid">Mid</option>
                  <option value="low">Low</option>
                </select>
              </div>

              <div class="col-md-4">
                <label for="validationDefaultUsername" class="form-label">Posted By</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="posted_by" required />
                </div>
              </div>
              <div class="col-md-12">
                <label for="validationDefault07" class="form-label">Content</label>
                <textarea type="text" class="form-control" id="validationDefault07" name="content" required>
                  </textarea>
              </div>

              <div class="col-12">
                <button class="btn btn-primary" type="submit">
                  Submit form
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <div class="row" style="width:100%; margin: 10px 10px auto auto; justify-content:center;">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Delete Data </h3>
            <form class="row g-3" action="officer_notice_review_delete_data.php" method="post">
              <div class="col-md-4">
                <label for="validationDefault06" class="form-label">ID</label>
                <input type="text" class="form-control" id="validationDefault06" name="ID" required />
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



  <script src="data_entry.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>