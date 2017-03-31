<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
body { background-image:url('sm.jpg');background-repeat:no-repeat;
background-position:left top;
color:black; margin:50px; word-spacing:3px;font-size:medium;
   font-family: Verdana, Arial, sans-serif; }
th {color:white ; background-color: #336600;text-align:center;}
h2{color:#336600;text-align:center;}
b{color:#477519;}
a{color:#477519;}
</style>
</head>
<body>
<div id="wrapper">
&nbsp;<h2>Updated Renters Table</h2>
<?php $db = mysql_connect("pluto", "dbproject3", "Guph0eig");
mysql_select_db("dbproject3");
$Client_id=$_POST['Client_id'];
$Client_Name=$_POST['Client_Name'];
$Renter_Payment=$_POST['Renter_Payment'];
$Client_Tele_no=$_POST['Client_Tele_no'];
$Emp_id=$_POST['Emp_id'];
//$query= "delete from Renters where Client_id = '$Client_id' and Client_Name = '$Client_Name' and Renter_Payment= '$Renter_Payment'and Client_Tele_no= '$Client_Tele_no'and Emp_id= '$Emp_id';";
//$query= "delete from Renters where Client_id = '$Client_id' and Client_Name = '$Client_Name' and Renter_Payment= '$Renter_Payment'and Client_Tele_no= '$Client_Tele_no'and Emp_id= '$Emp_id';";
$result = mysql_query(" delete from Renters where Client_id = '$Client_id' and Client_Name = '$Client_Name' and Rent_Payment= '$Renter_Payment'and Client_Tele_no= '$Client_Tele_no'and Emp_id= '$Emp_id'") 
or die(mysql_error()); 
//mysql_query($query);
$result = mysql_query("SELECT * FROM Renters");
echo "<table border=\"1\">\n";
echo "<tr><td>Client_id</td><td>Client_Name</td><td>Rent_Payment</td><td>Client_Tele_id</td><td>Emp_id</tr>\n";
while ($myrow = mysql_fetch_row($result)) {
printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>\n",
$myrow[0], $myrow[1], $myrow[2], $myrow[3], $myrow[4]);
}
echo "</table>\n";?>
</body>
</html>
