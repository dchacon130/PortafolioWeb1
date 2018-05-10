<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Add icon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Soy DieGod</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Referencia style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Acme|Amatic+SC" rel="stylesheet"> 

    <!-- FontAwesome Icons -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/font-awesome/css/fontawesome-all.css">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <!-- HEADER -->
    <header>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button 
            type="button" 
            class="navbar-toggle collapsed" 
            data-toggle="collapse" 
            data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.html">
              <img src="assets/img/Logo-Diego-SinFondo2.png" alt="Diego Alexander Chacón González">
          </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="home">Inicio</a></li>
                <li><a href="about">Acerca de mi</a></li>
                <li><a href="Servicios">Servicios</a></li>
                <li class="active"><a href="experience">Experiencia</a></li>
                <li><a href="" data-toggle="modal" data-target="#myModal">Contactame</a></li>
            </ul>
        </div>
      </div>
    </nav>
    </header>

<section class="wrap" id="colorTextWhite">
    <div class="container">
        <h1>Experiencia</h1>
        <p>A continuación, relaciono las evidencias de algunas de mis experiencias trabajadas y desarrolladas con diferentes empresas. </p>
    </div>
</section>

    <!-- CAJAS DE EXPERIENCIA -->
<section class="wrap" id="expAndroid">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <!-- DESARROLLO WEB -->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        DESARROLLO WEB
                    </div>
                    <ul class="list-group">
                      <li class="list-group-item">
                        <a class="btn btn-primary btn-xs pull-right" role="button" data-toggle="collapse" href="#collapseExampleWeb" aria-expanded="false" aria-controls="collapseExampleWeb">
                            Más información &raquo;
                        </a>
                        <strong>Portafolio Diego</strong>
                      </li>
                    </ul>
                    <div class="collapse" id="collapseExampleWeb">
                      <div class="well">
                        Se crea una página web con el portafolios de servicios a posibles clientes que visiten la página web, una página diseñada con Moqups, Bootstrap y php.
                        <br>
                        <br>
                        Esta web se puede abrir desde diferentes dispositivos ya que es completamente responsiva y fácil de modificar o configurar ya que se maqueto bajo las normas estándares de diseño.
                        <br><br>
                        Envio de correos utilizando SMTP con Mercury de Xampp.
                      </div>
                      <div class="well">
                          Codigo Github: <a href="https://github.com/dchacon130/PortafolioWeb1.git"><i class="fab fa-github"></i></a>
                          <a class="btn btn-primary btn-xs pull-right" data-toggle="modal" data-target="#myModalWeb">
                            Imagenes
                        </a>
                      </div>
                    </div>
                </div>


                <!-- DESARROLLO ANDROID -->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        DESARROLLO ANDROID
                    </div>
                    <ul class="list-group">
                      <li class="list-group-item">
                        <a class="btn btn-primary btn-xs pull-right" role="button" data-toggle="collapse" href="#collapseExampleAndroid" aria-expanded="false" aria-controls="collapseExampleAndroid">
                            Más información &raquo;
                        </a>
                        <strong>InterlineApp</strong>
                      </li>
                    </ul>
                    <div class="collapse" id="collapseExampleAndroid">
                      <div class="well">
                        Esta aplicación registra las devoluciones de mercancía vencida, asigna número de devolución y consulta los productos a devolver si se encuentran entre las fechas permitidas. Al final de la devolución se debe enviar un correo electrónico con la cuenta de la empresa, esta aplicación crea un archivo PDF y lo adjunta al correo, como también adjunta las imágenes de los productos a devolver. 
                        <br>
                        <br>
                        Tiene la opción de cobrar y llevar los cálculos de cuanto se debe cobrar a los clientes dependiendo la cantidad de productos devueltos, realizar cuadres de caja y también envío de correo para realizar seguimiento.
                      </div>
                      <div class="well">
                          Codigo Github: <a href="https://github.com/dchacon130/InterlineAppBk.git"><i class="fab fa-github"></i></a>
                          <a class="btn btn-primary btn-xs pull-right" data-toggle="modal" data-target="#myModalAndroid">
                            Imagenes
                        </a>
                      </div>
                    </div>
                </div>

                <!-- EJECUCIÓN PRUEBAS -->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        EJECUCIÓN DE PRUEBAS QA/QC
                    </div>
                    <ul class="list-group">
                      <li class="list-group-item">
                        <a class="btn btn-primary btn-xs pull-right" role="button" data-toggle="collapse" href="#collapseExampleTesting1" aria-expanded="false" aria-controls="collapseExampleTesting1">
                            Más información &raquo;
                        </a>
                        <strong>Intergrupo S.A.</strong>
                      </li>
                    </ul>
                    <div class="collapse" id="collapseExampleTesting1">
                      <div class="well">
                        En esta empresa se ejecutó la función de analista de pruebas, desempeñando las actividades de diseño de pruebas de software, ejecución de pruebas de software, reporte de incidentes, inconsistencias y bugs de las aplicaciones, informes diarios o de avance y cartas de certificación. 
                        <br>
                        <br>
                        Clientes: Claro telefonía, Compensar Salud, Compensar Caja, Colmena Riesgos profesionales.
                      </div>
                      <div class="well">
                          Codigo Github: <a href="https://github.com/dchacon130/TestLinkRepository.git"><i class="fab fa-github"></i></a>
                          <a class="btn btn-primary btn-xs pull-right" data-toggle="modal" data-target="#myModalTesting1">
                            Imagenes
                        </a>
                      </div>
                    </div>
                     
                    <!-- QVISION -->
                     <ul class="list-group">
                      <li class="list-group-item">
                        <a class="btn btn-primary btn-xs pull-right" role="button" data-toggle="collapse" href="#collapseExampleTesting2" aria-expanded="false" aria-controls="collapseExampleTesting2">
                            Más información &raquo;
                        </a>
                        <strong>Q-Vision</strong>
                      </li>
                    </ul>
                    <div class="collapse" id="collapseExampleTesting2">
                      <div class="well">
                        En esta empresa se ejecutó la función de analista de pruebas, desempeñando las actividades de diseño de pruebas de software, ejecución de pruebas de software, reporte de incidentes, inconsistencias y bugs de las aplicaciones, informes diarios o de avance y cartas de certificación. 
                        <br>
                        <br>
                        Clientes: Homecenter.
                        <br>
                        <br>
                        Se realizaron pruebas de pagos con tarjetas de crédito y débito, pruebas a cajas de pago, pruebas a descuentos y pruebas de aplicaciones SAP.
                      </div>
                      <div class="well">
                          Codigo Github: <a href="https://github.com/dchacon130/TestLinkRepository.git"><i class="fab fa-github"></i></a>
                          <a class="btn btn-primary btn-xs pull-right" data-toggle="modal" data-target="#myModalTesting1">
                            Imagenes
                        </a>
                      </div>
                    </div>
                </div>

                 <!-- DESARROLLO SELENIUM -->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        AUTOMATIZACIÓN SELENIUM
                    </div>
                    <ul class="list-group">
                      <li class="list-group-item">
                        <a class="btn btn-primary btn-xs pull-right" role="button" data-toggle="collapse" href="#collapseExampleSelenium" aria-expanded="false" aria-controls="collapseExampleSelenium">
                            Más información &raquo;
                        </a>
                        <strong>Speeron</strong>
                      </li>
                    </ul>
                    <div class="collapse" id="collapseExampleSelenium">
                      <div class="well">
                        Se desarrolla aplicación de automatización cargando datos desde un archivo Excel, para ingresarlos en la página web y realizar la consulta de múltiples números de reserva y de esta forma realizar el Chek-In de un huésped. 
                        <br>
                        <br>
                        Se utilizo <strong>ExcelDataAccess</strong> para el acceso a los datos del documento Excel, <strong>ConfigurationManager</strong> para configurar las rutas en el archivo App.config, por último se utilizó <strong>PhantomJSDriver</strong> para las pruebas de carga.
                      </div>
                      
                      <div class="well">
                          Codigo Github: <a href="https://github.com/dchacon130/TestGooglevSelenium.git"><i class="fab fa-github"></i></a>
                          <a class="btn btn-primary btn-xs pull-right" data-toggle="modal" data-target="#myModalSeleniumImg1">
                            Imagenes
                          </a>
                      </div>
                    </div>
                </div>


                <!-- DESARROLLO RPA -->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        DESARROLLO RPA
                    </div>
                    <ul class="list-group">
                      <li class="list-group-item">
                        <a class="btn btn-primary btn-xs pull-right" role="button" data-toggle="collapse" href="#collapseExampleRPA" aria-expanded="false" aria-controls="collapseExampleRPA">
                            Más información &raquo;
                        </a>
                        <strong>...</strong>
                      </li>
                    </ul>
                    <div class="collapse" id="collapseExampleRPA">
                      <div class="well">
                        Actualmente se cuenta con un trabajo de ejemplo para próximos desarrollos.
                      </div>
                      <div class="well">
                          Codigo Github: <a href="#"><i class="fab fa-github"></i></a>
                          <a class="btn btn-primary btn-xs pull-right" data-toggle="modal" data-target="#myModalRPA">
                            Imagenes
                        </a>
                      </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="wrap2">{

</section>

<!-- CONTACTAME - CONTACT -->
    <section class="wrap" id="contactMe">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <p class="lead"><strong>¿Puedo ayudarte?</strong> Por favor completa el formulario, escribe tus necesidades y te contactare pronto.</p>
                </div>
                <div class="col-sm-5">
                    <a href="" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#myModal">Concatame</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="footer">
        <div class="container-fluid">
            <p>&copy; 2018 | Hecho con <i class="fa fa-heart"></i> por Diego Chacón.</p>
        </div>
    </footer>

    <!-- HIDDEN CONTACT MODAL -->
    <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
        <form class="text-left" action="lib/SendEmail.php" method="post">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><strong>¿Puedo ayudarte?</strong> Por favor completa el formulario, escribe tus necesidades y te contactare pronto.</h4>
          </div>
          
          <div class="modal-body">
                <div class="form-group">
                    <label for="imputName">* Nombre</label>
                    <input type="text" name="imputName" id="imputName" class="form-control" placeholder="Escribe tu nombre..." required>
                </div>
                <div class="form-group">
                    <label for="imputMail">* Correo electronico</label>
                    <input type="email" name="imputMail" id="imputMail" class="form-control" placeholder="Escribe tu correo electronico..." required>
                </div>
                <div class="form-group">
                    <label for="imputTel">Telefono</label>
                    <input type="number" name="imputTel" id="imputTel" class="form-control" placeholder="Escribe tu correo electronico..." min="8">
                </div>
                <div class="form-group">
                    <label for="imputMessage">* Mensaje</label>
                    <textarea type="text" name="imputMessage" id="imputMessage" class="form-control" placeholder="Escribe tu mensaje..." required></textarea>
                </div>
          </div>
          <div class="modal-footer">
            <div class="form-group text-rigth">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <label for="entrar"></label>
                <input type="submit" name="enviar" value="Enviar" class="btn btn-primary" role="button"/>
            </div>
          </div>
        </form>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


<!-- HIDDEN WEB -->
    <div class="modal fade" tabindex="-1" role="dialog" id="myModalWeb">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Portafolio</h4>
          </div>
          <div class="modal-body">
            <div class="row">
                <div class="col-sm-9">
                  <img src="assets/img/Portfolio-1.png" alt="Portfolio">  
                </div>
            </div>
          </div>
          <div class="modal-footer">
            Codigo Github: <a href="https://github.com/dchacon130/PortafolioWeb1.git"><i class="fab fa-github"></i></a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

<!-- HIDDEN ANDROID -->
    <div class="modal fade" tabindex="-1" role="dialog" id="myModalAndroid">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">InterlineApp</h4>
          </div>
          <div class="modal-body">
            <div class="row">
                <div class="col-sm-3">
                  <img src="assets/img/android-img4.png" alt="Login">  
                </div>
                <div class="col-sm-3">
                  <img src="assets/img/android-img6.png" alt="Busqueda">  
                </div>
                <div class="col-sm-3">
                  <img src="assets/img/android-img2.png" alt="Ventanas">  
                </div>
            </div>
          </div>
          <div class="modal-footer">
            Codigo Github: <a href="https://github.com/dchacon130/InterlineAppBk.git"><i class="fab fa-github"></i></a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


<!-- HIDDEN TESTIG 1 -->
    <div class="modal fade" tabindex="-1" role="dialog" id="myModalTesting1">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Pruebas de software</h4>
          </div>
          <div class="modal-body">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  </ol>
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="assets/img/Bugtracker-img2.png" alt="...">
                      <div class="carousel-caption">
                        ...
                      </div>
                    </div>
                    <div class="item">
                      <img src="assets/img/TestLink-1.png" alt="...">
                      <div class="carousel-caption">
                        ...
                      </div>
                    </div>
                    ...
                  </div>
                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
          </div>
          <div class="modal-footer">
            Codigo Github: <a href="https://github.com/dchacon130/TestLinkRepository.git"><i class="fab fa-github"></i></a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


<!-- HIDDEN SELENIUM -->
    <div class="modal fade" tabindex="-1" role="dialog" id="myModalSeleniumImg1">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Speeron</h4>
          </div>
          <div class="modal-body">
            <div class="row">
                <div class="col-sm-8">
                  <img src="assets/img/Selenium-1.png" alt="Login">  
                </div>
            </div>
          </div>
          <div class="modal-footer">
            Codigo Github: <a href="https://github.com/dchacon130/TestGooglevSelenium.git"><i class="fab fa-github"></i></a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


<!-- HIDDEN RPA -->
    <div class="modal fade" tabindex="-1" role="dialog" id="myModalRPA">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Estamos trabajando...</h4>
          </div>
          <div class="modal-body">
            <div class="row">
                <div class="col-sm-8">
                  <img src="assets/img/estamos-trabajando.png" alt="Login">  
                </div>
            </div>
          </div>
          <div class="modal-footer">
            Codigo Github: <a href="#"><i class="fab fa-github"></i></a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>