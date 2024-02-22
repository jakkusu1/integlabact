<?php
include("config.php");

if(isset($_POST["submitButton"])){
    $firstName = $_POST["firstName"];
    $middleName= $_POST["middleName"];
    $lastName = $_POST["lastName"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    // $role = $_POST["role"];

    $query = "INSERT INTO users (firstName, middleName, lastName, username, password) VALUES ('$firstName', '$middleName', '$lastName', '$username', '$password')";

    if ($conn->query($query) === TRUE) {
        echo "Registered Successfully";
      } else {
        echo "Registration Failed";
        // echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
    $conn->close();
}
?>