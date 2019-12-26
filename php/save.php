<?php
  if(isset($_GET['dato'])){
    echo "Se envió " . $_GET['dato'] . "<br>";

    $host = "ec2-107-22-234-204.compute-1.amazonaws.com";
    $user = "bzijorxrsqakbv";
    $password = "b7a96af5c04282ee942f759ca862a1bbdaf05e528fa392eff300e039c98d6358";
    $dbname = "d4o7frdi5ou1qk";
    $port = "5432";

    //$connStr = "pgsql:host=" . $host . ";port=" . $port . ";dbname=" . $dbname . ";user=" . $user . ";password=" . $password;
    $conexion = conectar($user, $password, $host, $dbname);
    pg_query($conexion, "insert into datos(dato) values('" . $_GET['dato'] . "')");
    echo "Agregado";

  } else {
    echo "No se ha enviado un dato correcto";
  }

  function conectar( $usuario, $pass, $host, $bd )
    {
      $conexion = pg_connect( "user=".$usuario." ".
                            "password=".$pass." ".
                            "host=".$host." ".
                            "dbname=".$bd
                            ) or die( "Error al conectar: ".pg_last_error() );
    return $conexion;
    }
?>