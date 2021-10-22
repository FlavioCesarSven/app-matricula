<?php 

ob_start();
session_start();

if (!isset($_SESSION["usuario"])  ) {
    header("Location:login.php");
}else{


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once './includes/s_head.php' ?>

    <title>Estudios</title>
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
                            <h1>Estudiantes</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Inico</a></li>
                                <li class="breadcrumb-item active">Estudiantes</li>
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
                            require_once '../controller/cEstudianteC.php';
                            // crear el objeto
                            $oEstC = new cEstudianteC();
                            // ejecutar la consulta
                            $result = $oEstC->listar();
                            ?>
                            <!-- fin region editable -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Estudiantes Registrados: <?php echo mysqli_num_rows($result); ?></h3>
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

                                    <?php include_once './modales/m_estudiante.php'; ?>

                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Dni</th>
                                                <th>Apellidos y Nombres</th>
                                                <th>Fecha Nac</th>
                                                <th>Sexo</th>
                                                <th>Programa</th>
                                                <!-- <th>Operador</th> -->
                                                <th>N° Movil</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            foreach ($result as  $row) {
                                                $fecha = $row["fnac_est"];
                                                $fecha = date("d/m/Y", strtotime($fecha));
                                            ?>
                                                <tr>
                                                    <td><?php echo $row["idestudiante"] ?></td>
                                                    <td><?php echo $row["ndni_est"] ?></td>
                                                    <td><?php echo $row["ESTUDIANTE"] ?></td>
                                                    <td><?php echo $fecha ?></td>
                                                    <td><?php echo $row["sexo_est"] ?></td>
                                                    <td><?php echo $row["nomb_pro"] ?></td>
                                                    <!-- <td><?php echo $row["nomb_ope"] ?></td> -->
                                                    <td><?php echo $row["ncel_est"] ?></td>
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
     <script src="../js/js_estudiante.js"></script>
</html>

<?php 

} ob_end_flush();

?>