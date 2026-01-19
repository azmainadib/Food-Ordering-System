<?php
include "../controller/addfood.php";
$res=mysqli_query($conn,"SELECT * FROM food");
?>

<!DOCTYPE html>
<html>

<head>
    <title>View food</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Delete</th>
        </tr>
        <?php while ($f = mysqli_fetch_assoc($res)) { ?>
            <tr>
                <td><img src="../uploads/<?= $f['image'] ?>" width="60"></td>
                <td><?= $f['name'] ?></td>
                <td><?= $f['price'] ?></td>
                <td><a href="../controller/deletefood.php?id=<?= $f['id'] ?>">Delete</a></td>
            </tr>
        <?php } ?>
</body>

</html>