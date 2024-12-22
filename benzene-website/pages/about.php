<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benzene Engineering - About</title>
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <?php include '../includes/header.php'; ?>

<!-- Banner Section -->
<section class="banner text-white text-center d-flex align-items-center justify-content-center" style="height: 60vh; background: url('/assets/images/about-banner.jpg') no-repeat center center/cover;">
    <div class="overlay"></div>
    <div class="container" data-aos="fade-down">
        <h1 class="display-4 fw-bold">About Us</h1>
        <p class="lead">Innovating Engineering Solutions Across Industries</p>
    </div>
</section>

<!-- Who We Are Section -->
<section class="who-we-are py-5 bg-light">
    <div class="container text-center" data-aos="fade-up">
        <h2 class="mb-4">Who We Are</h2>
        <p class="lead">
            Benzene Engineering is a premier engineering consultancy dedicated to delivering top-tier solutions for the oil, gas, petrochemical, energy, and water industries. With a focus on innovation and quality, we strive to meet the evolving needs of our clients.
        </p>
        <img src="/assets/images/team.jpg" alt="Team" class="img-fluid rounded shadow mt-4" data-aos="zoom-in">
    </div>
</section>

<!-- Mission Section -->
<section class="mission py-5 text-center" style="background: #101820; color: white;">
    <div class="container" data-aos="fade-right">
        <h2 class="mb-4">Our Mission</h2>
        <p class="lead mb-4">
            Our mission is to provide innovative and sustainable engineering solutions that exceed client expectations while ensuring environmental responsibility.
        </p>
        <a href="contact.php" class="btn btn-primary animate-btn" data-aos="zoom-in">Contact Us</a>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose-us py-5">
    <div class="container text-center">
        <h2 class="mb-4" data-aos="fade-up">Why Choose Us?</h2>
        <div class="row">
            <!-- Point 1 -->
            <div class="col-md-4 mb-4" data-aos="flip-left">
                <div class="card hover-effect shadow-sm p-4">
                    <i class="fas fa-cogs fa-3x mb-3"></i>
                    <h5>Expert Engineers</h5>
                    <p>Highly skilled professionals with years of experience.</p>
                </div>
            </div>
            <!-- Point 2 -->
            <div class="col-md-4 mb-4" data-aos="flip-left" data-aos-delay="100">
                <div class="card hover-effect shadow-sm p-4">
                    <i class="fas fa-chart-line fa-3x mb-3"></i>
                    <h5>Proven Results</h5>
                    <p>Delivering measurable success and efficiency.</p>
                </div>
            </div>
            <!-- Point 3 -->
            <div class="col-md-4 mb-4" data-aos="flip-left" data-aos-delay="200">
                <div class="card hover-effect shadow-sm p-4">
                    <i class="fas fa-globe fa-3x mb-3"></i>
                    <h5>Global Reach</h5>
                    <p>Expanding operations across industries worldwide.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision Section -->
<section class="vision py-5 text-center text-white" style="background: #8AAAE5;" data-aos="fade-left">
    <div class="container">
        <h2 class="mb-4">Our Vision</h2>
        <p class="lead">
            To become a global leader in engineering solutions, setting standards for quality and innovation.
        </p>
    </div>
</section>

<?php include '../includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
