<?php

include_once 'connection.php';

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Error Handlers
    // Check for Empty fields
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        header("Location: index.php?error=KINDLY INPUT ALL FIELDS");
        exit();
    } else {
        $sql = "INSERT INTO complaint (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
        if (mysqli_query($conn, $sql)) {
            header("Location: index.php?success=1");
            exit();
        } else {
            header("Location: index.php?error=" . mysqli_error($conn));
            exit();
        }
    }
}

?>
