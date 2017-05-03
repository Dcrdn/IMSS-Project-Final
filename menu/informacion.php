<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IMSS</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full-width-pics.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../menu/menu.php">Instituto Mexicano del Seguro Social</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../portada/inicio.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar sesión</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Content Section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 align="center" class="section-heading">Detalles de la cita</h1>
                </div>
            </div>
        </div>
        <div  class="Recuadro">
            <?php
                session_start();
                include '../bdproyecto.php';
                $obj=new base();
                $obj2=new base();
                $c=$obj->todo($_SESSION["id"]);
                foreach ($c as $r)
                {
                    echo "<h2>Número de derechohabiente</h2>
                    <h3>$r[afiliacion]</h3>
                    <h2>Paciente</h2>
                    <h3>$r[nombres] $r[apepat] $r[apemat]</h3>";
                }
                $d=$obj2->todo2($_SESSION["id"]);
                foreach ($d as $r)
                {
                    echo "<h2>Día</h2>
                    <h3>$r[fecha]</h3>
                    <h2>Hora</h2>
                    <h3>$r[hora]</h3>
                    <h2>Lugar</h2>
                    <h3>Clinica 69</h3>
                    <h2>Doctor</h2>
                    <h3>Leonardo Alberto</h3>";
                }
    ?>
            
        </div>
        
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <style>
        .Recuadro
        {
            border: 2px solid black;
            background: #ffffff;
            padding: 5%;
        }
        .btn {
        border: 2px solid transparent;
        background: #174f33;
        color: #ffffff;
        font-size: 16px;
        line-height: 25px;
        padding: 10px 0;
        text-decoration: none;
        text-shadow: none;
        border-radius: 3px;
        box-shadow: none;
        transition: 0.25s;
        display: block;
        width: 250px;
        margin: 0 auto;
        }

        .btn:hover {
        background-color: #174f33;
        }
        
    </style>

</body>

</html>