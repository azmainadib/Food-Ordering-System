<?php
session_start();
include "../DB/db.php";

$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $error = "Email and password can't be empty";
    } else {

        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $res = mysqli_query($conn, $sql);

        if (mysqli_num_rows($res) == 1) {

            $user = mysqli_fetch_assoc($res);

            $_SESSION['user'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];

            if ($user['role'] == 'admin') {
                header("Location: ../View/viewfood.php");
                exit;
            } elseif ($user['role'] == 'customer') {
                header("Location: ../View/customerhome.php");
                exit;
            }

        } else {
            $error = "Invalid Email or Password";
        }
    }
}
?>
