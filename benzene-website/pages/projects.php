<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benzene Engineering - Projects</title>
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <?php include '../includes/header.php'; ?>

<!-- Banner Section -->
<section class="banner text-white text-center d-flex align-items-center justify-content-center" style="height: 60vh; background: url('/assets/images/projects-banner.jpg') no-repeat center center/cover;">
    <div class="overlay"></div>
    <div class="container" data-aos="fade-down">
        <h1 class="display-4 fw-bold">Our Projects</h1>
        <p class="lead">Delivering Excellence Through Innovation and Precision</p>
    </div>
</section>

<!-- Projects Overview Section -->
<section class="projects-overview py-5 text-center bg-light">
    <div class="container">
        <h2 class="mb-4" data-aos="fade-up">Recent Projects</h2>
        <p class="lead mb-5" data-aos="fade-up" data-aos-delay="100">
            Explore our portfolio of successful engineering solutions across industries.
        </p>
        <div class="row g-4">
            <!-- Project 1 -->
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="card project-card shadow-sm hover-effect">
                    <img src="/assets/images/project1.jpg" alt="Project 1" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Oil Refinery Modernization</h5>
                        <p class="card-text">Delivered a state-of-the-art facility upgrade ensuring efficiency and sustainability.</p>
                    </div>
                </div>
            </div>
            <!-- Project 2 -->
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="card project-card shadow-sm hover-effect">
                    <img src="/assets/images/project2.jpg" alt="Project 2" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Petrochemical Plant Expansion</h5>
                        <p class="card-text">Expanded production capabilities to meet rising global demands.</p>
                    </div>
                </div>
            </div>
            <!-- Project 3 -->
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
                <div class="card project-card shadow-sm hover-effect">
                    <img src="/assets/images/project3.jpg" alt="Project 3" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Renewable Energy Plant</h5>
                        <p class="card-text">Developed sustainable energy solutions for future generations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Projects Section -->
<section class="featured-projects py-5 text-center text-white" style="background: #8AAAE5;">
    <div class="container" data-aos="fade-left">
        <h2 class="mb-4">Featured Projects</h2>
        <p class="lead mb-4">
            Our commitment to delivering cutting-edge solutions has set new benchmarks in the industry.
        </p>
        <div class="row">
            <!-- Featured Project 1 -->
            <div class="col-md-6 mb-4" data-aos="fade-right">
                <div class="card shadow-sm hover-effect">
                    <img src="/assets/images/featured1.jpg" alt="Featured Project 1" class="card-img-top">
                    <div class="card-body">
                        <h5>Water Treatment Plant</h5>
                        <p>Improved water processing and purification systems.</p>
                    </div>
                </div>
            </div>
            <!-- Featured Project 2 -->
            <div class="col-md-6 mb-4" data-aos="fade-left">
                <div class="card shadow-sm hover-effect">
                    <img src="/assets/images/featured2.jpg" alt="Featured Project 2" class="card-img-top">
                    <div class="card-body">
                        <h5>Gas Pipeline Infrastructure</h5>
                        <p>Optimized infrastructure for safe and efficient gas transportation.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="cta py-5 text-center bg-light">
    <div class="container" data-aos="fade-up">
        <h2 class="mb-4">Ready to Start Your Project?</h2>
        <p class="lead mb-4">Partner with us to bring your vision to reality with engineering precision and innovation.</p>
        <a href="contact.php" class="btn btn-dark animate-btn" data-aos="zoom-in">Contact Us</a>
    </div>
</section>

<?php include '../includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

