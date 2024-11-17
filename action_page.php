<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $age = htmlspecialchars($_POST['age']);
    $pnum = htmlspecialchars($_POST['pnum']);
    $email = htmlspecialchars($_POST['email']);
    $gender = htmlspecialchars($_POST['gender']);
    $beenToEurope = htmlspecialchars($_POST['beenToEurope']);
    $beenTo = $_POST['beenTo'];
	
    echo "Form submitted successfully! Here is the data:<br>";
    echo "First Name: $fname<br>";
    echo "Last Name: $lname<br>";
    echo "Age: $age<br>";
    echo "Phone Number: $pnum<br>";
    echo "Email: $email<br>";
    echo "Gender: $gender<br>";
    echo "Been to Europe: $beenToEurope<br>";
    echo "Places visited: " . implode(", ", $beenTo) . "<br>";
} else {
    echo "Invalid request method!";
}
?>
