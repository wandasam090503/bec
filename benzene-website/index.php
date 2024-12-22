<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benzene Engineering - Home</title>
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
    <!-- Header -->
    <?php include 'includes/header1.php'; ?>

    <!-- Go to Top Button -->
<button id="goTopBtn" class="go-top-btn" title="Go to top">
    <i class="fas fa-arrow-up"></i>
</button>

<!-- Hero Section -->
<section class="hero" style="position: relative; height: 100vh; background: url('assets/images/banner.jpg') no-repeat center center/cover;">
    <div class="overlay"></div>
    <div class="container text-center text-white hero-content" data-aos="fade-up">
        <h1 class="display-3 fw-bold">Benzene Engineering</h1>
        <p class="lead mb-4">Innovative Solutions for Oil, Gas, and Energy Industries</p>
        <a href="pages/contact.php" class="btn btn-primary btn-lg mt-3 animate-btn">Contact Us</a>
    </div>
</section>

<!-- About Preview Section -->
<section id="about-us" class="about-us-section">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left Side Content -->
      <div class="col-md-6" data-aos="fade-right">
        <h2 class="about-heading">Who We Are</h2>
        <p class="about-content">
          At Benzene Engineering, we are dedicated to delivering top-tier solutions 
          for industries worldwide. Our team of experts provides innovative and 
          cost-effective engineering services that meet the highest standards of quality.
        </p>
        <a href="pages/about.php" class="btn btn-outline-primary mt-3 animate-btn">Learn More</a>
      </div>
      <!-- Right Side Image -->
      <div class="col-md-6" data-aos="fade-left">
        <img src="assets/images/aboutus.jpg" alt="About Us Image" class="img-fluid rounded shadow">
      </div>
    </div>
  </div>
</section>




<!-- Services Section
<section class="services py-5 bg-light">
    <div class="container text-center">
        <h2 class="mb-4" data-aos="fade-up">Our Services</h2>
        <div class="row">
            <!-- Service 1 -->
            <!-- <div class="col-md-4 mb-4 service-card" data-aos="flip-left">
                <div class="card shadow-sm rounded hover-effect">
                    <img src="/assets/images/service1.jpg" alt="Service 1" class="img-fluid rounded-top">
                    <div class="p-4">
                        <h5 class="mt-3">Engineering Design</h5>
                        <p>We deliver innovative design solutions tailored to your needs.</p>
                    </div>
                </div>
            </div> -->
            <!-- Service 2 -->
            <!-- <div class="col-md-4 mb-4 service-card" data-aos="flip-left" data-aos-delay="100">
                <div class="card shadow-sm rounded hover-effect">
                    <img src="/assets/images/service2.jpg" alt="Service 2" class="img-fluid rounded-top">
                    <div class="p-4">
                        <h5 class="mt-3">Consultancy</h5>
                        <p>Expert consultancy to optimize operations and efficiency.</p>
                    </div>
                </div>
            </div> -->
            <!-- Service 3 -->
            <!-- <div class="col-md-4 mb-4 service-card" data-aos="flip-left" data-aos-delay="200">
                <div class="card shadow-sm rounded hover-effect">
                    <img src="/assets/images/service3.jpg" alt="Service 3" class="img-fluid rounded-top">
                    <div class="p-4">
                        <h5 class="mt-3">Project Management</h5>
                        <p>End-to-end project management for successful delivery.</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="pages/services.php" class="btn btn-outline-primary mt-3 animate-btn" data-aos="zoom-in">View All Services</a>
    </div>
</section> -->

<section id="services" class="services-section">
  <div class="container text-center">
    <h2 class="section-title" data-aos="fade-up">Our Services</h2>
    <p class="section-subtitle" data-aos="fade-up">
      We offer a wide range of engineering services designed to meet your needs.
    </p>
    <div class="row">
      <!-- Service 1 -->
      <div class="col-md-6 col-lg-3" data-aos="zoom-in">
        <div class="service-card">
          <i class="fas fa-cogs service-icon"></i>
          <h3>Process Engineering</h3>
          <p>Streamlined processes with advanced engineering solutions.</p>
        </div>
      </div>
      <!-- Service 2 -->
      <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
        <div class="service-card">
          <i class="fas fa-tools service-icon"></i>
          <h3>Mechanical Engineering</h3>
          <p>Innovative mechanical systems to optimize performance.</p>
        </div>
      </div>
      <!-- Service 3 -->
      <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
        <div class="service-card">
          <i class="fas fa-bolt service-icon"></i>
          <h3>Electrical Systems</h3>
          <p>Reliable electrical designs and implementation.</p>
        </div>
      </div>
      <!-- Service 4 -->
      <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
        <div class="service-card">
          <i class="fas fa-building service-icon"></i>
          <h3>Civil & Structural</h3>
          <p>Advanced civil and structural engineering solutions.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Projects Preview Section -->
<section class="projects py-5 bg-white text-center" data-aos="fade-left">
    <div class="container">
        <h2 class="mb-4">Recent Projects</h2>
        <p>Explore our latest completed projects that showcase our expertise.</p>
        <div class="row">
            <div class="col-md-6 mb-4" data-aos="zoom-in">
                <img src="assets/images/project1.jpg" alt="Project 1" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="100">
                <img src="assets/images/project2.jpg" alt="Project 2" class="img-fluid rounded shadow">
            </div>
        </div>
        <a href="pages/projects.php" class="btn btn-outline-primary mt-3 animate-btn" data-aos="fade-up">View All Projects</a>
    </div>
</section>

<!-- Call-to-Action Section -->
<section class="cta py-5 text-center text-white" style="background: #101820;" data-aos="zoom-in">
    <div class="container">
        <h2 class="fw-bold">Ready to Work With Us?</h2>
        <p class="lead">Let’s create something great together. Get in touch today!</p>
        <a href="pages/contact.php" class="btn btn-primary btn-lg mt-3 animate-btn">Contact Us</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
  AOS.init({
    duration: 1000, // Animation duration
    once: true,     // Animate only once
  });
</script>

<script>
// Get the button
let goTopBtn = document.getElementById("goTopBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    scrollFunction();
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        goTopBtn.style.display = "block";
    } else {
        goTopBtn.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
goTopBtn.onclick = function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
};
</script>






</body>


</html>
