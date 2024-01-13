<?php
    $firstName = $_POST['FirstName'];
    $EatenIceCream = $_POST['EatenIceCream'];
    $email = $_POST['Email'];
    $flavour_rec = $_POST['flavour_rec'];
    $ice_cream = $_POST['ice_cream'];
    $yourflavour = $_POST['yourflavour'];
    $opinion = $_POST['opinion']

    //Database connection
    $conn = new mysqli('localhost','root', '', 'test');
    if($conn->connect_error) {
        die('Connection Failed : ' $conn->connect_error);
    }else{
        $stmt $conn->prepare("insert into registration(firstName, EatenIceCream, flavour_rec, email, ice_cream, yourflavour, opinion)
        values(?, ?, ?, ?, ?, ?)");
        $stmt->bind param("sisssssb", $firstName, $EatenIceCream, $flavour_rec, $email, $ice_cream, $yourflavour, $opinion);
        $stmt->execute();
        echo "registration Successfully...";
        $stmt->close();
        $conn->close();
    }
?>