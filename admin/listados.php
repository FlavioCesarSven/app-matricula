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
                            <h1>DataTables</h1>
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
                            <?php
                            require_once '../controller/cProgramasC.php';
                            $oProgC = new cProgramasC();
                            $result = $oProgC->listar();

                            foreach ($result as $row) {
                                echo $row["idprograma"] . "|" . $row["nomb_pro"] . "<br>";
                            }
                            ?>

                            <br><br><br>
                            <h3>VISUALIZAR EN UN DROPDOWNLIST (Combo)</h3>
                            
                            <select name="" id="">
                                <option selected disabled>Seleccione</option>
                                <?php
                                //recorrer filas
                                foreach ($result as $row) {
                                    
                                    ?>
                                    <option value="<?php echo $row["idprograma"] ?>"> <?php echo $row["nomb_pro"] ?> </option>
                                <?php
                                }
                                ?>


                            </select>
                            <br><br><br>
                            <h3>VISUALIZAR EN UNA TABLA </h3>
                            
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NOMBRE</th>
                                        <th>DESCRIPCIÓN</th>
                                        <th>ESTADO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    foreach ($result as $row) {
                                   
                                ?>
                                    <tr>
                                        <td><?php echo $row["idprograma"] ?> </td>
                                        <td><?php echo $row["nomb_pro"] ?> </td>
                                        <td><?php echo $row["desc_pro"] ?> </td>
                                        <td><?php echo $row["estd_pro"] ?> </td>
                                    </tr>
                                <?php 
                                    }
                                    ?>
                                </tbody>
                            </table>

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