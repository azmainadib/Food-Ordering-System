<!DOCTYPE html>
<html>
<head>
    <title>
        
    </title>
</head>
<body>
    <form>
        <h2>Admin Dashboard</h2>
        <a href="addfood.php">Add Food </a>
        <a href="addvoucher.php">Add Voucher </a>
        <a href="viewvouchar.php">View Vouchar </a>

        <table border="1">
            <tr><th>Image</th><th>Name</th><th>Price</th><th>Delete</th></tr>
            <?php while($f=mysqli_fetch_assoc($res)){ ?>
                <tr>
                    <td><img src="../Upload/<?= $f['image']?>" width="65"></td>
                    <td><?= $f['name'] ?></td>
                    <td><?= $f['price'] ?></td>
                </tr>
            }
        </table>
    </form>
</body>
</html>