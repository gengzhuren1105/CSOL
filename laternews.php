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
    <title>最新新闻</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/wrapper.css">
    <link rel="stylesheet" href="css/intelligenceleft.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/laternews.css">
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
    <section class="wrapper">
        <div class="secondheader">
            <div class="left">
                <a href=""><img src="images/cso_logo.png" alt=""></a>
                <p>本游戏适合15周岁以上人群</p>
            </div>
            <div class="right">
                <ul>
                    <li>
                        <dl>
                            <dt>新兵指南</dt>
                            <dd><a href="">新手教程</a> </dd>
                            <dd><a href="commonproblem.php">常见问题</a> </dd>
                            <dd><a href="">账号保护</a> </dd>
                            <dd><a href="">仓库码重置</a></dd>
                            <dd><a href="">违规举报</a></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>下载中心</dt>
                            <dd><a href="gamedownload.php">游戏下载</a></dd>
                            <dd><a href="hotvideo.php">火爆视频</a></dd>
                            <dd><a href="desktoppaper.php">桌面壁纸</a></dd>
                            <dd><a href="">天成管家APP</a></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>游戏资料</dt>
                            <dd><a href="jsversion.php">版本介绍</a></dd>
                            <dd><a href="jsmode.php">模式介绍</a></dd>
                            <dd><a href="jscharacter.php">角色介绍</a></dd>
                            <dd><a href="jsequip.php">装备介绍</a></dd>
                            <dd><a href="jsmap.php">地图介绍</a></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>情报中心</dt>
                            <dd><a href="laternews.php">最新新闻</a></dd>
                            <dd><a href="gamenews.php">游戏新闻</a></dd>
                            <dd><a href="eventnews.php">活动新闻</a></dd>
                            <dd><a href="systemnotice.php">系统公告</a></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>活动专区</dt>
                            <dd><a href="">线上活动</a></dd>
                            <dd><a href="">实物领奖</a></dd>
                            <dd><a href="">虚拟领奖</a></dd>
                            <dd><a href="">兑换铭牌</a></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>玩家互动</dt>
                            <dd><a href="">官方论坛</a></dd>
                            <dd><a href="">官方微博</a></dd>
                            <dd><a href="">玩家攻略</a></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>充值中心</dt>
                        </dl>
                    </li>
                </ul>
            </div>
        </div>
        <section class="path">
            <div>
                <img src="images/theme-intelligence.png" alt="">
            </div>
            <div>
                <p>您的位置：<a href="index.php">首页</a>>情报中心>最新新闻</p>
            </div>
        </section>
        <main>
            <div class="left">
                <div class="leftbg"></div>
                <embed height="120" width="260" src="video/button_blue.swf">
                <ul class="clearfix">
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                </ul>
                <div class="connect clearfix">
                    <p>客服电话：021-34144567</p>
                    <p>客服邮箱：csocs@tiancity.com</p>
                </div>
                <ul>
                    <li><a href="">实名认证</a></li>
                    <li><a href="">账号密保</a></li>
                    <li><a href="">在线客服</a></li>
                    <li><a href="">找回密码</a></li>
                </ul>
                <div class="weichat">
                    <img src="images/qrcode.png">
                </div>
                <div class="cooperation">
                    <p>CSOl合作媒体</p>
                    <img src="images/f_duowan.jpg" alt="">
                    <img src="images/f_52.jpg" alt="">
                    <img src="images/f_aipai.jpg" alt="">
                </div>
            </div>
            <div class="right">
                <ul>
                    <li><a href="laternews.php">最新新闻</a></li>
                    <li><a href="gamenews.php">游戏新闻</a></li>
                    <li><a href="eventnews.php">活动新闻</a></li>
                    <li><a href="systemnotice.php">系统公告</a></li>
                    <li><a href="event.php">赛事</a></li>
                </ul>
                <div class="content">
                    <?php
                    require_once("dbtools.inc.php");
                    $link = create_connection();
                    $sql = "SELECT * FROM xinwen order by date desc";
                    $result = execute_sql($link, "csolbs", $sql);
                    echo "<ul>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        $leixing = $row["leixing"];
                        $biao = $row["biao"];
                        $date1 = $row["date"];
                        echo "<li><span><a class='lei'>[$leixing]</a><a href='' class='biao1'>$biao</a></span><em>[$date1]</em></li><br>";
                    }
                    echo "</ul>";
                    ?>
                </div>
            </div>
        </main>
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