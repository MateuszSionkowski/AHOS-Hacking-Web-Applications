<?php


// Get the JSON payload from the request body
$json = file_get_contents("php://input");

// Decode the JSON into an associative array
$data = json_decode($json, true);

// Check if decoding was successful and 'username' field exists
if ($data === null || !isset($data['name'])) {
    echo json_encode(["error" => "Invalid JSON or missing name field"]);
    exit;
}

// Extract the username field
$name = $data['name'];

// Switch based on the username field
switch ($name) {
    case "Thomas":
      $recipient = <<< XXXXXX
      {
        "recipient": "Jessica"
      }
      XXXXXX;
      break;
    case "Jessica":
      $recipient = <<< XXXXXX
      {
        "recipient": "Greg"
      }
      XXXXXX;
      break;
    case "Greg":
      $recipient = <<< XXXXXX
      {
        "recipient": "Andrew"
      }
      XXXXXX;
      break;
    case "Andrew":
      $recipient = <<< XXXXXX
      {
        "recipient": "Thomas"
      }
      XXXXXX;
      break;
    default:
      $recipient = <<< XXXXXX
      {
        "recipient": "ERROR"
      }
      XXXXXX;
      break;

}






echo($recipient);

?>