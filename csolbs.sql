-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2019-10-10 12:54:04
-- 服务器版本： 5.7.17-log
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csolbs`
--

-- --------------------------------------------------------

--
-- 表的结构 `banben`
--

CREATE TABLE `banben` (
  `name` varchar(20) NOT NULL,
  `tu` varchar(20) NOT NULL,
  `jieshao` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `banben`
--

INSERT INTO `banben` (`name`, `tu`, `jieshao`, `date`) VALUES
('星际仲裁', '78944.jpg', '来自异界的召唤！传奇级近战武器[星际仲裁]限时入库密码箱！', '2019-10-24'),
('红宝石之心', 'cs190814act.jpg', '全新配件稀有武器[红宝石之心(永久)]入库密码箱，限时10倍惊喜', '2019-10-08');

-- --------------------------------------------------------

--
-- 表的结构 `ditu`
--

CREATE TABLE `ditu` (
  `leixing` varchar(20) NOT NULL,
  `tu` varchar(30) NOT NULL,
  `jieshao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ditu`
--

INSERT INTO `ditu` (`leixing`, `tu`, `jieshao`) VALUES
('解除炸弹', '1.jpg', '击杀地图上的所有角色。\r\n指定时间将传送出武器供玩家使用。\r\n1分钟后C4炸弹引爆将致使全部角色死亡。\r\n最终击杀次数最多的角色获胜。'),
('生化模式(暗夜)', 'dt_hwxg_140331.jpg', '在废弃的海湾基地中等待救援的人们未曾想到\r\n他们之中已经有人被感染，并慢慢地蜕变着\r\n不久这个宁静的避风港也终将被鲜红的血液所浸染...\r\n人类：一定时间内，在僵尸的袭击下存活或击毙所有僵尸\r\n僵尸：攻击所有人类将其感染为僵尸');

-- --------------------------------------------------------

--
-- 表的结构 `juese`
--

CREATE TABLE `juese` (
  `name` varchar(8) NOT NULL,
  `tu` varchar(32) NOT NULL,
  `jieshao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `juese`
--

INSERT INTO `juese` (`name`, `tu`, `jieshao`) VALUES
('崔志云', 'p1-0905.jpg', '特种部队出身的情报局美女特工，为完成一项艰巨的作战任务，而穿上了霸主级武装【无双】战斗服。'),
('安娜', 'p2-0905.jpg', '从小生长在反抗军基地的美少女爆破专家，在一次秘密行动中，发现了霸主级武装【血契】战斗服，并将其据为己有。'),
('维克特', 'p-3.jpg', '政府军下属抗击僵尸部队的将军，为了人类、为了家园，他不断浴血奋战。在士兵眼中他是不败的战神，在人民眼中他是屹立不倒的保护神。至今他的身影仍活跃在前线战场。※大灾变中该角色最高等级提高至105级'),
('【邪皇】芙勒蒂卡', 'p-2.jpg', '霸主级角色，强大帝国的女王，为达目的不会放过任何敌人，具有超乎寻常的能力。');

-- --------------------------------------------------------

--
-- 表的结构 `moshi`
--

CREATE TABLE `moshi` (
  `moshi` varchar(8) NOT NULL,
  `jieshao` varchar(100) NOT NULL,
  `tu` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `moshi`
--

INSERT INTO `moshi` (`moshi`, `jieshao`, `tu`) VALUES
('竞技模式', 'T阵营必须在指定的地点装置C4炸弹爆破目标，而CT阵营的任务则是阻止T阵营的行为。', 'm_01.jpg'),
('生化模式', '人类：一定时间内，在僵尸的袭击下存活或击毙所有僵尸。\r\n\r\n僵尸：被感染为僵尸的玩家需要攻击所有人类将其感染为僵尸。\r\n\r\n', '140117mode_1.jpg'),
('求生模式', '生存状态下过关，直至所有玩家死亡后结束。', 'qsmodel1.jpg'),
('决战模式', '在指定的时间内杀敌数最多的队伍或者达成指定的杀敌数即可获得胜利。', 'm_14.jpg'),
('枪王模式', '以团队决战模式为基础，随着击杀数的增加，所持的武器也将自动变更。率先达到指定击杀数的队伍获得胜利。', 'qw.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `shipin`
--

CREATE TABLE `shipin` (
  `dizhi` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `shipin`
--

INSERT INTO `shipin` (`dizhi`, `name`) VALUES
('0208jk.jpg', '213421123'),
('0814a.jpg', '213414123'),
('0817home.jpg', 'asdsfa'),
('0831ver12.jpg', 'asdasdsa'),
('1026videoo.jpg', 'asdasdf'),
('1110home.jpg', 'asdafsfda'),
('180419vidoe.jpg', 'asfdscxz'),
('313566.jpg', 'xzczxczx '),
('cs171206video.jpg', 'safxzcz'),
('cs180124video.jpg', 'xzczxc');

-- --------------------------------------------------------

--
-- 表的结构 `tupian`
--

CREATE TABLE `tupian` (
  `dizhi` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tupian`
--

INSERT INTO `tupian` (`dizhi`) VALUES
('190712-800.jpg'),
('fallen-titan_s.jpg'),
('hidden17_s.jpg'),
('Kraken-poster_s.jpg'),
('kuanhuan_316.jpg'),
('scorpion_poster_s.jpg'),
('wp20120425_s.jpg'),
('Zombie-Scenario_Season2_s.jpg'),
('z-virus-poster_3_s.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `account` varchar(16) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(32) NOT NULL,
  `id` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`account`, `password`, `name`, `id`) VALUES
('12345678', '123456', '耿浩聪', '130181199811165719'),
('21334324', '123456', '薛中阳', '131102199806140619');

-- --------------------------------------------------------

--
-- 表的结构 `xinwen`
--

CREATE TABLE `xinwen` (
  `leixing` varchar(8) NOT NULL,
  `biao` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `xinwen`
--

INSERT INTO `xinwen` (`leixing`, `biao`, `date`) VALUES
('公告', '霸主芯片销售计划变更公告', '2019-10-02'),
('活动', '“红蓝对决 巅峰竞速”获奖信息开放填写公告', '2019-09-29'),
('热点', '宝宝皮蛋入驻全明星！魔法少女超凡角色上线', '2019-09-25'),
('热点', '【多玩】CSOL&“跑跑”联动升级 宝宝皮蛋做客全明星', '2019-10-08'),
('赛事', '新征程再出发！2019TGG冬季杯预热赛率先来袭', '2019-10-10'),
('赛事', '决战魔都 2019TGG夏季杯全国总决赛即将开幕', '2019-10-24');

-- --------------------------------------------------------

--
-- 表的结构 `zbei`
--

CREATE TABLE `zbei` (
  `name` varchar(20) NOT NULL,
  `tu` varchar(20) NOT NULL,
  `jieshao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zbei`
--

INSERT INTO `zbei` (`name`, `tu`, `jieshao`) VALUES
('Python.357战损版', '092601.jpg', '使用6发.357Magnum弹的经典左轮手枪，以命中率高、破坏力强、连射速度快著名。特殊设计的弹巢，足以承受大口径子弹发射时带来的强大冲击。战斗中损坏后仅进行了简单的修理，在使用时依稀能感受到武器的莫名变化。'),
('【弑神】双剑', '0926x.jpg', '霸主级武器，概神灵恶魔皆可弑之，例无有生还者也。红剑曰弑神，斩击迅疾。蓝剑曰屠魔，突刺破军。双剑合璧可展弑神剑阵，剑气纵横所向披靡！'),
('破灭光雷', '092602.jpg', '使用25发弹性合金弹的霰弹枪。通过电磁力射出的特制弹丸，在撞击物体后会反弹改变攻击轨迹，给予目标多次伤害打击');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banben`
--
ALTER TABLE `banben`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`account`);

--
-- Indexes for table `zbei`
--
ALTER TABLE `zbei`
  ADD PRIMARY KEY (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
