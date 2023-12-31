<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Gallery |  BD Organization</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <link rel="stylesheet"href="../css/custom_style.css"type="text/css"/>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico" />
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
                            <a class="navbar-brand text-primary" href="../index.html">BD Organization</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i data-feather="menu"></i></button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto me-lg-5">
                                    <li class="nav-item"><a class="nav-link" href="../index.html">Home</a></li>
                                    <li class="nav-item dropdown no-caret">
                                        <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            About Us
                                            <i class="fas fa-chevron-right dropdown-arrow"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="navbarDropdownDocs">
                                            <a class="dropdown-item py-3" href="../about-us/mission-vision.php">
                                                Mission and Vision
                                            </a>
                                            <div class="dropdown-divider m-0"></div>
                                            <a class="dropdown-item py-3" href="../about-us/staff.php">
                                                Staff
                                            </a>
                                        </div>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="../program.php">Our Program</a></li>
                                    <li class="nav-item dropdown no-caret">
                                        <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            News & Media
                                            <i class="fas fa-chevron-right dropdown-arrow"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="navbarDropdownDocs">
                                            <a class="dropdown-item py-3" href="gallery.php">
                                                Gallery
                                            </a>
                                            <div class="dropdown-divider m-0"></div>
                                            <a class="dropdown-item py-3" href="news.php">
                                                Latest News
                                            </a>
                                        </div>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="../contact.php">Contact Us</a></li>
                                   
                                </ul>
                                <a class="btn fw-500 ms-lg-4 btn-primary" href="../login.php">
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
                                        <h1 class="page-header-ui-title mb-3">Gallery</h1>
                                        <p class="page-header-ui-text">BD Organization  connects the young generation with opportunities to transform their lives.</p>
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
                                <div class="col-lg-6">
                                    <div class="text-center">
                                        <div class="text-xs text-uppercase-expanded text-primary mb-2">DO YOU KNOW?</div>
                                        <h2 class="mb-5"> "The human brain can generate about 23 watts of power which  is enough to power a lightbulb"</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row gx-5">

                                <?php
                                // Include the database configuration file
                                include_once '../php/conn.php';

                                // Get images from the database
                                $query = $mysqli->query("SELECT * FROM gallery ORDER BY id DESC");

                                if($query->num_rows > 0){
                                while($row = $query->fetch_assoc()){
                                $imageURL = '../images/'.$row["image"];
                                ?>

                                <div id="singleBlock"class="col-md-3">
                                    <div id="innerBlock">
                                     
                                     <img src="<?php echo $imageURL; ?>"/>
                                    </div> 
                                </div>

                                <?php }
                                }else{ ?>
                                    <p>No image(s) found...</p>
                                <?php } ?>                              
                
                            </div>
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
                                        
                                        <p>Plot 16, Block B<br>Monjurul Hasan Emon <br> Rampura , Dhaka , Bangladesh <br>Phone number: 01743695464</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-5" />
                        <div class="row gx-5 align-items-center">
                            <div class="col-md-6 small">Copyright &copy; Global BD-2023</div>
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
        <script src="../js/scripts.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
                disable: 'mobile',
                duration: 600,
                once: true,
            });
        </script>
    </body>
</html>
