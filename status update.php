<?php

session_start();
$session=session_id();
$time=time();
$time_check=$time-600; //SET TIME 10 Minute

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="userdetails"; // Database name
$tbl_name="user"; // Table name

// Connect to server and select databse
mysql_connect("$host", "$username", "$password")or die("cannot connect to server");
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name WHERE session='$session'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

if($count=="0"){

$sql1="INSERT INTO $tbl_name(session, time)VALUES('$session', '$time')";
$result1=mysql_query($sql1);
}

else {
"$sql2=UPDATE $tbl_name SET time='$time' WHERE session = '$session'";
$result2=mysql_query($sql2);
}

$sql3="SELECT * FROM $tbl_name";
$result3=mysql_query($sql3);

$count_user_online=mysql_num_rows($result3);

echo "User online : $count_user_online ";

// if over 10 minute, delete session
$sql4="DELETE FROM $tbl_name WHERE time<$time_check";
$result4=mysql_query($sql4);

// Open multiple browser page for result


// Close connection

mysql_close();
?>