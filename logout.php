<?php
// Start session to access session variables
session_start();

// Destroy session data
session_unset();
session_destroy();

// Optionally, clear any cookies related to session
if (isset($_COOKIE['PHPSESSID'])) {
    setcookie('PHPSESSID', '', time() - 3600, '/'); // Clears the session cookie
}

// Feedback page for the user
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" href="css/style.css">

    </head>
<body>
    <main>
        <h1>Logout Successful</h1>
        <p>Thank you for visiting. You have been logged out.</p>
        <p>Redirecting to the homepage in 3 seconds...</p>
        <a href="index.php" class="button">Go to Homepage</a>
    </main>
    <script>
        // Redirect to the homepage after 3 seconds
        setTimeout(() => {
            window.location.href = 'index.php';
        }, 3000);
    </script>
</body>
</html>

