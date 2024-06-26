<?php
session_start(); // Resume session
//cash the post response
header("Cache-Control: max-age=86400");

// Check if admin session is not set, redirect to login
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    // Redirect the user to the login page
    header("Location: /login");
    exit();
}
if (isset($_POST["submit"])) { 
    // Check if the form is submitted
    $_SESSION['admin'] = false;
    if(isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
    // Unset the session variable
    unset($_SESSION['admin']);

    // Destroy the session
    session_destroy();
    }

    // Redirect the user to the login page
    header("Location: /login");
    exit();

 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Farzad Nosrati | Admin Dashboard | Create post</title>
  <!-- plugins:css -->
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <script src="https://cdn.tiny.cloud/1/in99ycrsy1m2h2v85lpdg644q2i39zhvmuzv1wkveysw5fx0/tinymce/7/tinymce.min.js"
    referrerpolicy="origin"></script>
  <link rel="stylesheet" href="../../css/custom.css">
  <link rel="stylesheet" href="../../css/admin.css">
  <link rel="stylesheet" href="../../css/styles.css">
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav text-dark mr-lg-4 w-100">
          <a href="/" class="text-dark btn"><b>Home page</b></a>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="../../assets/img/profile.png" alt="profile" />
              <span class="nav-profile-name">Farzad Nosrati</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
          data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/admin/">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/create/">
              <i class="mdi mdi-border-color menu-icon active"></i>
              <span class="menu-title active">Create post</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/activity/">
              <i class="mdi mdi-border-color mdi-chart-line menu-icon"></i>
              <span class="menu-title">Activity</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Create Post</h4>
                  <form class="forms-sample" id="create-post-form">
                    <div class="form-group d-none">
                      <label for="exampleInputName1">Author</label>
                      <input type="text" class="form-control" value="Farzad" id="exampleInputName1" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Title</label>
                      <input type="text" class="form-control" id="" placeholder="Enter a title for post">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Sub Title</label>
                      <input type="text" class="form-control" id="" placeholder="Enter a sub title for post">
                    </div>
                    <div>
                      <b id="postErrs">
                        <span></span>
                      </b>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" style="outline: none;" id="exampleTextarea1" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2 text-white">Publish</button>
                    <button type="submit" class="btn btn-light me-2 text-dark">Drafts</button>

                    <div id="publish-error">

                    </div>
                    <!-- <button class="btn btn-light">Cancel</button> -->
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="/admin/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="/admin/js/off-canvas.js"></script>
  <script src="/admin/js/hoverable-collapse.js"></script>
  <script src="/admin/js/template.js"></script>
  <!-- <script src="/js/admin.js" type="module"></script> -->
  <script src="/js/create.js" type="module"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
</body>

</html>