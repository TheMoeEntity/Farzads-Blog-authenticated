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
			<form id="contactForm" data-sb-form-api-token="API_TOKEN">

				<div class="form-floating">
					<input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
					<label for="name">Name</label>
					<div class="invalid-feedback" data-sb-feedback="name:required">A name is required.
					</div>
				</div>
				<div class="form-floating">
					<input class="form-control" id="email" type="email" placeholder="Enter your email..." data-sb-validations="required,email" />
					<label for="email">Email address</label>
					<div class="invalid-feedback" data-sb-feedback="email:required">An email is
						required.</div>
					<div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.
					</div>
				</div>
				<div class="form-floating">
					<input class="form-control" id="phone" type="tel" placeholder="Enter your phone number..." data-sb-validations="required" />
					<label for="phone">Phone Number</label>
					<div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is
						required.</div>
				</div>
				<div class="form-floating">
					<textarea class="form-control" id="message" placeholder="Enter your message here..." style="height: 12rem" data-sb-validations="required"></textarea>
					<label for="message">Message</label>
					<div class="invalid-feedback" data-sb-feedback="message:required">A message is
						required.</div>
				</div>
				<br />
				<!-- Submit success message-->
				<!---->
				<!-- This is what your users will see when the form-->
				<!-- has successfully submitted-->
				<div class="d-none" id="submitSuccessMessage">
					<div class="text-center mb-3">
						<div class="fw-bolder">Form submission successful!</div>
						To activate this form, sign up at
						<br />
						<a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
					</div>
				</div>

				<div class="d-none" id="submitErrorMessage">
					<div class="text-center text-danger mb-3">Error sending message!</div>
				</div>
				<!-- Submit Button-->
				<button class="btn btn-primary text-uppercase disabled" id="submitButton" type="submit">Send</button>
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
						<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="logout.php">Logout</a></li>
            		<?php endif; ?>
					<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" onclick="message()">Contact</a></li>
						<?php if (!isAdminLoggedIn()): ?>
						<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/login/">Login</a></li>
            		<?php endif; ?>
				</ul>
			</div>
		</div>
	</nav>