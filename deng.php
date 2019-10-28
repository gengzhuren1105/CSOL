<?php
if (isset($_POST["account"])) {
  require_once("dbtools.inc.php");

  //获取登录资料
  $login_user = $_POST["account"];
  $login_password = $_POST["password"];

  //建立数据连接
  $link = create_connection();

  //检查账号密码是否正确
  $sql = "SELECT account, password FROM user Where account = '$login_user'
          AND password = '$login_password'";
  $result = execute_sql($link, "csolbs", $sql);

  //若没找到数据，表示账号密码错误
  if (mysqli_num_rows($result) == 0) {
    //释放 $result 占用的内存
    mysqli_free_result($result);

    //关闭数据连接	
    mysqli_close($link);

    echo "<script> alert('账号密码有误请重新输入');parent.location.href='login.php'; </script>";
    //显示信息要求用户输入正确的账号密码
    // // echo "<script type='text/javascript'>alert('账号密码错误，请查明后再登录')</script>";
    // // header("location:login.php");
    // exit;
  } else     //如果账号密码正确
  {
    //将用户资料加入 Session
    session_start();
    $row = mysqli_fetch_object($result);
    $_SESSION["login_user"] = $row->account;
    //释放 $result 占用的内存	
    mysqli_free_result($result);

    //关闭数据连接	
    mysqli_close($link);
    header("location:servicecenter.php");
  }
}
