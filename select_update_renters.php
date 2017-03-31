<!DOCTYPE html>
<html>
<head>
<title>Select Name to Update</title>
</head>
<style type="text/css">
th {color: maroon;
background-color: silver;}
</style>
</head>
<body>
<?php $db = mysql_connect("pluto", "dbproject3", "Guph0eig");
mysql_select_db("dbproject3");

$result = mysql_query("SELECT * FROM Renters;");
$num=mysql_numrows($result);
echo "<table border=1>\n";
echo "<tr><th>Client_id</th><th>Client_Name</th><th>Rent_Payment</th><th>Client_Tele_no</th><th>Emp_id</th></tr>\n";
$i=0;
while ($i < $num) {
printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>\n",
mysql_result($result,$i, "Client_id"), mysql_result($result,$i,"Client_Name"),mysql_result($result,$i,"Rent_Payment"),mysql_result($result,$i,"Client_Tele_no"),mysql_result($result,$i,"Emp_id"));
$i++;
}
echo "</table>\n";
?>

<br/>
<form action="update.php" method="post">
<h2>Name to Select </h2>
 
Client_id: <input type="text" name="Client_id"/><br>
Client_Name: <input type="text" name="Client_Name"/><br>
Rent_Payment: <input type="text" name="Rent_Payment"/><br>
Client_Tele_no: <input type="text" name="Client_Tele_no"/><br>
Emp_id: <input type="text" name="Emp_id" size="45"/><br>
<input type="Submit" value= "Select"/><input type="Reset"/>
</form>
</body>
</html>
