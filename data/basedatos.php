<?php
$db = new PDO('mysql:host=localhost; dbname=financiera', 'sise', 'lobito2405');
if(!$db){
    echo "Error al conetar la base de datos";
    exit;
}
?>