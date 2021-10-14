<?php 
$cleardb_url = parse_url(getenv("mysql://b01f690be42feb:027e4917@us-cdbr-east-04.cleardb.com/heroku_fa7c8586c8ee031?reconnect=true"));
$servername = "us-cdbr-east-04.cleardb.com";
$username = "b01f690be42feb";
$password = "027e4917";
$dbname = "heroku_fa7c8586c8ee031";

mysql://b01f690be42feb:027e4917@us-cdbr-east-04.cleardb.com/heroku_fa7c8586c8ee031?reconnect=true

function validar(){
    session_start();
if (empty($_SESSION["nombre"]))
{
  echo "Se detecto un acceso ilegal al sistema, su ip esta siendo monitoreada y sera enviada a la policia";
  ?>
  <a href="http://localhost/crud/">Sitio de login</a>
  <?php
  exit();
}
}
?>