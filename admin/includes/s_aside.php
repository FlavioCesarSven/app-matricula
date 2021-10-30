<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SysVRHT v1.0</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../<?php echo $_SESSION["foto_usu"]; ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo $_SESSION["usuario"]; ?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-database"></i>
                        <p>
                            MANTENIMIENTOS
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="v_programa.php" class="nav-link">
                                <i class="fa fa-book nav-icon"></i>
                                <p>Programas de Estudio</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="v_estudiante.php" class="nav-link">
                                <i class="fas fa-user-graduate nav-icon"></i>
                                <p>Estudiantes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="v_periodo.php" class="nav-link">
                                <i class="far fa-calendar-alt nav-icon"></i>
                                <p>Periodo Académico</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="v_operador.php" class="nav-link">
                                <i class="fa fa-mobile nav-icon"></i>
                                <p>Operadores Teléfonicos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="v_usuario.php" class="nav-link">
                                <i class="fa fa-mobile nav-icon"></i>
                                <p>Usuarios</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-address-card"></i>
                        <p>
                            MATRÍCULA
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-user-graduate nav-icon"></i>
                                <p>Realizar Matrícula</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-newspaper nav-icon"></i>
                                <p>Nóminas</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-print"></i>
                        <p>
                            REPORTE MATRICULA
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-sticky-note nav-icon"></i>
                                <p>Comp. e Informática</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-sticky-note nav-icon"></i>
                                <p>Contabilidad</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-sticky-note nav-icon"></i>
                                <p>Enfermería Técnica</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-address-card"></i>
                        <p>
                            SISTEMA
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-users-cog nav-icon"></i>
                                <p>Configuración Usuario</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../controller/cUsuarioC.php?inputAccion=CerrarSesion" class="nav-link">
                                <i class="fas fa-sign-out-alt nav-icon"></i>
                                <p>Cerrar Sesión</p>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>