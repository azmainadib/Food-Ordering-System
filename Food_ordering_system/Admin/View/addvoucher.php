<?php include "../Controller/addvaucher.php";

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add vaucher</title>
    </head>
    <body>
        <a href="adminhome.php">Home</a>
        <a href="addfood.php">Add Food</a>
        <a href="addvoucher.php">Add Voucher</a>
        <a href="viewvoucher.php">View Voucher</a>
        
    <form action = "" method="post">
        <h2>Add voucher</h2>
        <label for="">code:</label>
        <input type="text" name="code">
        <label for="">Discount:</label>
        <input type="text" name="discount">
        <button name="add">Generate</button>
        <p style="color:green;"><?php echo $success; ?></p>
        <p style="color:red;"><?php echo $error; ?></p>

    </form>
    </body>
</html>