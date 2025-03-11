<?php
include 'koneksi.php';

$jurusan_id = $_GET['jurusan_id'];

$sql = "SELECT * FROM jurusan WHERE jurusan_id =$jurusan_id";
$result = $conn->query($sql);
$data = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Jurusan</title>
</head>

<body>
    <h2>Edit Data Jurusan</h2>
    <form action="proses_edit_jurusan.php" method="POST">
        <input type="hidden" name="jurusan_id" value="<?php echo $data['jurusan_id']; ?>">
        <label>Nama Jurusan:</label>
        <input type="text" name="nama_jurusan" value="<?php echo $data['nama_jurusan']; ?>"><br>
        <input type="submit" value="Simpan">
        <a href="index.php">Kembali</a>
    </form>
    </form>
</body>

</html>