<!DOCTYPE html>
<html lang="en" id="html">
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

<?php
    require("connect.php");
    $error = "";
    if ($conn->connect_error){
        die("连接失败:" . $conn->connect_error);
    }
    else {
        $sql = "SELECT * FROM newslist WHERE number = " . check_input($conn,$_GET["number"]);
        $conn->query("set names 'utf8'");
        $result = $conn->query($sql);
        $newslist = new news();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $newslist->setTitle($row["title"]);
                $newslist->setAuthor($row["author"]);
                $newslist->setTime($row["time"]);
                $newslist->setContent($row["content"]);
                $newslist->setNumber($row["number"]);
            }
        } else {
            $error = "$('.modal').modal('show');";
            //echo "<script>var html= document.getElementById('html');var script = document.createElement('script');script.appendChild(document.createTextNode(\"$('.modal').modal('show');\"));html.appendChild(script);</script>";
        }
    }
    $conn->close();
?>

<div class="news-details">
    <div class="container">
        <article>
            <header>
                <h3><?php echo $newslist->title;?></h3>
                <span class="time"><?php echo $newslist->time;?></span>
                <span class="author"><?php echo $newslist->author;?></span>
            </header>

            <section>
                <?php echo $newslist->content;?>
            </section>
        </article>
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
<script src="js/jquery.lazyload.min.js"></script>
<script type="text/javascript" src="js/loadimg.js"></script>
<script>setTimeout(function(){<?php echo $error;?>},300)</script>
</body>
</html>
<!-- 错误提示框（Modal） -->
<div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="top: 150px">
    <div class="modal-dialog" style="width: 303px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title">
                    出错了
                </h4>
            </div>
            <div class="modal-body">
                <div class="change-personal-psd" style="overflow: hidden">
                    <img src="img/mark.png" style="width: 100px;float: left;display: block">
                    <div style="float: right;margin-top: 31px;width: 152px;">抱歉，未查询到相关数据，请返回重新操作！</div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    确认
                </button>
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>