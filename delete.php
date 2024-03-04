<?php
include_once("config.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM dataguru WHERE id=$id");

if ($result) {
    echo "<script>alert('delete berhasil!')</script>";
    header("location:dashboard.php");
}
?>