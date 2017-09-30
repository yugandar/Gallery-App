<?php 
session_start();
include 'controllers/base/css1.php' ?>
<?php

mysql_connect('localhost', 'root', '');

mysql_select_db('userdetails');

 $sql = mysql_query("select user_firstname, user_lastname from user where online_status = 1 and user_id !=". $_SESSION['user_id']);

 $online_users = array();
if(mysql_num_rows($sql) > 0){
 while($fetch = mysql_fetch_array($sql))

	{
		//$online_users[] = $fetch['user_firstname']." ".$fetch['user_lastname'];
		echo  '<li class="list-group-item text-center"><i class="fa fa-user-circle" aria-hidden="true"></i>'.$fetch['user_firstname']." ".$fetch['user_lastname'];
	}
}else{
	echo '<li>No Online Users</li>';
}

//echo '<pre>';

//$result = json_encode($online_users);


?>
