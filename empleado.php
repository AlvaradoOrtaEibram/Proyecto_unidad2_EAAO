<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Regitro</title>
  <link rel="stylesheet" href="estilo.css">
      <body id="fon">
          <?php include ('menu.php'); ?>
                  
      <blockquote>

   <p>
     <center><h2>Registro-Empleado</h2></center>
    </p>

<section class="form-registro">

  <center><h4>-------------</h4></center>
  <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingresa tus nombres">
  <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingresa tus apellidos">
  <input class="controls" type="text" name="email" id="correo" placeholder="Ingresa tus correo">
  <input class="controls" type="text" name="Num-de-empleado" id="correo" placeholder="Ingresa numero de empleado">
  <p>Estoy de acuerdo con <a href="#">Terminos y condiciones</a></p>
  <input class="buttons" type="submit" value="Registrar">
  <p><a href="#">Ya tienes cuenta?</a></p>
</section>
</blockquote>

<?php include('footer.php');?>

      </body>
    </html>