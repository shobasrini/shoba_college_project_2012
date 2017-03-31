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
#wrapper { margin-left: auto;margin-right: auto;
        width: 75%;   background-color:#FFFFB8;
        min-width: 700px;
	 box-shadow: 5px 5px 5px #828282;}
a{color:#477519;}
</style>
</head>
<body>
<div id="wrapper">
&nbsp;<h2>Inserted into Property Table</h2>
<?php $db = mysql_connect("pluto", "dbproject3", "Guph0eig") or die("The site database appears to be down.");
mysql_select_db("dbproject3");
$Property_id = $_POST['Property_id'];
$Property_Address=$_POST['Property_Address'];
$Property_Type=$_POST['Property_Type'];
$Rooms=$_POST['Rooms'];
$Bath=$_POST['Bath'];
$Vacancy=$_POST['Vacancy'];
$Office_id=$_POST['Office_id'];

$query= "insert into Properties (Property_id, Property_Address,Property_Type,Rooms,Bath,Vacancy,Office_id) values('$Property_id', '$Property_Address', '$Property_Type','$Rooms','$Bath','$Vacancy','$Office_id')";
mysql_query($query);
$result = mysql_query("SELECT * FROM Properties");
echo "<table border=\"1\">\n";
echo "&nbsp;<tr><th>Property Id</th><th>Property Address</th><th>Property Type</th><th>Rooms</th><th>Bath </th><th>Vacancy</th><th>Office Id </th></tr>\n";
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


