/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : news

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-08-17 17:35:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('xuanyi01', 'c8c1c24f460fe6e1b7564cbadf2aded8');

-- ----------------------------
-- Table structure for leaveword
-- ----------------------------
DROP TABLE IF EXISTS `leaveword`;
CREATE TABLE `leaveword` (
  `name` char(255) CHARACTER SET utf8 DEFAULT NULL,
  `phone` char(255) DEFAULT NULL,
  `word` text CHARACTER SET utf8,
  `ip` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of leaveword
-- ----------------------------

-- ----------------------------
-- Table structure for newslist
-- ----------------------------
DROP TABLE IF EXISTS `newslist`;
CREATE TABLE `newslist` (
  `title` char(255) NOT NULL,
  `author` char(255) DEFAULT NULL,
  `time` date DEFAULT NULL,
  `content` text,
  `number` int(120) NOT NULL AUTO_INCREMENT,
  `firstline` text,
  PRIMARY KEY (`number`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of newslist
-- ----------------------------
INSERT INTO `newslist` VALUES ('渲一科技渲染力作《古韵零陵》虚实结合再现历史名城', '渲一科技', '2016-12-06', '<p>渲一科技渲染力作《零陵古城》新鲜出炉，这一部以3D视觉特效为主打的城市宣传片，获得了广大观众的一致好评。经过历史专家和主创团队的努力，终于将零陵古城原貌呈现在银幕之上。渲一科技用云渲染技术渲染出来的巍峨壮观的古城墙、守望岁月的古庙、戎马倥偬的士兵......虚实结合重现了这座历史名城的无穷魅力之处。整部片子用现代视角为经典文化注入了新生。</p>\r\n\r\n                    <video src=\"20161206.webm\" width=\"800px\" controls autoplay></video>', '1', '渲一科技渲染力作《零陵古城》新鲜出炉，这一部以3D视觉特效为主打的城市宣传片，获得了广大观众的一致好评。经过历史专家和主创团队的努力，终于将零陵古城原貌呈现在银幕之上。渲一科技用云渲染技术渲染出来的巍峨壮观的古城墙、守望岁月的古庙、戎马倥偬的士兵......虚实结合重现了这座历史名城的无穷魅力之处。整部片子用现代视角为经典文化注入了新生。');
INSERT INTO `newslist` VALUES ('渲一科技厦门推介会成功召开——将打造厦门最大渲染云平台', '渲一科技', '2017-05-12', ' <p>近日，由厦门市动漫游戏协会、渲一科技共同主办的“渲∙共赢 聚∙远航”2017年度渲一科技厦门推介会在软件园二期召开。厦门市军民融合协同创新研究院重要领导及来自厦门、泉州、福州的几十家动漫企业出席了此次推介会，并有6家企业在会后就达成了合作意向。</p>\r\n\r\n                    <img src=\"img/news/news_05_12_1.jpg\">\r\n                    <figcaption>（厦门市动漫游戏协会秘书长牟静在会上致辞）</figcaption>\r\n\r\n                    <p>渲一科技CEO晏湘涛博士、运营总监周涵帅、渲染事业部总经理范烨在会上向各动漫企业代表详细介绍了渲一科技的行业背景以及在服务、技术、价格方面的核心优势。同时渲一科技CEO晏湘涛博士也在会上宣布，目前已与厦门市军民融合协同创新研究院签订了深度战略合作协议，具体合作模式也在进一步细化之中。据了解，此次合作旨在充分发挥军民融合的技术优势，在海沧区建设“海沧云计算中心”，搭建一个厦门乃至海峡西岸规模最大、性能最先进、技术水平最高的渲染云平台。晏湘涛表示，渲一科技即将落户厦门，此次与厦门市军民融合协同创新研究院展开深度合作的重要目的之一就是要大力发展厦门3D动画云渲染，提供厦门首家自助式渲染服务云平台及个性定制化渲染综合解决方案。该平台将为影视动画制作、建筑建模可视化、3D游戏开发、工业设计、展馆展会、数字城市、虚拟现实等领域提供有力支撑。</p>\r\n\r\n                    <img src=\"img/news/news_05_12_2.jpg\">\r\n                    <figcaption>（渲一科技CEO晏湘涛博士发言）</figcaption>\r\n\r\n                    <p>在推介会上渲一科技渲染事业部总经理范烨告诉记者：“渲一科技拥有多年渲染云管理经验的专业渲染师，可帮客户解决渲染中遇到的诸多疑难问题。同时，渲一科技承诺7天*24小时*365天技术支持在线，比本地渲染速度提升数百倍，并完全按量计费，渲染成本比自己购买渲染工作站节约20%以上，欢迎广大动漫企业前来测试。”</p>\r\n\r\n                    <img src=\"img/news/news_05_12_3.jpg\">\r\n                    <figcaption>（动漫企业代表会后与渲一科技负责人积极互动）</figcaption>\r\n\r\n                    <p>据悉，渲一科技是一家专注于研究集群渲染，为全国动漫企业提供云渲染服务的互联网科技公司。团队技术骨干均为国防科大的转业技术干部以及985名校博士组成，充分掌握了军民两用的核心技术。不仅自主研发了渲染云管理平台——迅染云平台、分布式存储系统、服务器虚拟化平台，而且还充分利用了“天河”系列超级计算机在国际上的影响力，在业内树立了良好的口碑。</p>', '2', '近日，由厦门市动漫游戏协会、渲一科技共同主办的“渲∙共赢 聚∙远航”2017年度渲一科技厦门推介会在软件园二期召开。厦门市军民融合协同创新研究院重要领导及来自厦门、泉州、福州的几十家动漫企业出席了此次推介会，并有6家企业在会后就达成了合作意向。');
INSERT INTO `newslist` VALUES ('渲一科技成为中国超级计算创新联盟一员', '渲一科技', '2017-04-20', ' <p>近日，渲一科技受邀正式加入中国超级计算创新联盟，成为中国超算创新联盟一份子。</p>\r\n\r\n                    <p>据悉，超级计算创新联盟成立于2013年，由具有一定规模的国家和地方超级计算中心，高性能计算应用单位，超级计算相关技术和产品的研发、制造、推广、服务的企业、大学、科研机构等具备独立法人资格的单位或其他组织类机构组成。其成员除了国内几大超算中心、中国科学院外还有清华大学、北京大学、中山大学、香港大学、国防科大等国内一流大学，联想、华为、浪潮等IT巨头企业，中石油、中石化等国字头的能源企业也是其中的一份子。其权威性、专业性得到了业内人士的一致认可。</p>\r\n\r\n                    <p> 渲一科技谋篇布局，在高性能领域已经火力全开，掌握了丰富的高性能计算资源，也与多家国家超算中心建立了战略合作关系，此次加入创新联盟，除了提升自身在超算行业的技术水平和竞争力之外，更希望能够助力高性能计算在应用方面的拓展，助力高性能计算在大数据、金融计算、云计算等新领域的应用。</p>\r\n\r\n                    <p>近年来，我国超级计算领域喜事连连，“神威太湖之光”成为世界超级计算冠军，全球大气非静力云分辨模拟、全球高分辨率海浪数值模式、钛合金微结构演化相场模拟等三个应用同时入围戈登·贝尔奖，超算事业发展势头迅猛。渲一科技将借着超算事业重新崛起的东风，大力推动超算领域业务的发展。</p>\r\n\r\n                    <img src=\"img/news/news_04_20_1.jpg\">', '3', '近日，渲一科技受邀正式加入中国超级计算创新联盟，成为中国超算创新联盟一份子。');
INSERT INTO `newslist` VALUES ('看了我，你会爱上我——渲一科技新逼格办公室！', '渲一科技', '2017-03-29', '<p>渲一科技不久就要入驻大气、敞亮的博士园新家啦！新家位置在星工场B1栋3楼，面积有1000余平。面朝公园、惬意的办公环境、loft的装修风格，每一个细节都是那么nice。下面，请跟随小编来感受一下偶们渲一高大上的室内环境！</p>\r\n\r\n                    <img src=\"img/news/news_03_29_1.jpg\" alt=\"渲一科技\">\r\n                    <img src=\"img/news/news_03_29_2.jpg\" alt=\"渲一科技\">\r\n                    <figcaption>（园区及办公室入口）</figcaption>\r\n\r\n                    <p>灯具与员工位整合，让开放式的办公空间更显整洁。每个办公桌都配有一盆小绿植，可以舒缓小伙伴们紧绷的“大脑”。</p>\r\n\r\n                    <img src=\"img/news/news_03_29_3.jpg\" alt=\"渲一\">\r\n                    <img src=\"img/news/news_03_29_4.jpg\" alt=\"渲染\">\r\n                    <img src=\"img/news/news_03_29_7.jpg\">\r\n                    <figcaption>（会议室、洽谈室）</figcaption>\r\n\r\n                    <p>小编可以证明食堂伙食的味道还真不错，早中晚餐都有供应！不满意的话还有包房小炒哦。</p>\r\n\r\n                    <img src=\"img/news/news_03_29_8.jpg\" alt=\"渲染\">\r\n                    <figcaption>（员工食堂）</figcaption>\r\n\r\n                    <p>高椅、吧台，日后还会配上微波炉、冰箱、咖啡机，咖啡、奶茶、点心该有的也都会有，想想都觉得暖暖的。</p>\r\n                    <img src=\"img/news/news_03_29_9.jpg\" alt=\"3D渲染\">\r\n                    <figcaption>（茶水间）</figcaption>\r\n\r\n                    <img src=\"img/news/news_03_29_10.jpg\" alt=\"渲一科技\">\r\n                    <img src=\"img/news/news_03_29_11.jpg\" alt=\"渲一科技\">\r\n                    <figcaption>（市政协市政协副主席龚振湘及长沙县副县长黄粱参观考察渲一科技）</figcaption>\r\n\r\n                    <img src=\"img/news/news_03_29_12.jpg\" alt=\"云渲染\">\r\n                    <figcaption>（云渲染机房）</figcaption>\r\n\r\n                    <p>怎么样？还不错吧？不过以上的照片并不能完全体现我们科技的气质，欢迎小伙伴们上门来参观呦！</p>', '4', '渲一科技不久就要入驻大气、敞亮的博士园新家啦！新家位置在星工场B1栋3楼，面积有1000余平。面朝公园、惬意的办公环境、loft的装修风格，每一个细节都是那么nice。下面，请跟随小编来感受一下偶们渲一高大上的室内环境！');
INSERT INTO `newslist` VALUES ('渲一科技牵头入驻湖南省内首家博士创新创业园 科技铸就实力', '渲一科技', '2017-03-24', '<iframe width=\"600\" height=\"400\" src=\"https://v.qq.com/iframe/preview.html?vid=g1315exfwb4&amp\"  align=\"center\"></iframe>   \r\n                    <figcaption>（湖南新闻联播报道渲一科技入驻星沙博士创新创业园）</figcaption>\r\n                    <p>近日，湖南省内首个博士创新创业园正式揭牌运营，长沙市经开区、市委、县委等主要领导也出席了本次开园仪式。据了解，博士创新创业园一期位于星工场B1栋，建筑面积1万平方米，是打造全市乃至全省的高端人才创业区、现代产业集聚区、产业产城军民融合示范区和生态宜居样板区的一次大胆的尝试。渲一科技作为博士企业的领军代表，率先入驻博士园，并负责整个园区创客空间的运营。</p>\r\n\r\n                    <img src=\"img/news/news_03_24_1.jpg\">\r\n                    <figcaption>（长沙经开区、市委、县委领导参加博士园揭牌仪式）</figcaption>\r\n\r\n                    <p>渲一科技CEO晏湘涛代表13家入园企业在台上发表演说。晏湘涛表示，渲一科技充分发挥了自己领头羊的作用，利用自己的影响力为园区引入了一大批新型的高科技企业。这些企业带来的技术可以全面促进传统优势产业的升级改造，促进经开区军民融合产业及创新产业的发展，如：利用渲染云平台服务全省动漫文创产业，利用高性能计算技术优化结构设计、运用物联网技术增强设备智能化、运用仿真模拟技术加快产品设计流程等。渲一科技也愿意在入园之后，运用自己在云计算、大数据、军民融合技术等方面的优势，运营好博士园创客空间。同时，各企业之间也会积极沟通交流，发挥各企业的技术优势，共同把园区做大做强的同时，为经开区乃至长沙市、湖南省的产业升级、经济社会发展提供强有力的高技术支持。</p>\r\n\r\n                    <img src=\"img/news/news_03_24_2.jpg\" alt=\"渲一科技\">\r\n                    <figcaption>（渲一科技CEO晏湘涛在入园仪式上发表演说）</figcaption>\r\n\r\n                    <img src=\"img/news/news_03_24_3.jpg\">\r\n                    <figcaption>（渲一科技CEO晏湘涛与星沙产业基地党工委书记、管理办公室主任黄士玮进行签约）</figcaption>\r\n\r\n                    <p>渲一科技是一家提供自助式渲染服务云平台及定制化渲染综合解决方案的技术服务型互联网企业。总部位于长沙，并在北京、上海、广州、深圳、厦门等地拥有运营中心。渲一科技秉承“创新、务实、专注、尊重”理念，汇聚了一大批由博士、硕士为主的高层次研发人才，由硕士为主的销售、实施和售后团队，并与知名科研机构、云计算产商缔结战略合作，具有雄厚的科研实力和扎实的运维能力。不仅自主研发了渲染云管理平台-迅染云平台、分布式存储系统、服务器虚拟化平台，而且还充分利用了“天河”系列超级计算机在国际上的影响力，在业内树立了良好的口碑。</p>\r\n\r\n                    <img src=\"img/news/news_03_24_4.jpg\">\r\n                    <figcaption>（渲一科技新建的云渲染机房）</figcaption>\r\n<iframe width=\"600\" height=\"400\" src=\"https://v.qq.com/iframe/preview.html?vid=g1315exfwb4&amp\"  align=\"center\"></iframe>   \r\n                    <figcaption>（湖南新闻联播报道渲一科技入驻星沙博士创新创业园）</figcaption>\r\n                    <p>近日，湖南省内首个博士创新创业园正式揭牌运营，长沙市经开区、市委、县委等主要领导也出席了本次开园仪式。据了解，博士创新创业园一期位于星工场B1栋，建筑面积1万平方米，是打造全市乃至全省的高端人才创业区、现代产业集聚区、产业产城军民融合示范区和生态宜居样板区的一次大胆的尝试。渲一科技作为博士企业的领军代表，率先入驻博士园，并负责整个园区创客空间的运营。</p>\r\n\r\n                    <img src=\"img/news/news_03_24_1.jpg\">\r\n                    <figcaption>（长沙经开区、市委、县委领导参加博士园揭牌仪式）</figcaption>\r\n\r\n                    <p>渲一科技CEO晏湘涛代表13家入园企业在台上发表演说。晏湘涛表示，渲一科技充分发挥了自己领头羊的作用，利用自己的影响力为园区引入了一大批新型的高科技企业。这些企业带来的技术可以全面促进传统优势产业的升级改造，促进经开区军民融合产业及创新产业的发展，如：利用渲染云平台服务全省动漫文创产业，利用高性能计算技术优化结构设计、运用物联网技术增强设备智能化、运用仿真模拟技术加快产品设计流程等。渲一科技也愿意在入园之后，运用自己在云计算、大数据、军民融合技术等方面的优势，运营好博士园创客空间。同时，各企业之间也会积极沟通交流，发挥各企业的技术优势，共同把园区做大做强的同时，为经开区乃至长沙市、湖南省的产业升级、经济社会发展提供强有力的高技术支持。</p>\r\n\r\n                    <img src=\"img/news/news_03_24_2.jpg\" alt=\"渲一科技\">\r\n                    <figcaption>（渲一科技CEO晏湘涛在入园仪式上发表演说）</figcaption>\r\n\r\n                    <img src=\"img/news/news_03_24_3.jpg\">\r\n                    <figcaption>（渲一科技CEO晏湘涛与星沙产业基地党工委书记、管理办公室主任黄士玮进行签约）</figcaption>\r\n\r\n                    <p>渲一科技是一家提供自助式渲染服务云平台及定制化渲染综合解决方案的技术服务型互联网企业。总部位于长沙，并在北京、上海、广州、深圳、厦门等地拥有运营中心。渲一科技秉承“创新、务实、专注、尊重”理念，汇聚了一大批由博士、硕士为主的高层次研发人才，由硕士为主的销售、实施和售后团队，并与知名科研机构、云计算产商缔结战略合作，具有雄厚的科研实力和扎实的运维能力。不仅自主研发了渲染云管理平台-迅染云平台、分布式存储系统、服务器虚拟化平台，而且还充分利用了“天河”系列超级计算机在国际上的影响力，在业内树立了良好的口碑。</p>\r\n\r\n                    <img src=\"img/news/news_03_24_4.jpg\">\r\n                    <figcaption>（渲一科技新建的云渲染机房）</figcaption>\r\n', '5', '近日，湖南省内首个博士创新创业园正式揭牌运营，长沙市经开区、市委、县委等主要领导也出席了本次开园仪式。据了解，博士创新创业园一期位于星工场B1栋，建筑面积1万平方米，是打造全市乃至全省的高端人才创业区、现代产业集聚区、产业产城军民融合示范区和生态宜居样板区的一次大胆的尝试。渲一科技作为博士企业的领军代表，率先入驻博士园，并负责整个园区创客空间的运营。');
INSERT INTO `newslist` VALUES ('渲一科技渲染力作——《大唐荣耀》强势霸屏', '渲一科技', '2017-02-13', '<iframe width=\"600\" height=\"400\" src=\"https://v.qq.com/iframe/preview.html?vid=m0022ughcuk&amp;width=500&amp;height=375&amp;auto=0\" align=\"center\"></iframe>\r\n\r\n                    <p>投资2.6亿，由景甜、任嘉伦、万茜、舒畅、于小伟、秦俊杰、茅子俊等领衔主演的青春宫廷史诗权谋大剧《大唐荣耀》已于大年初二在安徽卫视、北京卫视黄金档播出。这部由渲一科技倾力渲染的历史大剧，播出后收视率节节攀升，目前已成为口碑极高的春节档国剧黑马。</p>\r\n\r\n\r\n                    <p>说《大唐荣耀》是一部鸿篇巨制并不夸张，相对于当下众多被吐槽的古装题材影视作品，《大唐荣耀》可谓足够良心，制作取景美轮美奂，服饰造型异彩纷呈。据悉，《大唐荣耀》邀请了长期担任张艺谋副导演一职的刘国楠导演执导，除此以外，片方还邀请了曾四次获得中国金鸡奖最佳美术、并且多次为张艺谋的电影进行美术设计的霍廷霄来担任美术指导，更邀请了奥斯卡评委，曾多次获得金马奖、金像奖最佳摄影的潘恒生担任艺术总监一职•••••有国师班底保驾护航，也难怪这部电视剧从画面上就秒杀了很多同类型剧集。</p>\r\n\r\n                    <p>唐朝给人的感受就是繁华、奢侈、精美,要还原出来真正的大唐盛世，渲染这一环节容不得丝毫马虎。渲一科技作为中国云渲染行业的领导品牌，专注于集群渲染，为动画动漫、影视特效、建筑漫游、商业广告等提供云端渲染服务。拥有自主研发的迅染云管理平台、自主的存储系统、自主的服务器虚拟化，实现了虚实结合的资源聚合。渲一科技此次临危受命，在制作时间异常紧张的情况下，迅速调配大量集群资源，快速且高质量的完成了影片渲染这一环节。相信最后整部片子呈现出来的大气磅礴的画面，震撼人心战争场面，唯美的景色，会让人眼前一亮。</p>\r\n\r\n                    <img src=\"img/news/news_02_14_1.jpg\">\r\n                    <figcaption>（渲一科技渲染原图）</figcaption>\r\n                    <img src=\"img/news/news_02_14_2.jpg\">\r\n                    <img src=\"img/news/news_02_14_3.jpg\">\r\n                    <img src=\"img/news/news_02_14_4.jpg\">\r\n                    <figcaption>（电视播出画面）</figcaption>\r\n\r\n                    <p>小编已经狂追了二十余集，虽然说这是一部以爱情为主线的剧集，但是一路看下来会发现其实格局布置得很大，甜虐的爱情故事看得人心动，但对权谋的描写丝毫不马虎，加上老戏骨的加盟朝堂戏斗争真的蛮精彩的。良心特效、演员演技在线、节奏不拖沓、男女主cp感超强、阵容强大，以后每天下班喂我两集大唐小编就满足了。 </p>\r\n\r\n                    <img src=\"img/news/news_02_14_5.jpg\">', '6', '投资2.6亿，由景甜、任嘉伦、万茜、舒畅、于小伟、秦俊杰、茅子俊等领衔主演的青春宫廷史诗权谋大剧《大唐荣耀》已于大年初二在安徽卫视、北京卫视黄金档播出。这部由渲一科技倾力渲染的历史大剧，播出后收视率节节攀升，目前已成为口碑极高的春节档国剧黑马。');
INSERT INTO `newslist` VALUES ('“成长 跨越 携手开启未来”渲一科技2017年会特辑', '渲一科技', '2017-01-18', '<p>从2015年走到2017年，渲一科技已经快2岁啦！在过去的2016年，我们的团队精诚合作——整合云计算资源、开疆扩土、研发创新、优化内部结构······使得一个初创型公司已经发展到稍具规模，并且各项工作都取得了显著成绩。2017，我们将继续坚持做最好用的云渲染平台，乘风破浪、执梦前行！</p>\r\n\r\n                    <p>\r\n                        <b>为了理想、为了事业、我们奋斗!</b>\r\n                    </p>\r\n\r\n                    <img src=\"img/news/news_01_19_1.png\">\r\n                    <figcaption>（渲一科技CEO晏湘涛博士谋篇布局赢战2017)</figcaption>\r\n\r\n                    <img src=\"img/news/news_01_19_2.png\">\r\n                    <figcaption>（渲一科技运营总监周涵帅梳理公司全年运营工作）</figcaption>\r\n\r\n                    <img src=\"img/news/news_01_19_3.png\">\r\n\r\n                    <figcaption>（渲染事业部部长范烨谋划渲染市场宏伟蓝图：2016年渲一科技已完成全国布局，总部位于广州，并在北京、上海、长沙、厦门、重庆等地拥有运营中心，市场工作开展的如火如荼。）</figcaption>\r\n\r\n                    <img src=\"img/news/news_01_19_4.png\">\r\n                    <figcaption>（渲一科技高性能事业部部长余沐阳：2016渲一科技高性能业务迎来发展利好，助力全国乃至世界科学计算的发展。）</figcaption>\r\n\r\n                    <p style=\"text-align: center\"><b>他们给我们带来了诚意与感动！</b></p>\r\n\r\n                    <img src=\"img/news/news_01_19_5.png\">\r\n                    <img src=\"img/news/news_01_19_6.png\">\r\n                    <p style=\"text-align: center\"><b>团团圆圆，有爱才是一家人</b></p>\r\n                    <img src=\"img/news/news_01_19_7.png\">\r\n                    <img src=\"img/news/news_01_19_8.png\">\r\n                    <img src=\"img/news/news_01_19_9.png\">\r\n                    <p style=\"text-align: center\"><b>“魔音入耳、群魔乱舞”释放心中喜悦</b></p>\r\n                    <img src=\"img/news/news_01_19_10.png\">\r\n                    <img src=\"img/news/news_01_19_11.png\">\r\n                    <img src=\"img/news/news_01_19_12.png\">\r\n                    <p style=\"text-align: center\"><b>会玩才是王道、红包配抽奖、才是真的好</b></p>\r\n                    <img src=\"img/news/news_01_19_13.png\">\r\n                    <img src=\"img/news/news_01_19_14.png\">\r\n\r\n                    <img src=\"img/news/news_01_19_15.png\">\r\n\r\n                    <p>在过去的2016年，很多人都会有疲惫，有失落，但比疲惫更多的是欢笑，比失落更多的叫欣慰。因为凭借着每一个人的付出，在个人取得了成绩的同时也让公司更加熠熠生辉。2016，感谢彼此的温暖陪伴。2017，让我们继续一起出发，开启一段新的旅程！</p>\r\n\r\n                    <img src=\"img/news/news_01_19_16.jpg\">', '7', '从2015年走到2017年，渲一科技已经快2岁啦！在过去的2016年，我们的团队精诚合作——整合云计算资源、开疆扩土、研发创新、优化内部结构······使得一个初创型公司已经发展到稍具规模，并且各项工作都取得了显著成绩。2017，我们将继续坚持做最好用的云渲染平台，乘风破浪、执梦前行！');
INSERT INTO `newslist` VALUES ('渲一科技实力赞助全球最牛生物计算机领域会议 支持科学事业', '渲一科技', '2016-12-09', '<p>近期渲一科技在高性能计算领域火力全开，成为2016年度 IEEE BIBM ( IEEEInternational Conference on Bioinformatics and Biomedicine )大会唯一合作企业。IEEE BIBM是生物计算领域的专业旗舰会议，全球最牛的生物医学专家将在这里汇聚一堂。渲一科技将针对生物信息研究计算的解决方案，结合了高性能计算和云计算，提供即时可用的硬件和软件设施，并推出一对一服务，有助于研究人员更好的处理生物研究中的计算问题，为生物科学事业发展提速。 </p>\r\n\r\n                    <p>据了解，现代生物医学研究极大地依赖于高性能计算系统。渲一科技经过五年多的积累，一年多的实战考验，已经成功打造了一个专注于高性能计算的专业团队。同时，由于渲一科技掌握了丰富的高性能计算资源，与多家国家超算中心建立战略合作关系，能为生物医学的科学家们提供更快捷、更优质、更安全的高性能计算服务。</p>\r\n\r\n                    <img src=\"img/news/news_12-09-1.png\">\r\n\r\n                    <p>随着高性能计算的应用领域越来越广，高性能计算已经走入了一个全新的时代。渲一科技五年磨一剑，凭借在高性能计算、云计算以及分布式存储等前沿技术方面的深厚积累，不仅会大力支持生物医疗领域还会支持更多与人类生存息息相关的科学领域。</p>\r\n\r\n\r\n                    <p>据悉，此次渲一科技赞助的IEEE BIBM大会已经在中、美、欧轮流举办9次，每次吸引国内外从事计算机应用、生物信息学、计算生物学、医学信息学及转化医学领域的上百名专家学者参加。此次会议除了4天的主会场报告外，会议还包括 “生物信息学中的高性能计算”等21个主题的分会场研讨会，70余名国内外权威生物信息专家和杰出中青年科学家做学术报告，为人类的健康和进步提供强有力的学术支持。(想了解更多IEEE BIBM会议的最新动态，请持续关注我们的微信推送文章。)</p>', '8', '近期渲一科技在高性能计算领域火力全开，成为2016年度 IEEE BIBM ( IEEEInternational Conference on Bioinformatics and Biomedicine )大会唯一合作企业。IEEE BIBM是生物计算领域的专业旗舰会议，全球最牛的生物医学专家将在这里汇聚一堂。渲一科技将针对生物信息研究计算的解决方案，结合了高性能计算和云计算，提供即时可用的硬件和软件设施，并推出一对一服务，有助于研究人员更好的处理生物研究中的计算问题，为生物科学事业发展提速！');
INSERT INTO `newslist` VALUES ('渲一校招丨冬日最暖的事莫过于送你一个offer', '渲一科技', '2016-11-28', '<p style=\"text-align: center\">每年的校招季应该是</p>\r\n                    <p style=\"text-align: center\">莘莘学子们最关注的新闻之一啦</p>\r\n                    <p style=\"text-align: center\">渲一科技作为“宇宙” </p>\r\n                    <p style=\"text-align: center\">最科技最有活力的云计算、云服务公司</p>\r\n                    <p style=\"text-align: center\">当然是不会错过的！</p>\r\n                    <p style=\"text-align: center\">看，我们就分别来到了 </p>\r\n                    <p style=\"text-align: center\">历史悠久全国闻名的两所高校</p>\r\n                    <p style=\"text-align: center\">中南大学、湖南大学</p>\r\n                    <p style=\"text-align: center\">与同学们来了一场面对面的亲密交流</p>\r\n                    <img src=\"img/news/news_11-28-1.jpg\">\r\n                    <figcaption>（渲一科技CEO晏湘涛博士为大学生们宣讲）</figcaption>\r\n                    <img src=\"img/news/news_11-28-2.jpg\">\r\n                    <figcaption>（宣讲教室几乎座无虚席）</figcaption>\r\n                    <img src=\"img/news/news_11-28-3.jpg\">\r\n                    <figcaption>（招聘现场人潮涌动）</figcaption>\r\n                    <p style=\"text-align: center\">没有明确的人才培养计划，</p>\r\n                    <p style=\"text-align: center\">没有完善的薪酬体系，</p>\r\n                    <p style=\"text-align: center\">没有广阔的发展空间，</p>\r\n                    <p style=\"text-align: center\">空谈情怀，何铸梦想？</p>\r\n                    <p style=\"text-align: center\">完善的人才培养计划才是真靠谱 </p>\r\n                    <p style=\"text-align: center\">“得人者，得天下”。高度重视人才培养与发展的企业，才能实现双赢。</p>\r\n                    <p style=\"text-align: center\">渲一科技不止有情怀，也给你一个筑梦空间和实现梦想的踏板。</p>\r\n\r\n                    <img src=\"img/news/news_11-28-4.jpg\">\r\n                    <p style=\"text-align: center\">这两场校招可谓收获满满，渲一科技共收到简历100余份，目前已有6名同学收到渲一offer前来报到。</p>\r\n\r\n                    <img src=\"img/news/news_11-28-5.jpg\">\r\n                    <p style=\"text-align: center\">如果大家来到渲一科技我们将会把你培养成为公司未来的技术中坚、</p>\r\n\r\n                    <p style=\"text-align: center\">管理骨干你们可以接受全方位的见习、培训； </p>\r\n                    <p style=\"text-align: center\">拥有机会扩充您的知识宝库并磨练解决问题的能力；</p>\r\n                    <p style=\"text-align: center\">你将在一个唯贤是用并回报优异与创新的环境中茁壮成长；  </p>\r\n                    <p style=\"text-align: center\">在我们这里每个人都是充满智慧独一无二的个体；</p>\r\n                    <p style=\"text-align: center\">我们为每一个独特的你提供尽情绽放的舞台；</p>\r\n                    <p style=\"text-align: center\">这里，激情与理性交织、乐趣与挑战并存</p>\r\n                    <p style=\"text-align: center\">希望你们加入我们，携手书写无限精彩！印证辉煌未来！</p>\r\n\r\n\r\n                    <img src=\"img/news/news_11-28-6.jpg\">', '9', '每年的校招季应该是莘莘学子们最关注的新闻之一啦,渲一科技作为“宇宙”最科技最有活力的云计算、云服务公司,当然是不会错过的！');
INSERT INTO `newslist` VALUES ('渲一科技渲染中国首部中医药题材动画片《本草药灵》', '渲一科技', '2016-08-30', '<p>“一个神秘美丽的国度歧黄世界，因为集万种病毒于一身的万疾王妄图霸占岐黄世界而散下各种可怕的病毒，两位少年药灵师为了拯救岐黄世界踏遍万水千山召集中药药灵的力量，从而发生的一个个可歌可泣的感人故事…”这就是《本草药灵》的故事梗概，是不是很让人期待呢？</p>\r\n\r\n\r\n                    <p>据悉，《本草药灵》总投资达1.5个亿，是中国首个以中医药为题材的大型3D动漫。该动画片由广东医漫文化科技有限公司独立原创，计划分三期拍摄1000集，每集12分钟，采用纯三维动画制作。《本草药灵》以精彩纷呈的情节充分展现博大精深的中医药文化，同时巧妙地融入励志、友情等元素，生动地展示了一个中药奇幻世界，预计将在今年年底登陆央视。为了赶上年底播出的进度，渲一科技调用了数百台高性能服务器进行渲染，渲染出来的效果得到了客户的高度认可。“渲染是在整个动漫后期制作过程中最终实现画面呈现的决定性步骤，我们一定会用艺术与技术的完美结合，来给观众呈现最精美的画面。”渲一科技CEO晏湘涛表示。</p>\r\n\r\n                    <img src=\"img/news/news_8-30-1.jpg\">\r\n\r\n                    <p>渲一科技作为中国云渲染行业的领导品牌，拥有自主研发的云管理平台、自主的存储系统、自主的服务器虚拟化，实现了虚实结合的资源聚合。由于与多个国家超级计算中心签订了战略合作协议，从而能够严格控制渲染成本，及时调配大量资源。因此渲一科技无论是在价格方面还是在资源调配方面优势都是杠杠的呦。各位看官，要不要扔个测试帧过来测试一下啊？</p>\r\n\r\n                    <p>《本草药灵》动漫题材新颖、趣味又不乏教育意义，能让孩子们在观看制作精美的动漫时，又能学习到中国博大精深的中医文化，确实是个不错的选择。小编预测，此剧必火！！！   </p>', '10', '“一个神秘美丽的国度歧黄世界，因为集万种病毒于一身的万疾王妄图霸占岐黄世界而散下各种可怕的病毒，两位少年药灵师为了拯救岐黄世界踏遍万水千山召集中药药灵的力量，从而发生的一个个可歌可泣的感人故事…”这就是《本草药灵》的故事梗概，是不是很让人期待呢？');
SET FOREIGN_KEY_CHECKS=1;
