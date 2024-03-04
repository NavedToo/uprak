<?php
include_once("config.php");

if (isset($_POST['add'])) {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $mapel = $_POST['mapel'];

    $result = mysqli_query($conn, "INSERT INTO dataguru(nip,nama,mapel) VALUES('$nip','$nama','$mapel')");

    if ($result) {
        header("location:dashboard.php");
    }
}
?>