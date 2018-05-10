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
          <a class="navbar-brand" href="#home.html">
              <img src="assets/img/Logo-Diego-SinFondo2.png" alt="Diego Alexander Chacón González">
          </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="home">Inicio</a></li>
                <li><a href="about">Acerca de mi</a></li>
                <li><a href="Servicios">Servicios</a></li>
                <li><a href="experience">Experiencia</a></li>
                <li><a href="" data-toggle="modal" data-target="#myModal">Contactame</a></li>
            </ul>
        </div>
      </div>
    </nav>
    </header>
    <!-- TITEL & ENROLL -->
    <section id="title-enroll">
        <div class="jumbotron">
            <div class="container-fluid">
                <h1>Hola, Soy Diego </h1>
                <h1>Chacón</h1>
                <br>
                <p>Ingeniero en Desarrollo y QA</p>
                <p>
                    <a class="btn btn-primary btn-lg" href="https://www.linkedin.com/in/diego-chac%C3%B3n-gonz%C3%A1lez-4548b497" target="_blank">Linkedln &raquo;</a>
                </p>
            </div>
        </div>
    </section>
    <!-- ABOUT -->
    <section class="wrap" id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-sm-offset-1">
                    <h2>Sobre mi</h2>
                    <img src="assets/img/Img-yo.png" alt="Diego Alexander Chacón González" class="img-rounded">
                </div>
                <div id="about-col-text" class="col-sm-6">
                    <p>Mi nombre de <strong>Diego Alexander Chacón González</strong>, vivo en Bogotá - Colombia, soy un <strong>desarrollador de aplicaciones web, móviles</strong> y soy un experto en <strong>pruebas de software</strong>, proceso de pruebas y automatización de estas.</p>
                    <p>
                        <a class="btn btn-primary btn-lg" href="about">Leer más &raquo;</a>
                    </p>
                    <div class="row">
                        <div class="col-sm-2 col-sm-offset-2">
                            <a href="#" target="_blanck" class="badge social twitter"><i class="fab fa-twitter-square"></i></a> 
                        </div>
                        <div class="col-sm-2">
                            <a href="#" target="_blanck" class="badge social linkedin"><i class="fab fa-linkedin"></i></a>
                        </div>
                        <div class="col-sm-2">
                            <a href="#" target="_blanck" class="badge social skype"><i class="fab fa-skype"></i></a>
                        </div>
                        <div class="col-sm-2">
                            <a href="#" target="_blanck" class="badge social workana"><i class="fas fa-circle-notch"></i></a>
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
                    <a href="" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#myModal">Concatame &raquo;</a>
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