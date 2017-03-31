<!DOCTYPE html>
<html>
<head>
<title>Select Property to Update</title>
</head>
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
&nbsp;
<h2>Fill to update:</h2>
<form action="prop_update.php" method="post">
<?php $db = mysql_connect("pluto","dbproject3", "Guph0eig") or die("The site database appears to be down.");
mysql_select_db("dbproject3");

$Property_id  =$_POST['Property_id'];

$query= "select * from Properties where Property_id  = '$Property_id';";

$result=mysql_query($query);
$myrow = mysql_fetch_row($result);

printf("&nbsp;<b>Property Id:</b> <input type=\"text\" name=\"Property_id\" value=\"%s\"/><br><br>\n",$myrow[0]);
printf("&nbsp;<b>Property Address:</b> <input type=\"text\" name=\"Property_Address\" value=\"%s\"/><br><br>",$myrow[1]);
printf("&nbsp;<b>Property Type :</b> <input type=\"text\" name=\"Property_Type \" value=\"%s\"/><br><br>\n",$myrow[2]);
printf("&nbsp;<b>Rooms:</b> <input type=\"text\" name=\"Rooms\" value=\"%s\"/><br><br>\n",$myrow[3]);
printf("&nbsp;<b>Bath:</b> <input type=\"text\" name=\"Bath\" value=\"%s\"/><br><br>\n",$myrow[4]);
printf("&nbsp;<b>Vacancy:</b> <input type=\"text\" name=\"Vacancy\" value=\"%s\"/><br><br>\n",$myrow[5]);
printf("&nbsp;<b>Office Id:</b> <input type=\"text\" name=\"Office_id\" value=\"%s\"/><br><br>\n",$myrow[6]);

?>
<br/>
<input type="Submit" value= "Update"/> &nbsp;&nbsp;<input type="Reset"/><br><br>
</form>
</div><br><br>
<a href="http://3.bp.blogspot.com/-sI2VxCnWRO4/UGW-VHrt5JI/AAAAAAAAAA4/XxFZU5ateRM/s1600/real-estate-business.jpg">Image Attribution</a>
</body>
</html>
