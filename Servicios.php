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
          <a class="navbar-brand" href="index">
              <img src="assets/img/Logo-Diego-SinFondo2.png" alt="Diego Alexander Chacón González">
          </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index">Inicio</a></li>
                <li><a href="about">Acerca de mi</a></li>
                <li class="active"><a href="Servicios">Servicios</a></li>
                <li><a href="experience">Experiencia</a></li>
                <li><a href="" data-toggle="modal" data-target="#myModal">Contactame</a></li>
            </ul>
        </div>
      </div>
    </nav>
    </header>
    
    <div class="wrap2">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div id="portafolioServicios">
                        <h1>Servicios</h1>
                        <p>
                        A continuación encontrara el portafolio de servicios:
                        </p>   
                    </div>  
                </div>
            </div>
        </div>
    </div>
    
    <section class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <!-- NAV TABS -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#back-end" arial-controls="back-end" data-toggle="tab" role="tab">Desarrollo Web</a>
                        </li>
                        <li role="presentation">
                            <a href="#android" arial-controls="android" data-toggle="tab" role="tab">Android</a>
                        </li>
                        <li role="presentation">
                            <a href="#qa-qc" arial-controls="qa-qc" data-toggle="tab" role="tab">QA/QC</a>
                        </li>
                        <li role="presentation">
                            <a href="#selenium" arial-controls="selenium" data-toggle="tab" role="tab">Automatización</a>
                        </li>
                        <li role="presentation">
                            <a href="#rpa" arial-controls="rpa" data-toggle="tab" role="tab">RPA</a>
                        </li>
                    </ul>
                    <!-- END NAV TABS -->
                    <br>
                    <!-- TAP CONTENT -->
                    <div class="tab-content">
                        <!-- DESARROLLO WEB FRONT-END AND BACK-END-->
                        <div role="tappanel" class="tab-pane active" id="back-end">
                            <div class="wrap2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-1" >
                                            <h3>DESARROLLO WEB FRONT-END Y BACK-END</h3>
                                            <br>
                                            <p>
                                                Desarrollo y mantenimiento de aplicaciones web, desarrollando la parte del back-end con la ayuda del Framework de Laravel y el frond-end utilizando la última versión de Bootstrap.
                                                <br><br>
                                                El transporte de datos se trabaja de forma segura con servicios web REST (Representational State Transfer) desarrollado bajo el lenguaje PHP.
                                                <br><br>
                                                Este tipo de aplicaciones se complementan con bases de datos robustas como lo son MySQL 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- LOGOS -->
                            <div class="wrap">
                                <div class="container">
                                     <div class="row">
                                         <div class="col-sm-3 col-sm-offset-1">
                                            <a href="https://getbootstrap.com/docs/4.1/getting-started/introduction/" target="_blank">
                                                <img src="assets/img/LogoBootstrap.png" alt="Bootstrap" class="img-circle">
                                            </a>
                                         </div>
                                         <div class="col-sm-3">
                                             <a href="https://laravel.com/docs/5.6" target="_blank">
                                                 <img src="assets/img/LogoLaravel.png" alt="Laravel" class="img-circle">
                                             </a>
                                         </div>
                                         <div class="col-sm-3">
                                             <a href="https://dev.mysql.com/doc/" target="_blank">
                                                 <img src="assets/img/LogoMySQL.png" alt="MySQL" class="img-circle">
                                             </a>
                                         </div>
                                     </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div role="tappanel" class="tab-pane" id="android">
                            <!-- DESARROLLO ANDROID-->
                            <div class="wrap2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-1" >
                                            <h3>DESARROLLO DE APLICACIONES ANDROID</h3>
                                            <br>
                                            <p>
                                            Desarrollo de aplicaciones Android completamente nativas, utilizando Java y XML, con el Framework Android Studio, aplicando correctamente el ciclo de vida de una aplicación, aplicaciones intuitivas y rápidas.
                                            <br><br>
                                            Utilizando el transporte de datos de forma segura con servicios web REST desarrollado bajo el lenguaje php.
                                            <br><br>
                                            Este tipo de aplicaciones se complementan con bases de datos robustas como lo son MySQL Y SQLite para registrar datos en el dispositivo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- LOGOS -->
                            <div class="wrap">
                                <div class="container">
                                     <div class="row">
                                         <div class="col-sm-3 col-sm-offset-1">
                                            <a href="https://developer.android.com/studio/" target="_blank">
                                                <img src="assets/img/LogoAndroid.png" alt="Android" class="img-rounded">
                                            </a>
                                         </div>
                                         <div class="col-sm-3">
                                             <a href="https://www.java.com/es/download/" target="_blank">
                                                 <img src="assets/img/LogoJava.png" alt="Java" class="img-rounded">
                                             </a>
                                         </div>
                                         <div class="col-sm-3">
                                             <a href="https://www.sqlite.org/index.html" target="_blank">
                                                 <img src="assets/img/LogoSqlite.png" alt="SQlite" class="img-rounded">
                                             </a>
                                         </div>
                                     </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div role="tappanel" class="tab-pane" id="qa-qc">
                            
                            <!-- QA/QC ASEGURAMIENTO Y CONTROL DE CALIDAD -->
                            <div class="wrap2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-1" >
                                            <h3>QA/QC ASEGURAMIENTO Y CONTROL DE CALIDAD</h3>
                                            <br>
                                            <p>
                                            Creación y asistencia a los procesos de pruebas de software de la empresa, Capacitaciones de las normas de calidad internacionales ISTQB, capacitaciones de las herramientas Testlink, Capacitaciones de la herramienta Mantis Bug Tracker.
                                            <br><br>
                                            También se realiza el diseño de casos de pruebas, ejecución de pruebas, toma de evidencias y certificación con informes del porcentaje de avance de las pruebas hasta llegar a una certificación de pruebas de software.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- LOGOS -->
                            <div class="wrap">
                                <div class="container">
                                     <div class="row">
                                         <div class="col-sm-3 col-sm-offset-1">
                                            <a href="https://www.istqb.org/" target="_blank">
                                                <img src="assets/img/LogoISQTB.png" alt="ISTQB" class="img-circle">
                                            </a>
                                         </div>
                                         <div class="col-sm-3">
                                             <a href="http://testlink.org/" target="_blank">
                                                 <img src="assets/img/LogoTestLink.png" alt="TestLink" class="img-circle">
                                             </a>
                                         </div>
                                         <div class="col-sm-3">
                                             <a href="https://www.mantisbt.org/" target="_blank">
                                                 <img src="assets/img/LogoMantis.png" alt="MantisBT" class="img-circle">
                                             </a>
                                         </div>
                                     </div>
                                </div>
                            </div>

                        </div>
                        
                        <div role="tappanel" class="tab-pane" id="selenium">
                        
                        <!-- AUTOMATIZACIÓN CON SELENIUM WEBDRIVER -->
                            <div class="wrap2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-1" >
                                            <h3>AUTOMATIZACIÓN CON SELENIUM WEBDRIVER</h3>
                                            <br>
                                            <p>
                                            Desarrollo de automatizaciones web con la herramienta Selenium webdriver en lenguaje C#, campos input, selección de cajas de texto, verificación de textos, pantallas emergentes, mensajes de advertencia, cargas de datos desde bases de datos y/o archivos Excel, ejecución por ciclos o por casos de prueba creados como base, también es posible realizar pruebas de carga con Selenium WebDriver y Visual Studio.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- LOGOS -->
                            <div class="wrap">
                                <div class="container">
                                     <div class="row">
                                         <div class="col-sm-3 col-sm-offset-3">
                                            <a href="https://www.seleniumhq.org/docs/" target="_blank">
                                                <img src="assets/img/LogoSelenium.png" alt="Selenium" class="img-circle">
                                            </a>
                                         </div>
                                         <div class="col-sm-3">
                                             <a href="https://docs.microsoft.com/en-us/dotnet/csharp/getting-started/introduction-to-the-csharp-language-and-the-net-framework" target="_blank">
                                                 <img src="assets/img/LogoCsharp.png" alt="Csharp" class="img-circle">
                                             </a>
                                         </div>
                                     </div>
                                </div>
                            </div>

                        </div>

                        <div role="tappanel" class="tab-pane" id="rpa">
                        
                        <!-- DESARROLLO CON RPA (ROBOTIC PROCESS AUTOMATION) -->
                            <div class="wrap2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-1" >
                                            <h3>DESARROLLO CON RPA (ROBOTIC PROCESS AUTOMATION)</h3>
                                            <br>
                                            <p>
                                            Desarrollo de automatización para procesos largos y repetitivos, donde se involucran diferentes tipos de aplicaciones como lo son documentos de Excel, cálculos, envíos a páginas web, envíos por correo electrónico, manipulación o configuración de aplicaciones para posteriores ejecuciones, creación masiva de datos de pruebas o datos que de forma manual tome mucho tiempo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- LOGOS -->
                            <div class="wrap">
                                <div class="container">
                                     <div class="row">
                                         <div class="col-sm-3 col-sm-offset-4">
                                            <a href="https://www.uipath.com/" target="_blank">
                                                <img src="assets/img/LogoRPA.png" alt="RPA" class="img-rounded">
                                            </a>
                                         </div>
                                         <div class="col-sm-8 col-sm-offset-1">
                                             <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gp3hG9UFFk4"></iframe>
                                            </div>
                                         </div> 
                                     </div>
                                </div>
                            </div>

                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>