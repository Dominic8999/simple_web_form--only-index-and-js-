<?php
$firstName = $_POST['FirstName'];
$EatenIceCream = $_POST['EatenIceCream'];
$email = $_POST['Email'];
$flavour_rec = $_POST['flavour_rec'];
$ice_cream = $_POST['ice_cream'];
$yourflavour = $_POST['your_flavour']; // Corrected the name attribute
$opinion = $_POST['opinion'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error); // Corrected the concatenation operator
} else {
    $stmt = $conn->prepare("INSERT INTO registration (firstName, EatenIceCream, flavour_rec, email, ice_cream, yourflavour, opinion) VALUES (?, ?, ?, ?, ?, ?, ?)"); // Corrected the prepared statement query
    $stmt->bind_param("sisssss", $firstName, $EatenIceCream, $flavour_rec, $email, $ice_cream, $yourflavour, $opinion); // Removed the extra 'b' in the bind_param
    $stmt->execute();
    echo "Registration Successfully...";
    $stmt->close();
    $conn->close();
}
?>
