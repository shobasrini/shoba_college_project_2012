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
b{color:#477519;}
#wrapper { margin-left: auto;margin-right: auto;
        width: 75%;   background-color:#FFFFB8;
        min-width: 700px;
	 box-shadow: 5px 5px #828282;}
a{color:#477519;}
</style>
</head>
<body>
<div id="wrapper">
&nbsp;
<h2>Updated Table</h2>
<?php $db = mysql_connect("pluto", "dbproject3", "Guph0eig");
mysql_select_db("dbproject3");
$Property_id = $_POST['Property_id'];
$Property_Address=$_POST['Property_Address'];
$Property_Type=$_POST['Property_Type'];
$Rooms=$_POST['Rooms'];
$Bath=$_POST['Bath'];
$Vacancy=$_POST['Vacancy'];
$Office_id=$_POST['Office_id'];

$query= "update Properties set Property_id = '$Property_id', Property_Address = '$Property_Address', Property_Type = '$Property_Type' ,Rooms = '$Rooms', Bath = '$Bath',  Vacancy = '$Vacancy', Office_id  = '$Office_id ' where Property_id='$Property_id';";

mysql_query($query) or die ("Query failed!");;
$result = mysql_query("SELECT * FROM Properties");
echo "<table border=1>\n";
echo "<tr><th>Property Id</th><th>Property Address</th><th>Property Type</th><th>Rooms</th><th>Bath </th><th>Vacancy</th><th>Office Id </th></tr>\n";
while ($myrow = mysql_fetch_row($result)) {
printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>\n",
$myrow[0], $myrow[1], $myrow[2],$myrow[3],$myrow[4],$myrow[5],$myrow[6]);
}
echo "</table>\n";
?><br><br>
</div><br><br>
<a href="http://3.bp.blogspot.com/-sI2VxCnWRO4/UGW-VHrt5JI/AAAAAAAAAA4/XxFZU5ateRM/s1600/real-estate-business.jpg">Image Attribution</a>
</body>
</html>
