<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

include 'header.php';
include 'include/functions.php';

?>

<head>
    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Editable Tables | Porto Admin - Responsive HTML5 Template</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="vendor/animate/animate.compat.css">

    <link rel="stylesheet" href="vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" href="vendor/boxicons/css/boxicons.min.css" />
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="vendor/select2/css/select2.css" />
    <link rel="stylesheet" href="vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />
    <link rel="stylesheet" href="vendor/datatables/media/css/dataTables.bootstrap4.css" />

    <!--(remove-empty-lines-end)-->

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css" />


    <!--(remove-empty-lines-end)-->



    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Head Libs -->
    <script type="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="vendor/modernizr/modernizr.js"></script>
    <script src="master/style-switcher/style.switcher.localstorage.js"></script>
</head>

<link rel="stylesheet" href="vendor/datatables/media/css/dataTables.bootstrap4.css" />

<!-- start: page -->
<?php include 'saw.php'; ?>
<section class="card">
    <header class="card-header">
        <div class="card-actions">
            <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
            <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
        </div>
        <h2 class="card-title">Laporan Perankingan</h2>
    </header>



    <div class="card-body">
        <table class="table table-bordered table-striped mb-0" id="example">
            <thead>
                <tr>
                    <th>ID Produk</th>
                    <th>Nama Produk</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                $produk = mysqli_query($conn, "SELECT * FROM produk");
                while ($row = mysqli_fetch_assoc($produk)) { ?>
                    <tr>
                        <td><?= $row['idproduk']; ?></td>
                        <td><?= $row['namaproduk']; ?></td>
                        <td><?= round($sum_arr[$i], 3); ?></td>
                    </tr>

                <?php $i++;
                } ?>
            </tbody>
        </table>

        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
    </div>
</section>

<?php include 'foot.php'; ?>