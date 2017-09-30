<?php
    session_start();

    if(isset($_REQUEST['login_button'])||$_REQUEST['auto']==1){
        require '../_database/database.php';
        $errmsg_arr = array();
        $errflag = false;
        $username=  mysqli_real_escape_string($database,$_REQUEST['username']);
        $password=  mysqli_real_escape_string($database,$_REQUEST['password']);
        if($username == '') {
            $errmsg_arr[] = 'Username missing';
            $errflag = true;
        }
        if($password == '') {
            $errmsg_arr[] = 'Password missing';
            $errflag = true;
        }
        if($errflag) {
            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
            session_write_close();
            header("location: authentication-check.php");
            exit();
        }
        $sql="SELECT user_id,user_username,user_password FROM user WHERE user_username='$username'AND user_password='$password'";
       // $sql1="UPDATE user SET online_status='1' WHERE username='$username");
        //$update=mysql_query("UPDATE user SET online_status='1' WHERE username='$username' AND user_password='$password'");
        $result=  mysqli_query($database,$sql) or die(mysqli_errno());
        $trws= mysqli_num_rows($result);
        //mysql_query("UPDATE user SET online_status='1' WHERE user_id=1489")
        //$trws1=mysqli_query($update)or die(mysql_errno());

        if($trws==1){
           

            $rws=  mysqli_fetch_array($result);
             $sql1 = mysqli_query($database, "UPDATE user SET online_status='1' WHERE user_id =".$rws['user_id']);
            $_SESSION['user_id'] = $rws['user_id'];
            $_SESSION['user_username']=$rws['user_username'];
            $_SESSION['user_password']=$rws['user_password'];
            header("location:../home.php?user_username=$username&request=login&status=success");
        }
        else {
            $errmsg_arr[] = 'user name and password not found';
            $errflag = true;
            if($errflag) {
                $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                session_write_close();
                header("location: ../components/authentication-check.php");
                exit();
            }
        }
    }
?>
