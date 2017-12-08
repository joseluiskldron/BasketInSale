<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Tenis
    </title>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link rel="stylesheet" href="./tenis-estilos.css">
  </head>
  <body style="margin: 0 auto; font-family: Josefin Sans;">
    <div id="contenedor">
    <div id="menu"> &#160;&#160;&#160;&#160;&#160;&#160;
           <a href="index.php" >Inicio</a>&#160;&#160;&#160;&#160;&#160;&#160;
           <a href= Tenis.php>Tenis</a>&#160;&#160;&#160;&#160;&#160;&#160;
           <a href="ROPA.php" >Ropa</a>&#160;&#160;&#160;&#160;&#160;&#160;
           <a href="Accesorios.php" >Accesorios</a>&#160;&#160;&#160;&#160;&#160;&#160;
           <a href="registro.html"> Iniciar Sesion</a>&#160;&#160;&#160;&#160;&#160;&#160;

    </div>
    <div id="titulo">
      Accesorios
    </div>
    <div id="productos">
      <?php
        $mysqli = new mysqli('localhost', 'root', '', 'basketballinsale');
        $consulta = "select * from productos where descripcion='ACCESORIOS'";
        $consulta2 ="select * from sesion";
        $res = $mysqli->query($consulta);
        $sesion=$mysqli->query($consulta2);
        $sesionIniciada = false;
        while ($a = $sesion->fetch_object()) {
          if(($a->sesion)>0){
            $sesionIniciada=true;
          }
        }
        while($f = $res->fetch_object()){
            print '<div style="float: left; width: 25%; padding: 0 10px;">';
            print '<img style="width: 100%;" src="'.$f->imagen.'" alt="ups :C" />';
            print '<div style="text-align: center;">'.$f->nombre.' </div>';
            print '<div style="text-align: center;">'.$f->disponibilidad.' piezas disponibles</div>';
            if($sesionIniciada){
              print '<a href="detalle.php/?id='.$f->id_producto.'" style="float: left; width: 100%; text-align: center;"><button>Comprar</button></a>';
            }
            print '</div>';
        }
      ?>
    </div>
  </body>
</html>
