<!DOCTYPE html>
<html lang="es">

<head>
    <link href="dist/css/adminlte.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/style_login.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" type="image/x-icon" href="../images/logoico.png">
    <title>Inicio de Sesión</title>
</head>

<body>
    <div class="fixed-top">

        <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear">
            <div class="container">
                <a class="navbar-brand" rel="nofollow" target="_blank" href="#" style="font-size: 1.4em"> SysMatVRHT v1.0 </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <!--                            <li class="nav-item">
                                <a class="nav-link" style="color:#fff" href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Olvido su Contraseña</a>
                            </li>-->

                        <li class="nav-item">
                            <a class="nav-link" style="color:#fff" href="http://institutosantarosa.edu.pe/"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Ir a Pagina Principal</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <section style="margin-top: 5em;">
        <div class="container" style="background-color: #fff">
            <div class="row">

                <div class="col-md-8">

                    <img style="padding: 1em;margin-top: 1em;margin-bottom: 1em; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);" class="img-fluid" src="../images/matriculas-online-web.jpg" alt="" />

                </div>
                <div class="col-md-4 login-sec">
                    <card>
                        <!--<div class="card-header">-->
                        <h3 class="text-center" style="color:#08294D;padding-bottom: 0.7em; font-weight: 600">Iniciar Sesión</h3>

                        <div class="card-body" style="box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);border: 1px solid #E9E8E2; background-color: #08294D; padding: 1.5em 2em;border-radius: 5px">
                            <!--<form class="login-form">-->
                            <div class="form-group">
                                <label style="color:#FFF;font-weight: 600" for="exampleInputEmail1">Login:</label>
                                <input id="InputLogin" type="text" class="form-control text-center" placeholder="Ingrese Login" maxlength="20" autofocus="autofocus">
                            </div>
                            <div class="form-group">
                                <label style="color:#FFF;font-weight: 600" for="exampleInputPassword1">Password:</label>
                                <input id="InputPassword" type="password" class="form-control text-center" placeholder="Ingrese Password" maxlength="20">
                            </div>
                            <div class="form-group" id="msg">

                            </div>
                            <div class="form-group">
                                <!--<label class="form-check-label">-->
                                <!--                                    <input type="checkbox" class="form-check-input">-->
                                <!--<a href="#" class="text-info">Olvido su Contraseña</a>-->
                                <!--</label>-->
                                <button style="margin-top: 2em; padding: 0.5em" onclick="ValidarAcceso()" class="btn btn-danger btn-block"><i class="fa fa-lock"></i> Iniciar Sesión</button>
                            </div>

                        </div>
                    </card>
                    <!--</form>-->
                    <!--<div class="copy-text">Created with <i class="fa fa-heart"></i> by Grafreez</div>-->
                </div>
            </div>
        </div>
    </section>
    <footer style="margin-top: 1em; color:#fff">
        <div class="footer-copyright text-center">
            <span>
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved | TPW - FSA
            </span>
        </div>
    </footer>
    <script src="../js/js_usuario.js"></script>
    <script src="plugins/jquery/jquery.js" type="text/javascript"></script>
    <script src="plugins/bootstrap/js/bootstrap.js" type="text/javascript"></script>
    
</body>

</html>