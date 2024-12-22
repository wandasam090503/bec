<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benzene Engineering - Services</title>
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <?php include '../includes/header.php'; ?>

<!-- Banner Section -->
<section class="banner text-white text-center d-flex align-items-center justify-content-center" style="height: 60vh; background: url('/assets/images/services-banner.jpg') no-repeat center center/cover;">
    <div class="overlay"></div>
    <div class="container" data-aos="fade-down">
        <h1 class="display-4 fw-bold">Our Services</h1>
        <p class="lead">Innovative Engineering Solutions for Modern Industries</p>
    </div>
</section>

<!-- Services Overview Section -->
<section class="services-overview py-5 text-center bg-light">
    <div class="container">
        <h2 class="mb-4" data-aos="fade-up">What We Offer</h2>
        <p class="lead mb-5" data-aos="fade-up" data-aos-delay="100">
            We provide high-quality engineering and consultancy services tailored to meet the unique demands of oil, gas, petrochemical, energy, and water industries.
        </p>
        <div class="row">
            <!-- Service 1 -->
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card hover-effect shadow-sm p-4">
                    <img src="/assets/images/service1.jpg" alt="Service 1" class="img-fluid rounded mb-3">
                    <h5>Engineering Consultancy</h5>
                    <p>Expert advice and solutions to optimize performance and efficiency.</p>
                </div>
            </div>
            <!-- Service 2 -->
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card hover-effect shadow-sm p-4">
                    <img src="/assets/images/service2.jpg" alt="Service 2" class="img-fluid rounded mb-3">
                    <h5>Project Management</h5>
                    <p>Seamless execution of projects from planning to completion.</p>
                </div>
            </div>
            <!-- Service 3 -->
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card hover-effect shadow-sm p-4">
                    <img src="/assets/images/service3.jpg" alt="Service 3" class="img-fluid rounded mb-3">
                    <h5>Design Solutions</h5>
                    <p>Innovative designs tailored to meet client requirements.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Our Services Section -->
<section class="why-services py-5 text-white text-center" style="background: #8AAAE5;">
    <div class="container" data-aos="fade-left">
        <h2 class="mb-4">Why Choose Our Services?</h2>
        <p class="lead mb-4">
            With years of expertise, we deliver reliable, cost-effective, and cutting-edge solutions to drive your business forward.
        </p>
        <a href="contact.php" class="btn btn-dark animate-btn" data-aos="zoom-in">Get in Touch</a>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials py-5 text-center bg-light">
    <div class="container">
        <h2 class="mb-4" data-aos="fade-up">What Our Clients Say</h2>
        <div class="row">
            <!-- Testimonial 1 -->
            <div class="col-md-4 mb-4" data-aos="flip-left">
                <div class="card hover-effect shadow-sm p-4">
                    <i class="fas fa-quote-left fa-2x mb-3 text-primary"></i>
                    <p class="text-muted">Benzene Engineering transformed our projects with innovative solutions.</p>
                    <h6 class="mt-3">- John Doe</h6>
                </div>
            </div>
            <!-- Testimonial 2 -->
            <div class="col-md-4 mb-4" data-aos="flip-left" data-aos-delay="100">
                <div class="card hover-effect shadow-sm p-4">
                    <i class="fas fa-quote-left fa-2x mb-3 text-primary"></i>
                    <p class="text-muted">Exceptional service and attention to detail from start to finish.</p>
                    <h6 class="mt-3">- Jane Smith</h6>
                </div>
            </div>
            <!-- Testimonial 3 -->
            <div class="col-md-4 mb-4" data-aos="flip-left" data-aos-delay="200">
                <div class="card hover-effect shadow-sm p-4">
                    <i class="fas fa-quote-left fa-2x mb-3 text-primary"></i>
                    <p class="text-muted">Their expertise helped us achieve remarkable results.</p>
                    <h6 class="mt-3">- Michael Lee</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>