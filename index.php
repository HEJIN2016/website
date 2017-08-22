<?php 
header('Content-type: text/html; charset=utf-8');
$datei = fopen("counter.txt","r");
$count = fgets($datei,1000);
fclose($datei);
$count=$count + 1 ;
//echo "$count" ;
$datei = fopen("counter.txt","w");
fwrite($datei, $count);
fclose($datei);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="渲一科技,渲染,渲一,迅染云平台,急速渲染军团，云渲染，渲染农场，渲染平台，3dmax云渲染，3D渲染，3d渲染平台，渲染农场价格，自助式渲染，渲染云">
    <meta name="description" content="渲一科技，您身边的急速渲染军团。迅染云平台是渲一科技自主开发的一款适合超大规模渲染集群的管理服务平台系统" />
	<title>渲染|渲一科技|您身边的急速渲染军团</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font/iconfont.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="shortcut icon" href="img/favicon.ico">
</head>
<body>
	<nav class="navbar" role="navigation">
		<a name="top"><div class="top-area"></div></a>
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">切换导航</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="javascript:"></a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="/">首页</a>
					</li>
					<li>
						<a href="javascript:">迅染云平台
						    <i class="iconfont icon-xia1"></i>
						</a>
						<ul class="menu-list">
							<li><a href="render-platform.html">平台概述</a></li>
							<li><a href="operation.html">操作指南</a></li>
							<li><a href="operation.html#problems">常见问题</a></li>
						</ul>
					</li>
					<li>
						<a href="price.html">价格</a>
					</li>
					<li>
						<a href="example.html">案例</a>
					</li>
					<li>
						<a href="news.html">新闻动态</a>
					</li>
					<li>
						<a href="javascript:">关于我们
							<i class="iconfont icon-xia1"></i>
						</a>
						<ul class="menu-list">
							<li><a href="about-us.html">公司简介</a></li>
							<li><a href="cooperative-partner.html#cooperative">合作伙伴</a></li>
							<li><a href="recruitment.html#recriut">人才招聘</a></li>
							<li><a href="contact-us.php#contact">联系我们</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="home-slider">
		<div class="bg-gray"></div>
		<div class="shadow"></div>
		<div class="content">
			<div class="container">
				<h3>新版迅染云平台震撼上线</h3>
				<p>迅染云平台由渲一科技自主独立研发,集极速、安全、高效、便捷于一身,出色完成各种海 量渲染任务,彻底释放您的渲染压力</p>
				<a  class="btn download"><i class="iconfont icon-iconfontyonghu"></i>客户端下载</a>
				<p class="version">最新版本：1.0.0.0（2017.08.06）</p>
			</div>
		</div>
	</div>

	<div class="platform">
		<div class="top"></div>
		<div class="center"></div>
		<div class="bottom">
			<div class="container">
				<h3>迅染云平台的六大优点</h3>
				<span>The six major advantages of fastRender platform</span>
				<div class="color"></div>
				<ul>
					<li class="col-lg-6 wow fadeInLeft animated col-md-6 col-sm-6 col-xs-12" data-wow-duration="600ms" data-wow-delay="500ms">
						<i></i>
						<h4>自主可控</h4>
						<p>自主研发的云管理平台、自主的存储系统、自主的服务器虚拟化。实现了虚实结合的资源聚合、基于分区的大规模资源管理、异构资源统一调度等关键技术的应用</p>
						<div class="circle"></div>
					</li>
					<li class="col-lg-6 wow fadeInRight animated col-md-6 col-sm-6 col-xs-12" data-wow-duration="600ms" data-wow-delay="500ms">
						<h4>超强兼容</h4>
						<p>基于主流KVM/XEN/LXC/DOCKER等虚拟化机制、兼容能力大大提高。针对“天河二号”结果特点，优化兼容市场上巨大多数主流CG软件，比如3ds MAX、Maya、CINEMA 4D</p>
						<i></i>
					</li>
					<li class="col-lg-6 wow fadeInLeft animated col-md-6 col-sm-6 col-xs-12" data-wow-duration="600ms" data-wow-delay="800ms">
						<i></i>
						<h4>价格优势</h4>
						<p>试用超级计算机系统，大幅度降低渲染单价。按需增加或减少资源，实现真正的弹性计费，按核时计费，价格透明</p>
						<div class="circle"></div>
					</li>
					<li class="col-lg-6 wow fadeInRight animated col-md-6 col-sm-6 col-xs-12" data-wow-duration="600ms" data-wow-delay="800ms">
						<h4>安全可靠</h4>
						<p>数据分级物理隔离，数据传输加密与严格准入控制，领先的攻击与病毒防止技术，高度的团队安全意识与管理机制</p>
						<i></i>
					</li>
					<li class="col-lg-6 wow fadeInLeft animated col-md-6 col-sm-6 col-xs-12" data-wow-duration="600ms" data-wow-delay="1100ms">
						<i></i>
						<h4>硬件优势</h4>
						<p>平台部署的业务主机为“天河二号”超级计算机。自主CPU阵列，超过6400个自主CPU的计算节点，双精度浮点峰值计算性能为589.8TFlops，内存总容量206.8TB，全系统磁盘总容量10PB，中心接入移动、联通、电信、科研、教育五线路，独享万兆带宽</p>
					</li>
					<li class="col-lg-6 wow fadeInRight animated col-md-6 col-sm-6 col-xs-12" data-wow-duration="600ms" data-wow-delay="1100ms">
						<h4>异地求同</h4>
						<p>数据分级物理隔离，数据传输加密与严格准入控制，领先的攻击与病毒防止技术，高度的团队安全意识与管理机制</p>
						<i></i>
					</li>
				</ul>
			</div>
		</div>
		<div class="content">
			<div class="container">
				<h3>迅染云平台</h3>
				<span>迅染云平台是渲一科技自主开发的一款适合超大规模渲染集群的管理服务平台系统</span>
				<div class="color"></div>
				<div class="circle"></div>
				<div class="advan advantage1">
					<div class="word">
						<h4>技术优势</h4>
						<p>集群规模超千台服务器</p>
					</div>
					<i class="small-circle"></i>
				</div>
				<div class="advan advantage2">
					<div class="word">
						<h4>弹性资源</h4>
						<p>用户可以按需使用，节约资源</p>
					</div>
					<i class="small-circle" style="background: #CCFFCC"></i>
				</div>
				<div class="advan advantage3">
					<div class="word">
						<h4>提高效率</h4>
						<p>云计算极强的计算能力，<p>
						<p>效率达普通渲染模式的几十倍</p>
					</div>
					<i class="small-circle" style="background: #8AA7C9"></i>
				</div>
				<div class="advan advantage4">
					<div class="word">
						<h4>降低成本</h4>
						<p>服务器托管，制作公司</p>
						<p>无需一次性投入巨资购买硬件</p>
					</div>
					<i class="small-circle" style="background: #4598B6"></i>
				</div>
				<div class="tv">

				</div>
			</div>
		</div>
	</div>

	<div class="benefit">
		<div class="container">
		    <span>0.15元/核时  充值多少赠送多少</span>
		    <div class="color"></div>
		    <div class="phone">
		    	<div class="wow img swing" data-wow-duration="1800ms" data-wow-delay="200ms"></div>
		    	<span>按量计算</span>
		    	<span>专业、省心的人工渲染服务</span>
		    	<span>计费单元精确到每帧</span>
		    	<span>计算时间精确到秒</span>
		    </div>
		    <div class="btn"><a href="price.html">More</a></div>
		</div>
		<div class="line"></div>
		<p>历时一年 为您倾力打造  现在注册即送100元大礼包</p>
		<a class="btn download"><i class="iconfont icon-iconfontyonghu"></i>客户端下载</a>
		<p class="version">最新版本：1.0.0.0（2017.08.06）</p>
	</div>

	<div class="render-field">
		<div class="container">
			<div class="img1">
				<div class="after"></div>
				<div class="img-center-word">
					<p>1</p>
					<p>家庭设计行业</p>
					<p>Domestic outfit design industry</p>
				</div>
			</div>
			<div class="img2">
				<div class="after"></div>
				<div class="img-center-word">
					<p>2</p>
					<p>影视设计行业</p>
					<p>Film and television design industry</p>
				</div>
			</div>
			<div class="img3">
				<div class="after"></div>
				<div class="img-center-word">
					<p>3</p>
					<p>动漫设计行业</p>
					<p>Animation design industry</p>
				</div>
			</div>
			<div class="img4">
				<div class="after"></div>
				<div class="img-center-word">
					<p>4</p>
					<p>建筑设计行业 </p>
					<p>Architectural design industry</p>
				</div>
			</div>
			<div class="img5">
				<div class="after"></div>
				<div class="img-center-word">
					<p>5</p>
					<p>游戏设计行业</p>
					<p>The Game design industry</p>
				</div>
			</div>
			<div class="img6">
				<div class="after"></div>
				<div class="img-center-word">
					<p>6</p>
					<p>广告设计行业</p>
					<p>Advertising design industry</p>
				</div>
			</div>
			<div class="render-word">
				<h2>渲染领域</h2>
				<span>RENDING FIELD</span>
				<div class="color"></div>
			</div>
		</div>
	</div>

	<div class="render-software">
		<div class="container">
			<h3>主流渲染软件</h3>
			<span>RENDER SOFTWARE</span>
			<div class="color"></div>
			<ul class="wow lightSpeedIn" data-wow-duration="1500ms" data-wow-delay="300ms">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>
		<div class="line"></div>
	</div>

	<div class="render-news">
		<div class="container">
			<h3>新闻资讯</h3>
			<span>NEWS INFORMATION</span>
			<div class="color"></div>
			<div class="news-area">
				<ul>
					<li></li>
					<li>
						<p><a href="news.html">渲一科技成为中国超级计算创新联盟一员</a></p>
						<button class="btn"><a href="news.html">MORE</a></button>
					</li>
					<li></li>
					<li>
						<p><a href="news.html">看了我，你会爱上我</a></p>
						<p><a href="news.html">渲一科技新逼格办公室！</a></p>
						<button class="btn"><a href="news.html">MORE</a></button>
					</li>
					<li>
						<a href="news.html">更多资讯请点击</a>
					</li>
					<li>
						<p><a href="news.html">渲一科技厦门推介会</a></p>
						<p><a href="news.html">成功召开将打造厦门</a></p>
						<p><a href="news.html">最大迅染云平台</a></p>
						<button class="btn"><a href="news.html">MORE</a></button>
					</li>
					<li></li>
					<li>
						<p><a href="news.html">渲一科技渲染力作</a></p>
						<p><a href="news.html">《大唐荣耀》强势霸屏</a></p>
						<button class="btn"><a href="news.html">MORE</a></button>
					</li>
					<li></li>
					<li><a href="news.html"></a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="white"></div>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
					<ul class="introduction">
						<h3>渲一科技 About Us</h3>
						<li>
							<a href="about-us.html">关于渲一</a>
						</li>
						<li>
							<a href="render-platform.html#software">渲染软件</a>
						</li>
						<li>
							<a href="news.html">渲一动态</a>
						</li>
						<li>
							<a href="cooperative-partner.html#cooperative">合作伙伴</a>
						</li>
						<li>
							<a href="example.html">成功案例</a>
						</li>
						<li>
							<a href="operation.html#problems">常见问题</a>
						</li>
						<li>
							<a href="operation.html">新手指南</a>
						</li>
						<li>
							<a href="recruitment.html#recruit">招贤纳才</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3  wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
					<ul class="contact-us">
						<h3>联系我们 Contact Us</h3>
						<li>
							<a href="tencent://message/?uin=3119682797&Site=&Menu=yes" class="icon icon-qq first">
							    <i></i>
							    <span>QQ在线客服<span>
							</a>
						</li>
						<li>
							<a href="">
							    <i></i>
							    <span>help@fastrender.cn</span>
						    </a>
						</li>
						<li>
							<a href="">
							    <i></i>
							    <span>24小时在线服务热线：499-6938-636</span>
							</a>
						</li>
						<li>
							<a href="">
							    <i></i>
							    <span>渲一科技</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3  wow fadeInUp" data-wow-duration="500ms" data-wow-delay="900ms">
					<ul class="address">
						<h3>地址 Address</h3>
						<li><i></i><span>长沙经济技术开发区</span></li>
						<li><span>星沙产业基地开元东</span></li>
						<li><span>路1318号综合楼308</span></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3  wow fadeInUp"  data-wow-duration="500ms" data-wow-delay="1200ms">
					<div class="content">
					    <h3>关注我们</h3>
					    <img src="img/QRcode.png" alt="渲一科技">
					</div>
					<figcaption>关注渲一科技微信，送百元大礼包！</figcaption>
				</div>
			</div>
			<p class="rights-reserved wow fadeInUp" data-wow-duration="500ms" data-wow-delay="1200ms">© 广州渲一信息科技有限版权所有  京ICP备15062696号-3</p>
		</div>
		<div class="white-area"></div>
		<a class="goto-top" href="#top"></a>
    </footer>
</body>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script src="js/config.js"></script>
<script type="text/javascript">
$(function(){
	//Initiat WOW JS
	new WOW().init();
});
</script>
</html>