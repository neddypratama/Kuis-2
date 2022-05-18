<?php
    $target = "Foto/";

    $file = $target. basename($_FILES["bkfoto"]["name"]);

    if(move_uploaded_file($_FILES["bkfoto"]["tmp_name"],$file)) {
        $id = $_POST["kdbuku"];
        
        include "myconnection.php";
        $query = "UPDATE buku SET foto='$file' WHERE id_buku='$id'";

        if(mysqli_query($connect, $query)) {
            header('Location:homeAdmin.php');
        } else {
            echo "Gagal mengubah data <br>". mysqli_error($connect);
        }
    
        mysqli_close($connect);
    } else {
        echo "Error";
    }
?>