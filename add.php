<?php

require 'functions.php';

$conn = mysqli_connect("localhost", "root", "", "petshop_db");

if( isset($_POST["submit"])){

    if (add($_POST) > 0 ){
        echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href = 'index.php'
            </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal ditambahkan');
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
        <title>add a new pet</title>
    </head>
    <body>
        <h1>Add a new pet to petshop</h1>
        <a href="index.php">back to home</a>

        <form action="" method="post">
            <ul>
                <li>
                    <label for="pet_name">Nama: </label>
                    <input type="text" name="pet_name" id="pet_name" required>
                </li>
                <li>
                    <label for="jenis">Jenis: </label>
                    <input type="text" name="jenis" id="jenis" required>
                </li>
                <li>
                    <label for="ras">Ras: </label>
                    <input type="text" name="ras" id="ras" required>
                </li>
                <li>
                    <label for="usia">Usia: </label>
                    <input type="text" name="usia" id="usia" required>
                </li>
                <li>
                    <label for="harga">Harga: </label>
                    <input type="text" name="harga" id="harga" required>
                </li>
                <li>
                    <button type="submit" name="submit">ADD</button>
                </li>
            </ul>
        </form>
    </body>
</html>