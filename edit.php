<?php
include_once("config.php");

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $mapel = $_POST['mapel'];

    $result = mysqli_query($conn, "UPDATE dataguru SET nip='$nip',nama='$nama',mapel='$mapel' WHERE id=$id");

    if ($result) {
        header("location:dashboard.php");
    }
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM dataguru WHERE id='$id'");

while ($user_data = mysqli_fetch_array($result)) {
    $nip = $user_data['nip'];
    $nama = $user_data['nama'];
    $mapel = $user_data['mapel'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>

<body>
    <form action="edit.php" method="post">
        <input type="text" name="nip" id="nip" value="<?php echo "$nip"; ?>">
        <input type="text" name="nama" id="nama" value="<?php echo "$nama"; ?>">
        <input type="text" name="mapel" id="mapel" value="<?php echo "$mapel"; ?>">
        <input type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>">
        <button name="update" value="update">Update</button>
    </form>
</body>

</html>