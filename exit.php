<?php
 session_start();
 $_SESSION = array();
 echo "<script> alert('退出成功');parent.location.href='servicecenter.php'; </script>";
?>