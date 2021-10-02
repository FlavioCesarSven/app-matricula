<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once './includes/s_head.php' ?>

    <title>Programa de Estudio</title>
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
                            <h1>Programa de Estudios</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Inico</a></li>
                                <li class="breadcrumb-item active">Programas de Estudio</li>
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
                            require_once '../controller/cProgramasC.php';
                            // crear el objeto
                            $oProgC = new cProgramasC();
                            // ejecutar la consulta
                            $result = $oProgC->listar();
                            ?>
                            <!-- fin region editable -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Programas Registrados: <?php echo mysqli_num_rows($result); ?></h3>
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

                                    <?php include_once './modales/m_programa.php'; ?>

                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Programa</th>
                                                <th>Descripción</th>
                                                <th>Estado</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            foreach ($result as  $row) {

                                            ?>
                                                <tr>
                                                    <td><?php echo $row["idprograma"] ?></td>
                                                    <td><?php echo $row["nomb_pro"] ?></td>
                                                    <td><?php echo $row["desc_pro"] ?></td>
                                                    <td><?php echo $row["estd_pro"] ?></td>
                                                    <td>
                                                        <button class="btn btn-danger" onclick="editarPrograma(<?php echo $row["idprograma"] ?> )" title="Actualizar">
                                                            <i class="fa fa-edit"></i>
                                                        </button>

                                                        <button class="btn btn-warning" onclick="eliminarRegistro( <?php echo $row["idprograma"] ?> )" title="Eliminar <?php echo $row["nomb_pro"]?>" >
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
    <script src="../js/js_programa.js" type="text/javascript"></script>                                        
</html>