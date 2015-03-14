<?php

require("api.php");
if(isset($_POST['ID'])){

$ID = htmlentities($_POST['ID'],ENT_QUOTES, 'UTF-8' );
$Email = htmlentities($_POST['Email'],ENT_QUOTES, 'UTF-8' );
$Nick = htmlentities($_POST['Nick'],ENT_QUOTES, 'UTF-8' );


if(UpdateUser($ID , $Nick, $Email))
echo("Success!");
else
echo("Fail!");
}



?>