
<?php 
//this is add person version 2

error_reporting(E_ALL & ~E_NOTICE);
include("../model/person.php");
include("../controller/personController.php");

$did = $_GET['id'];

$pconn = new PersonController();

$data = $pconn->updPersonInfo($did);

?>


<html>
<head>
<title>UPDATE PERSON INFO</title>
</head>
<body bgcolor = "lightblue">

<h1 align="center">UPDATE RECORDS</h1>


<form action="update.php" method="GET">
<table border = 3 align="center">

<td align="left"><input type = "hidden" name="id" value="<?php echo  $did ?>">

<tr>
<td align="right">FIRST NAME</td>
<td align="left"><input type = "text" name="fname" value="<?php echo  $data['fname']; ?>">

</tr>

<tr>
<td align="right">LAST NAME</td>
<td align="lefti"><input type = "text" name="lname" value="<?php echo  $data['lname']; ?>">

</tr>

<tr>
<td align="right">AGE</td>
<td align="left"><input type = "number" name="age" value="<?php echo  $data['age']; ?>" >

</tr>

<tr>
<td align="center" colspan="2">

<input type ="submit" name="update" value="UPDATE">
</td>
</tr>
</table>
</form>

</body>
</html>