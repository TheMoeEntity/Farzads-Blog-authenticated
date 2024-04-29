<?php
session_start(); // Start or resume a session
$isAdminLogged = false;
function isAdminLoggedIn() {
    return isset($_SESSION['admin']) && $_SESSION['admin'] === true;
}
$isAdminLogged = isAdminLoggedIn();
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
	<!-- Navigation-->
	<!-- scroll top button -->
	<div onclick="scrollToTop()" class="scrollTop" id="scrollBtn">
		<i class="fa-solid fa-angle-up"></i>
	</div>
    <!-- ===== modal starts ===== -->
    <div class="modal-background" id="modal-background">

        <div>
            <div class="closeTitle">
                <span onclick="closeModal()" class="">&times;</span>
            </div>
            <form id="contactForm" action="/contact.php" method="post">
                <div class="form-floating">
                    <input name="name" class="form-control" id="name" type="text" placeholder="Enter your name..." />
                    <label for="name">Name</label>

                </div>
                <div class="form-floating">
                    <input class="form-control" name="email" id="email" type="email" placeholder="Enter your email..." />
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" name="phone" id="phone" type="tel" placeholder="Enter your phone number..." />
                    <label for="phone">Phone Number</label>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" name="message" id="message" placeholder="Enter your message here..."
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
                <div class="g-recaptcha my-3" data-sitekey="6Lffn8opAAAAAMv9AEWbiuPA6UVRaDILxLTPO3II" data-callback="handleRecaptchaCallback"></div>
                <!-- Submit Button-->
                <button class="btn btn-primary text-uppercase" type="submit">Send</button>
            </form>
        </div>
    </div>
    <!-- modal ends -->
	<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
		<div class="container px-4 px-lg-5">
			<a class="navbar-brand" href="/">Farzad Nosrati</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				<i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ms-auto py-4 py-lg-0">
					<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/">Home</a></li>
					<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.php">About</a></li>
					<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="book.php">Book</a></li>
					<?php if (isAdminLoggedIn()): ?>
						<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/admin/">Dashboard</a></li>
            		<?php endif; ?>
					<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" onclick="message()">Contact</a></li>
						<?php if (!isAdminLoggedIn()): ?>
						<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/login/">Login</a></li>
            		<?php endif; ?>
				</ul>
			</div>
		</div>
	</nav>