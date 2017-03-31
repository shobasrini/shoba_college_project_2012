<!DOCTYPE html>
<html>
<head>
<title>Select Property to Update</title>
<head>
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
&nbsp;
<h2>Updated Renter info </h2>
<?php $db = mysql_connect("pluto", "dbproject3", "Guph0eig");
mysql_select_db("dbproject3");
$Clientid = $_POST['Client_id'];
$ClientName=$_POST['Client_Name'];
$RentPayment=$_POST['Rent_Payment'];
$ClientTeleno=$_POST['Client_Tele_no'];
$Empid=$_POST['Emp_id'];
//echo "====================";
//echo "Before done .";
$result = mysql_query("UPDATE  Renters SET Client_Name = '$ClientName', Rent_Payment = '$RentPayment',Client_Tele_no = '$ClientTeleno' , Emp_id = '$Empid' WHERE  Client_id='$Clientid'") 
or die(mysql_error());  
//echo "After done";
$result = mysql_query("SELECT * FROM Renters");
echo "<table border=\"1\">\n";
echo "<tr><td>Client_id</td><td>Client_Name</td><td>Rent_Payment</td><td>Client_Tele_id</td><td>Emp_id</tr>\n";
while ($myrow = mysql_fetch_row($result)) {
printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>\n",
$myrow[0], $myrow[1], $myrow[2], $myrow[3], $myrow[4]);
}
echo "</table>\n";
?>
</body>
</html>

