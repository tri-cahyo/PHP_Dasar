<?php
require 'functions.php';
$pet = query("SELECT * FROM pet");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Title</title>
</head>
<body>
    <h1>Database Petshop</h1>
    <a href="add.php"> Add </a>
    <br></br>

    <table border="1" ceellpadding='10' cellspaceing='0'>
        <tr>
            <td>no</td>
            <td>Aksi</td>
            <td>pet id</td>
            <td>pet name</td>
            <td>jenis</td>
            <td>ras</td>
            <td>usia</td>
            <td>harga</td>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($pet as $row): ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="edit.php?pet_id=<?= $row["pet_id"]; ?>">ubah</a>
                <a href="delete.php?pet_id=<?= $row["pet_id"]; ?>">hapus</a>
            </td>
            <td><?= $row["pet_id"]; ?></td>
            <td><?= $row["pet_name"]; ?></td>
            <td><?= $row["jenis"]; ?></td>
            <td><?= $row["ras"]; ?></td>
            <td><?= $row["usia"]; ?></td>
            <td><?= $row["harga"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>
</body>
</html>