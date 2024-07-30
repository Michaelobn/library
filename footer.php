<html>
<div  data-wow-delay="0.1s" style="background-color: green;">

<div class="container">
    <div class="row g-5">
        <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-4">Get In Touch</h4>
          
            <p class="mb-2" style="color: white;"><i class="fa fa-map-marker-alt me-3" style="color: white;"></i>KADPOLY Sabo Campus, Television, Kaduna State</p>
            <p class="mb-2" style="color: white;"><i class="fa fa-phone-alt me-3" style="color: white;"></i>+012 345 67890</p>
            <p class="mb-2" style="color: white;"><i class="fa fa-envelope me-3" style="color: white;"></i>info@example.com</p>
        </div>
        <div class="col-lg-3 col-md-6">
            <h4 class="text-light mb-4">Quick Links</h4>
            <a class="btn btn-link" style="color: white;" href="#about_section">About Us</a>
            <a class="btn btn-link" style="color: white;" href="#contact_section">Contact Us</a>
            <a class="btn btn-link" style="color: white;" href="#facilities_section">Our Facilities</a>
        </div>
        <div class="col-lg-3 col-md-6">
            <h4 class="text-light mb-4">Popular Links</h4>
            <a class="btn btn-link" style="color: white;" href="#about_section">About Us</a>
            <a class="btn btn-link" style="color: white;" href="#contact_section">Contact Us</a>
            <a class="btn btn-link" style="color: white;" href="#facilities_section">Our Facilities</a>
        </div>
        <div class="col-lg-3 col-md-6">
            <h4 class="text-light mb-4">Newsletter</h4>
           <!-- Anchor the form -->
<a id="form-anchor"></a>

<!-- Form with action pointing to the same page -->
<form action="footer.php" method="POST">
    <div class="input-group">
        <input type="text" class="form-control p-3 border-0" name="email" placeholder="Your Email Address">
        <button class=".btn.btn-primary" type="submit" name="submit" style="background-color: green; outline: none;">Sign Up</button>

    </div>
</form>

<!-- Display success/error messages here -->
<div id="message">
    <?php
    if (isset($_GET['success'])) {
        echo "<div class='col-12 mt-3 text-success' style='color: white; font-weight: bold;'>EMAIL SUBMITTED SUCCESSFULLY</div>";
    } elseif (isset($_GET['error'])) {
        $error = $_GET['error'];
        echo "<div class='col-12 mt-3 text-danger' style='color: white; font-weight: bold;'>KINDLY INPUT YOUR EMAIL</div>";
    }
    ?>
</div>



<?php

include_once 'connection.php';

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    
    // Error Handlers
    // Check for Empty fields
    if (empty($email)) {
        header("Location: index.php#footer?error=KINDLY INPUT YOUR EMAIL"); // Redirect to the footer section with an error message
        exit();
    } else {
        // Check if email already exists in the database
        $check_query = "SELECT * FROM newsletter WHERE email = '$email'";
        $result = mysqli_query($conn, $check_query);
        if (mysqli_num_rows($result) > 0) {
            header("Location: index.php#footer?error=EMAIL ALREADY REGISTERED"); // Redirect to the footer section with an error message
            exit();
        } else {
            // Insert the email into the database
            $sql = "INSERT INTO newsletter (email) VALUES ('$email')";
            if (mysqli_query($conn, $sql)) {
                header("Location: index.php#footer?success=EMAIL SUBMITTED"); // Redirect to the footer section with a success message
                exit();
            } else {
                header("Location: index.php#footer?error=" . mysqli_error($conn)); // Redirect to the footer section with an error message
                exit();
            }
        }
    }
}

?>


            <h6 class="text-white mt-4 mb-3">Follow Us</h6>
            <div class="d-flex pt-2">
                <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-youtube"></i></a>
                <a class="btn btn-square btn-outline-light me-0" href=""><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
</div>
