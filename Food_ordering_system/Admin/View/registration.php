<?php include "../Controller/registration.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../CSS/registration.css">
</head>
<body>

<form method="post">
    <h1>Registration Form</h1>

    <label>Name:</label>
    <input type="text" name="name" placeholder="Enter Your Name" id="name">

    <label>Address:</label>
    <input type="text" name="address" placeholder="Enter Your Address" id="address">

    <label>Mobile Number:</label>
    <input type="tel" name="mobile" placeholder="Enter Mobile Number" id="mobile">

    <label>Email:</label>
    <input type="email" name="email" placeholder="Enter Email Address" id="email">

    <label>Password:</label>
    <input type="password" name="password" placeholder="Enter Password" id="password">

    <label>Confirm Password:</label>
    <input type="password" name="cpassword" placeholder="Confirm Password" id="cpassword">

    <input type="submit" value="Register" id="reg">

    <a href="../View/login.php" id="li">Already have an account?</a>

    <p><?php echo $error; ?></p>
    <p><?php echo $success; ?></p>
</form>

</body>
</html>
