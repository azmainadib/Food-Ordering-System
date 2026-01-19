<?php include "../Controller/login.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../CSS/login.css">
</head>
<body>

    <form action="" method="post">
        <h1>User Login</h1>

        <label>Email ID:</label>
        <input type="text" name="email" placeholder="Enter Email ID" id="email">

        <label>Password:</label>
        <input type="password" name="password" placeholder="Enter Password" id="password">

        <a href="#" id="fp">Forgot Password?</a>

        <input type="submit" value="Login" id="sub">

        <a href="../View/userreg.php" id="reg">Create Account</a>

        <p id="error">
            <?php if (!empty($error)) echo $error; ?>
        </p>
    </form>

</body>
</html>
