<?php
require("api.php");

if(function_exists($_GET['method'])&& $_GET['ID']!= null && $_GET['DataType']!=null){

$DataType=  htmlentities($_GET['DataType'],ENT_QUOTES, 'UTF-8' );
$ID = htmlentities($_GET['ID'],ENT_QUOTES, 'UTF-8' );
$_GET['method']($ID,$DataType);

}

function DoGetUser($ID,$DataType){

echo getUser($ID,$DataType);
 
}


?>