<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Foto</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <nav>
        <div class="wrapper">
            <div class="header">
                <div class="logo">GRAMEDIA</div>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <?php
            include "myconnection.php";
            $idbk = $_GET['id'];
            $query = "SELECT * FROM buku WHERE id_buku='$idbk'";
            $result = mysqli_query($connect, $query);
        ?>
        <h2>Tambah Foto</h2><br>
        <form enctype="multipart/form-data" action="fotoProses.php" method="POST">
            <table>
                <?php
                    while($row=mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td> Kode Buku </td>
                    <td> <input type="text" name="kdbuku" value="<?php echo $row['id_buku']; ?>"> </td>
                </tr>
                <tr>
                    <td> Foto </td>
                    <td> <input type="file" name="bkfoto"> </td>
                </tr>
                <tr>
                    <td> <input type="submit" name="send" value="Tambah"> </td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </form>
    </div>>
    </body>
</html>