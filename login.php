<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistema academico! | </title>

    <!-- Bootstrap -->
    <link href="Gentella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="Gentella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="Gentella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="Gentella/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="Gentella/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <img  width="150px" src="Gentella/img/logo.png" alt="">

            <form method="POST" action="operaciones/iniciar_sesion.php">
              <h1>Inicio de Sesión</h1>
              <div>
                <input type="text" name="usuario" class="form-control" placeholder="Usuario" required="" />
              </div> 
              <div>
                <input type="password" name="password" class="form-control" placeholder="Contraseña" required="" />
              </div>
              <div>
                <button type="submit">Iniciar Sesión</button>
                <a class="reset_pass" href="#">Olvidaste tu contraseña?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Nuevo en el sitio?
                  <a href="crear_usuario.php" class="to_register"> Crear Cuenta </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class=""></i> I.E.S.T.P. "HUANTA"</h1>
                  <p>Bienvenido a la plataforma de Portafolio Docente, Inicie Sesion para acceder en modo Administrador</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        
      </div>
    </div>
  </body>
</html>