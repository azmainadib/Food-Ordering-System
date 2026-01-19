<?php
include "../DB/db.php";
$id=$_GET['id'];
mysqli_query($conn,"DELETE FROM food WHERE id=$id");
header("Location: ../view/viewfood.php");
?>
