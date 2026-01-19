<!DOCTYPE html>
<html>

<head>
    <title>
        Vouchers
    </title>

<body>
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