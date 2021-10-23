 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
     <!-- Left navbar links -->
     <ul class="navbar-nav">
         <li class="nav-item">
             <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
         </li>
         <li class="nav-item d-none d-sm-inline-block">
           <h3 style="font-size: 16px; font-weight: bold; color: #3300ff; padding: 8px;"> IESTP VÍCTOR RAÚL HAYA DE LA TORRE </h3>
        </li>

     </ul>

     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">



         <!-- Notifications Dropdown Menu -->
         <li class="nav-item dropdown">
             <a class="nav-link" data-toggle="dropdown" href="#">
                 <i class="fas fa-user-cog"></i> Sesion de <?php echo $_SESSION["usuario"]; ?> | Área:  <?php echo $_SESSION["nomb_are"]; ?>
             </a>
             <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                 <div class="dropdown-divider"></div>
                 <a href="#" class="dropdown-item">
                     <i class="fas fa-envelope mr-2"></i> Configuración
                 </a>
                 <div class="dropdown-divider"></div>
                 <a href="../controller/cUsuarioC.php?inputAccion=CerrarSesion" class="dropdown-item">
                     <i class="fas fa-sign-out-alt mr-2"></i> Cerrar Sesión
                 </a>
                
             </div>
         </li>

     </ul>
 </nav>
 <!-- /.navbar -->