<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form data here

    // For demonstration purposes, let's assume the form data is received and processed
    $name = $_POST["name"];
    $email = $_POST["email"];
    $numIceCreams = isset($_POST["number"]) ? $_POST["number"] : "Not specified";
    $flavor = isset($_POST["flavor"]) ? $_POST["flavor"] : "No preference";
    
    // Construct a message
    $message = "Name: $name\nEmail: $email\nNumber of ice creams: $numIceCreams\nPreferred flavor: $flavor";

    // Display a success message
    echo "Form submitted successfully!<br>";
    echo "<pre>$message</pre>";
} else {
    // Redirect to the form page if accessed directly
    header("Location: index.html");
}
?>
