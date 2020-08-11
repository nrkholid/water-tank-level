<?php
require "koneksidb.php";
$data = $koneksi->query("SELECT * FROM tabel_monitoring ORDER BY id DESC LIMIT 1");
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
    <div class="row mt-5">
        <div class="col">
            <div class="card" style="max-width:25rem; height: 165px">
                <h5 class="card-header bg-dark text-white font-weight-bold">Ketinggian (cm)</h5>
                <div class="card-body">
                    <h3 class="font-weight-bold mt-3"><?= $result["nilai"]; ?></h3>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card " style="max-width:25rem; height: 165px">
                <h5 class="card-header bg-dark text-white font-weight-bold">Status Tangki</h5>
                <div class="card-body">
                    <?php if ($result["nilai"] >= "100") { ?>
                    <h3 class="font-weight-bold mt-3 text-danger">HABIS</h3>
                    <?php } else { ?>
                    <h3 class="font-weight-bold mt-3 text-success">AMAN</h3>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>