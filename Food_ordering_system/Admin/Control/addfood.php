<?php
include "../DB/db.php";

$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name  = $_POST["name"];
    $price = $_POST["price"];

    if (empty($name) || empty($price)) {
        $error = "All fields must be filled";
    } else {

        $image = $_FILES["image"]["name"];
        $tmp   = $_FILES["image"]["tmp_name"];

        move_uploaded_file($tmp, "../Uploads/food/" . $image);

        $sql = "INSERT INTO food(name, price, image)
                VALUES ('$name', '$price', '$image')";

        if ($conn->query($sql)) {
            $success = "Food Added Successfully";
        } else {
            $error = "Error: " . $conn->error;
        }
    }
}
?>