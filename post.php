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
                    <input class="form-control" id="name" type="text" placeholder="Enter your name..."
                        data-sb-validations="required" />
                    <label for="name">Names</label>
                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.
                    </div>
                </div>
                <div class="form-floating">
                    <input class="form-control" id="email" type="email" placeholder="Enter your email..."
                        data-sb-validations="required,email" />
                    <label for="email">Email address</label>
                    <div class="invalid-feedback" data-sb-feedback="email:required">An email is
                        required.</div>
                    <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.
                    </div>
                </div>
                <div class="form-floating">
                    <input class="form-control" id="phone" type="tel" placeholder="Enter your phone number..."
                        data-sb-validations="required" />
                    <label for="phone">Phone Number</label>
                    <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is
                        required.</div>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" id="message" placeholder="Enter your message here..."
                        style="height: 12rem" data-sb-validations="required"></textarea>
                    <label for="message">Message</label>
                    <div class="invalid-feedback" data-sb-feedback="message:required">A message is
                        required.</div>
                </div>
                <br />

                <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Send</button>
            </form>
        </div>
    </div>
    <!-- modal ends -->
	<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
		<div class="container px-4 px-lg-5 text-dark">
			<a class="navbar-brand text-dark" href="/">Farzad Nosrati</a>
			<button class="navbar-toggler text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				<i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ms-auto py-4 py-lg-0">
					<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 text-dark" href="/">Home</a></li>
					<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 text-dark" href="about.php">About</a></li>
					<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 text-dark" href="book.php">Book</a></li>
					<?php if (isAdminLoggedIn()): ?>
						<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 text-dark" href="/admin/">Dashboard</a></li>
						<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 text-dark" href="/">Logout</a></li>
            		<?php endif; ?>

					<li class="nav-item text-dark"><a class="nav-link px-lg-3 py-3 py-lg-4 text-dark" onclick="message()">Contact</a></li>
						<?php if (!isAdminLoggedIn()): ?>
						<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 text-dark" href="/login/">Login</a></li>
            		<?php endif; ?>
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
                    <div class="contact-form article-comment mb-5">
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
                    <!-- <div class="widget widget-latest-post">
                        <div class="widget-title">
                            <h3>Latest Post</h3>
                        </div>
                        <div class="widget-body">
                            <div class="latest-post-aside media">
                                <div class="lpa-left media-body">
                                    <div class="lpa-title">
                                        <h5><a href="#">Blog title 1</a></h5>
                                    </div>
                                    <div class="lpa-meta">
                                        <a class="name" href="#">
                                            Blog Author
                                        </a>
                                        <a class="date" href="#">
                                            26 FEB 2020
                                        </a>
                                    </div>
                                </div>
                                <div class="lpa-right">
                                    <a href="#">
                                        <img src="https://www.bootdey.com/image/400x200/FFB6C1/000000" title="" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="latest-post-aside media">
                                <div class="lpa-left media-body">
                                    <div class="lpa-title">
                                        <h5><a href="#">Blog title 1</a></h5>
                                    </div>
                                    <div class="lpa-meta">
                                        <a class="name" href="#">
                                            Blog Author
                                        </a>
                                        <a class="date" href="#">
                                            26 FEB 2020
                                        </a>
                                    </div>
                                </div>
                                <div class="lpa-right">
                                    <a href="#">
                                        <img src="https://www.bootdey.com/image/400x200/FFB6C1/000000" title="" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="latest-post-aside media">
                                <div class="lpa-left media-body">
                                    <div class="lpa-title">
                                        <h5><a href="#">Blog title 1</a></h5>
                                    </div>
                                    <div class="lpa-meta">
                                        <a class="name" href="#">
                                            Blog Author
                                        </a>
                                        <a class="date" href="#">
                                            26 FEB 2020
                                        </a>
                                    </div>
                                </div>
                                <div class="lpa-right">
                                    <a href="#">
                                        <img src="https://www.bootdey.com/image/400x200/FFB6C1/000000" title="" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- End Latest Post -->
                    <div class="px-3 mt-5 d-flex flex-column gap-y-2" id="others">
                        <h3>Other Posts</h3>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Footer-->
    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-12 footer-about">
                    <a href="/" class="logo d-flex align-items-center">
                        <span>Farzad Nosrati</span>
                    </a>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                        valies.</p>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 md:ml-5 col-6 col-md-4 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">The Book</a></li>

                    </ul>
                </div>

                <div class="col-lg-4 col-6 col-md-4 footer-links">
                    <h4>Blogs</h4>
                    <ul id="footer-blogs">
                    </ul>
                </div>

            </div>
        </div>

    </footer><!-- End Footer -->
    <!-- Bootstrap core JS-->
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="js/index.js" type="module"></script>
</body>

</html>