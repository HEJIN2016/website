<?php
require("connect.php");
if ($conn->connect_error){
    die("连接失败:" . $conn->connect_error);
}
else {
    $sql = "SELECT * FROM newslist ORDER BY time DESC";
    $conn->query("set names 'utf8'");
    $result = $conn->query($sql);
    $newslist = new ArrayObject();
    $index = 0;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            //echo "title:" . $row["title"] . "- author:" .$row["title"] ."-time:" . $row["time"] . "-content" . $row["content"] . "<br>";
            $newslist[$index] = new news();
            $newslist[$index]->setTitle($row["title"]);
            $newslist[$index]->setAuthor($row["author"]);
            $newslist[$index]->setTime($row["time"]);
            $newslist[$index]->setContent($row["content"]);
            $newslist[$index]->setNumber($row["number"]);
            $newslist[$index]->setFirstLine($row["firstline"]);
            $newslist[$index]->setImg($row["img"]);
            $index++;
        }
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=10">
    <meta name="keywords" content="渲一,渲一科技,渲染,迅染云平台，云渲染，渲染农场，3D渲染，渲染农场">
    <meta name="description" content="渲染云平台,渲一科技自主开发的迅染云平台是一款适合超大规模渲染集群的管理渲染服务平台系统。渲染平台适用于超大规模渲染云的管理，高效实现了远程提交渲染任务、近实时审片和及时修改设计，可根据用户需求提交大型渲染业务。平台支持3ds Max、Maya等各种主流渲染制作软件和以及mental ray、V-Ray等渲染引擎，可为动漫影视、建筑效果图、CG艺术等全领域提供专业云渲染解决方案" />
    <title>渲一科技|您身边的急速渲染军团</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="font/iconfont.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="shortcut icon" href="img/favicon.ico">
</head>
<body>
    <nav class="navbar">
        <a id="top"><div class="top-area"></div></a>
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">切换导航</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="img/renderlink.png" class="icon" alt="渲一科技" title="fastrender迅染云平台"> 
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
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
                    <li class="active">
                        <a href="newslist.php">新闻动态</a>
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
    <div class="page-header-div">
        <div class="container">
            <div class="left-bg-img wow fadeInLeft" data-wow-duration="900ms"></div>
            <div class="right-word wow fadeInRight" data-wow-duration="900ms">
                <h3>NEWS AND</h3>
                <h4>INFORMATION</h4>
                <h3>新闻资讯</h3>
                <p>洞悉互联网行业前沿资讯 探索渲染平台优化规律</p>
            </div>
        </div>
    </div>

    <div class="news-area">
        <div class="container">
            <header>
                <h3>新闻资讯<span>NEWS</span></h3>
                <p>持续关注行业发展，致力于在CG领域为文化创意企业及机构提供业界领先的渲染超级集群服务平台</p>
            </header>
            <ul class="news-list">
                <?php
                    $j = count($newslist);
                    $pageNum = ceil(count($newslist)/10);
                    $index = isset($_GET["page"])?$_GET["page"]:1;
                    for ($i = ($index-1)*10;$i < $j;$i++){
                ?>
                    <li>
                        <h3>
                            <a href="<?php echo 'newsdetail.php?number='.(int)$newslist[$i]->number?>"><?php echo $newslist[$i]->title;?></a>
                        </h3>
                        <div class="col-lg-9 col-md-9 col-sm-9 left-word" onclick="window.location.href='newsdetail.php?number=<?php echo (int)$newslist[$i]->number;?>'">
                            <div class="info">
                                <span><?php echo $newslist[$i]->author; ?></span>
                                <span><?php echo $newslist[$i]->time; ?></span>
                            </div>
                            <p><?php echo $newslist[$i]->firstline; ?></p>
                            <button class="btn" onclick="window.location.href='newsdetail.php?number=<?php echo (int)$newslist[$i]->number;?>'">Details</button>
                        </div>
                        <div class="col-lg-3 right-img col-md-3 imgload" style="background-size: cover" data-url="url(<?php echo $newslist[$i]->img; ?>)" ></div>
                        <div style="clear: both"></div>
                    </li>
                <?php
                    }
                ?>
            </ul>
            <div class="paging">
                <ul class="pagination">
                    <?php
                        for($index = 1;$index < $pageNum + 1;$index++){
                    ?>
                    <li><a href="?page=<?php echo $index;?>"><?php echo $index;?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                    <h3>渲一科技 About Us</h3>
                    <ul class="introduction">
                        <li>
                            <a href="about-us.html">关于渲一</a>
                        </li>
                        <li>
                            <a href="render-platform.html#software">渲染软件</a>
                        </li>
                        <li>
                            <a href="newslist.php">渲一动态</a>
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
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12  wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
                    <h3>联系我们 Contact Us</h3>
                    <ul class="contact-us">
                        <li>
                            <i class="imgload" data-url="url('img/weblogo.png')"></i>
                            <a href="tencent://message/?uin=3119682797&Site=&Menu=yes" class="icon icon-qq first">QQ在线客服</a>
                        </li>
                        <li>
                            <i class="imgload" data-url="url('img/weblogo.png')"></i>
                            <a href="javascript:">help@fastrender.cn</a>
                        </li>
                        <li>
                            <i class="imgload" data-url="url('img/weblogo.png')"></i>
                            <a href="javascript:">24小时在线服务热线：499-6938-636</a>
                        </li>
                        <li>
                            <i class="imgload" data-url="url('img/weblogo.png')"></i>
                            <a href="/">渲一科技</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12  wow fadeInUp" data-wow-duration="500ms" data-wow-delay="900ms">
                    <h3>地址 Address</h3>
                    <ul class="address">
                        <li><i class="imgload" data-url="url('img/weblogo.png')"></i><span>长沙经济技术开发区</span></li>
                        <li><span>星沙产业基地开元东</span></li>
                        <li><span>路1318号综合楼308</span></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12  wow fadeInUp"  data-wow-duration="500ms" data-wow-delay="1200ms">
                    <div class="content">
                        <h3>关注我们</h3>
                        <img src="img/QRcode.png" alt="渲一科技">
                    </div>
                    <p class="figcaption">关注渲一科技微信，送百元大礼包！</p>
                </div>
            </div>
            <p class="rights-reserved wow fadeInUp" data-wow-duration="500ms" data-wow-delay="1200ms">© 广州渲一信息科技有限版权所有  京ICP备15062696号-3</p>
        </div>
        <div class="white-area"></div>
        <a class="goto-top" href="#top"></a>
    </footer>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<!--<script type="text/javascript" src="js/news.js"></script>-->
<script type="text/javascript" src="js/all.js"></script>
<script type="text/javascript" src="js/loadimg.js"></script>
<script>
    var href = window.location.href;
    var page = parseInt((href.indexOf('=')!=-1)?href.substring(href.indexOf('=')+1):1);//当前页
    var totalPage = <?php echo $pageNum;?>;//总页数
    var nextPage = (page!=totalPage)?(page + 1):1;
    $("ul.pagination li").eq(page-1).addClass('active');
    $("ul.pagination").append('<li><a href=\"?page=' + nextPage + '\">&raquo;</a></li>');
</script>
</body>
</html>