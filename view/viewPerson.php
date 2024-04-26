<?php
//this is View person 

error_reporting(E_ALL & ~E_NOTICE);
include("../controller/personController.php");

$pconn = new personController();
$data = $pconn->retrievePerson();

//var_dump($d);

?>


<html>
<head>
<title>VIEW PERSON RECORDS</title>
</head>
<body bgcolor = "lightblue">

<h1 align="center">LIST OF PERSON </h1>

<table border = 3 align="center">

<tr>
<td align="center">ID</td>
<td align="center">FIRST NAME</td>
<td align="center">LAST NAME</td>
<td align="center">AGE</td>
<td align="center">ACTION</td>
</tr>
<?php

for($ctr=0;$ctr<$data['count'];$ctr++)
{
    $did = $data['id'][$ctr];
    echo "<tr>";
        echo "<td>" . $data['id'][$ctr] . "</td>";
        echo "<td>" . $data['fname'][$ctr] . "</td>";
        echo "<td>" . $data['lname'][$ctr] . "</td>";
        echo "<td>" . $data['age'][$ctr] . "</td>";
        echo "<td><a href=deletePerson.php?id=$did>Delete</a>
        <a href=updatePerson.php?id=$did>Update</a></td>";
       ;
    echo "</tr>";
}

?>

</table>

<div align="center"><a href="addPersonV2.php">ADD NEW RECORDS</a>
</div>


</body>
</html>



