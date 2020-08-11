<?php
require "koneksidb.php";
$nilai  = $_GET["nilai"];

if ($nilai >= 100) {
    $sql1 = "UPDATE tabel_kontrol SET CH_1 = '0'";
    $koneksi->query($sql1);
} else if ($nilai <= 30) {
    $sql1 = "UPDATE tabel_kontrol SET CH_1 = '1'";
    $koneksi->query($sql1);
}

if ($nilai >= 100) {
    $sql      = "INSERT INTO tabel_monitoring(nilai, keterangan) VALUES ('$nilai', 'Tidak Aman')";
    $koneksi->query($sql);
} else {
    $sql      = "INSERT INTO tabel_monitoring(nilai, keterangan) VALUES ('$nilai', 'Aman')";
    $koneksi->query($sql);
}

$fetch = $koneksi->query("SELECT * FROM tabel_monitoring ORDER BY id DESC LIMIT 1");
$response = $fetch->fetch_assoc();
$result = json_encode($response);
echo $result;