<?php
include "include/conexion.php";
include "include/busquedas.php";
include "include/verificar_sesion.php";

$id_unidad_didactica = $_GET['id'];
$busc_unidad_didactica = buscarUnidDidacById($conexion, $id_unidad_didactica);
$res_b_unidad_didactica = mysqli_fetch_array($busc_unidad_didactica);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gentelella Alela! | </title>
    <link rel="shortcut icon" href="Gentella/img/logo1.png">
    <!-- Bootstrap -->
    <link href="Gentella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="Gentella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="Gentella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="Gentella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="Gentella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="Gentella/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="Gentella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="Gentella/build/css/custom.min.css" rel="stylesheet">
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php include "include/menu.php" ?>  
        <!-- Menu en la parte superior -->
        <!-- page content -->
        <div class="right_col" role="main">
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>Editar unidad_didactica</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" method="POST" action="operaciones/actualizar_udidact.php">
                        <input type="hidden" name="id" value="<?php echo $id_unidad_didactica;?>">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Descripcion :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="descripcion" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_unidad_didactica['descripcion']; ?>">
                        </div>
                      </div>
      
            
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Programa de Estudios :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="id_programa_estudio" id="id_programa_estudio" class="form-control col-md-7 col-xs-12">
                          <option value="">Seleccione</option>
                          <?php
                          $mostrar_pe = buscarProgramaEstudio($conexion);
                          while ($res_b_pe = mysqli_fetch_array($mostrar_pe)) {
                          ?>
                          <option value="<?php echo $res_b_pe['id']; ?>"
                          <?php if ($res_b_unidad_didactica['id_programa_estudio'] == $res_b_pe['id']) {
                            echo "selected";
                          } ?>
                          ><?php echo $res_b_pe['nombre']; ?></option>
                          <?php
                          };
                          ?>
                        </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Id Modulo :</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="id_modulo" id="id_modulo" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_unidad_didactica['id_modulo']; ?>">
                          <option value="">Seleccione</option>
                          <?php
                          $id_modulo_unidad_didactica = $res_b_unidad_didactica['id_modulo'];
                          $mostrar_modulo = buscarModuloProfesional($conexion);
                          while ($res_b_modulo = mysqli_fetch_array($mostrar_modulo)) {
                            $id_modulo = $res_b_modulo['id'];
                          ?>
                          <option value="<?php echo $res_b_modulo['id']; ?>" 
                          <?php if ($id_modulo_unidad_didactica == $id_modulo) {
                            echo "selected";
                          } ?>
                          ><?php echo $res_b_modulo['id']; ?></option>
                          <?php
                          };
                          ?>
                        </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Semestre:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="id_semestre" id="id_semestre" class="form-control col-md-7 col-xs-12">
                          <option value="">Seleccione</option>
                          <?php
                          $mostrar_sem = buscarSemestre($conexion);
                          while ($res_b_sem = mysqli_fetch_array($mostrar_sem)) {
                          ?>
                          <option value="<?php echo $res_b_sem['id']; ?>"
                          <?php if ($res_b_unidad_didactica['id_semestre'] == $res_b_sem['id']) {
                            echo "selected";
                          } ?>
                          ><?php echo $res_b_sem['descripcion']; ?></option>
                          <?php
                          };
                          ?>
                        </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Creditos :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="creditos" maxlength="9" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_unidad_didactica['creditos']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Horas :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="horas" maxlength="9" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_unidad_didactica['horas']; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tipo :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="tipo" maxlength="9" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_unidad_didactica['tipo']; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Orden :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="orden" maxlength="9" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_unidad_didactica['orden']; ?>">
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="unidad_didactica.php"><button class="btn btn-primary" type="button">Cancelar</button></a>
                          
						              <button class="btn btn-primary" type="reset">Limpiar</button>
                          <button type="submit" class="btn btn-success">Actualizar Datos</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- /page content -->

<?php
include "include/footer.php";

?>

                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- /page content -->
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <!-- jQuery -->
    <script src="Gentella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="Gentella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="Gentella/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="Gentella/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="Gentella/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="Gentella/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="Gentella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="Gentella/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="Gentella/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="Gentella/vendors/Flot/jquery.flot.js"></script>
    <script src="Gentella/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="Gentella/vendors/Flot/jquery.flot.time.js"></script>
    <script src="Gentella/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="Gentella/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="Gentella/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="Gentella/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="Gentella/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="Gentella/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="Gentella/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="Gentella/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="Gentella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="Gentella/vendors/moment/min/moment.min.js"></script>
    <script src="Gentella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="Gentella/build/js/custom.min.js"></script>
  </body>
</html>