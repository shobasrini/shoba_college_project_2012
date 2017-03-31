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
<h2>Select office id to update </h2>
<?php $db = mysql_connect("pluto", "dbproject3","Guph0eig") or die("The site database appears to be down.");
mysql_select_db("dbproject3");

$result = mysql_query("SELECT * FROM Office;");
$num=mysql_numrows($result);
echo "<table border=1>\n";
echo "<tr><th>Office_Id</th><th>Office_Address</th><th>Office_Tele_No<th></tr>\n";
$i=0;
while ($i < $num) {
printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>\n",
mysql_result($result,$i, "Office_Id"), mysql_result($result,$i,"Office_Address"), mysql_result($result,$i,"Office_Tele_No"));
$i++;
}
echo "</table>\n";
?>

<form action="officefill_update.php" method="post">
<h2>Name to Select </h2>
 
Office_id: <input type="text" name="Office_id"/><br>
Office_Address: <input type="text" name="Office_Address"/><br>
Office_Tele_no: <input type="text" name="Office_Tele_no"/><br>
<input type="Submit" value= "Select"/><input type="Reset"/>
</form>
</body>
</html>
