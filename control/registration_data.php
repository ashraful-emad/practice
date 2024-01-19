<?php
require 'config.php';


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];
$role = $_POST['role'];
$emptyInput = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if ($name == "") {
    $emptyInput = true;
  } elseif ($email == "") {
    $emptyInput = true;
  } elseif ($password == "") {
    $emptyInput = true;
  } elseif ($number == "") {
    $emptyInput = true;
  } elseif ($role == "") {
    $emptyInput = true;
  }
}

if ($emptyInput == true) {
  echo "Empty input not allowed <br>";
  header("Location:../forms/login_form.php");
} else {
  $sql = "INSERT INTO user (name, email,password,number,role)
VALUES ('$name', '$email','$password','$number','$role')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully <br>";
    // select or read data start
    header("Location:../forms/login_form.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}






// $conn->close();







function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>