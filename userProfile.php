<?php
session_start();
require_once 'classes/Autoloader.php';
use classes\Autoloader;
Autoloader::AutoloaderFunction();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <!-- Libraries -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --primary: #F77D0A;
            --secondary: #2B2E4A;
            --light: #F4F5F8;
            --dark: #1C1E32;
        }

        h1,
        h2,
        .font-weight-bold {
            font-weight: 700 !important;
        }

        h3,
        h4,
        .font-weight-semi-bold {
            font-weight: 600 !important;
        }

        h5,
        h6,
        .font-weight-medium {
            font-weight: 500 !important;
        }

        .page-header {
            height: 400px;
            margin-bottom: 90px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: linear-gradient(rgba(28, 30, 50, .9), rgba(28, 30, 50, .9)), url(../img/bg-banner.jpg);
            background-attachment: fixed;
        }

        .service-item {
            background: var(--light);
        }

        /* Custom Profile Styles */
        .profile-menu a {
            padding: 10px 15px;
            transition: all 0.3s;
            border-radius: 5px;
            display: block;
            color: var(--dark);
            text-decoration: none;
        }

        .profile-menu a:hover,
        .profile-menu a.active {
            background: var(--primary);
            color: white !important;
            transform: translateX(10px);
        }

        .profile-menu a i {
            width: 25px;
        }

        .table th {
            background: var(--secondary);
            color: white;
            font-weight: 500;
        }

        .badge {
            padding: 8px 15px;
            border-radius: 5px;
        }

        .badge.bg-success {
            background-color: #28a745 !important;
        }

        .badge.bg-secondary {
            background-color: var(--secondary) !important;
        }

        .badge.bg-primary {
            background-color: var(--primary) !important;
        }

        .form-control {
            padding: 12px 15px;
            border-radius: 5px;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: var(--primary);
        }

        .bg-light {
            background-color: var(--light) !important;
        }

        /* Button Styles */
        .btn {
            transition: .3s;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
        }

        .btn-primary:hover {
            background-color: #e06c00;
            border-color: #e06c00;
        }

        /* Responsive Styles */
        @media (max-width: 991.98px) {
            .page-header {
                height: 300px;
                margin-bottom: 60px;
            }
        }

        @media (max-width: 576px) {
            .profile-menu a {
                padding: 8px 12px;
            }
        }
    </style>
</head>
<body>
<!-- Page Header Start -->
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
                            <a href="car.html" class="dropdown-item">Car Listing</a>
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
            <span class="text-white font-weight-bold">'.substr($_SESSION["name"], 3).'</span>
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
            <a class="dropdown-item d-flex align-items-center py-2" href="#">
                <i class="fas fa-heart mr-2 text-danger"></i>
                <span>Favorites</span>
            </a>
        </div>
        <div class="dropdown-divider"></div>
        <div class="p-2">
            <a class="dropdown-item d-flex align-items-center py-2" href="#">
                <i class="fas fa-question-circle mr-2 text-muted"></i>
                <span>Help Center</span>
            </a>
        </div>
        <div class="dropdown-divider"></div>
        <div class="p-2">
            <a class="dropdown-item d-flex align-items-center py-2 text-danger" href="logout.php">
                <i class="fas fa-sign-out-alt mr-2"></i>
                <span>Sign out</span>
            </a>
        </div>
    </div>
</div>';
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

<!-- Page Header End -->

<!-- Profile Section Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <!-- Profile Sidebar -->
            <div class="col-lg-3 mb-5">
                <div class="service-item p-4 text-center">
                    <div class="mb-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle mb-3" style="width: 100px; height: 100px;">
                            <h2 class="text-white font-weight-bold m-0">JD</h2>
                        </div>
                        <h4 class="text-uppercase mb-3">John Doe</h4>
                        <span class="badge bg-primary text-white px-3 py-2 mb-3">Premium Member</span>
                    </div>
                    <div class="profile-menu d-flex flex-column">
                        <a class="mb-2 active" href="#"><i class="fas fa-user"></i> Profile</a>
                        <a class="mb-2" href="#"><i class="fas fa-car"></i> My Bookings</a>
                        <a class="mb-2" href="#"><i class="fas fa-heart"></i> Favorites</a>
                        <a class="mb-2" href="#"><i class="fas fa-cog"></i> Settings</a>
                        <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </div>
                </div>
            </div>

            <!-- Profile Content -->
            <div class="col-lg-9">
                <div class="service-item p-4">
                    <h4 class="text-uppercase mb-4">Personal Information</h4>
                    <div class="row mb-4">
                        <div class="col-md-6 mb-3">
                            <label class="text-dark">First Name</label>
                            <input type="text" class="form-control bg-light border-0" value="John" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="text-dark">Last Name</label>
                            <input type="text" class="form-control bg-light border-0" value="Doe" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="text-dark">Email</label>
                            <input type="email" class="form-control bg-light border-0" value="john.doe@example.com" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="text-dark">Phone</label>
                            <input type="tel" class="form-control bg-light border-0" value="+1 234 567 8900" readonly>
                        </div>
                    </div>

                    <div class="text-right mb-4">
                        <button class="btn btn-primary px-4">Edit Profile</button>
                    </div>

                    <h4 class="text-uppercase mb-4">Recent Bookings</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Car</th>
                                <th>Booking Date</th>
                                <th>Return Date</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Mercedes Benz</td>
                                <td>01/01/2025</td>
                                <td>03/01/2025</td>
                                <td><span class="badge bg-success text-white">Active</span></td>
                            </tr>
                            <tr>
                                <td>BMW X5</td>
                                <td>15/12/2024</td>
                                <td>20/12/2024</td>
                                <td><span class="badge bg-secondary text-white">Completed</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <h4 class="text-uppercase mb-4">Membership Details</h4>
                    <div class="bg-light p-4">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <h6 class="text-dark">Member Since</h6>
                                <p class="mb-0">January 2024</p>
                            </div>
                            <div class="col-md-4 mb-3">
                                <h6 class="text-dark">Membership Type</h6>
                                <p class="mb-0 text-primary">Premium</p>
                            </div>
                            <div class="col-md-4 mb-3">
                                <h6 class="text-dark">Loyalty Points</h6>
                                <p class="mb-0">2,500 pts</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Profile Section End -->

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>