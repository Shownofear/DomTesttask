<?php

function getDataType($result , $type){

 
/***********************
		 XML
***********************/
if($type == 'xml'){	
	
	//open xml	
		$xml = new DOMDocument( "1.0", "UTF-8" );
		$xml->preserveWhiteSpace = false;
		$xml->formatOutput   = true;				
	// Create "root" Elements
		$xml_root = $xml->createElement("XML-Example");
		$xml_root->setAttribute("Version", "1.0");	
											
				
	
	
      while($row = $result->fetch_assoc()) {
	      //result xml	
	      $xml_item = $xml->createElement("Result");
		  $xml_root->appendChild($xml_item);	
		  // Assing values to Child	
          $xml_item->appendChild($xml->createElement( 'ID',  $row['id'] ));							
		  $xml_item->appendChild($xml->createElement( 'Nick', $row['Nick']));	
          $xml_item->appendChild($xml->createElement( 'Email',  $row['Email'] ));							
		  $xml_item->appendChild($xml->createElement( 'Login', $row['Login']));
	}		
																																													
	//close xml	
		$xml->appendChild($xml_root);		
	// Parse the XML.
		$_xml = $xml->saveXML();	
		return $_xml;
	
}


/***********************
		JSON
***********************/
if($type == 'json'){
	
	
	//the data
while($row = $result->fetch_assoc()) {	
		$array["ID"] = 	$row['id'];				
		$array["Nick"] = 	$row['Nick'];
        $array["Email"] = $row['Email'];
        $array["Login"]=  $row['Login'];
		$data[] = $array;																							
		}
	//json encode the array		   
		$json_encoded = utf8_encode(json_encode($data));
		$return = $json_encoded;
		return $return;
		exit();		
}}

?>