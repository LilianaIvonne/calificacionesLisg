<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/clase2.css" rel="stylesheet">

     </head>
  <body> 

  
    <header class="container-fluid">
      <div class="container">
        <h1 class="text-center">Inicio </h1> 
      </div>
    </header>


    <!-- aquí comienza el Formulario -->
    <div class="container">
      <div class="row">
        <div class="col-md-4">
        <form action="validar.php" method="POST">
          <br>
          <label>Usuario</label>
          <input type="text" class ="form-control" name="usuario" placeholder="introduce tu nombre">
          <label>contraseña</label>
          <input type="password" class ="form-control" name="pass" placeholder="introduce tu passwprd">
          <br>
          <input type="submit" class= "btn btn-primary btn-block" value="Enviar">

        
        </form>
       </div>
      </div>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>