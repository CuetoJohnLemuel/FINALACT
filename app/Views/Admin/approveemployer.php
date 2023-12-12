<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Employer Details</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- AdminLTE CSS -->

  <link rel="stylesheet" href="<?php echo BASE_URL . PUBLIC_DIR . ('/assets/admin/dist/css/adminlte.min.css'); ?>">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <!-- Add your left navbar links here if needed -->
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <!-- Add your navbar search form here if needed -->
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Employer Details</h1>
          </div>
          <div class="col-sm-6">
            <!-- Add any additional content header elements here if needed -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <!-- Employer Details Card -->
            <div class="card card-primary">
              <div class="card-body">

              <!-- public function retrieve_data() {
		$data['studentdata'] = $this->crud_model->retrievethis();
		$this->call->view('Users/home', $data); -->
   
    
                <p><strong>Full Name:</strong> <?=$data['full_name']; ?></p>
                <p><strong>Employer ID:</strong> <?=$data['employer_id']; ?></p>
                <p><strong>Company Name:</strong> <?=$data['company_name'];?></p>
                <p><strong>Company Address:</strong> <?=$data['company_address'];?></p>
                <p><strong>Address:</strong> <?=$data['address'];?></p>
                <p><strong>Contact Number:</strong> <?=$data['contact_number'];?></p>
                <p><strong>Email:</strong> <?=$data['email'];?></p>
              </div>
              
 
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<!-- Bootstrap 4 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo BASE_URL . PUBLIC_DIR . ('/assets/employer/dist/js/adminlte.min.js'); ?>"></script>
<!-- bs-custom-file-input -->
<script src="<?php echo BASE_URL . PUBLIC_DIR . ('/assets/employer/plugins/bs-custom-file-input/bs-custom-file-input.min.js'); ?>"></script>
<!-- Your custom scripts go here if needed -->
</body>
</html>
