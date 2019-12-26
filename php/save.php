<?php
  if(isset($_GET['dato'])){
    echo "Se envió " . $_GET['dato'];
    // detalles de la conexion
    $conn_string = "host=ec2-107-22-216-123.compute-1.amazonaws.com port=5432 dbname=dmqe2uft63ru6 user=pdypewzcmiidot password=ddf779b97e2cb698f922969424bc258f4d1649784be568a569a8c2be90ee7a9c options='--client_encoding=UTF8' ssl='true'";
    
    // establecemos una conexion con el servidor postgresSQL
    $dbconn = pg_connect($conn_string);
    
    // Revisamos el estado de la conexion en caso de errores. 
    if(!$dbconn) {
      echo "Error: No se ha podido conectar a la base de datos\n";
    } else {
      echo "Conexión exitosa\n";
    }
 
    // Close connection
    pg_close($dbconn);
  } else {
    echo "No se ha enviado un dato correcto";
  }
?>