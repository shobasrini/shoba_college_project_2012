<!DOCTYPE html>
<html>
<title>Display </title>
</head>
<style type="text/css">
body { background-image:url('backdrp2.jpg');
color:black; margin:50px; word-spacing:3px;font-size:medium;
   font-family: Verdana, Arial, sans-serif; }
th {color:white ; background-color: #336600;text-align:center;}
h2{color:#336600;text-align:center;}
b{color:#477519;}
#wrapper { margin-left: auto;margin-right: auto;
        width: 90%;   background-color:#FFFFB8;
        min-width: 700px;
	 box-shadow: 5px 5px 5px #828282;}
#nav{text-align:center;margin-top:2px;padding-bottom:5px; font-weight:bold;}
#nav a {text-decoration:none;padding-bottom:15px;}
a{color:#477519;}
a:visited{color:green;}
a:hover {color:red;}
#copy{color:black;font-size:x-small;text-align:center;clear:left ;}
#footer { background-color:#477519;
        color: white; padding-top:20px; padding-bottom:30px;
        font-size: .60em;
        font-style: italic;
        text-align: center;clear:left ;}
#footer a:visited{color:white;}
#footer a:hover {color:yellow;}
#header{ background-color:#477519; color:white; text-align:center;
            padding-top:5px;padding-bottom:5px;
            font-family: Times New Roman,Curlz MT, Serif; 
            font-size:350%}
img.pos{position:relative;left:-50px;border: solid medium yellow;}
table{width:200; align:center;}
</style>
</head>
<body>
<div id="wrapper">
<h1 id="header"><img src="sm.jpg" style="height:70px; width:90px;" alt="Home" class="pos">MSSG Property Management<br>
 </h1>
<div id="nav">
  <a href = "homepagesample.html">Home</a> &nbsp;&nbsp;&nbsp;<a href = "prop_display.php">Find a Property</a> &nbsp;&nbsp;&nbsp;<a href = "admin.html">Admin</a>&nbsp;&nbsp;&nbsp;
<a href = "officeselect.php">Offices</a> 
 &nbsp;&nbsp;&nbsp; <a href = "find.html">Employee</a>
  </div><br>
<hr/>
<h2> List of Properties</h2>
<?php $db = mysql_connect("pluto","dbproject3", "Guph0eig") or die("The site database appears to be down.");
mysql_select_db("dbproject3");
$result = mysql_query("SELECT * FROM Properties;");
$num=mysql_numrows($result);
echo "<table align=center border=1>\n";
echo "&nbsp;&nbsp;&nbsp;&nbsp;<tr><th>Property Id </th><th>Property Address</th><th>Property Type</th><th>Rooms</th><th>Bath</th><th>Vacancy</th><th>Office Id</th></tr>\n";
$i=0;
while ($i < $num) {
printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>\n",

mysql_result($result,$i, "Property_id"), mysql_result($result,$i,"Property_Address"), mysql_result($result,$i,"Property_Type"), mysql_result($result,$i,"Rooms"), mysql_result($result,$i,"Bath") , mysql_result($result,$i,"Vacancy"),mysql_result($result,$i, "Office_id"));
$i++;
}
echo "</table>\n";
?>
<br><br>
<div id="footer" ><em>MSSG Property Management<br>
							11116 Mulberry Road<br>
							Frederick, MD 21702<br>
							301-790-8000</em>

</div>
</div>
</body>
<div id="copy" >Copyright &copy; Image<br/>
<a href="img.txt">Attribution</a></div>
</html>


