<!DOCTYPE html>
<html>

<head>
    <title>Export Data Tangki Air</title>
</head>

<body>
    <style type="text/css">
    body {
        font-family: sans-serif;
    }

    table {
        margin: 20px auto;
        border-collapse: collapse;
    }

    table th,
    table td {
        border: 1px solid #3c3c3c;
        padding: 3px 8px;

    }

    a {
        background: blue;
        color: #fff;
        padding: 8px 10px;
        text-decoration: none;
        border-radius: 2px;
    }
    </style>

    <?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data-Tangki-Air.xls");
    ?>

    <center>
        <h1>Export Data Tangki Air</h1>
    </center>

    <table border="1">
        <tr>
            <th>No.</th>
            <th>Tanggal</th>
            <th>Pukul</th>
            <th>Nilai</th>
            <th>Status</th>
        </tr>
        <?php
        require "koneksidb.php";

        if (isset($_GET['TanggalAwal'], $_GET['TanggalAkhir'])) {
            $tanggalawal = $_GET['TanggalAwal'];
            $tanggalakhir = $_GET['TanggalAkhir'];
            $hasil = $koneksi->query("SELECT DATE(waktu) AS tanggal, TIME(waktu) AS pukul, nilai, keterangan FROM tabel_monitoring WHERE DATE(waktu) >= '$tanggalawal' 
            AND DATE(waktu) <= '$tanggalakhir' 
            ORDER BY waktu DESC")
                or die('Ada kesalahan Query: ' . $koneksi->error);

            $no = 1;
            while ($data = $hasil->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['tanggal']; ?></td>
            <td><?php echo $data['pukul']; ?></td>
            <td><?php echo $data['nilai']; ?></td>
            <td><?php echo $data['keterangan']; ?></td>
        </tr>
        <?php
            }
        }
        ?>
    </table>
</body>

</html>