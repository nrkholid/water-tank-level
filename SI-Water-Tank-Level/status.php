<?php
//Simpan dengan nama file panel.php
require "koneksidb.php";
$data = $koneksi->query("SELECT * FROM tabel_kontrol");
$result = $data->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <div class="card" style="max-width:25rem; height: 165px">
        <h5 class="card-header bg-dark text-white font-weight-bold">Status Pompa</h5>
        <div class="card-body">
            <?php if ($result["CH_1"] == 1) { ?>
            <h3 class="font-weight-bold mt-3 text-danger">MATI</h3>
            <?php } else { ?>
            <h3 class="font-weight-bold mt-3 text-success">NYALA</h3>
            <?php } ?>
        </div>
    </div>
</body>

</html>