<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Detalle</title>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
  </head>
  <body style="margin: 0 auto; font-family: Josefin Sans;">
    <?php
      $mysqli = new mysqli('localhost', 'root', '', 'basketballinsale');
      $consulta = "select * from productos where id_producto='".$_GET['id']."'";
      $res = $mysqli->query($consulta);
      while($f = $res->fetch_object()){
          print '<div style="float: left; width: 25%; padding: 0 10px;">';
          print '<img style="width: 100%;" src="'.$f->imagen.'" alt="ups :C" />';
          print '<div style="text-align: center;">'.$f->nombre.' </div>';
          print '<div style="text-align: center;">'.$f->disponibilidad.' piezas disponibles</div>';
          print '</div>';
      }


    ?>
    <form name="Registro"action="registro.php"method="POST">
    Nombre:<input type="text"name="nombre"><br><br>
    Apellidos:<input type="text"name="apellidos"><br><br>
    Edad:<input type="number"name="a�os"><br><br>
    Fecha de Nacimiento:<input type="date"name="cumple"><br><br>
    Ciudad de Origen:
          <select name="ciudad">
          <option value="aho">Ahome</option>
          <option value="fuer">El Fuerte</option>
          <option value="choix">Choix</option>
          <option value="gsv">Guasave</option>
          <option value="sdl">Sinaloa de Leyva</option>
          <option value="ang">Angostura</option>
          <option value="Sal">Salvador Alvarado</option>
          <option value="Moc">Mocorito</option>
          <option value="Bad">Badiraguato</option>
          <option value="Nav">Navolato</option>
          <option value="cul">Culiacan</option>
          <option value="cos">Cosala</option>
          <option value="Elot">Elota</option>
          <option value="sig">San Ignacio</option>
          <option value="mzt">Mazatlan</option>
          <option value="cnc">Concordia</option>
          <option value="rsr">El Rosario</option>
          <option value="esc">Escuinapa</option>
          </select><br><br>
    Direccion:<input type="text"name="direccion"><br><br>
    Sexo:
        <input type="radio"name="sexo"value="H">Masculino
        <input type="radio"name="sexo"value="M">Femenino<br><br>
    Email:<input type="text"name="correo"><br><br>

    <input type="submit"name="Aceptar"value="Comprar">

    <input type="reset"value="Borrar">

    </form>
  </body>
</html>
