<!DOCTYPE html>
<html>
<head>
<style type="text/css">
body { background-image:url('backdrp2.jpg');color: #330000; 
 margin:50px; word-spacing:3px;font-size:medium;
   font-family: Verdana, Arial, sans-serif; }
th {color:white ; background-color: #336600;text-align:center;}
h2{color:#336600;text-align:center;}
b{color:#477519;}
em{font-weight:bold; color:white;}
p{color: #477519; padding-left:10px;} 
#wrapper { margin-left: auto;margin-right: auto;
        width: 90%;   background-color:#FFFFCC;
        min-width: 700px;
	 box-shadow: 5px 5px 5px #828282;}

a:visited{color:green;}
a:hover {color:red;}
#nav{text-align:center;margin-top:2px;padding-bottom:5px; font-weight:bold;}
#nav a {text-decoration:none;padding-bottom:15px;}
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
img.pos{position:relative;left:-50px;border: solid medium  yellow;}

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
&nbsp;<h2>MSSG Employees</h2>
<?php $db = mysql_connect("pluto","dbproject3", "Guph0eig") or die("The site database appears to be down.");
mysql_select_db("dbproject3");
$result = mysql_query("SELECT * FROM Employees;"); 
$num=mysql_numrows($result);
echo "<table align=center border=1>\n";
echo "<tr><th>Emp Id</th><th>SSN</th><th>Emp FName</th><th>Emp LName</th><th>Emp Address</th><th>Emp Tele-no</th><th>Job Title</th><th>Gender</th><th>Hire Date</th><th>Supervisor Id</th><th>Office Id</th></tr>\n";
$i=0;
while ($i < $num) {
printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>\n",
mysql_result($result,$i, "Emp_id"), mysql_result($result,$i,"SSN"),mysql_result($result,$i,"Emp_fname"),mysql_result($result,$i,"Emp_lname"),mysql_result($result,$i,"emp_address"),mysql_result($result,$i,"emp_Tele_no"),mysql_result($result,$i,"Job_Title"),mysql_result($result,$i,"Gender"),mysql_result($result,$i,"Hire_Date"),mysql_result($result,$i,"Supervisor_id"),mysql_result($result,$i,"Office_id"));
$i++;
}
echo "</table>\n";
?><br> <br>
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