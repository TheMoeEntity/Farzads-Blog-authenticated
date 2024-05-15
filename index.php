<?php include('views/header.php') ?>
   <!-- Page Header-->
    <header id="mastheader" class="masthead"
        style="background-image: url('assets/img/background.jpg'); background-attachment: scroll;">
        <div class="container position-relative px-2 px-lg-5">
            <span id="two" class="d-flex flex-column ">
                <button onclick="reserve()"
                    class="my-4 mx-auto border-2 rounded bg-transparent text-white border px-3 py-1 border-white">Reserve
                    copy
                </button>

                <span class="farz-name mx-auto w-100 text-center">
                    Farzad Nosrati
                </span>
            </span>
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <span id="one">
                            <h1 class="h2">
                                <span style="color: #D2C385;">
                                    ONE
                                </span>
                            </h1>
                            <span>Divine Singularity</span>
                        </span>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="book-grid justify-content-center lg-justify-content-between">
            <div class="col-lg-5 order-2 order-lg-1 py-5" data-aos="fade-up" data-aos-delay="200">
                <h3> In One Divine Singularity</h3>
                <p>
                    Farzad Nosrati tackles the challenge of bringing together the worlds of science and spirituality.
                    Nosrati, with his
                    roots in Iranian Jewish tradition and a professional background in computer engineering, offers a
                    unique perspective in
                    this book. He aims to show how science and religion can complement each other, creating a more
                    complete understanding of
                    the universe.
                </p>
                <p>
                    The book explores big ideas like the nature of time, human evolution, and the beginning of the
                    universe in a way that is
                    easy to grasp. Nosrati combines...
                </p>
                <a href="/book.php" class="btn btn-get-started">READ MORE</a>
            </div>
            <div class="order-1 order-lg-2">
                <img src="assets/img/book_cover.jpg" width="100%" height="auto" alt="" class="stack-front">
            </div>
        </div>

    </div>
    <section class="bg-light" id="author-section">
        <div class="container">
            <div class="row d-flex justify-content-center no-gutters">
                <div class="col-md-6 col-lg-6 d-flex">
                    <div class="img-about img d-flex align-items-center justify-content-md-end">
                        <div class="overlay"></div>
                        <div class="col-12 col-md-10 col-lg-9 col-xl-8 h-auto">
                            <img class="img d-flex align-self-stretch align-items-center" width="100%" height="auto"
                                style="object-fit: contain;" src="/assets/img/profile.png" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 d-flex">
                    <div class="py-md-5 w-100  px-md-5">
                        <div class="py-md-5">
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate pt-5">
                                    <span class="subheading"> About The Author</span>
                                    <h2 class="mb-4">Farzad Nosrati</h2>
                                    <p class="">
                                        Farzad Nosrati is an engineer, entrepreneur, and thinker deeply rooted in his
                                        Jewish heritage.
                                        Raised in a traditional
                                        Jewish family in Iran, Nosrati relocated to the United States for education amid
                                        rising
                                        antisemitism in his birth
                                        country. After a brief stint at Kansas University, he moved to Los Angeles,
                                        earning a BS in
                                        Computer Engineering, and
                                        subsequently joining Unisys Corporation, contributing significantly to mainframe
                                        computer
                                        development.
                                    </p>
                                    <a href="/about.php" class="border-0 bg-transparent bold px-2 py-2 underlined">Read
                                        more
                                        &rarr;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section - Blog Page -->
    <section id="blog" class="blog">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 posts-list d-flex justify-content-center justify-content-md-start" id="blogList">

            </div><!-- End blog posts list -->

        </div>

    </section><!-- End Blog Section -->
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
                        <li><a href="/">Home</a></li>
                        <li><a href="/about.php">About us</a></li>
                        <li><a href="/book.php">The Book</a></li>
                        <li><a href="/blog/">Blog</a></li>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="js/index.js" type="module"></script>
    <script src="js/form.js" type="module"></script>
</body>

</html>