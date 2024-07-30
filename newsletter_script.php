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
