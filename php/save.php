<?php
  if(isset($_GET['dato'])){
    echo "Se envió " . $_GET['dato'];
  } else {
    echo "No se ha enviado un dato correcto";
  }
?>