<?php
include 'koneksi.php';

$jurusan_id = $_POST['jurusan_id'];
$nama_jurusan = $_POST['nama_jurusan'];

$sql = "UPDATE jurusan SET nama_jurusan='$nama_jurusan' WHERE jurusan_id='$jurusan_id'";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
