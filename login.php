
<style>
ul {
list-style-type: none;
margin:0;
padding:0;
overflow:hidden;
background-color:#660033;
}
li {
float:left;
}
li a {
display:block;
color:#660033;
text-align:center;
padding:14px 16px;
text-decoration:none;
background-color:#660033;
}
li a,.dropbtn {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	
}
/* change the link color to #111 (black) on hover*/
li a:hover {
background-color:#99FF99;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    
    z-index: 1;
}
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
<p align="center"><h1><font color="#009900">Grocery shop mangement system</font></h1></p>
<body>
<div>
<ul>
<li><a href="home.php">home</a></li>
<li><a href="about.php">About us</a></li>
<li><a href="login.php">login</a></li>
<li><a href="contact.php">contact us</a></li>
</div>





<?
$host="localhost";
$email="root";
$password="";
$db="grocery";
mysql_connect($host,$email,$password);
mysql_select_db($db);
if(isset(['email']))
{
$sql="select*from login where email='".$email,"'AND password='".$password."'limit 1";
$result=mysql_query($sql);
if(mysql_num_rows($result==1){
echo"you have successfull login";
exit();
}
else
{
echo"you have incorrect passwors";
exit();}}
?>
<title>Login page</title>
<link rel="stylesheet" href="css/style.css" />
<body style="background:#FFFFFF">
<div id="main.wrapper">
<center>
<h2>login form</h2>
<img src="../picture/uu.PNG" height="300" class="avatar"/>
</center>
</div>
<form action="log_pro.php" method="post">
<?php
			if(isset($_REQUEST['msg']) && $_REQUEST['msg']==1){
			
			echo "sorry invalid information!";
			}
			?>
<table align="center" width="20%" border="2" style="background:#999999">
  <tr>
    <td colspan="2" align="center">LOGIN</td>
  </tr>
  <tr>
    <td>email</td>
    <td><input type="text" name="n"/></td>
  </tr>
  <tr>
    <td>password</td>
    <td><input type="password" name="pass" /></td>
  </tr>
<td><a href="index-2.php"><input type="button"value="submit"></td>
</table>
</form>