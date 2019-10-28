<?php
function is_idcard($id)
{
    $id = strtoupper($id);
    $regx = "/(^\d{15}$)|(^\d{17}([0-9]|X)$)/";
    $arr_split = array();
    if (!preg_match($regx, $id)) {
        return FALSE;
    }
    if (15 == strlen($id)) //检查15位 
    {
        $regx = "/^(\d{6})+(\d{2})+(\d{2})+(\d{2})+(\d{3})$/";

        @preg_match($regx, $id, $arr_split);
        //检查生日日期是否正确 
        $dtm_birth = "19" . $arr_split[2] . '/' . $arr_split[3] . '/' . $arr_split[4];
        if (!strtotime($dtm_birth)) {
            return FALSE;
        } else {
            return TRUE;
        }
    } else      //检查18位 
    {
        $regx = "/^(\d{6})+(\d{4})+(\d{2})+(\d{2})+(\d{3})([0-9]|X)$/";
        @preg_match($regx, $id, $arr_split);
        $dtm_birth = $arr_split[2] . '/' . $arr_split[3] . '/' . $arr_split[4];
        if (!strtotime($dtm_birth)) //检查生日日期是否正确 
        {
            return FALSE;
        } else {
            //检验18位身份证的校验码是否正确。 
            //校验位按照ISO 7064:1983.MOD 11-2的规定生成，X可以认为是数字10。 
            $arr_int = array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);
            $arr_ch = array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2');
            $sign = 0;
            for ($i = 0; $i < 17; $i++) {
                $b = (int) $id{
                    $i};
                $w = $arr_int[$i];
                $sign += $b * $w;
            }
            $n = $sign % 11;
            $val_num = $arr_ch[$n];
            if ($val_num != substr($id, 17, 1)) {
                return FALSE;
            } //phpfensi.com 
            else {
                return TRUE;
            }
        }
    }
}
if (isset($_POST["account"])) {
    require_once("dbtools.inc.php");
    $user_user = $_POST["account"];
    $user_password = $_POST["password"];
    $user_password1 = $_POST["password1"];
    $user_name = $_POST["name"];
    $user_id = $_POST["id"];
    $link = create_connection();
    $sql = "SELECT account FROM user Where account = '$user_user'";
    $result = execute_sql($link, "csolbs", $sql);
    if (mysqli_num_rows($result) == 0) {
        if ($user_password == $user_password1) {
            if (is_idcard($user_id)) {
                $value='yes';
                if(filter_has_var(INPUT_POST,'xie')&&$_POST['xie']==$value){
                    mysqli_free_result($result);
                    $sql1 = "INSERT INTO user (account,name,password,id) VALUES ('$user_user','$user_name','$user_password','$user_id')";
                    $result1 = execute_sql($link, "csolbs", $sql1);
                    echo "<script type='text/javascript'>alert('1111')</script>";
                    if ($result1) {
                        mysqli_free_result($result1);
                        mysqli_close($link);
                        echo "<script type='text/javascript'>alert('注册成功')</script>";
                        header("location:index.php");
                        exit;
                    }
                }
                else{
                    echo "<script type='text/javascript'>alert('请认真阅读协议，并点击同意按钮')</script>";
                }
            } else {
                echo "<script type='text/javascript'>alert('请填写您真实的身份证号码，长度为18位')</script>";
            }
        } else {
            echo "<script type='text/javascript'>alert('两次密码输入不一致，请重新输入')</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('您填写的账号已被占用请重新填写')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>《反恐精英Online》官方网站</title>
    <link rel="icon" href="images/favicon.jpg">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/homepage.css">
</head>

<body>
    <div class="hpnav">
        <div class="w">
            <a href="index.php">进入官网</a>
            <a href="">下载游戏</a>
        </div>
    </div>
    <div class="hp_s1">
        <div class="w">
            <form action="homepage.php" method="post" name="myForm" enctype="multipart/form-data">
                <div class="register">
                    <p>账号注册</p>
                    <div class="registerarea1">
                        <table class="left">
                            <tr>
                                <td>
                                    <p>账号：</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>密码：</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>确认密码：</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>姓名：</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>身份证号：</p>
                                </td>
                            </tr>
                        </table>
                        <table class="fromright">
                            <tr>
                                <td>
                                    <input type="text" name="account" maxlength="16" placeholder="字母开头含数字的4-16位字">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="password" name="password" maxlength="20" placeholder="由6-20位数字/字母组成">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="password" name="password1" maxlength="20" placeholder="同第一次输入的密码">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" maxlength="10" name="name" placeholder="请填写您的真实姓名">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" maxlength="18" name="id" placeholder="您的18位身份证号码">
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="registerarea2">
                        <input type="checkbox" value="yes" name="xie">我已阅读并同意<a href="">《最终许可协议》</a>
                        <input type="image" src="images/181025btn.png">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="hp_s2">
    </div>
    <div class="hp_s3">
        <div class="w">
            <a href=""><img src="images/45656.jpg" alt=""></a>
        </div>
    </div>
    <div class="hp_s4">
    </div>
    <div class="hp_s5">
    </div>
    <footer>
        <div class="footercontent">
            <div class="leftfooter">
                <img src="images/logo.png" alt="">
            </div>
            <div class="rightfooter">
                <div class="rightfooter1">
                    <p>
                        世纪天成 | 上海邮通科技有限公司 版权所有 | 上海市徐汇区钦州北路1066号74号楼3楼 | 不良信息举报电话：021-34144567 <a href="">自律公约</a> | <a href="">家长监护</a>
                    </p>
                    <img src="images/infoEn.png" alt="">
                </div>
                <div class="rightfooter2">
                    <a href=""><img src="images/icon_1.png" alt=""></a>
                    <a href=""><img src="images/icon_2.png" alt=""></a>
                    <a href=""><img src="images/icon_3.png" alt=""></a>
                    <a href=""><img src="images/icon_4.png" alt=""></a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>