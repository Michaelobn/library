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


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">About</li>
                    <li class="breadcrumb-item"><a class="text-white" href="facilities.php">Facilities</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="contact.php">Contact</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <section id="about_section">
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="img/about-1.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="img/about-2.jpg" alt="" style="width: 200px; height: 200px;">
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


    <!-- Team Start -->
    <?php include 'team.php'; ?>
    <!-- Team End -->


    <!-- Footer Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <?php include 'copyright.php'; ?>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" ><i class="bi bi-arrow-up"></i></a>


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