<!DOCTYPE html>
<html>
<head>
<body>
<div id="wrapper">
&nbsp;
<h2>Updated Table</h2>
<?php $db = mysql_connect("pluto", "dbproject3", "Guph0eig");
mysql_select_db("dbproject3");
$Office_id = $_POST['Office_id'];
$Office_Address=$_POST['Office_Address'];
$Office_Tele_no=$_POST['Office_Tele_no'];

$query= "update Offices set Office_id = '$Office_id', Office_Address = '$Office_Address', Office_Tele_no = '$Office_Tele_no' where Office_id='$Office_id';";

mysql_query($query) or die ("Query failed!");;
$result = mysql_query("SELECT * FROM Offices");
echo "<table border=1>\n";
echo "<tr><th>Office Id</th><th>Office Address</th><th>Office Tele no</th></tr>\n";
while ($myrow = mysql_fetch_row($result)) {
printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>\n",
$myrow[0], $myrow[1], $myrow[2]);
}
echo "</table>\n";
?>
</body>
</html>
