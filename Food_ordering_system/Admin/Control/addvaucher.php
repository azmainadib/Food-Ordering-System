<?php
include "../DB/db.php";

$error="";


if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $code=$_POST['code'];
        $discount=$_POST['discount'];

        if(empty($code)||empty($discount))
            {
                $error="All fields required";
            }
    }