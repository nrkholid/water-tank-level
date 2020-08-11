<?php
require "koneksidb.php";

$data = $koneksi->query("SELECT * FROM tabel_kontrol");

if (isset($_GET['channel']) && isset($_GET['state'])) {
	$channel = $_GET['channel'];
	$state   = $_GET['state'];
	if ($channel == 'CH_1') {
		$sql = "UPDATE tabel_kontrol SET CH_1 = '$state'";
	} else if ($channel == 'CH_2') {
		$sql = "UPDATE tabel_kontrol SET CH_2 = '$state'";
	}
	$koneksi->query($sql);
	header('Location:index.php');
}

$hasil = array();
while ($row = $data->fetch_assoc()) {
	$hasil = $row;
}

$result  = json_encode($hasil);
echo $result;