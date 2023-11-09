<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | DataTables</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/employer/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="assets/employer/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/employer/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/employer/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/employer/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->


            <!-- Right navbar links -->

        </nav>
        <!-- /.navbar -->

        <?= $this->include('Employer/inc/sidebar')?>;

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>DataTables</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">DataTables</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">


                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">DataTable with default features</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Occupation Title</th>
                                                <th>Required Number of Employees</th>
                                                <th>Location</th>
                                                <th>Date Posted</th>
                                                <th></th>
                                                <th>Status</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach ($jobsposted as $jobs): ?>
                                            <?php if ($jobs['status'] != "Cancelled") { ?>
                                            <tr>
                                                <th><?= $jobs['occupation_title'] ?></th>
                                                <th><?= $jobs['required_no'] ?></th>
                                                <th><?= $jobs['location'] ?></th>
                                                <th><?= $jobs['dateposted'] ?></th>
                                                <th class="text-center"><button class="bg-dark">View Details</button>
                                                </th>
                                                <th><?= $jobs['status'] ?></th>

                                                <?php if ($jobs['status'] == "Pending") { ?>
                                                <th class="text-center"> <a
                                                        href="<?= site_url('cancel_jobpost/') . $jobs['vacancy_id'] ?>"><button
                                                            class="bg-red">Cancel</button></a> </th>

                                                <?php } elseif ($jobs['status'] == "Approved") { ?>

                                                <?php } elseif ($jobs['status'] == "Disapproved") { ?>


                                                <?php } ?>






                                                <!-- <td class="text-center" style="cursor: pointer; font-size: 15px;">
                                            <a href="#" data-toggle="modal" data-target="#deleteModal" data-id="<= $jobs['id'] ?>">
                                                <i class="fas fa-trash"></i> -- Add the delete button icon here --
                                            </a>
                                        </td> -->


                                        <?php } ?>

                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>

                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="assets/employer/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/employer/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="assets/employer/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/employer/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/employer/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/employer/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="assets/employer/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/employer/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/employer/plugins/jszip/jszip.min.js"></script>
    <script src="assets/employer/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="assets/employer/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="assets/employer/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/employer/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="assets/employer/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/employer/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="assets/employer/dist/js/demo.js"></script> -->
    <!-- Page specific script -->
    <script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    </script>
</body>

</html>