<?php
// Start the session
session_start();

// Check if there is a session username
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    // Check if the user is an admin
    if ($username === 'admin') {
        // Redirect to the admin dashboard
        header('Location: admin'); // Replace 'admin.php' with your actual admin page
        exit();
    }
} else {
}
?>