<?php
if (isset($_POST["account"])&&isset($_POST["password"])&&isset($_POST["password"])){
    $account=$_POST["account"];
    $password=$_POST["password"];
    $password1=$_POST["password1"];
    require_once("dbtools.inc.php");
    $link = create_connection();
    $sql = "SELECT password FROM user Where account = '$account' AND password='$password'";
    $result = execute_sql($link, "csolbs", $sql);
    if(mysqli_num_rows($result) == 0){
        mysqli_free_result($result);
        mysqli_close($link);
        echo "<script> alert('输入的旧密码有误请重新输入');parent.location.href='changepasswd.php'; </script>";
    }else{
        $sql = "UPDATE user SET password='$password1'where account='$account'";
        if(execute_sql($link, "csolbs", $sql)){
            mysqli_close($link);
            echo "<script> alert('修改成功');parent.location.href='changepasswd.php'; </script>";
        }
    }
}else{
    mysqli_free_result($result);
    mysqli_close($link);
    echo "<script type='text/javascript'>alert('请把信息输入完全')</script>";
    header("location:changepasswd.php.php");
}
?>