<!-- <?php 

// ob_start();
session_start();

if (!isset($_SESSION["usuario"])  ) {
    header("Location:login.php");
}else{


?> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once './includes/s_head.php' ?>
    
    <title>Panel de Administración</title>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- navbar -->
        <?php

        include_once './includes/s_nav.php';
        include_once './includes/s_aside.php';

        ?>
        <!-- Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Bienvenido al Panel de Administración</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item active">Index</li>
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
                            <!-- /.card -->
                            <img class="img-fluid" src="../images/matriculas-online-web.jpg" alt="">

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
            <?php include_once './includes/s_footer.php' ?>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->


    <?php include_once './includes/s_js.php' ?>
</body>

</html>

<?php 

} ob_end_flush();

?>