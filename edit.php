<?php

require 'functions.php';
$pet_id = $_GET["pet_id"];

$pets = query("SELECT * FROM pet WHERE pet_id = $pet_id")[0];

if( isset($_POST["submit"])){

    if (edit($_POST) > 0 ){
        echo "
            <script>
                alert('Data berhasil diubah');
                document.location.href = 'index.php'
            </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal diubah');
            document.location.href = 'index.php'
        </script>";
    }
}
    // $pet_name = $_POST["pet_name"];
    // $jenis = $_POST["jenis"];
    // $ras = $_POST["ras"];
    // $usia = $_POST["usia"];
    // $harga = $_POST["harga"];

    // $query = "INSERT INTO pet VALUES
    //         ('','$pet_name','$jenis', '$ras','$usia','$harga')";

    // mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>edit data</title>
    </head>
    <body>
        <h1>EDIT</h1>
        <a href="index.php">back to home</a>

        <form action="" method="post">
            <input type="hidden" name="pet_id" value="<?= $pets["pet_id"];?>">
            <ul>
                <li>
                    <label for="pet_name">Nama: </label>
                    <input type="text" name="pet_name" id="pet_name" value="<?= $pets["pet_name"]?>">
                </li>
                <li>
                    <label for="jenis">Jenis: </label>
                    <input type="text" name="jenis" id="jenis" value="<?= $pets["jenis"]?>">
>
                </li>
                <li>
                    <label for="ras">Ras: </label>
                    <input type="text" name="ras" id="ras" value="<?= $pets["ras"]?>">
>
                </li>
                <li>
                    <label for="usia">Usia: </label>
                    <input type="text" name="usia" id="usia" value="<?= $pets["usia"]?>">
>
                </li>
                <li>
                    <label for="harga">Harga: </label>
                    <input type="text" name="harga" id="harga" value="<?= $pets["harga"]?>">
>
                </li>
                <li>
                    <button type="submit" name="submit">EDIT</button>
                </li>
            </ul>
        </form>
    </body>
</html>