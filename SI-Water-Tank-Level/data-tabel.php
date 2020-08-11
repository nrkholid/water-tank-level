<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <div class="row mt-4">
        <div class="col">
            <hr>
            <h5 class="font-weight-bold">TABEL KETINGGIAN AIR</h5>
            <hr>
            <table class="table text-center mt-3" id="tabel-data">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Nilai</th>
                        <th>Status</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        // Table Utama
        var table = $('#tabel-data').DataTable({
            "autoWidth": false,
            "scrollY": "650px",
            "sScrollX": "100%",
            "scrollCollapse": true,
            "iDisplayLength": 5,
            "ajax": "recordtabel.php",
            "order": [
                [0, "desc"]
            ],
            "columnDefs": [{
                    "targets": 0,
                    "data": 'tanggal',
                    "orderable": false,
                    "searchable": false,
                    "className": "text-center align-middle",
                },
                {
                    "targets": 1,
                    "data": 'pukul',
                    "orderable": false,
                    "searchable": false,
                    "className": "text-center align-middle",
                },
                {
                    "targets": 2,
                    "data": 'nilai',
                    "orderable": false,
                    "searchable": false,
                    "className": "text-center align-middle",
                },
                {
                    "targets": 3,
                    "data": 'keterangan',
                    "className": "text-center align-middle",
                    "render": function(data, type, row) {
                        if (
                            row.keterangan === "Aman") {
                            return "<div class=\"badge badge-success\"> Aman</div>";
                        } else {
                            return "<div class=\"badge badge-danger\"> Tidak Aman</div>";
                        }
                    }
                },
            ]
        });

        setInterval(function() {
            table.ajax.reload(null, false);
        }, 2000);
    });
    </script>
</body>

</html>