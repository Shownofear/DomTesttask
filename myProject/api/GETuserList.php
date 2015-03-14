<?php
require("api.php");

if(function_exists($_GET['method']) && $_GET['Creterial']!=null && $_GET['ColName']!=null && $_GET['DataType']!=null){

 $Creterial = htmlentities($_GET['Creterial'],ENT_QUOTES, 'UTF-8' );
 $ColName = htmlentities($_GET['ColName'],ENT_QUOTES, 'UTF-8' );
 $returnDataType = htmlentities($_GET['DataType'],ENT_QUOTES, 'UTF-8' );
$_GET['method']($Creterial,$ColName,$returnDataType);

}


function ToGetList($Creterial,$ColName,$returnDataType){
echo getUserList($Creterial, $ColName, $returnDataType);
}

 
?>

 
