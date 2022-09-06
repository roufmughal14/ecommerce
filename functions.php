<?php
include ('includes/connection.php');

/* Register */

if (isset($_REQUEST['register'])) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $username = strstr($email, '@', true);
    $password = $_REQUEST['password'];
    $c_password = $_REQUEST['c_password'];
    if ($password == $c_password) {
        $select = "SELECT `email` FROM user WHERE email = '$email'";
        $result = mysqli_query($conn, $select);
        if (mysqli_num_rows($result) > 0) {
            echo 'Email already exixts';
        } else {
            if(strpos($email,"@") !== false){
                $insert = "INSERT INTO user (name, email, username, password) VALUES ('$name', '$email', '$username', '$password')";
                $result1 = mysqli_query($conn, $insert);
                if ($result1) {
                    header('location:login.php');
                } else {
                    echo 'Not Inserted';
                }
            } else {
                echo 'Email is incorrect';
            }
        }
   } else {
        echo 'Password doesnot match';
   }  
}

/* Login */

if (isset($_REQUEST['login'])) {
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    if(strpos($username,"@") !== false){
        $select = "SELECT * FROM user WHERE email = '$username' and password = '$password'";
        $result = mysqli_query($conn, $select);
        $row = mysqli_fetch_array($result);
        $count = mysqli_num_rows($result);
        if ($count > 0) {
            $_SESSION['user_id'] = $row['id'];
            header ('location:index.php');
            die();
        } else {
            echo 'Incorrect login credentials';
        }
    } else {
        $select = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
        $result = mysqli_query($conn, $select);
        $row = mysqli_fetch_array($result);
        $count = mysqli_num_rows($result);
        if ($count > 0) {
            $_SESSION['user_id'] = $row['id'];
            header ('location:index.php');
            die();
        } else {
            echo 'Incorrect login credentials';
        }
    }
}


?>