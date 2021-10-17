<?php
include 'functions.php';
if (isset($_GET['tempat_id']) || isset($_GET['barang_id'])) {
    $tempat_id = $_GET['tempat_id'];
    $barang_id = $_GET['barang_id'];
    $row = readTempatDet($tempat_id, $barang_id);
} else {
    $row = readTempatDet();
}
?>
<table class="table table-bordered dt-responsive table-responsive nowrap">
    <thead>
        <tr>
            <th>No</th>
            <th>Tempat</th>
            <th>Barang</th>
            <th>Jumlah</th>
            <th>Baik</th>
            <th>Sedang</th>
            <th>Rusak</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($row as $key => $item) { ?>
            <tr>
                <td></td>
                <td><?= $item['nm_tempat'] ?></td>
                <td><?= $item['nm_barang'] ?></td>
                <td><?= $item['jmlh'] ?></td>
                <td><?= $item['baik'] ?></td>
                <td><?= $item['sedang'] ?></td>
                <td><?= $item['rusak'] ?></td>
            </tr>
        <?php } ?>

    </tbody>
</table>

<script>
    // myTable.on('order.dt search.dt', function() {
    //     myTable.column(0, {
    //         search: 'applied',
    //         order: 'applied'
    //     }).nodes().each(function(cell, i) {
    //         cell.innerHTML = i + 1;
    //     });
    // }).draw();

    $(document).ready(function() {
        $('.table').DataTable({
            scrollY: 400,
            order: [
                [1, "asc"]
            ]
        });

        $('.table').DataTable().on('order.dt search.dt', function() {
            $('.table').DataTable().column(0, {
                search: 'applied',
                order: 'applied'
            }).nodes().each(function(cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();
    });
</script>