<?php 
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'php-api';

$conn = new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
	die("Connection Error");
}
echo "Succes"

?>