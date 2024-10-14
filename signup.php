<?php

$servername = "localhost";
$username = "root";  
$password = "";      
$dbname = "mental_health_app";  

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); 


$profile_pic = null;
if (isset($_FILES['profile_pic']) && $_FILES['profile_pic']['error'] == 0) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["profile_pic"]["name"]);
    move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file);
    $profile_pic = $target_file;  
}

$sql = "INSERT INTO users (name, email, password, profile_pic) VALUES ('$name', '$email', '$password', '$profile_pic')";
if ($conn->query($sql) === TRUE) {
    echo "New user created successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
