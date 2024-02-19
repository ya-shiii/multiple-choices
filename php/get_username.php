<?php
// Start the session (if not already started)
session_start();

// Check if the user is logged in and has a username stored in the session
if (isset($_SESSION['username'])) {
    // If the username is stored in the session, retrieve it
    $username = $_SESSION['username'];

    // Return the username as a JSON response
    echo json_encode(['username' => $username]);
} else {
    // If the user is not logged in or the username is not set, return an error message
    http_response_code(401); // Unauthorized status code
    echo json_encode(['error' => 'User is not logged in.']);
}
?>
