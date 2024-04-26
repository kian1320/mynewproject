<?php
error_reporting(E_ALL & ~E_NOTICE);
include("../model/person.php");
//this is Display Person Info
$p = new Person();


$p->setID($_GET['id']);
$p->setFname($_GET['fname']);
$p->setLname($_GET['lname']);
$p->setAge($_GET['age']);

?>

<html>
<head>
<title>DISPLAY PERSON INFO</title>
</head>
<body bgcolor = "lightblue">

<h1 align="center">DISPLAY PERSON INFO</h1>

<table border = 3 align="center">

<tr>
<td align="center">ID</td>
<td align="center">NAME</td>
<td align="center">AGE</td>
</tr>
<tr>
<td align="left"><?php echo $p->getId() ?>
<td align="left"><?php echo $p->getFname() . " " . $p->getLname()?>
<td align="left"><?php echo $p->getAge() ?>
</tr>

</table>


</body>
</html>



