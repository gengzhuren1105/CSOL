<?php
if (isset($_POST["account"])&&isset($_POST["id"])&&isset($_POST["name"])) {
    $account=$_POST["account"];
    $id=$_POST["id"];
    $name=$_POST["name"];
    require_once("dbtools.inc.php");
    $link = create_connection();
    $sql = "SELECT password FROM user Where account = '$account' AND id='$id' AND name='$name'";
    $result = execute_sql($link, "csolbs", $sql);
    if(mysqli_num_rows($result) == 0)
    {
        mysqli_free_result($result);
        mysqli_close($link);
        echo "<script> alert('请输入有效信息');parent.location.href='findpassword.php'; </script>";
        
    }else{
        $row = mysqli_fetch_assoc($result);
        $password=$row["password"];
        mysqli_free_result($result);
        mysqli_close($link);
        echo "<script> alert('账号密码为：$password');parent.location.href='findpassword.php'; </script>"; 
    }
}else{
    mysqli_free_result($result);
    mysqli_close($link);
    echo "<script type='text/javascript'>alert('请输入有效信息')</script>";
    header("location:findpassword.php");
}
?>