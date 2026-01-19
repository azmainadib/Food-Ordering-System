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

    <div id="menu">
        <a href="adminhome.php" class="menu-link">Home</a>
        <a href="addfood.php" class="menu-link">Add Food</a>
        <a href="addvoucher.php" class="menu-link">Add Voucher</a>
        <a href="viewvoucher.php" class="menu-link">View Voucher</a>
        <a href="viewfood.php" class="menu-link">View Food</a>
    </div>

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
