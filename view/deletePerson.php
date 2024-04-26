<?php


include("../controller/personController.php");
$did =$_GET['id'];
$pconn = new personController();

$pconn->deletePerson($did);

echo "<script> alert('One record was succesfully deleted!')</script>";

echo"<meta http-equiv='refresh' content='0;url=viewPerson.php'>";

?>