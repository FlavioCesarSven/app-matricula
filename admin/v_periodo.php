<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once './includes/s_head.php' ?>

    <title>Periodo de Estudio</title>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- navbar -->
        <?php

        include_once './includes/s_nav.php';
        include_once './includes/s_aside.php'
        ?>
        <!-- Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Periodos de Estudios</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Inico</a></li>
                                <li class="breadcrumb-item active">Periodos de Estudio</li>
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

                            <!-- region editable -->
                            <?php
                            // incluir controlador
                            require_once '../controller/cPeriodoC.php';
                            // crear el objeto
                            $oPeriodC = new cPeriodoC();
                            // ejecutar la consulta
                            $result = $oPeriodC->listar();
                            ?>
                            <!-- fin region editable -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Periodos Registrados: <?php echo mysqli_num_rows($result); ?></h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">

                                    <!-- Button trigger modal -->
                                    <div class="text-right" style="margin-bottom: 10px;">
                                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#w_programa"> -->
                                        <button onclick="abrirModal()" type="button" class="btn btn-primary">
                                            <i class="fas fa-plus"></i> Agregar
                                        </button>
                                    </div>

                                    <?php include_once './modales/m_periodo.php'; ?>

                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Estado</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            foreach ($result as  $row) {

                                            ?>
                                                <tr>
                                                    <td><?php echo $row["idperiodo"] ?></td>
                                                    <td><?php echo $row["nomb_per"] ?></td>
                                                    <td><?php echo $row["estd_per"] ?></td>
                                                    <td>
                                                        <button class="btn btn-danger" title="Actualizar">
                                                            <i class="fa fa-edit"></i>
                                                        </button>

                                                        <button class="btn btn-warning" title="Eliminar">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>

                                            <?php
                                            }
                                            ?>
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
<script src="../js/js_periodo.js" type="text/javascript"></script>
</html>