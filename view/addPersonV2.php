<?php 
//this is add person version 2

error_reporting(E_ALL & ~E_NOTICE);

include("../model/person.php");
include("../controller/personController.php");
if($_GET['add'])
{
    //echo "you clicked add button!";

$p = new Person(); //the construct of a person class
 $pconn = new PersonController(); //the construct of a personcontroll class
    //var_dump($p); to view all the data

$p->setID($_GET['id']);
$p->setFname($_GET['fname']);
$p->setLname($_GET['lname']);
$p->setAge($_GET['age']);

//var_dump($p);

$pconn->addPerson($p);
}

?>



<html>
<head>
<title>ADD PERSON VIEW</title>
</head>
<body bgcolor = "lightblue">

<h1 align="center">ADD NEW PERSON</h1>


<form action="addPersonV2.php" method="GET">
<table border = 3 align="center">


<tr>
<td align="right">FIRST NAME</td>
<td align="left"><input type = "text" name=fname = placeholder = "Enter your first name">

</tr>

<tr>
<td align="right">LAST NAME</td>
<td align="left"><input type = "text" name=lname = placeholder = "Enter your last name">

</tr>

<tr>
<td align="right">AGE</td>
<td align="left"><input type = "number" name=age = placeholder = "Enter your age">

</tr>


<td align="center" colspan="2">

<input type ="submit" name="add" value="ADD">
<input type ="reset" name="clear" value="CLEAR">
</td>

</table>
</td>
</form>

</body>
</html>