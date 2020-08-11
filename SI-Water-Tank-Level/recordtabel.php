<?php
require 'koneksidb.php';

$sql = "SELECT DATE(waktu) as tanggal, TIME(waktu) as pukul, nilai, keterangan FROM tabel_monitoring ORDER BY waktu DESC";
$result = $koneksi->query($sql);
$data = array();

while ($rows = $result->fetch_assoc()) {
    $data[] = $rows;
}

$results = array(
    "echo" => 1,
    "totalData" => count($data),
    "recordData" => count($data),
    "data" => $data
);

echo json_encode($results);