<?php
$nama = $_POST['nama'];
$pesan = $_POST['pesan'];

$data = "Nama: $nama | Pesan: $pesan \n";

file_put_contents("data.txt", $data, FILE_APPEND);

echo "Pesan berhasil dikirim!";
?>