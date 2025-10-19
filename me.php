<?php
//HNG13 Backend task to create a simple Restful API with GET Method

header("Access-Control-Allow-Origin: *"); // Allows requests from any domain
header("Access-Control-Allow-Methods: GET"); // Allowable method   POST, PUT, DELETE
header("Access-Control-Allow-Headers: Content-Type, Authorization"); // Allowable headers

// Set content-type to JSON for the response
header('Content-Type: application/json');

//declare variables
$myHngEmail ='chriswax.ent@gmail.com';
$name = "Uzoigwe Onyeka";
$stack = "PHP/MYSQL";
$iso8601DateTime = gmdate('Y-m-d\TH:i:s\Z');
//$iso8601DateTime = (new DateTime('now', new DateTimeZone('UTC')))->format(DateTime::ATOM);
// Fetch the cat fact from the API
$apiUrl = "https://catfact.ninja/fact";
$catFactJson = file_get_contents($apiUrl);

// Decode the JSON to access the "fact"
$catFactData = json_decode($catFactJson, true);
$fact = $catFactData['fact'] ?? 'No fact available';


$response = [
    "status" => "success",
    "user" => [
        "email" => $myHngEmail,
        "name" => $name,
        "stack" => $stack
    ],
    "timestamp" => $iso8601DateTime,
    "fact" => $fact
];

// Return the response as JSON
echo json_encode($response);

?>

