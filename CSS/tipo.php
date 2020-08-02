<?php

$conexion=mysql_connect ("localhost","root","") or die ("No se ha podido conectar a la base de datos"); 
mysql_select_db("games",$conexion) or die ("No existe la base de datos");

$NickName=$_POST['NickName'];
$BrawlStarsoClashRoyale=$_POST['BrawlStarsoClashRoyale'];
$Trofeos=$_POST['Trofeos'];
$Mensaje=$_POST['Mensaje'];

mysql_query("INSERT INTO usuarios1(NickName, BrawlStarsoClashRoyale, Trofeos, Mensaje) values ('$NickName', '$BrawlStarsoClashRoyale', '$Trofeos', '$Mensaje')",$conexion);
echo "<h1 >Datos guardados correctamente en la Base de Datos Games-Tabla usuarios1</h1>";


?>
