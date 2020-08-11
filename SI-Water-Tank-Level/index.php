<?php
//Simpan dengan nama file panel.php
require "koneksidb.php";
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
    <script type="text/javascript" src="js/chart.bundle.min.js"></script>
    <title>Monitoring dan Kontrol Tangki Air</title>

</head>

<body class="bg-light">
    <center>
        <!-- <img class="img-fluid responsive-sm mt-3" src="img/png2.png" alt="Responsive image" style="width:480px; height:50px;"> -->
        <div class="container">
            <h2 class="mt-3 font-weight-bold">PANEL KONTROL DAN MONITORING TANGKI AIR</h2>
            <hr>
            <h5 class="font-weight-bold">KONTROL DAN STATUS</h5>
            <hr>
            <div class="row mt-4">
                <div class="col ">
                    <div class="card " style="max-width:25rem; height: 165px">
                        <h5 class="card-header bg-dark text-white font-weight-bold">Kontrol Pompa</h5>
                        <div class="card-body">
                            <a href="proses.php?channel=CH_1&state=0" class="btn btn-success btn-lg mt-2">ON</a>
                            <a href="proses.php?channel=CH_1&state=1" class="btn btn-danger btn-lg mt-2">OFF</a>
                        </div>
                    </div>
                </div>
                <div class="col status-pompa">
                </div>
            </div>
            <div class="load-monitor"></div>
            <div class="row mt-3">
                <div class="col">
                    <hr>
                    <h5 class="font-weight-bold text-center">EXPORT DATA</h5>
                    <hr>
                    <form id="formTanggal">
                        <div class="row input-daterange">
                            <div class="col">
                                <input type="text" name="TanggalAwal" id="TanggalAwal" class="form-control"
                                    placeholder="Tanggal Awal" readonly />
                            </div>
                            <div class="col">
                                <input type="text" name="TanggalAkhir" id="TanggalAkhir" class="form-control"
                                    placeholder="Tanggal Akhir" readonly />
                            </div>
                        </div>
                        <div class="col mt-3 text-center">
                            <button type="button" class="btn btn-success" id="btnExport">Export
                                Data</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class='load-grafik'></div>
            <div class='load-tabel'></div>

        </div>

        <footer class="py-3">
            <div class="container">
                <p class="m-0 text-center">Copyright &copy; 2020 SMP IDN Boarding School</p>
            </div>
        </footer>
    </center>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>

    <script>
    $(document).ready(function() {
        $('.input-daterange').datepicker({
            todayBtn: 'linked',
            format: "yyyy-mm-dd",
            autoclose: true
        });
        setInterval(function() {
            $('.status-pompa').load("status.php")
        }, 2000);
        setInterval(function() {
            $('.load-monitor').load("kontrol.php")
        }, 2000);
        setInterval(function() {
            $('.load-grafik').load("data-grafik.php")
        }, 2000);

        $('.load-tabel').load("data-tabel.php");

        $('#btnExport').click(function() {
            if ($('#TanggalAwal').val() == '' && $('#TanggalAkhir').val() == '') {
                swal('Peringatan!', 'Masukkan Tanggal', 'warning');
            } else {
                var data = $('#formTanggal').serializeArray();
                var dataObj = {};
                $(data).each(function(i, field) {
                    dataObj[field.name] = field.value;
                });
                var page =
                    'exportdata.php?TanggalAwal=' +
                    dataObj['TanggalAwal'] +
                    '&TanggalAkhir=' +
                    dataObj['TanggalAkhir'];
                window.location = page;
                $('#formTanggal')[0].reset();
            }
        });
    });
    </script>
</body>

</html>