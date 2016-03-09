<?php

// conexao com bd
$db_host = "Localhost";
$db_username = "root";
$db_pass = "";
$db_dbname = "exemplo01";

$conec = mysqli_connect($db_host,$db_username,$db_pass,$db_dbname);

if (isset($conec)) {
	# code...
	//echo"Com suceeso";
}else
	//echo"erro";

?>


