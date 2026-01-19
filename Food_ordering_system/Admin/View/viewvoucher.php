<?php
include "../DB/db.php";
$res = mysqli_query($conn, "SELECT * FROM voucher");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Vouchers</title>
    <link rel="stylesheet" href="../CSS/viewvoucher.css">
</head>

<body>
        <form action="" id="links">
        <a href="addfood.php">Add Food</a>
        <a href="addvoucher.php">Add Voucher</a>
        <a href="viewvoucher.php">View Voucher</a>
                <a href="viewfood.php">View Food</a>
                

        </form>

    <h2 id="page-title">Voucher List</h2>

    <table id="voucher-table">
        <tr>
            <th>Code</th>
            <th>Discount</th>
            <th>Delete</th>
        </tr>

        <?php while ($v = mysqli_fetch_assoc($res)) { ?>
            <tr>
                <td><?= $v['code'] ?></td>
                <td><?= $v['discount'] ?>%</td>
                <td>
                    <a class="delete-link" href="../controller/deletevoucher.php?id=<?= $v['id'] ?>">
                        Delete
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>
