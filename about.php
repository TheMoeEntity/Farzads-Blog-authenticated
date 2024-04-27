<?php include('views/header.php') ?>

    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/book_cover.jpg');height: 170px;">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>About Me</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>
                        Farzad Nosrati is an engineer, entrepreneur, and thinker deeply rooted in his Jewish heritage.
                        Raised in a traditional
                        Jewish family in Iran, Nosrati relocated to the United States for education amid rising
                        antisemitism in his birth
                        country. After a brief stint at Kansas University, he moved to Los Angeles, earning a BS in
                        Computer Engineering, and
                        subsequently joining Unisys Corporation, contributing significantly to mainframe computer
                        development.
                    </p>
                    <p>
                        Nosrati's journey into the realms of religion and science began during his youth. A pivotal
                        experience at a kibbutz in
                        Israel sparked his lifelong fascination with the universe's mysteries. With no formal religious
                        education, he embarked
                        on a self-guided exploration of spiritual knowledge, teaching himself Hebrew and diving into
                        religious texts. This quest
                        for understanding grew alongside his professional career in technology, where he founded several
                        startups, including one
                        in medical technology, and patented innovations in the field.
                    </p>
                    <p>
                        His unique perspective combines rigorous scientific inquiry with a deep appreciation for
                        religious tradition. Nosrati
                        has dedicated years to reconciling the often-perceived dichotomy between science and religion,
                        developing a unified
                        hypothesis that harmonizes these domains. He believes in humanity's crucial role in the
                        universe's evolution, advocating
                        for a moral framework informed by both scientific advancement and religious wisdom.
                    </p>
                    <h3 class="text-center">

                        <button class="msg" onclick="message()">
                            <a>Send a message to the author</a>
                        </button>
                    </h3>

                    <!-- ===== modal starts ===== -->
                    <div class="modal-background" id="modal-background">

                        <div>
                            <div class="closeTitle">
                                <span onclick="closeModal()" class="">&times;</span>
                            </div>
                            <form id="contactForm" data-sb-form-api-token="API_TOKEN">

                                <div class="form-floating">
                                    <input class="form-control" id="name" type="text" placeholder="Enter your name..."
                                        data-sb-validations="required" />
                                    <label for="name">Name</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.
                                    </div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="email" type="email"
                                        placeholder="Enter your email..." data-sb-validations="required,email" />
                                    <label for="email">Email address</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">An email is
                                        required.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.
                                    </div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="phone" type="tel"
                                        placeholder="Enter your phone number..." data-sb-validations="required" />
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
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Form submission successful!</div>
                                        To activate this form, sign up at
                                        <br />
                                        <a
                                            href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>

                                <div class="d-none" id="submitErrorMessage">
                                    <div class="text-center text-danger mb-3">Error sending message!</div>
                                </div>
                                <!-- Submit Button-->
                                <button class="btn btn-primary text-uppercase disabled" id="submitButton"
                                    type="submit">Send</button>
                            </form>
                        </div>
                    </div>
                    <!-- modal ends -->
                </div>

            </div>

        </div>
    </main>
    <!-- Footer-->
    <!-- ======= Footer ======= -->
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

                <!-- <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>A108 Adam Street</p>
                        <p>New York, NY 535022</p>
                        <p>United States</p>
                        <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                        <p><strong>Email:</strong> <span>info@example.com</span></p>
                    </div> -->

            </div>
        </div>

    </footer><!-- End Footer -->
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>

    </script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="js/index.js" type="module"></script>
</body>

</html>