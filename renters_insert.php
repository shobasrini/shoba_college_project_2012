<!DOCTYPE html>
<html>
<body>
<?php $db = mysql_connect("pluto", "dbproject3", "Guph0eig");
mysql_select_db("dbproject3");
$Clientid = $_POST['Client_id'];
$ClientName=$_POST['Client_Name'];
$RentPayment=$_POST['Rent_Payment'];
$ClientTeleno=$_POST['Client_Tele_no'];
$Empid=$_POST['Emp_id'];
//echo "Before done";
echo $Clientid;
$query= "insert into Renters (Client_id,Client_Name,Rent_Payment,Client_Tele_no,Emp_id) values('$Clientid','$ClientName','$RentPayment','$ClientTeleno','$Empid' )";
mysql_query($query) or die ("Query failed!");
//echo " After done";
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


