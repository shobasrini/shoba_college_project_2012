<!DOCTYPE html>
<html>
<head>
<style type="text/css">
body { background-image:url('sm.jpg');background-repeat:no-repeat;
background-position:left top;
color:black; margin:50px; word-spacing:3px;font-size:medium;
   font-family: Verdana, Arial, sans-serif; }
th {color:white ; background-color: #336600;text-align:center;}
h2{color:#336600;text-align:center;}
a{color:#477519;}
</style>
</head>
<body>
<div id="wrapper">
&nbsp;
<h2>Updated Table</h2>
<?php $db = mysql_connect("pluto", "dbproject3", "Guph0eig");
mysql_select_db("dbproject3");
$Emp_id = $_POST['Emp_id'];
$SSN=$_POST['SSN'];
$Employee_First_Name=$_POST['Emp_fname'];
$Employee_Last_Name=$_POST['Emp_lname'];
$Employee_Address=$_POST['emp_address'];
$Employee_Telephone_No=$_POST['emp_Tele_no'];
$Job_Title=$_POST['Job_Title'];
$Gender=$_POST['Gender'];
$Hire_Date=$_POST['Hire_Date'];
$Supervisor_id=$_POST['Supervisor_id'];
$Office_id=$_POST['Office_id'];

$query = "update Employees set Emp_id='$Emp_id',SSN='$SSN',Emp_fname='$Employee_First_Name',Emp_lname='$Employee_Last_Name',emp_address='$Employee_Address',emp_Tele_no='$Employee_Telephone_No',Job_title='$Job_Title',Gender='$Gender',Hire_date='$Hire_Date',Supervisor_id='$Supervisor_id', Office_id='$Office_id' where Emp_id='$Emp_id';";

mysql_query($query) or die ("Query failed!");
$result = mysql_query("SELECT * FROM Employees");
echo "<table border=\"1\">\n";
echo "<tr><th>Emp_idd</th><th>SSN</th><th>Emp_fname</th><th>Emp_lname</th><th>emp_address</th><th>emp_Tele_no</th><th>Job_Title</th><th>Gender</th><th>Hire_Date</th><th>Supervisor_id</th><th>Office_id</th></tr>\n";
while ($myrow = mysql_fetch_row($result)) {
printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>\n",
$myrow[0], $myrow[1], $myrow[2], $myrow[3], $myrow[4], $myrow[5], $myrow[6], $myrow[7], $myrow[8], $myrow[9], $myrow[10]);
}
echo "</table>\n";
?>
</body>
</html>