<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Contact Us | BD Organization</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="layoutDefault">
            <div id="layoutDefault_content">
                <main>
                    <!-- Navbar-->
                    <nav class="navbar navbar-marketing navbar-expand-lg bg-white navbar-light fixed-top">
                        <div class="container px-5">
                            <a class="navbar-brand text-primary" href="index.html">BD Organization</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i data-feather="menu"></i></button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto me-lg-5">
                                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                                    <li class="nav-item dropdown no-caret">
                                        <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            About Us
                                            <i class="fas fa-chevron-right dropdown-arrow"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="navbarDropdownDocs">
                                            <a class="dropdown-item py-3" href="about-us/mission-vision.php">
                                                Mission and Vision
                                            </a>
                                            <div class="dropdown-divider m-0"></div>
                                            <a class="dropdown-item py-3" href="about-us/staff.php">
                                                Staff
                                            </a>
                                        </div>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="program.php">Our Program</a></li>
                                    <li class="nav-item dropdown no-caret">
                                        <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            News & Media
                                            <i class="fas fa-chevron-right dropdown-arrow"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="navbarDropdownDocs">
                                            <a class="dropdown-item py-3" href="news-media/gallery.php">
                                                Gallery
                                            </a>
                                            <div class="dropdown-divider m-0"></div>
                                            <a class="dropdown-item py-3" href="news-media/news.php">
                                                Latest News
                                            </a>
                                        </div>
                                    </li>
                                    <li class="nav-item"><a class="nav-link active" href="contact.php">Contact Us</a></li>
                                    
                                <a class="btn fw-500 ms-lg-4 btn-primary" href="login.php">
                                    Login
                                    <i class="ms-2" data-feather="arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </nav>
                    <!-- Page Header-->
                    <header class="page-header-ui page-header-ui-dark bg-gradient-primary-to-secondary">
                        <div class="page-header-ui-content pt-10">
                            <div class="container px-5 text-center">
                                <div class="row gx-5 justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="alert-section"></div>
                                        <h1 class="page-header-ui-title mb-3">Contact us</h1>
                                        <p class="page-header-ui-text">Have questions? We're here to help!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="svg-border-rounded text-light">
                            <!-- Rounded SVG Border-->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
                        </div>
                    </header>
                    <section class="bg-light py-10">
                        <div class="container px-5">
                            <div class="row gx-5 justify-content-center">
                                <div class="col-lg-8 text-center">
                                    <h2>Can't find the answer you need?</h2>
                                    <p class="lead mb-5">Contact us and we'll get back to you as soon as possible with a solution to whatever issues you're having with BD Organization.</p>
                                </div>
                            </div>
                            <div class="row gx-5 align-items-center mb-10">
                                <div class="col-lg-6 text-center mb-5 mb-lg-0">
                                    <div class="section-preheading">Call Anytime</div>
                                    <a href="#!">+8801743695464</a>
                                </div>
                                <div class="col-lg-6 text-center">
                                    <div class="section-preheading">Email Us</div>
                                    <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=new">Emon@iub.edu.bd</a>
                                </div>
                            </div>
                            <form method="post" action="php/contact.php">
                                <div class="row gx-5 mb-4">
                                    <div class="col-md-6">
                                        <label class="text-dark mb-2" for="inputName">Full name</label>
                                        <input class="form-control py-4" id="inputName" type="text" placeholder="Full name" name="name"/>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="text-dark mb-2" for="inputEmail">Email</label>
                                        <input class="form-control py-4" id="inputEmail" type="email" placeholder="name@example.com" name="email"/>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="text-dark mb-2" for="inputMessage">Message</label>
                                    <textarea class="form-control py-3" id="inputMessage" type="text" placeholder="Enter your message..." rows="4" name="message"></textarea>
                                </div>
                                <div class="text-center"><button class="btn btn-primary mt-4" type="submit">Submit Request</button></div>
                            </form>
                        </div>
                        <div class="svg-border-rounded text-dark">
                            <!-- Rounded SVG Border-->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
                        </div>
                    </section>
                </main>
            </div>
            <div id="layoutDefault_footer">
                <footer class="footer pt-10 pb-5 mt-auto bg-dark footer-dark">
                    <div class="container px-5">
                        <div class="row gx-5">
                            <div class="col-lg-3">
                                <div class="footer-brand">Global BD</div>
                                <div class="mb-3">Think Different | Make Different</div>
                                <div class="icon-list-social mb-5">
                                    <a class="icon-list-social-link" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="icon-list-social-link" href=""><i class="fab fa-facebook"></i></a>
                                    <a class="icon-list-social-link" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="icon-list-social-link" href=""><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="row gx-5">
                                    
                                    <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                                        <div class="text-uppercase-expanded text-xs mb-4">Support</div>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><a href="#!">Career</a></li>
                                            <li class="mb-2"><a href="#!">Mental health Counseling</a></li>
                                            <li class="mb-2"><a href="#!">Monitoring</a></li>
                                            <li><a href="#!">Empowerment</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                                        <div class="text-uppercase-expanded text-xs mb-4">Quick Link</div>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><a href="index.html">Home</a></li>
                                            <li class="mb-2"><a href="about-us/mission-vision.html">Mission and Vision</a></li>
                                            <li class="mb-2"><a href="about-us/staff.html">Staff</a></li>
                                            <li class="mb-2"><a href="program.html">Our Program</a></li>
                                            <li class="mb-2"><a href="contact.html">Contact Us</a></li>
                                            
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="text-uppercase-expanded text-xs mb-4">Contact Details</div>
                                        
                                        <p>Plot 16, Block B<br>Monjurul Hasan Emon<br> Rampura , Dhaka , Bangladesh <br>Phone number: 01743695464</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-5" />
                        <div class="row gx-5 align-items-center">
                            <div class="col-md-6 small">Copyright &copy; BD Organization-2023</div>
                            <div class="col-md-6 text-md-end small">
                                <a href="#!">Privacy Policy</a>
                                &middot;
                                <a href="#!">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous" ></script>
        <script>
            const params = new Proxy(new URLSearchParams(window.location.search), {
                get: (searchParams, prop) => searchParams.get(prop),
            });

            if(params.success==1){
                $(".alert-section").append(`
                    <div class="alert alert-success alert-dismissible fade show mb-5" role="alert">
                        Message Sent Successfully.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                `);
            }else if(params.success==0){
                $(".alert-section").append(`
                    <div class="alert alert-danger alert-dismissible fade show mb-5" role="alert">
                        Failed to send message.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                `);
            }
        </script>


    </body>
</html>
