<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="header">
                <div class="logo">GRAMEDIA</div>
                <div class="menu">
                    <ul>
                        <li><a href="halamanHome.php">Home</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <h1>Selamat Datang di GRAMEDIA Blitar</h1>
        <form class="cari" action="search.php" method="GET">
            Cari Judul Buku:
            <input type="text" name="carijudul">
            <input type="submit" value="Cari">
        </form>
        <br>
        <table>
            <tr>
                <th> Foto Buku </th>
                <th> Kode Buku </th>
                <th> Judul </th>
                <th> Pengarang </th>
                <th> Aksi </th>
            </tr>
            <?php
                include "myconnection.php";

                $query = "SELECT id_buku, judul, pengarang, foto FROM buku ";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td> <img src="./<?php echo $row["foto"];?>" /> </td>
                <td> <?php echo $row["id_buku"]; ?> </td>
                <td> <?php echo $row["judul"]; ?> </td>
                <td> <?php echo $row["pengarang"]; ?> </td>
                <td> 
                    <a href="detail.php?id=<?php echo $row["id_buku"]; ?>"> 
                    <button>Detail</button> </a> 
                </td>
            </tr>
            <?php
                    }
                } else {
                    echo "0 results";
                }
            ?>
        </table>
    </div>
    <div id="copyright">
        <div class="wrapper">
            &copy; 2020. <b>Gramedia</b> All Right Reserved
        </div>
    </div>
</body>
</html>