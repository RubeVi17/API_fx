<?php
error_reporting(0);
include 'config.php';

//Declaramos variables obtenidos de la url
$url = mysqli_real_escape_string($mysqli, $_GET["_url"]);
$page = (int)(!isset($_GET["page"]) ? 1 : $_GET["page"]);
$per_page = mysqli_real_escape_string($mysqli, $_GET["per_page"]);

//Delimitamos numero de resultados por pagina
if(!$per_page){
    $per_page = 20;
}

//Buscamos parametros dentro de la url
$params = explode("/",$url);
if($params[1] !== "wiki"){
    header('Content-Type: application/json');
}

$startpoint = ($page * $per_page) - $per_page;


/**
 * Base y estructura de redirecciones
 */
if($params[1] == "wiki"){
    include 'outputs/wiki.php';
}

if($params[1]=="users"){
    if(!$params[2]){
    include 'outputs/users.php';
    }else{
    include 'outputs/user.php';
    }
}