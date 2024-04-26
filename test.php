<?php

//this is test.php
error_reporting(E_ALL & ~E_NOTICE);
include("model/person.php");

$p = new Person();

$p->setId(658113);
$p->setFname("Dhan");
$p->setLname("Alamo");
$p->setAge(18);

echo $p->getId() . "<br>";
echo $p->getFname() . "<br>";
echo $p->getLname() . "<br>";
echo $p->getAge();

?>