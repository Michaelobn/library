<?php
include 'connection.php'; 
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KADPOLY LIS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <?php include 'topbar.php'; ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php include 'navbar.php'; ?>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    
<section id="carousel_section">
<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/ict_pic.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <h1 class="display-2 text-light mb-5 animated slideInDown">The First Department in Kaduna Polytechnic to develop its own website</h1>
                                <a href="#about_section" class="btn btn-success py-sm-3 px-sm-5">Learn More</a>
                                <a href="#facilities_section" class="btn btn-light py-sm-3 px-sm-5 ms-3">Our Facilities</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/library_pic.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <h1 class="display-2 text-light mb-5 animated slideInDown">KNOWLEDGE ACQUISITION AND DISSEMINATION</h1>
                                <a href="about.php" class="btn btn-success py-sm-3 px-sm-5">Learn More</a>
                                <a href="facilities.php" class="btn btn-light py-sm-3 px-sm-5 ms-3">Our Facilities</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev" style="background-color: transparent;">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next" style="background-color: transparent;">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>

</button>

        
    </div>
</div>
</section>

    <!-- Carousel End -->


   

    <!-- About Start -->
    <section id="about_section">
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="img/HOD.jpg" alt="" style="object-fit: cover;">
                </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="text-green text-uppercase mb-2">About Us</h6>

                        <h1 class="display-6 mb-4">Department of LIS KADPOLY</h1>
                        <p>Welcome to the Department of Library and Information Science at Kaduna Polytechnic, where we are committed to shaping the future of information professionals through quality education, research, and practical experience.</p>
                        <p class="mb-4">Established with a vision to nurture individuals who will become leaders in the dynamic field of library and information science, our department has been a cornerstone of academic excellence within Kaduna Polytechnic and beyond.</p>
                        <p class="mb-4">Our Mission: We are dedicated to providing a comprehensive and innovative education that equips our students with the knowledge, skills, and ethical values necessary to excel in diverse information environments.</p>
                        <p class="mb-4">Our Vision: To be a premier center of excellence in library and information science education, research, and service, both nationally and internationally.</p>
                        <div class="row g-2 mb-4 pb-2">
                            <style>
                                .icon-green {
                                    color: green;
                                }
                            </style>
                            
                            <div class="col-sm-6">
                                <i class="fa fa-check icon-green me-2"></i>Fully Accredited
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check icon-green me-2"></i>Conducive Environment
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check icon-green me-2"></i>e-Facilities
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check icon-green me-2"></i>Competent Staff
                            </div>
                            
                        </div>
                        <div class="row g-4">
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- About End -->


    <!-- Facilities Start -->
    <section id="facilities_section">
   <div class="container-xxl courses my-6 py-6 pb-0">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-green text-uppercase mb-2">Our Facilities</h6>
                <h1 class="display-6 mb-4">Facilities that enhance learning</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-green text-white fs-5 py-1 px-4 mb-4"></div>
                            <h5 class="mb-3">Library</h5>
                            <p>Library with current and up-to-date educational materials</p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/library_pic.jpg" alt="">
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-green text-white fs-5 py-1 px-4 mb-4"></div>
                            <h5 class="mb-3">ICT</h5>
                            <p>ICT Center with good facilities</p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/ict_pic.jpg" alt="">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-green text-white fs-5 py-1 px-4 mb-4"></div>
                            <h5 class="mb-3">Classrooms</h5>
                            <p>Conducive Classrooms that foster learning</p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/courses-3.jpg" alt="">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 my-6 mb-0 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-green text-center p-5">
                        <h1 class="mb-4">Make An Enquiry</h1>
                        <form action="complainsystem.php" method="POST">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="name" name="name" placeholder="Name">
                                        <label for="gname">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control border-0" id="email" name="email" placeholder="Email">
                                        <label for="gmail">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="regno" name="phone" placeholder="Phone Number">
                                        <label for="cname">Phone No.</label>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0" placeholder="Leave a message here" id="message" name="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit" name="submit" style="background-color: green;">Submit</button>
                                </div>
                                <?php
                // Check if there are any errors and display them
                if (isset($_GET['error'])) {
                    $error = $_GET['error'];
                    echo "<div class='col-12 mt-3 text-danger'>$error</div>";
                }
                ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    
    <!-- Facilities End -->


    <!-- Features Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 style="color: green;">Why Choose Us!</h6>

                    <h1 class="display-6 mb-4">A great start to a career in Information Science </h1>
                    <p class="mb-5">We offer a great start to individuals who wish to pursue a career in any field related to infotmation science. Our courses are frequently updated to be up date with the latest and most relevant trends and practices in the field of Information Sciences. The following, are our strengths;</p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                             <h5 class="mb-0">Fully Acredited</h5>
                            </div>
                            
                            <span>Fully accredited by the National Board for Technical Education (NBTE).</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                              <h5 class="mb-0">Conducive Environment.</h5>
                            </div>
                            <span>A conducive environment for knowledge acquisition.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <h5 class="mb-0">Afordable Fee</h5>
                            </div>
                            <span>Best education with good educational facilities at an affordable Price.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <h5 class="mb-0">Emphasis on Digital Skills</h5>
                            </div>
                            <span>Our curricullum lays emhpases on digital skils acquisition. with courses like inroduction to programming, web design, database management, basic computer and operating systems etc.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="img/library_pic.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3" src="img/ict_pic.jpg" alt="" style="width: 200px; height: 200px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Contact Start -->
   <section id="contact_section">
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 450px;">
                    <div class="position-relative h-100">
                        <iframe class="position-relative w-100 h-100"
                        src=""
                        frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h6 class="text-primary text-uppercase mb-2">Contact Us</h6>
                    <h1 class="display-6 mb-4">Got a Question? Contact Us!</h1>
                    
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0 bg-light" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0 bg-light" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit" name="submit" style="background-color: green;">Send Message</button>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   </section>
    <!-- Contact End -->
    <!-- Team Start -->
    <section id="staff_section">
<div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px; color: green;">
                <h6 class="text-green text-uppercase mb-2">Meet The Staff</h6>

                <h1 class="display-6 mb-4">We Have a Range of Qualified Academic </h1>
            </div>
            
            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/pic1.jpg" alt="">
                            <div class="team-social text-center">
                               <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-facebook-f" style="color: green;"></i></a>
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-twitter" style="color: green;"></i></a>
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-instagram" style="color: green;"></i></a>
                        </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Mrs. Deborah Samuel Gado</h5>
                            <span>Head of Department</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/pic2.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-facebook-f" style="color: green;"></i></a>
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-twitter" style="color: green;"></i></a>
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-instagram" style="color: green;"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Dr. Isah Gulum</h5>
                            <span>Lecturer</span>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/pic3.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-facebook-f" style="color: green;"></i></a>
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-twitter" style="color: green;"></i></a>
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-instagram" style="color: green;"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Hajiya Ramatu</h5>
                            <span>Lecturer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/pic4.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-facebook-f" style="color: green;"></i></a>
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-twitter" style="color: green;"></i></a>
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-instagram" style="color: green;"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Mrs. Qristee Muyiwa</h5>
                            <span>Lecturer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
   
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px; color: green;">
                
            </div>
            
            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/pic5.jpg" alt="">
                            <div class="team-social text-center">
                               <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-facebook-f" style="color: green;"></i></a>
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-twitter" style="color: green;"></i></a>
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-instagram" style="color: green;"></i></a>
                        </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Mallam Dahiru A. Shuaib</h5>
                            <span>Lecturer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/pic9.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-facebook-f" style="color: green;"></i></a>
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-twitter" style="color: green;"></i></a>
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-instagram" style="color: green;"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Mr. Daniel Braimoh</h5>
                            <span>Lecturer</span>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/pic7.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-facebook-f" style="color: green;"></i></a>
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-twitter" style="color: green;"></i></a>
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-instagram" style="color: green;"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Mallam Umar Shehu</h5>
                            <span>Lecturer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/pic8.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-facebook-f" style="color: green;"></i></a>
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-twitter" style="color: green;"></i></a>
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-instagram" style="color: green;"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Mallam Ibrahim</h5>
                            <span>Lecturer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px; color: green;">
                
            </div>
            
            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/pic11.jpg" alt="">
                            <div class="team-social text-center">
                               <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-facebook-f" style="color: green;"></i></a>
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-twitter" style="color: green;"></i></a>
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-instagram" style="color: green;"></i></a>
                        </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Mrs. Halima</h5>
                            <span>Lecturer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-facebook-f" style="color: green;"></i></a>
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-twitter" style="color: green;"></i></a>
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-instagram" style="color: green;"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Full Name</h5>
                            <span>Lecturer</span>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-facebook-f" style="color: green;"></i></a>
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-twitter" style="color: green;"></i></a>
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-instagram" style="color: green;"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Full Name</h5>
                            <span>Lecturer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-facebook-f" style="color: green;"></i></a>
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-twitter" style="color: green;"></i></a>
                                <a class="btn btn-square btn-outline-green border-2 m-1" href=""><i class="fab fa-instagram" style="color: green;"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Full Name</h5>
                            <span>Lecturer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px; color: green;">
                
            </div>
       
        </div>
    </div>
</section>
    
    <!-- Team End -->


    <!-- Testimonial Start -->
    <?php include 'testimonial.php'; ?>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <?php include 'copyright.php'; ?>
    <!-- Copyright End -->


   


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>