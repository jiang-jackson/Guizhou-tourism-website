-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-05-17 04:13:43
-- 服务器版本： 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guizhou`
--

-- --------------------------------------------------------

--
-- 表的结构 `travel_adminuers`
--

CREATE TABLE `travel_adminuers` (
  `adminu_id` int(11) NOT NULL,
  `adminemail` varchar(255) NOT NULL,
  `adminpassword` varchar(255) NOT NULL,
  `admin_birth` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `travel_adminuers`
--

INSERT INTO `travel_adminuers` (`adminu_id`, `adminemail`, `adminpassword`, `admin_birth`) VALUES
(1, '1591631526@qq.com', '123456', '2017-04-09 07:26:24'),
(2, '2027411700@qq.com', 'zj123456', '2017-04-09 08:03:48');

-- --------------------------------------------------------

--
-- 表的结构 `travel_jingdian`
--

CREATE TABLE `travel_jingdian` (
  `jingdian_id` int(11) NOT NULL,
  `jingdian_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jingdian_price` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `jingdian_trait` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `jingdian_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jingdian_content` mediumtext CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `jingdian_site` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jingdian_birth` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `travel_jingdian`
--

INSERT INTO `travel_jingdian` (`jingdian_id`, `jingdian_name`, `jingdian_price`, `jingdian_trait`, `jingdian_image`, `jingdian_content`, `jingdian_site`, `jingdian_birth`) VALUES
(2, '黄果树瀑布', '180', '透陇隙南顾，则路左一溪悬捣，万练习飞空，溪上石如莲叶下覆，中剜三门，水由叶上浸顶而下，如鲛绡万幅，横罩门外，直下者不可以丈数计，捣珠崩玉，飞沫反涌，如烟雾腾空，势甚雄历', '/tpg/upload/2017-03-30/58dce8cb03c9c.jpeg', '黄果树瀑布，即黄果树大瀑布，是世界著名大瀑布之一，以水势浩大著称，属喀斯特地貌中的侵蚀裂典型瀑布，雄伟壮观。', '安顺', '2017-03-30 11:15:23'),
(6, '百里杜鹃', '90', '享有&quot;地球彩带杜鹃王国养身福地清凉世界&quot;之美誉，养生休闲的好居所，避暑度假的好去处，&quot;养生福地、清凉世界&quot;美誉响彻海内外', '/tpg/upload/2017-05-16/591a950c9ffcf.jpg', '是国家5A级旅游景区、国家生态旅游示范区、世界唯一的杜鹃花国家森林公园、国家风景名胜区、国家森林公园、国家自然保护区；是全国低碳旅游实验区、亚洲·大中华区十大自然原生态旅游景区、世界上最大的天然花园；是中国春观花、夏避暑、秋休闲、冬赏雪等生态旅游胜地。', '毕节', '2017-03-30 11:57:57'),
(7, '梵净山', NULL, NULL, '/tpg/upload/2017-03-30/58dcf406119bf.jpg', '梵净山曾荣膺2008年度和2009年度的&quot;中国十大避暑名山&quot;，与山西五台山、浙江普陀山、四川峨眉山、安徽九华山齐名的中国第五大佛教名山。', '铜仁市', '2017-03-30 12:03:18'),
(8, '云台山', NULL, NULL, '/tpg/upload/2017-03-30/58dcf4e60cb43.jpg', '云台山风景区是舞阳河国家级风景名胜区的主要组成部分，由云台山、外营台、轿顶山及大田垴等群峰组成。面积约210平方公里，主峰团仑岩海拔1066米，突起于群山之间，因山形&quot;四面削成，独出于云霄之半&quot;，山巅如台，加之云雾缭绕，故名云台山。', '施秉县', '2017-03-30 12:07:02'),
(9, '红枫湖', NULL, NULL, '/tpg/upload/2017-03-30/58dcf5d3a6b65.jpg', '红枫湖是一个融高原湖光山色、岩溶地貌、少数民族风情为一体的国家级风景名胜区、国家AAAA级旅游区。湖边有座红枫岭，岭上及湖周多枫香树。深秋时节，枫叶红似火，红叶碧波，风景优美，故名&quot;红枫湖&quot;。', '贵阳市', '2017-03-30 12:10:59'),
(10, '织金古建筑群', NULL, NULL, '/tpg/upload/2017-03-30/58dcf6a0d29d0.jpg', '织金古建筑群位于贵州省织金县。织金古城，山清水秀，溪涧纵横，古迹众多，门类齐全，包括佛寺、道观、文庙、书院、会馆、祠堂、衙署、宝塔、泉井、津梁、古道、民居、店铺、作坊等方方面面，分布在一座座大理石小山上和流经城内的贯城河畔。', '织金县', '2017-03-30 12:14:24'),
(11, '南江大峡谷', NULL, NULL, '/tpg/upload/2017-03-30/58dcf736668c2.jpg', '南江大峡谷已具备了建立生态旅游示范区丰富的自然资源，每晚的民族歌舞文化让您流连忘返，别具特色的木桶植物精汽浴，天然泉水游泳池，惟妙惟肖的释牟尼佛，弥勒佛以及忽隐忽现众多佛像构成的万佛山，户外烧烤，跨江溜索更让您心旷神怡，开心尽兴。', '开阳县', '2017-03-30 12:16:54'),
(12, '黔南州荔波樟江景区', NULL, NULL, '/tpg/upload/2017-03-30/58dcf7e488355.jpg', '景区内以丰富多样的喀斯特地貌、秀丽奇特的樟江水景和繁盛茂密的原始森林、各类珍稀品种动植物为特色，集奇特的山水自然风光与当地布依族、水族、瑶族等民族特色于一身，是贵州首个世界自然遗产地。', '荔波县', '2017-03-30 12:19:48'),
(13, '龙宫', '199', '天下喀斯特，尽在龙宫', '/tpg/upload/2017-03-30/58dcf9f8e44b8.jpg', '龙宫集溶洞、峡谷、瀑布、峰林、绝壁、溪河、石林、漏斗、暗河等多种喀斯特地质地貌景观于一体，是喀斯特地貌形态展示最为集中全面的景区，被誉为“天下喀斯特，尽在龙宫”。 龙宫植物丰富，中草药植物随处可寻，数量达1200余种之多。 ', '安顺市', '2017-03-30 12:28:40'),
(14, '青岩古镇', '109', '贵州四大古镇之一', '/tpg/upload/2017-03-30/58dcfa785ab4f.jpg', '青岩古镇，贵州四大古镇之一，位于贵阳市南郊，建于明洪武十年(1378年)，原为军事要塞 。古镇内设计精巧、工艺精湛的明清古建筑交错密布，寺庙、楼阁画栋雕梁、飞角重檐相间。', '贵阳市', '2017-03-30 12:30:48'),
(15, '草塘千年古邑旅游区', '99', '自然人文景观优势突出', '/tpg/upload/2017-04-08/58e85034def90.jpg', '中国草塘千年古邑旅游区位于黔北四大古集镇之一的瓮安县猴场镇，距瓮安县主城区14公里。草塘古邑旅游区环境优美，自然人文景观优势突出。旅游区汇聚了土司文化、商贾文化、龙狮文化和红色文化，有着川湘滇黔民风民俗的深厚文化底蕴。旅游区是集休闲度假、旅游观光、产业配套服务的国家4A级旅游景区。', '瓮安县', '2017-04-08 02:51:32'),
(16, '玉舍国家森林公园', '160元', '这里保存有完好的原始森林', '/tpg/upload/2017-04-08/58e850ce7d69f.jpg', '玉舍国家森林公园位于贵州省水城县南部，距六盘水市中心30公里，交通便利，有水柏铁路和两水线通过景区。该公园以浩瀚的“林海”为主，总面积50134亩，有林面积40680亩，有300亩保存完好的原始林，森林覆盖率在90%以上。', '六盘水', '2017-04-08 02:54:06'),
(17, '红枫湖景区 ', '80元', '拥有独特的景观', '/tpg/upload/2017-04-08/58e8515f428a4.jpg', '红枫湖景区由北湖、南湖、中湖、后湖四部分组成。北湖以岛闻名。鸟岛、蛇岛、龟岛等诸多岛屿如散落的珍珠一般点缀在万顷碧波之上，形成了独特的景观；北湖沿岸，有西汉的古墓群，有明代的“苗王营垒”。', '贵阳市', '2017-04-08 02:56:31'),
(18, '天河潭', '120元', '全新打造的水秀景观，将现代科技元素与水文化相结合', '/tpg/upload/2017-04-08/58e851fe205b5.jpg', '天河潭现增游客服务中心、太阳广场、贵阳故事街、滨水休闲区、五色花海、户外婚庆草坪等区域，并配套文化娱乐、餐饮购物、休闲度假、商务会议、民俗体验、户外婚礼等多元化服务。全新打造的水秀景观，将现代科技元素与水文化相结合，呈现“白天一景、晚上一秀”的 美景。', '贵阳市', '2017-04-08 02:59:10'),
(19, '黎平肇兴侗寨', '100元', '肇兴侗寨以鼓楼群最为著', '/tpg/upload/2017-04-16/58f3371676176.jpg', '肇兴侗寨是全国最大的侗族村寨之一，素有“侗乡第一寨”之美誉。肇兴原名“肇洞”，是一个东西向的狭长谷地，两条小溪汇成一条小河穿寨而过，河面跨有有六座风雨桥，风雨桥因桥上建有长廊式、可遮蔽风雨的桥屋而得名。通道两侧有栏杆，形如游廊。寨中房屋为干栏式吊脚楼，鳞次栉比，错落有致，全部用杉木建造，硬山顶覆小青瓦，古朴实用。', '黔东南', '2017-04-16 09:19:18'),
(20, '铜仁九龙洞', '80元', '洞中有洞，洞内厅厅相连，石笋、石柱、石花、石幔等漫布各厅各洞，各具特色，千姿百态，景象万千。', '/tpg/upload/2017-04-16/58f33801cc0ba.jpg', '九龙洞是贵州省首批确定的十大风景名胜之一。位于铜仁城东17公里的骂龙溪右侧观音山山腰，其山峭壁嶙峋、雄奇险峻、漫山翠竹，绿意森然，它背靠更高的“六龙山”，面临秀丽的锦江河。为九龙洞铺设了一幅壮丽的外景。相传六龙山上有六条黄龙，相邀锦江中的三条青龙来洞中相聚，九龙来到洞中，见这蓬莱仙境般的洞府，顿时私欲大发，都想将洞府据为已有，相争不休。待到鸡鸣天亮时，谁也无法返回原来的居所了，只得盘踞在洞内深处的一巨型彩柱上，再也不能脱身。', '铜仁市', '2017-04-16 09:23:13'),
(21, '织金洞', '120元', '中国最美六大旅游洞穴”之首；“中国最美的旅游胜地——“中国十大奇洞”之首', '/tpg/upload/2017-05-02/590816c45d03d.jpg', '织金洞规模宏大，形态万千，色彩纷呈，是织金洞景观的显著特色。察洞内长度达12．1公里，相对高差150多米，已勘最宽跨度175米，一般宽高在60米一100米，总面积达70多万平方米，堆积物平均高度为40米左右，最高的达70米，囊括了全世界溶洞堆积物类别的40多种堆积形态，呈现出万干气象，无限风光。', '毕节市', '2017-05-02 05:19:00'),
(22, '威宁草海', '100元', '贵州旅游皇冠上的一块蓝宝石”；有“高原明珠”、“鸟类王国”等美誉', '/tpg/upload/2017-05-02/590818828478d.jpg', ' 贵州威宁草海国家级自然保护区, 位于贵州省西部威宁县县城西南面，保护区面积120平方公里, 其中水域面积46.5平方公里。是一个完整、典型的高原湿地生态系统、是黑颈鹤等228种鸟类的重要越冬地和迁徙中转站；是中国著名三大高原湖泊（草海、滇池，青海湖）之一、贵州最大的高原天然淡水湖泊、中国Ⅰ级重要湿地、国家4A级旅游景区；是世界十大观鸟基地，被美国国家地理杂志评选为世界上最受欢迎的旅游胜地', '毕节市', '2017-05-02 05:26:26'),
(23, '遵义会议会址', '免费', '遵义会议会址被国务院列为第一批全国重点文物保护单位。2005年，被评为国家AAAA级旅游景区', '/tpg/upload/2017-05-02/59081a33ae95e.jpg', '会址是一座坐北朝南的二层楼房，为中西合璧的砖木结构建筑。上盖小灰瓦，歇山式屋顶上开一“老虎 窗”，有抱厦。整个建筑分主楼、跨院两部分。主楼楼屋四周有回廊，楼房的檐下柱间有十个 券拱支撑，保留了我国古建筑“彻上明造”的结构风格。楼上有梭门梭窗。檐柱顶饰有垩土堆 塑的花卉。东西两端各有一转角楼梯，外面加有一道木栅栏。门窗涂饰赭色，镶嵌彩色玻璃， 窗外层加有板门。', '遵义市', '2017-05-02 05:33:39'),
(24, '兴义万峰林', '40元', '万峰林属于中国西南喀斯特地貌，堪称中国锥状喀斯特博物馆，被称誉为“天下奇观” 。万峰林包括东、西峰林，景观各异，是国内最大、最典型的喀斯特峰林。', '/tpg/upload/2017-05-02/59081b66b2a61.jpg', '兴义万峰林，气势磅礴，景观奇特。峰、龙、坑、缝、林、湖、泉、洞八景分布广泛，其间天然明河暗流、天然湖泊、天然溶洞、天然林木、奇花异草、飞禽走兽交相辉映，相得益彰，使峰林壮如千军万马，奇如海洋波涛，美如水墨画卷。', '兴义市', '2017-05-02 05:38:46'),
(25, '马岭河峡谷', '80元', '马岭河峡谷是一条在造山运动中剖削深切的大裂水地缝，谷内群瀑飞流，翠竹倒挂，溶洞相连，两岸古树名木点缀其间，千姿百态', '/tpg/upload/2017-05-02/59081c5174291.jpg', '云贵高原是世界上喀斯特地貌分布最广的地区。马岭河峡谷风景区地处云贵高原隆起的乌蒙山与广西丘陵之间，三叠系系碳酸盐可溶岩石分布广泛，岩层断裂褶皱复杂，集中体现了喀斯特多层次、多类型地貌景观，与东西两边的黄果树瀑布和云南路南石林竞展风姿，构成冠盖中华的喀斯特风光。', '兴义市', '2017-05-02 05:42:41'),
(26, '四洞沟景区', '81', '四洞沟风景区是以大同四洞沟瀑布群及其附近的天生桥、渡仙桥、清代节孝石坊为主，包括两岔河秀色、华平瀑布、大水沟瀑布、石鼎山奇石、方碑云海、大同竹溪、大同古镇等景观。被誉为：', '/tpg/upload/2017-05-02/59081db94efaa.jpg', '在景区四洞沟一段约四公里的河道上，按大致相等的距离排列着四级跌水瀑布，姿态各异。四洞沟梯级瀑布，是赤水河畔又一奇观。从赤水市沿赤水河溯流而上，一片翠绿从中，忽而闪出点点惺红的土壤与粉壁青瓦的农舍，宛若置身画图之中。至大同河，弃舟登岸，即向四洞沟进发。沿途林木茂密，到处飞帘溅珠，四级瀑布瀑宽均在四十米左右，落差高者近五十米，神韵俱佳，有如翠螺沐浴，或似新月流光，或若玉蟾戏蛇，或像云中落锦。景区内峰媚岭秀，景色优美，谷底翠竹繁茂，山间林木葱茏，丹霞石铺成的道路旁，桫椤、小金花茶等国家一级保护的珍稀植物随处可见。', '赤水', '2017-05-02 05:48:41'),
(27, '黔灵山公园', '5', '有“黔南第一山”之称的黔灵山而得名，集山、林、泉、湖、洞、寺、动物于一体，清绝于世，值得一游!', '/tpg/upload/2017-05-16/591a961f1f6aa.jpg', '黔灵山公园是一座综合性的游览公园，建于1957年，位于贵阳市西北角，因素有“黔南第一山”之称的黔灵山而得名。公园幽静的山谷里建有动物园，清泉怪石，随处可见，有成群的灵猴和鸟类在此栖息，山上还保存有第四纪冰川期遗迹。黔灵公园不仅是国内著名风景区，而且地质构造复杂，植物种类繁多，是教学实习的良好基地。', '贵阳', '2017-05-16 06:03:11');

-- --------------------------------------------------------

--
-- 表的结构 `travel_jiudian`
--

CREATE TABLE `travel_jiudian` (
  `jiudian_id` int(11) NOT NULL,
  `jiudian_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jiudian_price` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jiudian_tel` varchar(255) NOT NULL,
  `jiudian_site` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jiudian_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jiudian_star` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jiudian_content` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jiudian_birth` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `travel_jiudian`
--

INSERT INTO `travel_jiudian` (`jiudian_id`, `jiudian_name`, `jiudian_price`, `jiudian_tel`, `jiudian_site`, `jiudian_image`, `jiudian_star`, `jiudian_content`, `jiudian_birth`) VALUES
(2, '毕节云上草海酒店', '219元', 'http://hotels.ctrip.com/hotel/669070.html?isFull=F#ctm_ref=hod_sr_lst_dl_n_1_1', '毕节', '/tpg/upload/2017-04-06/58e6341b3e994.jpg', '四星级', '毕节云上草海酒店极具现代风格，明快、简洁，充满都市气息。酒店主楼共四层，总建筑面积8250平方米。店内拥有100余间舒适客房，房内备有中央空调、高清网络电视，国内国际直拨电话、洗浴设施，为您缓解身心疲惫，享受轻松与惬意。', '2017-04-06 12:27:07'),
(3, ' 黄果树湘水芙蓉大酒店', '257元起', 'http://hotel.tuniu.com/detail/5498554?checkindate=2017-04-30&amp;checkoutdate=2017-05-01', '安顺市', '/tpg/upload/2017-04-29/5904600553dc7.jpg', '四星级', '黄果树湘水芙蓉大酒店地处5A级黄果树风景名胜区，距景区步行数分钟左右，地理位置优越，交通便利。酒店集餐饮、住宿、休闲为一体，拥有整洁舒适的各类客房，房内均配有wifi，是当今离不开网络的朋友们带来方便。', '2017-04-29 09:42:29'),
(4, '荔波亿申金钻酒店', '184元起', 'http://www.tuniu.com/hotelhome/805-651852/', '黔南', '/tpg/upload/2017-04-29/590460ffd3ad0.jpg', '三星级', '荔波亿申金钻酒店地处荔波最繁华主街道的民生路，紧邻邓恩铭广场，交通便利。荔波亿申金钻酒店装雅致，拥有各式客房，时尚、舒适、品位独特。房内20M光纤飞速上网、国内长途拨打等配套设施齐备，确保宾客拥有优质的睡眠。', '2017-04-29 09:46:39'),
(5, '镇远镖局·西门吹雪客栈', '460元', 'http://www.tuniu.com/hotelhome/806-229653327/', '黔东南', '/tpg/upload/2017-04-29/590461d129fd7.jpg', '五星级', '镇远镖局之西门吹雪客栈位于镇远古城内，临河而建。步行6分钟即可到达青龙洞景区；步行3-5分钟即可到达步行街，这里既无闹市喧嚣，但又与繁华街市仅举步之遥，是您入住的绝佳之处。从客栈出门顺势而上便是幽静风景秀丽的龙潭景区方向，从客栈出门顺势而下便是古朴而热闹的古城中心。如您坐公交车在老大桥下车后仅仅步行3分钟就能到达我们客栈，出入的便利是您意想不到的。', '2017-04-29 09:50:09'),
(6, '遵义魅力明珠大酒店', '229元起', 'http://www.tuniu.com/hotelhome/811-198126384/', '遵义', '/tpg/upload/2017-04-29/5904628320267.jpg', '四星级', '遵义魅力明珠酒店位于汇川区成都路、大连路、深圳路、南京路的交汇处。地处北部新城区繁华商业圈，周边拥有大型高端购物商场，国贸购物中心等。距离遵义市政府、市委的路程约十分钟。距茅草铺客运站约五分钟。距遵义机场约20分钟。距中国革命圣地，遵义会址和红色旅游地，红军山烈士陵园约3公里。地理位置优越，交通十分便利。主楼共8层，是集客房、餐饮、会议、休闲娱乐、足疗保健于一体的综合性豪华大酒店。', '2017-04-29 09:53:07');

-- --------------------------------------------------------

--
-- 表的结构 `travel_meishi`
--

CREATE TABLE `travel_meishi` (
  `id` int(11) NOT NULL,
  `meishi_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meishi_price` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meishi_site` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meishi_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meishi_content` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `birth` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `travel_meishi`
--

INSERT INTO `travel_meishi` (`id`, `meishi_name`, `meishi_price`, `meishi_site`, `meishi_image`, `meishi_content`, `birth`) VALUES
(3, '苗乡酸汤鱼饺 ', '20', '黔东南', '/tpg/upload/2017-04-03/58e1fa1e045b1.jpg', '汤色鲜红，酸香可口，质地爽滑，馅心鲜嫩，为黔东南地区名小吃，获全国第四届烹饪大赛银奖。', '2017-04-03 07:30:38'),
(4, '杠子面', '10元', '黔西南', '/tpg/upload/2017-04-29/5904891890fa0.jpg', '杠子面是位于甘肃省东南部西和县的汉族特色小吃之一，与西和锅盔齐名，在附近县市小有名气。杠子面根据中国手工面条三大传统技法“压”“拉”“切”中研究出的“压面”和“切面”，综合而成的特色面。杠子面面条以其独特的爽滑劲道让人赞不绝口，它之所以爽滑除了有少份量的淀粉和在面里以外。还有最重要的一道工序，就是擀面了，说是擀面其实是用一根胳膊粗的杠子压，杠子的一头固定在墙里，人骑在另一头来压，这样压出来的面，薄如纸，韧如绸，杠子面也就是由此得名。单碗下锅，调料特殊，口味以酸辣为主，热吃凉拌，均皆适口。', '2017-04-29 12:37:44'),
(5, '苗家酸汤鱼', '32', '兴义', '/tpg/upload/2017-04-29/59048993e4874.jpg', '苗家酸汤鱼是苗族人民在长期的生活中总结出来的一道佳肴，因其制作方法简单、美味可口、食后开胃、味美汤鲜，现已延伸到酸汤鸡、酸汤鸭等。酸味菜肴近年来还走出苗岭深山，在许多大中城市成为一道独特的饮食风景线，并已越来越受到人们的欢迎。', '2017-04-29 12:39:47'),
(6, '米豆腐', '15', '贵阳', '/tpg/upload/2017-04-29/59048a07dc2d4.jpg', '米豆腐是贵阳传统的夏令清凉小吃，是用当年的新米经水浸泡后打磨成浆，在文火上加热煮沸用卤水点制而成。食用时切成2-3寸的长条，放上葱花、姜末、蒜泥水、黄豆、云南黑大头菜、酱油、食醋，最后淋上红油香辣，一碗消暑解馋的食品令你欲罢不能。', '2017-04-29 12:41:43'),
(7, '酸汤鱼', '36', '贵阳', '/tpg/upload/2017-04-29/59048a925fe49.jpg', '酸汤鱼是苗族独有的食品，入口酸味鲜美，辣劲十足，令人胃口大开。酸汤是用烧开的米泔水酿制而成的，汤里有特产糟辣椒和本地许多有营养的中草药，再加入番茄酸烹出自然酸汤，上好的酸汤应为白色。如再加些黄豆芽、小竹笋和野葱作辅料，风味就更加独特。', '2017-04-29 12:44:02'),
(8, '丝娃娃', '18', '贵阳', '/tpg/upload/2017-04-29/59048b8f107c9.jpg', '丝娃娃是贵州最常见的一种小吃。在薄薄如纸的手心大小的大米薄饼里，裹着各种各样的蔬菜，因其形状颇似被裹在“襁褓”中的初生婴儿，因此而得名“丝娃娃”。', '2017-04-29 12:48:15'),
(9, '凉拌折耳根', '10', '贵阳', '/tpg/upload/2017-04-29/59048c0847062.jpg', '折耳根，又名鱼腥草、狗点耳、狗心草。有特殊的香气，富含多种营养成分，脂肪、碳水化合物、蛋白质、羊脂酸、甲基正壬酮、月桂油烯等等，有益身体健康。折耳根也是一味中药材，有利尿消种、开胃理气、清热解毒、消肿疗疮、健胃消食、提高机体免疫力的疗效。贵州人喜欢把折耳根用凉拌的方式来入菜，是平时餐桌上必不可少的一道菜', '2017-04-29 12:50:16');

-- --------------------------------------------------------

--
-- 表的结构 `travel_message`
--

CREATE TABLE `travel_message` (
  `message_id` int(11) NOT NULL,
  `message_fromname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `message_fromemail` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `message_content` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `message_toname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `message_toemail` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `message_tocontent` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `message_birth` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `travel_message`
--

INSERT INTO `travel_message` (`message_id`, `message_fromname`, `message_fromemail`, `message_content`, `message_toname`, `message_toemail`, `message_tocontent`, `message_birth`) VALUES
(1, '张江', '1591631526@qq.com', '代节孝石坊为主，包括两岔河秀色、华平瀑布、大水沟瀑布、石鼎山奇石、方碑云海、大同竹溪、大同古镇等景观。被誉为：', '', '', '', '2017-05-02 09:19:27'),
(14, '明珠', '2027411700@qq.com', '遵义魅力明珠大酒店马岭河峡谷是一条在造山运动中剖削深切的大裂水地缝', '', '', '', '2017-05-03 12:15:21'),
(15, '江', '1591631526@qq.com', ' 分地方更符合规范和规范', '', '', '', '2017-05-05 04:27:26'),
(17, '风的影子', '1591631526@qq.com', '花的世界，百里杜鹃', '', '', '', '2017-05-05 12:32:22'),
(18, '張江海', '156896@qq.com', '天生桥、渡仙桥、清代节孝石坊为主', '', '', '', '2017-05-08 07:32:03'),
(19, '張江海', '156896@qq.com', '古树名木点缀其间，千姿百态', '', '', '', '2017-05-08 07:32:47'),
(20, '百里', '1232356@qq.com', '恨过凤凰股份加工费', '', '', '', '2017-05-09 06:43:13');

-- --------------------------------------------------------

--
-- 表的结构 `travel_pinglun`
--

CREATE TABLE `travel_pinglun` (
  `pinglun_id` int(11) NOT NULL,
  `jingdian_id` varchar(255) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pinglun_content` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pinglun_birth` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `travel_pinglun`
--

INSERT INTO `travel_pinglun` (`pinglun_id`, `jingdian_id`, `username`, `pinglun_content`, `pinglun_birth`) VALUES
(1, '6', '張江海', ' 百里杜鵑是最美的，我去旅遊過幾次！！', '2017-04-08 10:20:34'),
(3, '10', '張江海', '古老的织金古建筑群，是一個不錯的地方', '2017-04-08 10:31:26'),
(5, '9', '江', '红枫湖是一个不错的旅游景点', '2017-04-30 08:45:43'),
(6, '24', '风的影子', '中国锥状喀斯特博物馆，真是天下奇观呀！！一个不错的游玩地方', '2017-05-05 12:34:32'),
(8, '24', '风的影子', '天然林木、奇花异草', '2017-05-05 12:38:55');

-- --------------------------------------------------------

--
-- 表的结构 `travel_users`
--

CREATE TABLE `travel_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birth` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `travel_users`
--

INSERT INTO `travel_users` (`id`, `username`, `password`, `email`, `birth`) VALUES
(6, '张江', 'jiang123', '12345@qq.com', '2017-04-03 06:04:25'),
(8, '江', 'jiang123', '1591631526@qq.com', '2017-04-30 08:44:11'),
(9, '风的影子', 'zhangj123', '1591631526@qq.com', '2017-05-05 12:30:57'),
(10, '赵家霞', 'zhaojiang', '45666767@qq.com', '2017-05-07 13:42:35'),
(11, '百里', 'baili123', '1232356@qq.com', '2017-05-09 04:45:26');

-- --------------------------------------------------------

--
-- 表的结构 `travel_xianlu`
--

CREATE TABLE `travel_xianlu` (
  `xianlu_id` int(11) NOT NULL,
  `xianlu_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `xianlu_content` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `xianlu_price` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `xianlu_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `xianlu_reason` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `xianlu_birth` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `travel_xianlu`
--

INSERT INTO `travel_xianlu` (`xianlu_id`, `xianlu_name`, `xianlu_content`, `xianlu_price`, `xianlu_image`, `xianlu_reason`, `xianlu_birth`) VALUES
(1, '贵州唯美赏花行', '兴义(顶效桃花—万峰林风光及油菜花)—平坝(中日友好樱花园)—黔西(百里杜鹃国家森林公园)—开阳(十里画廊)—贵定(金海雪山)', '1680元', '/tpg/upload/2017-04-06/58e61fb657968.jpg', '中国是世界上杜鹃花种类最多的国家。贵州的杜鹃花有70多个品种，多数集中在百里杜鹃风景区。像这样天然、集中、成片、面积大、种类繁多的杜鹃花区，在国内外都属罕见，具有很高的观赏价值和科研价值。最为难得的是“一树不同花”，即一棵树上开出若干不同品种的花朵，最壮观的可达7种之多，3月至4月是盛花期。而此条线路不仅包括最为壮观的杜鹃，更有梨花、桃花、油菜花欣赏。', '2017-04-06 11:00:06'),
(3, '黔南民族风情自驾游', '贵阳—贵定(音寨“金海雪山”)—福泉(洒金谷)—都匀(斗篷山)—三都(尧人山)—荔波(大小七孔、水春河漂流)—独山(深河桥抗日文化园)—平塘(掌布国家地质公园)—罗甸(高原千岛湖)—长顺(杜鹃?', '880元', '/tpg/upload/2017-04-06/58e624c0b83d0.jpg', '进入黔南州，一路是喀斯特地貌的山光水色和绚丽的民族风情，令人目不暇接。黔南荔波县的樟江和茂兰被联合国教科文组织誉为“地球上同纬度的最后一颗绿宝石”，被列为“世界自然遗产”。黔南是个多民族杂居的地方，有布依族、苗族、水族、瑶族、壮族、侗族、毛南族等，民族节日盛会丰富多彩。', '2017-04-06 11:21:36'),
(4, '贵州精品游', '贵阳(花溪公园、青岩古镇、甲秀楼)—安顺(天龙屯堡、龙宫、黄果树瀑布、天星桥)—兴义(马岭河、万峰林)', '1488元', '/tpg/upload/2017-04-06/58e6255c55a60.jpg', '线路独具特色，那里有原生态的自然环境、浓郁的少数民族风情、特殊的喀斯特地貌等等，集自然风光、漂流探险、科普教育、民俗历史为一体，适合自驾游或包车游。', '2017-04-06 11:24:12'),
(5, '贵州红色征途感怀之旅', '贵阳—息烽(集中营纪念馆)—遵义(遵义会议会址、红军山、海龙屯、娄山关)—仁怀(国酒文化城、盐津温泉)—习水(土城四渡赤水纪念馆)—赤水(十丈洞、桫椤自然保护区、竹海、丙安古镇、大同', '668元', '/tpg/upload/2017-04-06/58e626435a09d.jpg', '贵州拥有丰富的红色旅游资源，这条线路沿着红军长征时的足迹，遍及贵州的大部分地区，缅怀大量的革命文物与遗迹。这些丰富的红色遗迹在时代的硝烟下不应该被遗忘，而要作为爱国主义教育基地，让更多的年轻一代学习先烈们的精神。', '2017-04-06 11:28:03'),
(6, '黔中古寨亲水入地游', '贵阳—龙里(龙里草原、龙架山)—黄平(重安江三朝桥、飞云崖、野洞河漂流)—施秉(云台山、杉木河漂流)—镇远(历史文化名城、青龙洞、氵舞阳河、铁溪、报京侗寨)—铜仁(十里锦江、九龙洞)??', '1680元', '/tpg/upload/2017-04-06/58e626e63790a.jpg', '这条线路囊括了贵州最美丽最原汁原味的古老村寨和古镇，青山绿水围绕，吊脚灰檐遍布。现代的节奏步伐太快，不如去到那里的小巷，尝一尝民间的小吃，欣赏一下民俗风情，彻底享受心灵的休憩。', '2017-04-06 11:30:46'),
(7, '草海六枝长角苗摄影游', '贵阳—六枝(陇嘎苗寨观赏长角苗、岩脚镇)—威宁(凤山寺、玉皇阁)—草海观鸟', '660元', '/tpg/upload/2017-04-06/58e6276fa46c3.jpg', '威宁草海湖中多沼泽，盛产芦苇与蒲草，故而多鱼类和鸟类，如细黄鱼及长尾雉、白腹锦鸡、大雁、黄鸭、白鹳、丹顶鹤、黑颈鹤等155种水鸟，是国内观鸟胜地，四季宜人，被誉为“高原明珠”。六枝特区梭嘎乡陇嘎村长角苗是亚洲第一个具有独特文化的苗族支系，是中国第一个生态博物馆，长角苗女子的梳头是一门艺术，两处很适宜摄影者玩味。', '2017-04-06 11:33:03'),
(8, '多彩贵州清凉之旅', '黔南州荔波县(大七孔、小七孔、水春河)—贵阳(青岩古镇、花溪公园、甲秀楼、黔灵公园)—安顺(黄果树大瀑布、陡坡塘瀑布、天星桥、龙宫塘)—毕节(织金洞)', '1860元', '/tpg/upload/2017-04-06/58e62838e4631.jpg', '就算在酷夏时节，这条线路全程气温不超过25度，一路上溪流戏水，大河漂流，钻瀑布，走溶洞，体验十足的清凉水世界。在小7孔戏水的欢乐，在水春河漂流的刺激，黄果树大瀑布的雄伟壮观，龙宫入口的世外桃源，织金洞的银雨树等别处所无的奇特造型，会给人带来一段令人愉悦的旅程。', '2017-04-06 11:36:24'),
(9, '探苗侗风情及民俗文化', '凯里(南花苗寨)—雷山(西江千户苗寨、郎德苗寨、雷公山)—麻江(农民绘画之乡铜鼓)—丹寨(卡拉村)—榕江(侗族风情、三宝侗寨)—从江(岜沙苗寨)—黎平(肇兴侗寨、地坪风雨桥)—锦屏(隆里古镇', '880元', '/tpg/upload/2017-04-06/58e629288d014.jpg', '该条路线以观赏苗侗风情、民族建筑和苗岭风光为主。沿线可游览凯里、榕江、从江、黎平，出省至广西三江、桂林；或游施秉、镇远、铜仁，出省至湖南张家界。探寻苗寨、侗寨建筑艺术，感受民族节日。适合外国朋友自助旅行，感受中国多彩的少数民族风情。', '2017-04-06 11:40:24'),
(10, '贵州山水民俗体验之旅', '凯里(南花苗寨、麻塘革寨、舟溪苗寨)—黄平(飞云崖、野洞河漂流)—施秉(杉木河漂流、云台山)—台江(施洞苗寨、反排苗寨)—雷山(郎德上寨、西江千户苗寨)—榕江(三宝侗寨)—从江(岜沙苗寨??', '980元', '/tpg/upload/2017-04-06/58e62adc41b84.jpg', '贵州少数民族众多，不同的民族又有不同的风情，淳朴的乡风对久居城市的都市人而言是另一种不错的体验，这条线路连接交通方便，基本包括贵州民俗山水的精华，并且线路可因应假期增减组合所有贵州的旅行景点。', '2017-04-06 11:47:40'),
(11, '月亮山太阳山腹地穿越', '贵阳—榕江(加两村、朗开村、摆绞村、污讲土家寨)—从江(加牙老寨、加鸠)', '1280元', '/tpg/upload/2017-04-06/58e62b4709d17.jpg', '深入月亮山太阳山腹地，体验纯真的民族风情。贵州，不仅有天然的地貌之美和浓郁的原生态民族风情，同时这里也是一个适合驴友探险的好地方。月亮山腹地榕江县与从江县的交界处平均海拔均一千米以上，相对温差较低，地形复杂多有沼泽，适合探险猎奇。而沿途的淳朴民族风情，又能给这个惊奇的旅程增添浓郁的原生态魅力。', '2017-04-06 11:49:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `travel_adminuers`
--
ALTER TABLE `travel_adminuers`
  ADD PRIMARY KEY (`adminu_id`);

--
-- Indexes for table `travel_jingdian`
--
ALTER TABLE `travel_jingdian`
  ADD PRIMARY KEY (`jingdian_id`);

--
-- Indexes for table `travel_jiudian`
--
ALTER TABLE `travel_jiudian`
  ADD PRIMARY KEY (`jiudian_id`);

--
-- Indexes for table `travel_meishi`
--
ALTER TABLE `travel_meishi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_message`
--
ALTER TABLE `travel_message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `travel_pinglun`
--
ALTER TABLE `travel_pinglun`
  ADD PRIMARY KEY (`pinglun_id`);

--
-- Indexes for table `travel_users`
--
ALTER TABLE `travel_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_xianlu`
--
ALTER TABLE `travel_xianlu`
  ADD PRIMARY KEY (`xianlu_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `travel_adminuers`
--
ALTER TABLE `travel_adminuers`
  MODIFY `adminu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `travel_jingdian`
--
ALTER TABLE `travel_jingdian`
  MODIFY `jingdian_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- 使用表AUTO_INCREMENT `travel_jiudian`
--
ALTER TABLE `travel_jiudian`
  MODIFY `jiudian_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用表AUTO_INCREMENT `travel_meishi`
--
ALTER TABLE `travel_meishi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- 使用表AUTO_INCREMENT `travel_message`
--
ALTER TABLE `travel_message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- 使用表AUTO_INCREMENT `travel_pinglun`
--
ALTER TABLE `travel_pinglun`
  MODIFY `pinglun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `travel_users`
--
ALTER TABLE `travel_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- 使用表AUTO_INCREMENT `travel_xianlu`
--
ALTER TABLE `travel_xianlu`
  MODIFY `xianlu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
