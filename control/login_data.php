<?php

require 'config.php';


if (isset($_POST['login'])) {


    $email = $_POST['email'];
    $password = $_POST['password'];


    $select = " SELECT * FROM user WHERE email = '$email' && password = '$password' ";

    $result = mysqli_query($conn, $select);

    if ($email == "" || $password == "") {
        header('location:../forms/login_form.php');

    }




    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_array($result);

        if ($row['role'] == 'Admin') {

            header('location:../forms/admin.php');

        } elseif ($row['role'] == 'User') {

            header('location:../forms/user.php');

        }

    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    $conn->close();
}
;

?>