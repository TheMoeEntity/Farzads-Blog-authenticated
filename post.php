<?php
session_start(); // Start or resume a session
$isAdminLogged = false;
function isAdminLoggedIn() {
    return isset($_SESSION['admin']) && $_SESSION['admin'] === true;
}
$isAdminLogged = isAdminLoggedIn()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Farzad Nosrati | Blog title</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <link href="css/custom.css" rel="stylesheet" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
        rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://www.google.com/recaptcha/api.js"></script>

</head>

<body>
    <!-- Loading overlay -->
    <div class="loading-overlay" id="loadingOverlay">
        <div class="spinner"></div>
    </div>
    <!-- scroll top button -->
    <div onclick="scrollToTop()" class="scrollTop" id="scrollBtn">
        <i class="fa-solid fa-angle-up"></i>
    </div>
    <!-- Navigation-->
    <!-- ===== modal starts ===== -->
    <div class="modal-background" id="modal-background">

        <div>
            <div class="closeTitle">
                <span onclick="closeModal()" class="">&times;</span>
            </div>
            <form id="contactForm">
                <div class="form-floating">
                    <input class="form-control" id="name" type="text" placeholder="Enter your name..." />
                    <label for="name">Name</label>

                </div>
                <div class="form-floating">
                    <input class="form-control" id="email" type="email" placeholder="Enter your email..." />
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" id="phone" type="tel" placeholder="Enter your phone number..." />
                    <label for="phone">Phone Number</label>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" id="message" placeholder="Enter your message here..."
                        style="height: 12rem"></textarea>
                    <label for="message">Message</label>
                    <div class="py-2" style="font-size: small;" id="errorMsgs"></div>
                </div>
                <br />
                <div style="font-size: small;" class="py-1">
                    This site is protected by reCAPTCHA and the Google
                    <a href="https://policies.google.com/privacy"><u>Privacy Policy</u></a> and
                    <a href="https://policies.google.com/terms"><u>Terms of Service</u></a> apply.
                </div>
                <div class="g-recaptcha my-3" data-sitekey="6Lffn8opAAAAAMv9AEWbiuPA6UVRaDILxLTPO3II"
                    data-callback="handleRecaptchaCallback"></div>
                <!-- Submit Button-->
                <button class="btn btn-primary text-uppercase" type="submit">Send</button>
            </form>
        </div>
    </div>
    <!-- modal ends -->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand text-dark" href="/">Farzad Nosrati</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse text-dark navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 text-dark" href="index.php">Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 text-dark" href="about.php">About</a>
                    </li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 text-dark" href="book.php">Book</a>
                    </li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 text-dark"
                            onclick="message()">Contact</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 text-dark" href="/blog/">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Header-->
    <header id="masthead" class="masthead">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-10">
                    <div class="post-heading text-center">
                        <h1 class="text-dark" id="post-title"></h1>
                        <h2 class="subheading text-dark" id="post-sub"></h2>
                        <div
                            class="meta flex-column flex-md-row gap-4 gap-md-3 text-dark mx-auto mt-5 d-flex gap-x-2 justify-content-md-between col-md-12 col-xl-8">
                            <span class="d-flex w-auto gap-3 mx-auto">
                                <i class="fas fa-user"></i>
                                <span class="pl-5" id="post-author"></span>
                            </span>
                            <span class="d-flex w-auto gap-3 mx-auto">
                                <i class="fas fa-calendar"></i>
                                <span id="date_added"></span>
                            </span>
                            <span class="d-flex w-auto gap-3 mx-auto">
                                <i class="fas fa-comments"></i>
                                <span id="comment-num">No comments</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <!-- Post Content-->
    <div class="blog-single">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-8 m-15px-tb">
                    <article class="article">
                        <div class="article-img" id="blog-image">
                            <!-- 
                            <img src="https://www.bootdey.com/image/800x350/87CEFA/000000" title="" alt=""> -->
                        </div>
                        <div id="post-content">

                        </div>

                    </article>

                    <!-- POST COMMENTS -->
                    <div id="comm" class="contact-form article-comment mb-5 d-none">
                        <h4>Comments</h4>
                        <div class="d-flex flex-column gap-4" id="get-comments">
                        </div>
                    </div>


                    <div class="contact-form article-comment">
                        <h4>Leave a Reply</h4>
                        <form id="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="Name" id="name" placeholder="Name *" class="form-control"
                                            type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="Email" id="email" placeholder="Email *" class="form-control"
                                            type="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" placeholder="Your message *" rows="4"
                                            class="form-control"></textarea>
                                    </div>
                                </div>
                                <div id="errors" class="fadeInUp">

                                </div>
                                <div class="col-md-12">
                                    <div class="send">
                                        <button type="submit" class="px-btn theme"><span>Submit</span> <i
                                                class="arrow"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 m-15px-tb blog-aside">
                    <!-- End Latest Post -->
                    <div class="px-3 mt-5 d-flex flex-column gap-y-2" id="others">
                        <h3>Other Posts</h3>

                    </div>
                    <div class="px-3 ">
                        <a href="/blog"><b>View all</b></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ======= Footer ======= -->
<?php include('views/footer.php') ?>