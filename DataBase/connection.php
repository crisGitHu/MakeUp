<?php

if(isset($_POST['Borrar']))
{
    echo("Hola");
    $host = 'y8z.h.filess.io';
    $database = 'MakeUp_smokeaware';
    $user = 'MakeUp_smokeaware';
    $password = '2f90f4b3dba8c296b1a11854fbe12d8f6c75067d';
    $port = 3307;
    $Enlace = mysql_connect($host, $user, $password) or die("Error al conectar con la base de datos.");
    mysql_select_db($database,$Enlace) or die("No se puede encontrar la base de datos");

    mysql_query("INSERT INTO Paletas VALUES('1','NombrePaleta','Cris')");
    echo("Datos insertados correctamente.");
}

?>