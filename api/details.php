<?php
header("Content-Type: application/json"); // Set response content type to JSON
header("Access-Control-Allow-Origin: *"); // Handle CORS

$github_url = 'https://github.com/dev-tonia/hng-12-task';
$email = 'ogunwatonia01@gmail.com';

// Get current datetime in ISO 8601 format (UTC)
$current_datetime = gmdate('Y-m-d\TH:i:s\Z');


// Set the status code to 404
http_response_code(200);


// Prepare the response array
$response = [
    "email" => $email,
    "current_datetime" => $current_datetime,
    "github_url" => $github_url
];

// Return JSON response
echo json_encode($response, JSON_PRETTY_PRINT);
