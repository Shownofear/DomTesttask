<?php

require("dataType.php");
/***********************
		 Connect to database
***********************/
    function get_mysql(){
        $mysql = new mysqli("localhost", "root","","domdb");

       if ($mysql->connect_error){
         
           die($mysql->connect_error);
       }
       
       return $mysql;
    }

    /***********************
		 Get list of users by name, login, email.
***********************/
    function getUserList($Creterial, $ColName, $returnDataType){
     
    $result = get_mysql()->query("SELECT * FROM DomTable WHERE $ColName ='$Creterial'");
	  

	if ($result->num_rows > 0) {

    return getDataType($result , $returnDataType);
	} 
    else{
	 return null;
    }}
	
	/***********************
		 Get User By Id
***********************/

	function getUser($Id , $returnDataType){
    
    $result = get_mysql()->query("SELECT * FROM DomTable WHERE Id ='$Id'");
	  

	 
	if ($result->num_rows > 0) {
     // output data of each row
     
	return getDataType($result , $returnDataType);
    }
	
    else{
	 return null;
    }}

	/***********************
		 Update User Nick, Email or Both by ID;
***********************/
	
    function UpdateUser($ID , $Nick, $Email){	
	$EmailStatment = null;
	$NameStatment = null;
	$Commar=null;
	
	if($Nick!=null)$NameStatment = " Nick='$Nick' ";
    if($Email!=null)$EmailStatment = " Email='$Email' ";
	if($Nick!=null&&$Email!=null) $Commar = " , ";
	if ($Nick==null&&$Email==null)return false;
	
	$result = get_mysql()->query("UPDATE Domtable SET".$NameStatment."".$Commar."".$EmailStatment."WHERE Id=$ID");
	
	
	if ($result>0){
	return true;
	}
	else{
	return false;
	}}
































?>