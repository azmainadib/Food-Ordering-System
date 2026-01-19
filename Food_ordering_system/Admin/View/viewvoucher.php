<?php
include "../DB/db.php";
$res=mysqli_query($conn,"SELECT * FROM voucher");
?>

<!DOCTYPE html>
<html>

<head>
    <title>
        Vouchers
    </title>

<body>
    <form action="">
        <a href="adminhome.php">Home</a>
        <a href="addfood.php">Add Food</a>
        <a href="addvoucher.php">Add Voucher</a>
        <a href="viewvoucher.php">View Voucher</a>
        <a href="viewfood.php">viewfood</a>
    </form>
    <form action="">
        <h2>Voucher List</h2>
        <table border="1">
            <tr>
                <th>Code</th>
                <th>Discount</th>

                <th>Delete</th>
            </tr>
            <?php while ($v = mysqli_fetch_assoc($res)) { ?>
                <tr>
                    <td><?= $v['code'] ?></td>
                    <td><?= $v['discount'] ?>%</td>
                    <td><a href="../controller/deletevoucher.php ?id=<?= $v['id'] ?>">Delete</a></td>
                </tr>
            <?php } ?>
        </table>
    </form>
</body>
</head>

</html>