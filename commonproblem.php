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
    <title>常见问题</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/wrapper.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/commonproblem.css">
    <link rel="stylesheet" href="css/intelligenceleft.css">
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
                <p>您的位置：<a href="index.php">首页</a>>情报中心>常见问题</p>
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
                <h1>CSOL疑难问题解决方法汇总</h1>
                <h2>发布日期：2011年04月01日<a href="">【复制新闻连接】</a></h2>
                <hr>
                <p>
                    <p style="font-size:20px; margin:10px 0px;">登录类问题</p>
                    <p>问：当我登录游戏时弹出“非法程序检测”的报错，而我并没有开启第三方软件或者非法插件怎么办？</p>
                    <p>答：可通过排查的方式尝试性的关闭一些监测性的软件再进行登录尝试。若还是无法解决的话,可以把AhnRpt相关的打包文件通过客服邮箱（csocs@tiancity.com）提交，以便分析问题所在。</p>
                    <p style="margin-top:20px;">问：如何获得AhnRpt的相关打包文件？</p>
                    <p>答：在游戏安装根目录\Bin\ HShield文件夹下，找到“ahnrpt.exe”的应用程序。如图：</p>
                    <img src="images/1.jpg" alt="">
                    <p style="margin-top:20px;">运行“ahnrpt.exe”程序后，点击“产品错误申报”，如图：</p>
                    <img src="images/2.jpg" alt="">
                    <p style="margin-top:20px;">按照图片的格式填写信息</p>
                    <img src="images/3.jpg" alt="">
                    <p style="margin-top:20px;">输入文件名，点击保存</p>
                    <img src="images/4.jpg" alt="">
                    <p style="margin-top:20px;">等待文件生成完成，期间可能会弹出用户同意的选项，点击同意即可</p>
                    <img src="images/5.jpg" alt="">
                    <img src="images/6.jpg" alt="">
                    <p style="margin-top:20px;">生成结束</p>
                    <img src="images/7.jpg" alt="">
                    <p style="margin-top:20px;">找到生成的文件，发送给我们即可</p>
                    <img src="images/8.jpg" alt="">
                    <p style="margin-top:20px;">问：当我在游戏时，黑屏了怎么办？</p>
                    <p>答：出现黑屏情况主要是由于显卡驱动不兼容的问题，发生了这一情况的玩家请更换其他版本的显卡驱动程序。</p>
                    <p>下载ATI显卡驱动：http://cdnpatch.csonlinechina.com/XG_Cats_8.12_XP_32-64bit.exe</p>
                    <p>下载NVIDIA驱动：http://cdnpatch.csonlinechina.com/nvidia_93.71_winxp2k_whql.exe</p>


                    <p style="margin-top:20px;">问：运行游戏时出现更新较慢的情况是为什么？</p>
                    <p>答：主要是因为每次启动游戏时，都需要对整个客户端进行一次完整的扫描，表现为类似于未响应的状态。 根据玩家的网络环境，响应时间也有所不同，但并非程序停止响应，请玩家们耐心等待。</p>


                    <p style="font-size:20px; margin:20px 0px;">服务类问题</p>
                    <p>问：我登录时，提示我密码错误而我又不记得了怎么办？</p>
                    <p>答：您若是不慎丢失密码，可通过"取回密码"专区，我们提供了三种取回登录密码的方式：</p>
                    <p>（流程介绍：http://member.tiancity.com/User/PasswordFindMethod.aspx）</p>
                    <p>方式一：通过验证密码提示问题答案来重置新的密码，在线自助。</p>
                    <p>方式二：通过验证注册资料（用户名、姓名、身份证号码）及注册邮箱来重置新的会员密码，在线自助。</p>
                    <p>方式三：通过传真由工作人员人工核实资料的方式修改您的密码。具体方法为，通过填写并提交相关资料，得到工单号（进行保留），再下载传真表单，并根据要求进行填写完毕后传真给我们，“世纪天成客服中心”收到您的传真后会立即进行处理。您还可以通过工单号，在“会员查询处理状态”中查看传真的处理状态及结果。同时，“世纪天成客服中心”会给您发送一封处理结果的邮件， 请及时查看您的邮箱。</p>


                    <p style="margin-top:20px;">问：我的武器（道具）异常消失了怎么办？</p>
                    <p>答：若是系统原因造成的物品异常丢失的话，请通过客服邮箱（csocs@tiancity.com），将丢失道具的获得时间、道具名称及数量、丢失时间等情况详细描述，工作人员收到邮件后将会提交进行核实。</p>


                    <p style="font-size:20px; margin:20px 0px;">游戏类问题</p>
                    <p>问：刚进入游戏时，弹出个问卷上面要求填写“推荐人昵称”这个是干什么的？</p>
                    <p>答：若您是被其他玩家推荐来玩反恐精英Online的话，可将该玩家在该区的该游戏昵称填写入框内。这样，你就成为了新兵，而被填写人则成为了你的教官。但并不是强制填写的。</p>


                    <p style="margin-top:20px;">问：第一次进入游戏时，创建昵称的对话框被我关了，然后就无法进行游戏了怎么办？</p>
                    <p>答：请您退出游戏，然后重新登录，再创建您的游戏昵称。</p>


                    <p style="margin-top:20px;">问：我是一名新手玩家，那如何进行反恐精英Online的新手训练呢？</p>
                    <p>答：反恐精英Online 新手任务可由玩家自己决定是否需要进行。在登录游戏后的服务器目录状态时，在界面的上方点击“教程大纲”即可进入新手训练，完成后还有游戏金币奖励哦（仅在第一次完成时奖励）。</p>


                    <p style="margin-top:20px;">问：如何载图并在哪里可以找到？</p>
                    <p>答：在游戏过程中，按“F5”键即可截图，并且截图保存在：我的文档\图片收藏\Counter-Strike Online的文件夹下。</p>


                    <p style="margin-top:20px;">问：如何进行录像并在哪里可以找到？</p>
                    <p>答：在游戏比赛过程中，按“ESC”键呼出菜单，选择“录像开始”即开始录制。录像文件为.dem文件，并保存在游戏安装目录\Counter-Strike Online\Bin\demos文件夹下。</p>


                    <p style="margin-top:20px;">问：当我在游戏过程中看到有违规玩家怎么办？</p>
                    <p>答：举报非法游戏玩家方法如下：</p>
                    <p>1） 在游戏比赛过程中，按“ESC”键呼出菜单，选择“举报”即会弹出举报的信件功能，点击下拉框选择举报类型及违规玩家昵称发送即可。</p>
                    <p>2） 用以上同样的办法，在信件中可对被选中的违规玩家昵称进行复制。在客服邮件或客服论坛中粘贴该昵称，并且提供该违规玩家所在服务器、违规游戏时间及相应截图或录像。</p>
                    <p>3） 在游戏比赛过程中，按“ESC”键呼出菜单，选择“录像开始”即开始录制，将该玩家违规游戏的录像.dem文件通过邮件的形式发送客服邮箱，并提供相应的服务器等信息。</p>
                    <p>工作人员在收到以上举报时，将会进行核查，若属实将会进行相应的处理。</p>


                    <p style="margin-top:20px;">问：如何在比赛过程中只对队友说话？</p>
                    <p>答：您可以按shift+回车切换成只对队友聊天的状态，输入您所要说的话后按回车发表既可。</p>


                    <p style="margin-top:20px;">问：我不想在游戏时显示人物的名字还有提示，怎么去除？</p>
                    <p>答：可在游戏比赛时按“V”键去除玩家名字及地图帮助提示。</p>
                </p>
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