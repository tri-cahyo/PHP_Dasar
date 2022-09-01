<?php 
    $conn = mysqli_connect("localhost", "root", "", "petshop_db");


    function query($query){
        global $conn;
        $result= mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
        }

        return $rows;
    }

    function add($data){
        global $conn;

        $pet_name = htmlspecialchars($data["pet_name"]);
        $jenis = htmlspecialchars($data["jenis"]);
        $ras = htmlspecialchars($data["ras"]);
        $usia = htmlspecialchars($data["usia"]);
        $harga = htmlspecialchars($data["harga"]);

        $query = "INSERT INTO pet VALUES 
            ('', '$pet_name','$jenis', '$ras', '$usia','$harga')
        ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function delete($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM pet WHERE pet_id=$id");

        return mysqli_affected_rows($conn);
    }
    
    function edit($data){
        global $conn;

        $pet_id = $data["pet_id"];
        $pet_name = htmlspecialchars($data["pet_name"]);
        $jenis = htmlspecialchars($data["jenis"]);
        $ras = htmlspecialchars($data["ras"]);
        $usia = htmlspecialchars($data["usia"]);
        $harga = htmlspecialchars($data["harga"]);

        $query = "UPDATE  pet SET  
            pet_name ='$pet_name',
            jenis = '$jenis',
            ras = '$ras',
            usia = '$usia',
            harga = '$harga'
            WHERE pet_id = $pet_id";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>