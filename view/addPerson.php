<html>
<head>
<title>ADD PERSON VIEW</title>
</head>
<body bgcolor = "lightblue">

<h1 align="center">ADD NEW PERSON</h1>


<form action="displayPersonInfo.php" method="GET">
<table border = 3 align="center">

<tr>
<td align="right">ID</td>
<td align="left"><input type = "number" name=id = placeholder = "Enter your ID">

</tr>

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