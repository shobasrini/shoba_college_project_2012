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
&nbsp;<h2>Updated Employee Table</h2>
<?php $db = mysql_connect("pluto", "dbproject3", "Guph0eig");
mysql_select_db("dbproject3");
$first=$_POST['Emp_fname'];
$last=$_POST['Emp_lname'];
$empid=$_POST['Emp_id'];
$query= "delete from Employees where Emp_fname = '$first' and Emp_lname = '$last' and Emp_id = '$empid' ;";
mysql_query($query);
$result = mysql_query("SELECT * FROM Employees");
echo "<table border=\"1\">\n";
echo "<tr><th>Emp_id</th><th>SSN</th><th>Emp_fname</th><th>Emp_lname</th><th>emp_address</th><th>emp_Tele_no</th><th>Job_Title</th><th>Gender</th><th>Hire_Date</th><th>Supervisor_id</th><th>Office_id</th></tr>\n";
while ($myrow = mysql_fetch_row($result)) {
printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>\n",
$myrow[0], $myrow[1], $myrow[2], $myrow[3], $myrow[4], $myrow[5], $myrow[6], $myrow[7], $myrow[8], $myrow[9], $myrow[10]);
}
echo "</table>\n";
?>
</body>
</html>