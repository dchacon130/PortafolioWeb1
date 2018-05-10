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
                <li><a href="experience">Experiencia</a></li>
                <li><a href="" data-toggle="modal" data-target="#myModal">Contactame</a></li>
            </ul>
        </div>
      </div>
    </nav>
    </header>
    
    <section class="wrap">
        <div class="container" id="sentemail">
            <h1>Correo electronico envíado correctamente</h1>
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
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><strong>¿Puedo ayudarte?</strong> Por favor completa el formulario, escribe tus necesidades y te contactare pronto.</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
                <label for="imputName">Nombre</label>
                <input type="text" id="inputName" class="form-control" placeholder="Escribe tu nombre...">
            </div>
            <div class="form-group">
                <label for="imputMail">Correo electronico</label>
                <input type="email" id="imputMail" class="form-control" placeholder="Escribe tu correo electronico...">
            </div>
            <div class="form-group">
                <label for="imputCel">Mensaje</label>
                <textarea type="text" id="imputMessage" class="form-control" placeholder="Escribe tu mensaje..."></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Enviar</button>
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