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
<body  bgcolor="#FFFFFF">
<div>
<div ><marquee onmouseover="this.stop()" onmouseout="this.start()"><font color="#000000" >GROCERY SHOP MANAGEMENT SYSTEM</marquee></div>
<div><img src="../picture/ww.PNG" height="290" width="1450"></div>
</div>

<div><ul>
<li><a href="home.php">home</a></li>
<li><a href="about.php">About us</a></li>
<li><a href="login2.php">login</a></li>
<li><a href="contact.php">contact us</a></li>
</ul>
</div>
