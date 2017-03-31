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
&nbsp;<h2>Insert into Employee Table</h2>
<?php $db = mysql_connect("localhost", "root", "MyNewPass") or die("The site database appears to be down."); // Check connection
 if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
echo "Connected successfully";

  mysql_select_db("hood");
$Emp_id= $_POST['Emp_id'];
$SSN=$_POST['SSN'];
$Employee_First_Name=$_POST['Emp_fname'];
$Employee_Last_Name=$_POST['Emp_lname'];
$Employee_Address=$_POST['emp_adress'];
$Employee_Telephone_No=$_POST['emp_Tele_no'];
$Job_Title=$_POST['Job_Title'];
$Gender=$_POST['Gender'];
$Hire_Date=$_POST['Hire_Date'];
$Supervisor_id=$_POST['Supervisor_id'];
$Office_id=$_POST['Office_id'];


echo "</table>\n";
?><br><br>

</div><br><br>
<a href="http://3.bp.blogspot.com/-sI2VxCnWRO4/UGW-VHrt5JI/AAAAAAAAAA4/XxFZU5ateRM/s1600/real-estate-business.jpg">Image Attribution</a>
</body>
</html>


