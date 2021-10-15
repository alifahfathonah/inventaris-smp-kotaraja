<!DOCTYPE html>
<html lang="en">
<?php
include 'functions.php';
$row = read();
$halaman = 'barang'
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Barang</title>
    <!-- third party css -->
    <link href="../../assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <!-- third party css end -->
    <!-- Sweet Alert-->
    <link href="../../assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <?php include '../Layouts/header.php' ?>
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <?php include '../Layouts/topbar.php' ?>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php include '../Layouts/leftbar.php' ?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <!-- Menampilkan pesan jika berhasil melakukan tambah, edit atau hapus -->
                                    <?php
                                    if (isset($_GET["info"])) {
                                        $info = $_GET["info"];
                                        $cetak;
                                        switch ($info) {
                                            case 1:
                                                $cetak = "ditambahkan";
                                                break;
                                            case 2:
                                                $cetak = "diubah";
                                                break;
                                            case 3:
                                                $cetak = "dihapus";
                                                break;

                                            default:
                                                $cetak = "";
                                                break;
                                        }
                                    ?>
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            Selamat data berhasil <?= $cetak ?>
                                        </div>
                                    <?php } ?>
                                    <a href="add.php" class=" btn btn-primary float-end">Tambah Data</a>
                                    <h4 class="mt-0 header-title">Data <?= $halaman ?></h4>


                                    <p class="text-muted font-14 mb-3">
                                        Silahkan Menambah, mengubah dan menghapus data <?= $halaman ?>.
                                    </p>

                                    <table id="myTable" class="table table-bordered dt-responsive table-responsive nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Barang</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($row as $key => $item) { ?>
                                                <tr>
                                                    <td></td>
                                                    <td><?= $item['nm_barang'] ?></td>
                                                    <td>
                                                        <a href="edit.php?id=<?= $item['id'] ?>" class="btn btn-warning btn-sm rounded-pill" title="Ubah"><i class="fas fa-pencil-alt"></i></a>
                                                        <a data-id="<?= $item['id'] ?>" class="btnHapus btn btn-danger btn-sm rounded-pill" title="Hapus"><i class="fas fa-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end row -->

                </div> <!-- container-fluid -->
            </div> <!-- content -->

            <!-- Footer Start -->
            <?php include '../Layouts/footer.php' ?>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    <?php include '../Layouts/rightbar.php' ?>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>



    <!-- Script -->
    <?php include '../Layouts/script.php' ?>


    <!-- third party js -->
    <script src="../../assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="../../assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
    <script src="../../assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../../assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
    <script src="../../assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="../../assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <!-- third party js ends -->

    <!-- Sweet Alerts js -->
    <script src="../../assets/libs/sweetalert2/sweetalert2.all.min.js"></script>

    <!-- Datatables init -->
    <script>
        let myTable = $("#myTable").DataTable({
            scrollY: 400
        });

        myTable.on('order.dt search.dt', function() {
            myTable.column(0, {
                search: 'applied',
                order: 'applied'
            }).nodes().each(function(cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();
    </script>

    <!-- Sweet Alert -->
    <script>
        let id;
        $('body').on('click', '.btnHapus', function(e) {
            e.preventDefault();
            id = $(this).data('id')
            Swal.fire({
                title: "Yakin menghapus data ini?",
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#28bb4b",
                cancelButtonColor: "#f34e4e",
                confirmButtonText: "Yakin",
                cancelButtonText: "Batal",
            }).then(function(e) {
                if (e.value) {
                    document.location.href = `functions.php?hapus=${id}`;
                }
            });
        })
    </script>
</body>

</html>