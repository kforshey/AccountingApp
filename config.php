<?php
$host="localhost";
$username="root";
$pwd="!1Peavey3";
$db_name="accounting";
$tbl_name="users";

// connect
mysql_connect("$host", "$username", "$pwd");
mysql_select_db("accounting");



//username and pwd sent from form
$uuname = $_POST["uname"];
$upwd   = $_POST["upwd"];
$uname = 'testy';
$upwd = 'test';
// get db matches count
$myuname = stripslashes("$uuname");
$myupwd = stripslashes("$upwd");
$myuname = mysql_real_escape_string($myuname);
$myupwd  = mysql_real_escape_string($myupwd);
$sql     = "SELECT * FROM $tbl_name WHERE uid = 'test' and password = 'testy'";
$result = mysql_query($sql);

// should be 1 if logged in
$count = mysql_num_rows($result);
echo $myuname;
echo '</br>';
echo $upwd;
echo '<br>';
$count = 1;
echo $count;

// register user for redirection
if ($count==1)
{
session_register("uuname");
session_register("upwd");
header("location: index.html");
echo '$count';
}
else
{
echo "invalid credentials";
}
?>
