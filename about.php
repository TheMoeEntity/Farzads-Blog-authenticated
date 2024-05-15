<?php include('views/header.php') ?>

    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/background.jpg');height: 170px;">
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
                        With no formal religious education, he embarked on a self-guided exploration of spiritual
                        knowledge, teaching himself
                        Hebrew and diving into religious texts. This quest for understanding grew alongside his
                        professional career in
                        technology, where he founded several startups.
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
                            <form id="contactForm">
                                <div class="form-floating">
                                    <input class="form-control" id="name" type="text"
                                        placeholder="Enter your name..." />
                                    <label for="name">Name</label>

                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="email" type="email"
                                        placeholder="Enter your email..." />
                                    <label for="email">Email address</label>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="phone" type="tel"
                                        placeholder="Enter your phone number..." />
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
                </div>

            </div>

        </div>
    </main>
    <!-- Footer-->
    <!-- ======= Footer ======= -->
<?php include('views/footer.php') ?>