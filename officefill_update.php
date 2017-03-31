<!DOCTYPE html>
<html>
<head>
<title>Select Office to Update</title>
</head>
<body>
<div id="wrapper">
&nbsp;
<h2>Fill to update:</h2>
<form action="office_update.php" method="post">
<?php $db = mysql_connect("pluto","dbproject3", "Guph0eig") or die("The site database appears to be down.");
mysql_select_db("dbproject3");

$Office_id  =$_POST['Office_id'];

$query= "select * from Offices where Office_id  = '$Office_id';";

$result=mysql_query($query);
$myrow = mysql_fetch_row($result);

printf("&nbsp;<b>Office Id:</b> <input type=\"text\" name=\"Office_id\" value=\"%s\"/><br><br>\n",$myrow[0]);
printf("&nbsp;<b>Office Address:</b> <input type=\"text\" name=\"Office_Address\" value=\"%s\"/><br><br>",$myrow[1]);
printf("&nbsp;<b>Office Tele no :</b> <input type=\"text\" name=\"Office_Tele_no\" value=\"%s\"/><br><br>\n",$myrow[2]);
?>
<br/>
<input type="Submit" value= "Update"/> &nbsp;&nbsp;<input type="Reset"/><br><br>
</body>
</html>
