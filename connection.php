

<?php 

$server = 'localhost';
$user = 'root';
$password = '';
$db = "quiker";

$conn = mysqli_connect($server , $user , $password , $db);

if($conn){
	#echo "connected";
}
else{
	echo "not connected";
}


?>
