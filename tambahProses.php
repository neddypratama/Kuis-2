<?php
    $target = "Foto/";

    $file = $target. basename($_FILES["bkfoto"]["name"]);

    if(move_uploaded_file($_FILES["bkfoto"]["tmp_name"],$file)) {
        $kdbuku = $_POST["kdbuku"];
        $judul = $_POST["judulbuku"];
        $pengarang = $_POST["nmpengarang"];
        $penerbit = $_POST["nmpenerbit"];
        $deskripsi = $_POST["deskripsibuku"];
        
        include "myconnection.php";
        $query = "INSERT INTO buku VALUES 
        ('$kdbuku','$judul','$pengarang','$penerbit', '$file','$deskripsi')";

        if(mysqli_query($connect, $query)) {
            header("Location:homeAdmin.php");
        } else {
            echo "Data baru gagal ditambahkan! <br>". mysqli_error($connect);
        }
        mysqli_close($connect);
    } else {
        echo "Error";
    }
?>