<?php
  if(isset($_GET['dato'])){
    echo "Se envió " . $_GET['dato'] . "<br>";

    $host = "ec2-107-22-216-123.compute-1.amazonaws.com";
    $user = "pdypewzcmiidot";
    $password = "ddf779b97e2cb698f922969424bc258f4d1649784be568a569a8c2be90ee7a9c";
    $dbname = "dmqe2uft63ru6";
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