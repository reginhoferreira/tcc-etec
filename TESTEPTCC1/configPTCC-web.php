
<?php




$pdo = new PDO('mysql:host=mysql873.umbler.com:41890;dbname=bdptcc','etecptcc','2021Etec',array(PDO::ATTR_PERSISTENT=>true));

$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


 
//$pdo = new mysqli("mysql873.umbler.com:41890", "etecptcc", "2021Etec", "bdptcc");
 
?>
