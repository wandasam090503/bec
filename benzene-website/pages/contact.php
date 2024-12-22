<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benzene Engineering - Contact</title>
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <?php include '../includes/header.php'; ?>

<section id="contact" class="contact-section">
    <!-- Banner -->
    <div class="banner">
        <h1>Contact Us</h1>
        <p>Let's work together to turn your vision into reality!</p>
    </div>

    <!-- Contact Form -->
    <div class="contact-container">
        <div class="contact-form">
            <h2>Let’s Talk About Your Project</h2>
            <p>Contact us today to see how we can bring your ideas to life.</p>
            <form action="send_mail.php" method="POST">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="text" name="subject" placeholder="Subject" required>
                </div>
                <textarea name="message" placeholder="Message" rows="5" required></textarea>
                <button type="submit" class="btn-submit">Send Message</button>
            </form>
        </div>

        <!-- Contact Details -->
        <div class="contact-details">
            <div class="contact-card" data-aos="fade-up">
                <h3>Find Us</h3>
                <h4>India And Middle East</h4>
                <p><i class="fas fa-phone-alt"></i> +(91) 623 805 4709</p>
                <p><i class="fas fa-envelope"></i> jo.jovilla@benzeneengineering.com</p>
            </div>
            <div class="contact-card" data-aos="fade-up" data-aos-delay="200">
                <h3>Find Us</h3>
                <h4>In Canada</h4>
                <p><i class="fas fa-phone-alt"></i> +1 416 230 6569</p>
                <p><i class="fas fa-envelope"></i> nikhil.jovilla@benzeneengineering.com</p>
            </div>
        </div>
    </div>
</section>
<?php include '../includes/footer.php'; ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
