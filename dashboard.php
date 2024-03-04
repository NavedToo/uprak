<?php
include_once("config.php");

$result = mysqli_query($conn, "SELECT * FROM dataguru ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Latihan</title>
</head>

<body>
    <header>
        <a href="#">
            <h1>Sistem Informasi RPL</h1>
        </a>

        <ul class="nav">
            <li><a href="">Home</a></li>
            <li><a href="#">Data Guru</a></li>
            <li><a href="">Data Siswa</a></li>
            <li><a href="">Mata Pelajaran</a></li>
        </ul>
    </header>

    <section>
        <form action="add.php" method="post">
            <input type="text" name="nip" id="nip" placeholder="masukkan nip">
            <input type="text" name="nama" id="nama" placeholder="masukkan nama">
            <input type="text" name="mapel" id="mapel" placeholder="masukkan mapel">
            <button name="add" value="Add">Submit</button>
        </form>
        <table border="1">
            <tr>
                <th>nip</th>
                <th>nama</th>
                <th>mapel</th>
                <th>update</th>
            </tr>
            <?php
            while ($user_data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $user_data['nip'] . "</td>";
                echo "<td>" . $user_data['nama'] . "</td>";
                echo "<td>" . $user_data['mapel'] . "</td>";
                echo "<td>";
                echo "<a href='edit.php?id=$user_data[id]'>edit</a>";
                echo "<a> | </a>";
                echo "<a href='delete.php?id=$user_data[id]'>delete</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </section>
</body>

</html>