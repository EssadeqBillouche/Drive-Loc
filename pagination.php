<?php

require_once './classes/Autoloader.php';
use classes\Autoloader;
Autoloader::AutoloaderFunction();
use classes\category;

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ROYAL CARS - Car Rental HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<!-- Topbar Start -->
<div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
    <div class="row">
        <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center">
                <a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</a>
                <span class="text-body">|</span>
                <a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i>info@example.com</a>
            </div>
        </div>
        <div class="col-md-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-body px-3" href="">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-body px-3" href="">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-body px-3" href="">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="text-body px-3" href="">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="text-body pl-3" href="">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0">
    <div class="position-relative px-lg-5" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="" class="navbar-brand">
                <h1 class="text-uppercase text-primary mb-1">Royal Cars</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Service</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Cars</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="CarDisplay.php" class="dropdown-item">Car Listing</a>
                            <a href="detail.html" class="dropdown-item">Car Detail</a>
                            <a href="booking.html" class="dropdown-item">Car Booking</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="team.html" class="dropdown-item">The Team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                    <?php
                    if (isset($_SESSION['name'])) {
                        echo '<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle d-flex align-items-center" data-toggle="dropdown">
        <div class="profile-avatar bg-primary rounded-circle d-flex align-items-center justify-content-center position-relative" 
             style="width: 40px; height: 40px;">
            <span class="text-white font-weight-bold">'.substr($_SESSION["name"], -1).'</span>
            <span class="status-badge"></span>
        </div>
        <span class="ml-2 d-none d-md-inline text-white">'.$_SESSION["name"].'</span>
    </a>
    <div class="dropdown-menu dropdown-menu-right profile-dropdown">
        <div class="px-4 py-3 bg-light border-bottom">
            <span class="d-block text-muted small">Signed in as</span>
            <span class="d-block font-weight-bold">'.$_SESSION["name"].'</span>
            <span class="badge badge-success mt-1">Premium Member</span>
        </div>
        <div class="p-2">
            <a class="dropdown-item d-flex align-items-center py-2" href="#">
                <i class="fas fa-user mr-2 text-primary"></i>
                <span>Profile</span>
            </a>
            <a class="dropdown-item d-flex align-items-center py-2" href="#">
                <i class="fas fa-cog mr-2 text-secondary"></i>
                <span>Settings</span>
            </a>
            <a class="dropdown-item d-flex align-items-center py-2" href="#">
                <i class="fas fa-car mr-2 text-info"></i>
                <span>My Bookings</span>
            </a>
        </div>
        <div class="dropdown-divider"></div>
        <div class="dropdown-divider"></div>
        <form action="logout.php" method="POST" style="display: inline;">
    <button type="submit" class="btn btn-danger btn-sm ml-3" name="Logoutbtn">
        <i class="fa fa-sign-out-alt"></i> Logojjjut
    </button>
</form>


    </div>
</div><button class="btn btn-danger btn-sm ml-3" href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</button>';
                    }else{
                        echo '<a href="login.php" class="nav-item nav-link">Login</a>
                        <a href="signup.php" class="nav-item nav-link"><span class="btn btn-primary py-md-1 px-md-3">Sign Up</span></a>';
                    }
                    ?>

                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->


<!-- Search Start -->
<div class=" container-fluid bg-white pt-3 px-lg-5">
    <div class="row mx-n2">
        <!-- Category Selection -->
        <div class="col-md-4 px-2">
            <select id="SelectedCategory" class="custom-select px-4 mb-3" style="height: 50px;">
                <option value = 'all' selected="all">Select Category</option>
                <?php
                $allCategory = category::displayAllCategories();
                    foreach ($allCategory as $category) {
                        echo '<option value="'.$category['Category_id'].'">'.$category['Category_name'].'</option>';
                    }
                ?>

            </select>
        </div>

        <!-- Search Input -->
        <div class="col-md-4 px-2">
            <input type="text" class="form-control px-4 mb-3" placeholder="Search..." style="height: 50px;">
        </div>

        <!-- Search Button -->
        <div class="col-md-4 px-2">
            <button class="btn btn-primary btn-block mb-3" type="submit" style="height: 50px;">Search</button>
        </div>
    </div>
</div>
<!-- Search End -->


<!-- Rent A Car Start -->
<div class="container-fluid py-1">
    <div class="container pt-5 pb-1">
        <div class="row" id ="containerCar" >
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="rent-item active mb-4">
                    <img class="img-fluid mb-4" src="img/car-rent-2.png" alt="">
                    <h4 class="text-uppercase mb-4">Mercedes Benz R3</h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>2015</span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>AUTO</span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>
                            <span>25K</span>
                        </div>
                    </div>
                    <a class="btn btn-primary px-3" href="">$99.00/Day</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="rent-item mb-4">
                    <img class="img-fluid mb-4" src="img/car-rent-3.png" alt="">
                    <h4 class="text-uppercase mb-4">Mercedes Benz R3</h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>2015</span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>AUTO</span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>
                            <span>25K</span>
                        </div>
                    </div>
                    <a class="btn btn-primary px-3" href="">$99.00/Day</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="rent-item mb-4">
                    <img class="img-fluid mb-4" src="img/car-rent-4.png" alt="">
                    <h4 class="text-uppercase mb-4">Mercedes Benz R3</h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>2015</span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>AUTO</span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>
                            <span>25K</span>
                        </div>
                    </div>
                    <a class="btn btn-primary px-3" href="">$99.00/Day</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="rent-item mb-4">
                    <img class="img-fluid mb-4" src="img/car-rent-5.png" alt="">
                    <h4 class="text-uppercase mb-4">Mercedes Benz R3</h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>2015</span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>AUTO</span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>
                            <span>25K</span>
                        </div>
                    </div>
                    <a class="btn btn-primary px-3" href="">$99.00/Day</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="rent-item mb-4">
                    <img class="img-fluid mb-4" src="img/car-rent-6.png" alt="">
                    <h4 class="text-uppercase mb-4">Mercedes Benz R3</h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>2015</span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>AUTO</span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>
                            <span>25K</span>
                        </div>
                    </div>
                    <a class="btn btn-primary px-3" href="">$99.00/Day</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Rent A Car End -->


<!-- Banner Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row mx-0">
            <div class="col-lg-6 px-0">
                <div class="px-5 bg-secondary d-flex align-items-center justify-content-between" style="height: 350px;">
                    <img class="img-fluid flex-shrink-0 ml-n5 w-50 mr-4" src="img/banner-left.png" alt="">
                    <div class="text-right">
                        <h3 class="text-uppercase text-light mb-3">Want to be driver?</h3>
                        <p class="mb-4">Lorem justo sit sit ipsum eos lorem kasd, kasd labore</p>
                        <a class="btn btn-primary py-2 px-4" href="">Start Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 px-0">
                <div class="px-5 bg-dark d-flex align-items-center justify-content-between" style="height: 350px;">
                    <div class="text-left">
                        <h3 class="text-uppercase text-light mb-3">Looking for a car?</h3>
                        <p class="mb-4">Lorem justo sit sit ipsum eos lorem kasd, kasd labore</p>
                        <a class="btn btn-primary py-2 px-4" href="">Start Now</a>
                    </div>
                    <img class="img-fluid flex-shrink-0 mr-n5 w-50 ml-4" src="img/banner-right.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->


<!-- Vendor Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="owl-carousel vendor-carousel">
            <div class="bg-light p-4">
                <img src="img/vendor-1.png" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="img/vendor-2.png" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="img/vendor-3.png" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="img/vendor-4.png" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="img/vendor-5.png" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="img/vendor-6.png" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="img/vendor-7.png" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="img/vendor-8.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->


<!-- Footer Start -->
<div class="container-fluid bg-secondary py-5 px-sm-3 px-md-5" style="margin-top: 90px;">
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-uppercase text-light mb-4">Get In Touch</h4>
            <p class="mb-2"><i class="fa fa-map-marker-alt text-white mr-3"></i>123 Street, New York, USA</p>
            <p class="mb-2"><i class="fa fa-phone-alt text-white mr-3"></i>+012 345 67890</p>
            <p><i class="fa fa-envelope text-white mr-3"></i>info@example.com</p>
            <h6 class="text-uppercase text-white py-2">Follow Us</h6>
            <div class="d-flex justify-content-start">
                <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-lg btn-dark btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-uppercase text-light mb-4">Usefull Links</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Private Policy</a>
                <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Term & Conditions</a>
                <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>New Member Registration</a>
                <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Affiliate Programme</a>
                <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Return & Refund</a>
                <a class="text-body" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Help & FQAs</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-uppercase text-light mb-4">Car Gallery</h4>
            <div class="row mx-n1">
                <div class="col-4 px-1 mb-2">
                    <a href=""><img class="w-100" src="img/gallery-1.jpg" alt=""></a>
                </div>
                <div class="col-4 px-1 mb-2">
                    <a href=""><img class="w-100" src="img/gallery-2.jpg" alt=""></a>
                </div>
                <div class="col-4 px-1 mb-2">
                    <a href=""><img class="w-100" src="img/gallery-3.jpg" alt=""></a>
                </div>
                <div class="col-4 px-1 mb-2">
                    <a href=""><img class="w-100" src="img/gallery-4.jpg" alt=""></a>
                </div>
                <div class="col-4 px-1 mb-2">
                    <a href=""><img class="w-100" src="img/gallery-5.jpg" alt=""></a>
                </div>
                <div class="col-4 px-1 mb-2">
                    <a href=""><img class="w-100" src="img/gallery-6.jpg" alt=""></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-uppercase text-light mb-4">Newsletter</h4>
            <p class="mb-4">Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et</p>
            <div class="w-100 mb-3">
                <div class="input-group">
                    <input type="text" class="form-control bg-dark border-dark" style="padding: 25px;" placeholder="Your Email">
                    <div class="input-group-append">
                        <button class="btn btn-primary text-uppercase px-3">Sign Up</button>
                    </div>
                </div>
            </div>
            <i>Lorem sit sed elitr sed kasd et</i>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark py-4 px-sm-3 px-md-5">
    <p class="mb-2 text-center text-body">&copy; <a href="#">Your Site Name</a>. All Rights Reserved.</p>

    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
    <p class="m-0 text-center text-body">Designed by <a href="https://htmlcodex.com">HTML Codex</a></p>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
<script src = "js/dataFetch.js"></script>
</body>

</html>

