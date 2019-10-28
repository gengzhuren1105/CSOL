<?php
session_start();
$account=$_SESSION["login_user"];
if(isset($account)){
    require_once("dbtools.inc.php");
    $link = create_connection();
    $sql = "DELETE FROM user where account='$account'";
    if(execute_sql($link, "csolbs", $sql)){
        $_SESSION = array();
        echo "<script> alert('删除成功');parent.location.href='servicecenter.php'; </script>";
    }
}
else{
    echo "<script type='text/javascript'>alert('请先登录账号在注销')</script>";
    header("location:login.php");
}
?>