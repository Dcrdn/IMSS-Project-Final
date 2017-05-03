<?php
    session_start();
    $boton=$_POST["boton"];
    include 'bdproyecto.php';
    $obj=new base();
    if($boton=="Iniciar sesion")
    {
        $usuario=$_POST["correo"];
        $contra=$_POST["contra"];
        $c=$obj->Auth($usuario, $contra);
        foreach ($c as $r)
        {
        if( isset($r["nombres"]))
            {
            $_SESSION["sesion"]=1;
            $_SESSION["id"]=$r["id"];
            $_SESSION["nombres"]=$r["nombres"];
            header("location:menu/menu.php");
            }
        else
            {
            $_SESSION["sesion"]=0;
            header("location:inout/Login.php");
            }
        }
    }
    if($boton=="Registrarse")
    {
    $nombres=$_POST["nombres"];
    $apepat=$_POST["apepat"];
    $apemat=$_POST["apemat"];
    $correo=$_POST["correo"];
    $contra=$_POST["contra"];
    $afiliacion=$_POST["afiliacion"];
    $c=$obj->agregarus($nombres,$apepat,$apemat,$correo,$cont,$afiliacion);
    $c=$obj->Auth($correo, $contra);
        foreach ($c as $r)
        {
            $_SESSION["sesion"]=1;
            $_SESSION["id"]=$r["id"];
            $_SESSION["nombres"]=$r["nombres"];
        }
    header("location:menu/menu.php");
    $_SESSION["sesion"]=1;
    $_SESSION["id"]=1;
    }
    if($boton=="Agendar")
    {
    $dia=$_POST["dia"];
    $mes=$_POST["mes"];
    $ano=$_POST["ano"];
    $hora=$_POST["hora"];
    $min=$_POST["min"];
    $fecha="$dia $mes $ano";
    $tiempo="$hora:$min";
    $c=$obj->agregarcita($fecha, $_SESSION["id"], $tiempo);
    header("location:menu/informacion.php");
    }
    if($boton=="Si")
    {
        echo"entro";
    $c=$obj->borrarcita($_SESSION["id"]);
    header("location:menu/menu.php");
    }
    if($boton=="No")
    {
    header("location:menu/menu.php");
    }
    
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Iniciar sesión</title>
      <link rel="stylesheet" href="css/style.css">
</head>
  <body>
      <h1>
       mequedoaqui
      </h1>
  </body>
</html>