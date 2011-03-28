<?php
session_start();
require( dirname(__FILE__) . '../../../../wp-load.php' );

function parseToXML($htmlStr) 
{ 
$xmlStr=str_replace('<','&lt;',$htmlStr); 
$xmlStr=str_replace('>','&gt;',$xmlStr); 
$xmlStr=str_replace('"','&quot;',$xmlStr); 
$xmlStr=str_replace("'",'&#39;',$xmlStr); 
$xmlStr=str_replace("&",'&amp;',$xmlStr); 
return $xmlStr; 
} 

// Opens a connection to a MySQL server
/*$connection=mysql_connect (localhost, $username, $password);
if (!$connection) {
  die('Not connected : ' . mysql_error());
}

// Set the active MySQL database
$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}
*/

// Select all the rows in the markers table
if ($_SESSION["uf"]=='TODOS')
{
	$query = "SELECT * FROM wp_gesac_ponto";
}
else
{
	$query = "SELECT * FROM wp_gesac_ponto where uf='".$_SESSION["uf"]."'";	
}
$result = mysql_query($query);
if (!$result) {
  die('Invalid query: ' . mysql_error());
}

header("Content-type: text/xml");

// Start XML file, echo parent node
echo '<markers>';

// Iterate through the rows, printing XML nodes for each
while ($row = @mysql_fetch_assoc($result)){
	if ($row['latitude']!='')
	{
		// ADD TO XML DOCUMENT NODE
		echo '<marker ';
		echo 'name="' . parseToXML('PONTO GESAC '.$row['gesac'].'-' .$row['estabelecimento']) . '" ';
		echo 'address="' . parseToXML($row['logradouro'].', No '.$row['numero'].', '.$row['complemento'].', '.$row['municipio'].', '.$row['uf'].', '.$row['cep']) . '" ';
		echo 'monitor="' . parseToXML($row['nome'].' '. $row['sobrenome']) . '" ';
		echo 'email="' . parseToXML($row['email']) . '" ';
		echo 'lat="' . $row['latitude'] . '" ';
		echo 'lng="' . $row['longitude'] . '" ';
		echo 'telefone="' . $row['telefone'] . '" ';
		//echo 'type="' . $row['type'] . '" ';
		echo '/>';
	}
}

// End XML file
echo '</markers>';

?>


