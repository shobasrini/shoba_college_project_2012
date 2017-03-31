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
<?php $db = mysql_connect("pluto", "dong", "*****") or die("The site database appears to be down.");
mysql_select_db("dong");
$result = mysql_query("SELECT * FROM employees;");
$num=mysql_numrows($result);
echo "<table border=1>\n";
echo "<tr><th>Employee ID</th><th>Name</th><th>Title</th></tr>\n";
$i=0;
while ($i < $num) {
printf("<tr><td>%s</td><td>%s %s</td><td>%s</td></tr>\n",
mysql_result($result,$i, "emp_id"), mysql_result($result,$i,"f_name"), mysql_result($result,$i,"l_name"), mysql_result($result,$i,"title"));
$i++;
}
echo "</table>\n";
?>
<br/>
<form action="fill_to_update.php" method="post">
<h2>Name to Select: </h2>
Empployee ID: <input type="text" name="emp_id"/><br>
<input type="Submit" value= "Select"/><input type="Reset"/>
</form>
</body>
</html>