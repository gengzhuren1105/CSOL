<?php
session_start();
$account = $_SESSION["login_user"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>客服中心</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/servicecenter.css">
</head>

<body>
    <header>
        <section class="mainheader w" id="return">
            <a href="index.php" class="left"><img src="images/tclogo.gif" alt=""></a>
            <ul class="firstul">
                <li><a href=""><img src="images/gnb_tit_1.jpg" alt=""></a>
                    <div class="moregame">
                        <section class="fpsgame left">
                            <h2>射击游戏</h2>
                            <ul>
                                <li>
                                    <img src="images/game_icon04.jpg" alt="" class="left mglf">
                                    <a href="index.php" class="left mgls">反恐精英OL</a>
                                    <img src="images/gnb_hot.jpg" alt="" class="mglt" style="float:right;margin-right:10px">
                                </li>
                            </ul>
                        </section>
                        <section class="cosplay left">
                            <h2>角色扮演</h2>
                            <ul>
                                <li>
                                    <img src="images/game_icon01.jpg" alt="" class="left mglf">
                                    <a href="" class="left mgls">洛奇英雄传</a>
                                    <img src="images/gnb_hot.jpg" alt="" class="mglt" style="float:right;margin-right:10px">
                                </li>
                                <li>
                                    <img src="images/game_icon02.jpg" alt="" class="left mglf">
                                    <a href="" class="left mgls">洛奇</a>
                                    <img src="" alt="">
                                </li>
                                <li>
                                    <img src="images/game_icon_dom.png" alt="" class="left mglf">
                                    <a href="" class="left mgls">封印者</a>
                                    <img src="images/gnb_new.jpg" alt="" class=" mglt" style="float:right;margin-right:10px">
                                </li>
                                <li>
                                    <img src="images/game_icon_etra.png" alt="" class="left mglf">
                                    <a href="" class="left mgls">领地人生</a>
                                    <img src="images/gnb_new.jpg" alt="" class="mglt" style="float:right;margin-right:10px">
                                </li>
                                <li>
                                    <img src="images/game_icon_fs2.jpg" alt="" class="left mglf">
                                    <a href="" class="left mgls">阿佩尔物语</a>
                                    <img src="images/gnb_new.jpg" alt="" class="mglt" style="float:right;margin-right:10px">
                                </li>
                            </ul>
                        </section>
                        <section class="leisuregame left">
                            <h2>休闲游戏</h2>
                            <ul>
                                <li>
                                    <img src="images/game_icon_hw.png" alt="" class="left mglf">
                                    <a href="" class="left mgls">自由篮球</a>
                                    <img src="images/gnb_hot.jpg" alt="" class="mglt" style="float:right;margin-right:10px">
                                </li>
                                <li>
                                    <img src="images/game_icon_ppkt.png" alt="" class="left mglf">
                                    <a href="" class="left mgls">跑跑卡丁车</a>
                                    <img src="" alt="" class="mglt">
                                </li>
                            </ul>
                        </section>
                        <section class="mobilegame left">
                            <h2>手机游戏</h2>
                            <ul>
                                <li>
                                    <img src="images/game_icon_ppkt.png" alt="" class="left mglf">
                                    <a href="" class="left mgls">跑跑手游</a>
                                    <img src="images/gnb_new.jpg" alt="" class="mglt" style="float:right;margin-right:10px">
                                </li>
                                <li>
                                    <img src="images/game_iconapl.jpg" alt="" class="left mglf">
                                    <a href="" class="left mgls">火王</a>
                                    <img src="images/gnb_new.jpg" alt="" class="mglt" style="float:right;margin-right:10px">
                                </li>
                                <li>
                                    <img src="images/game_iconcls.jpg" alt="" class="left mglf">
                                    <a href="" class="left mgls">战争与文明</a>
                                    <img src="images/gnb_new.jpg" alt="" class="mglt" style="float:right;margin-right:10px">
                                </li>
                                <li>
                                    <img src="images/game_icon_yzgj.png" alt="" class="left mglf">
                                    <a href="" class="left mgls">炎之轨迹</a>
                                    <img src="images/gnb_new.jpg" alt="" class="mglt" style="float:right;margin-right:10px">
                                </li>
                                <li>
                                    <img src="images/game_icon_mxd.jpg" alt="" class="left mglf">
                                    <a href="" class="left mgls">冒险岛</a>
                                    <img src="images/gnb_new.jpg" alt="" class="mglt" style="float:right;margin-right:10px">
                                </li>
                                <li>
                                    <img src="images/game_iconlif.jpg" alt="" class="left mglf" style="width:20px">
                                    <a href="" class="left mgls">艾特拉战纪</a>
                                    <img src="images/gnb_new.jpg" alt="" class="mglt" style="float:right;margin-right:10px">
                                </li>
                            </ul>
                        </section>
                    </div>
                </li>
                <img src="images/line_sep.jpg" alt="">
                <li><a href=""><img src="images/gnb_tit_2.jpg" alt=""></a></li>
                <img src="images/line_sep.jpg" alt="">
                <li><a href=""><img src="images/gnb_tit_3.jpg" alt=""></a></li>
                <img src="images/line_sep.jpg" alt="">
                <li><a href="servicecenter.php"><img src="images/gnb_tit_6.jpg" alt=""></a></li>
                <img src="images/line_sep.jpg" alt="">
                <li><a href="">天成管家APP</a></li>
            </ul>
            <a href="" class="headeradv"><img src="images/headeradv.gif" alt=""></a>
            <?php
            if (isset($account)) {
                echo "<ul class='secondul1'>
                 <li class='left'><p>欢迎你：$account<a href='exit.php'>&nbsp退出</a></p></li>";
            } else {
                echo "<ul class='secondul1'>
                 <li class='left'><a href='login.php'><img src='images/gnb_login.gif' alt=''></a></li>
                 <img src='images/line_sep.jpg' alt='' class='left' style='margin-top:10px;'>
                 <li class='fatherms'><a href=''>会员服务</a>
                     <div class='memberserve'>
                         <ul>
                             <li><img src='images/pas_ic.gif' alt=''><a href='homepage.php'>账号注册</a></li>
                             <li><img src='images/pas_ic.gif' alt=''><a href='findpassword.php'>找回密码</a></li>
                             <li><img src='images/pas_ic.gif' alt=''><a href=''>在线客服</a></li>
                             <li><img src='images/pas_ic.gif' alt=''><a href=''>活动领奖</a></li>
                             <li><img src='images/pas_ic.gif' alt=''><a href=''>账户密保</a></li>
                             <li><img src='images/pas_ic.gif' alt=''><a href=''>账户注销</a></li>
                         </ul>
                         <a href='servicecenter.php' class='right' style='margin-right:10px'>更多></a>
                     </div>
                 </li>
             </ul> ";
            }
            ?>
        </section>
        <a href="#return" class="returntop"><img src="images/f5a00969dcd21fe5483fa7a4270fa1af.jpg" alt=""></a>
    </header>
    <nav>
        <section class="content">
            <a href=""><img src="images/logo.jpg" alt=""></a>
            <ul>
                <li><a href="index.php">首页</a></li>
                <li><a href="">帮助手册</a></li>
                <li><a href="">自助服务</a></li>
                <li><a href="">联系服务</a></li>
            </ul>
        </section>
    </nav>
    <section class="detect">
        <div class="content">
            <div class="detecting">
                <?php
                if (isset($account)) {
                    echo "<p>欢迎你：$account<a href='exit.php'>&nbsp退出</a></p>";
                } else {
                    echo "<p>亲爱的玩家，请<a><a href='login.php'>登录</a></p>";
                }
                ?>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="w">
            <ul>
                <li><a href="findpassword.php"></a>
                    <p>密码找回</p>
                </li>
                <li><a href="changepasswd.php"></a>
                    <p>密码修改</p>
                </li>
                <li><a href="delete.php"></a>
                    <p>账号注销</p>
                </li>
                <li><a href=""></a>
                    <p>账号锁定/解锁</p>
                </li>
                <li><a href=""></a>
                    <p>支付锁定/解锁</p>
                </li>
                <li><a href=""></a>
                    <p>违规封停查询</p>
                </li>
            </ul>
        </div>
    </section>
    <footer>
        <section class="mainfooter">
            <section class="leftfooter left">
                <img src="images/logo.png" alt="">
            </section>
            <section class="rightfooter left">
                <section class="righttopfooter">
                    <span>
                        世纪天成 | 上海邮通科技有限公司 版权所有 | 上海市徐汇区钦州北路1066号74号楼3楼 | 不良信息举报电话：021-34144567
                        <a href="">自律公约</a> | <a href="">家长监护</a>
                    </span>
                    <img src="images/infoEn.png" alt="">
                </section>
                <section class="rightbottomfooter">
                    <a href=""><img src="images/icon_2.png" alt=""></a>
                    <a href=""><img src="images/icon_1.png" alt=""></a>
                    <a href=""><img src="images/icon_3.png" alt=""></a>
                    <a href=""><img src="images/icon_4.png" alt=""></a>
                    <ul>
                        <li>
                            <a href="">沪网文[2019]0896-066</a>
                        </li>
                        <li>
                            <a href="">沪ICP证 B2-20040070</a>
                        </li>
                        <li>
                            <a href="">新出网证(沪)字017号</a>
                        </li>
                    </ul>
                    <ul class="secondul">
                        <li>
                            <span>
                                <p>新出音字</p>
                            </span>
                            [2008]910号
                        </li>
                        <li>
                            <span>
                                <p>文网测字</p>
                            </span>
                            [2008]24号
                        </li>
                        <li>
                            <span>
                                <p>电出字</p>
                            </span>
                            024-2008-065
                        </li>
                    </ul>
                </section>
            </section>
        </section>
    </footer>
</body>

</html>