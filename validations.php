<?php
// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the email and password from the request body
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Define the regular expressions for email and password validation
    $emailRegex = '/^[^@\s]+@[^@\s]+\.[^@\s]+$/';
    $passwordRegex = '/^(?=.*[!@#$%^&*(),.?":{}|<>])(?=.*[A-Z])(?=.*\d)(?=.*[a-z]).{8,}$/';

    // Validate the email and password
    if (preg_match($emailRegex, $email) && preg_match($passwordRegex, $password)) {
        // If they are valid, return a success response
        $response = array('valid' => true);
    } else {
        // If they are invalid, return an error response
        $response = array('valid' => false);
    }

    // Return the response as JSON
    header('Content-Type: application/json');
    echo json_encode($response);
}

?>
