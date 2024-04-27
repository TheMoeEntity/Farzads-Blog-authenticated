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
    <title>Farzad Nosrati | Admin Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/admin/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../css/admin.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/admin/images/favicon.png" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="loading-overlay" id="loadingOverlay">
        <div class="spinner"></div>
    </div>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
                <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-sort-variant"></span>
                    </button>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <ul class="navbar-nav mr-lg-4 w-100 text-dark">
                    <a href="/" class="text-dark btn"><b>Home page</b></a>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                            <img src="../assets/img/profile.png" alt="profile" />
                            <span class="nav-profile-name">Farzad Nosrati</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <form method="post" action="#">
                                <button style="background-color: transparent; border: none; " class="button w-100"
                                    name="submit" type="submit">
                                    <a class="dropdown-item">
                                        <i class="mdi mdi-logout text-primary"></i>
                                        Logout
                                    </a>
                                </button>
                            </form>

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
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            <i class="mdi mdi-home menu-icon" style="color:#4D84FF;"></i>
                            <span class="menu-title active" style="color:#4D84FF;">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/create/">
                            <i class="mdi mdi-border-color menu-icon"></i>
                            <span class="menu-title">Create post</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="d-flex justify-content-between flex-wrap">
                                <div class="d-flex align-items-end flex-wrap">
                                    <div class="me-md-3 me-xl-5">
                                        <h2>Welcome back, Farzad</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row bg-light pt-3 d-flex flex-column gap-2">
                        <div class="d-flex flex-column ">
                            <h4 class='mb-2 p-2 px-3'>All Blog posts </h4>
                            <span class="text-danger p-3" id="postErrorMessage"></span>
                            <div
                                class="tile w-100 d-flex align-items-center flex-column flex-md-row align-items-end  p-3 d-flex gap-3 justify-content-start justify-content-md-between overflow-scroll">
                                <div class="col-12 col-md-7 col-lg-5 d-flex">
                                    <button id="allPosts" class="btn active-tab">All Posts (3)</button>
                                    <button id="PublishedPosts" class="btn">Published (1)</button>
                                    <button id="PendingPosts" class="btn">Pending (0)</button>
                                </div>
                                <div class="col-12 col-md-4 col-lg-3">
                                    <input style="border:1px solid #D8D8D8; border-radius: 20px; padding: 6px 15px;"
                                        type="search" placeholder="Search" class="bg-transparent w-100 " name="" id="searchInput">
                                </div>
                            </div>
                        </div>
                        <div class="pt-3col-md-12 stretch-card card-body bg-white table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Date </th>
                                        <th scope="col">Comments</th>
                                    </tr>
                                </thead>
                                <tbody id="posts-table">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
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
    <!-- Plugin js for this page-->
    <script src="/admin/vendors/chart.js/Chart.min.js"></script>
    <script src="/admin/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="/admin/js/off-canvas.js"></script>
    <script src="/admin/js/hoverable-collapse.js"></script>
    <script src="/admin/js/template.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="/admin/js/dashboard.js"></script>
    <script src="/admin/js/data-table.js"></script>
    <script src="/admin/js/jquery.dataTables.js"></script>
    <script src="/admin/js/dataTables.bootstrap4.js"></script>
    <!-- End custom js for this page-->
    <script type="module" src="../js/admin.js"></script>
    <script src="/admin/js/jquery.cookie.js" type="text/javascript"></script>
</body>

</html>