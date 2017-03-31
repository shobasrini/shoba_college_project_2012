<!DOCTYPE html>
<html>
<body>
<div id="wrapper">
&nbsp;<h2>Inserted into Office Table</h2>
<?php $db = mysql_connect("pluto", "dbproject3", "Guph0eig");
mysql_select_db("dbproject3");
$Office_id = $_POST['Office_id'];
$Office_Address=$_POST['Office_Address'];
$Office_Teleno=$_POST['Office_Tele_no'];

$query= "insert into Offices (Office_id,Office_Address,Office_Tele_no) values('$Office_id','$Office_Address','$Office_Tele_no')";
mysql_query($query) 
$result = mysql_query("SELECT * FROM Offices");
echo "<table border=\"1\">\n";
echo "&nbsp;<tr><td>Office_id</td><td>Office_Address</td><td>Office_Tele_no</td></tr>\n";
while ($myrow = mysql_fetch_row($result)) {
printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>\n",
$myrow[0], $myrow[1], $myrow[2]);
}
echo "</table>\n";
?>
</body>
</html>

