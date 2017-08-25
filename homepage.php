<?php
session_start();
if ((!(isset($_SESSION["username"]))) || (empty($_SESSION["username"])))
    header("Location:login.html");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta author="hejin">
    <title>fastRender主页</title>
    <!-- <link rel="stylesheet" type="text/css" href="lib/css/jquery-ui.min.css"> -->
    <link href="themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/editor.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="font/iconfont.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-table.css">
</head>
<body>
<nav class="nav-bar">
    <img class="logo" src="img/render-logo.png">
    <div class="total-num">
        <span>官网累计访问量：<?php header('Content-type: text/html; charset=utf-8');$datei = fopen("logs/counter.txt","r");$count = fgets($datei,1000);echo $count;fclose($datei);?></span>
        <span style="padding-left: 15px">客户端下载量：
            <?php header('Content-type: text/html; charset=utf-8');
            require("connect.php");
            $sql = "SELECT * FROM download";
            $result = mysqli_query($conn,$sql);
            if (mysqli_num_rows($result) > 0) {
                // 输出数据
                while($row = mysqli_fetch_assoc($result)) {
                    echo $row["times"];
                }
            }
            else {
                echo "暂无结果";
            }
            mysqli_close($conn);
            ?>
        </span>
    </div>
    <ul class="nav-right">
        <li>
            <a href="" data-toggle="modal" data-target="#help-modal">帮助</a>
            <i class="iconfont icon-bangzhu"></i>
        </li>
        <li>
            <a href="http://www.fastrender.cn/download/V1.0.0.0/fastrender.exe">下载</a>
            <i class="iconfont icon-xiazai"></i>
        </li>
        <li class="user">
            <a href="javascript:;"><?php echo $_SESSION["username"] ?></a>
            <i class="iconfont icon-arrowdown"></i>
            <ul class="userlist">
                <li>
                    <a id="change-psd-link1">修改密码</a>
                </li>
                <li>
                    <a href="logout.php">注销账号</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="peeling">换肤
            </a>
            <i class="iconfont icon-skin"></i>
            <ul class="bgcolor">
                <li>
                    <a href="javascript:;">蓝色（默认）</a></li>
                <li><a href="javascript:;">绿色</a></li>
                <li><a href="javascript:;">黑色</a></li>
                <li><a href="javascript:;">红色</a></li>
            </ul>
        </li>
    </ul>
    <div class="clear"></div>
</nav>

<aside class="menu">
    <div class="personal">
        <img src="img/people.jpg">
        <span>管理员</span>
    </div>
    <ul class="menu-list">
        <li>
            <div class="slidebar">
                <i class="iconfont icon-weibiaoti1fuzhi03"></i>
                <span>新闻管理</span>
                <i class="iconfont icon-arrowdown"></i>
            </div>
            <ul>
                <li>
                    <a href="homepage.php">查看新闻</a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#add-news">添加新闻</a>
                </li>
            </ul>
        </li>
        <li>
            <div class="slidebar">
                <i class="iconfont icon-zhanghao"></i>
                <span>账户管理</span>
                <i class="iconfont icon-arrowdown"></i>
            </div>
            <ul>
                <li>
                    <a href="#" id="change-psd-link">修改密码</a>
                </li>
                <li>
                    <a href="#" id="add-account">添加账号</a>
                </li>
            </ul>
        </li>
        <li>
            <div class="slidebar">
                <i class="iconfont icon-liuyan"></i>
                <span><a href="word.php">查看留言</a> </span>
            </div>
        </li>
        <li>
            <div class="slidebar">
                <i class="iconfont icon-IPguanli"></i>
                <span><a href="javascript:" data-toggle="modal" data-target="#ip">查看访问者ip</a> </span>
            </div>
        </li>
        <!--        <li>-->
        <!--            <div class="slidebar">-->
        <!--                <i class="iconfont icon-download"></i>-->
        <!--                <span><a href="" data-toggle="modal" data-target="#upload">客户端上传</a> </span>-->
        <!--            </div>-->
        <!--        </li>-->
    </ul>
</aside>

<div class="center-page">
    <div class="nav">
        <i class="iconfont icon-shouyexian"></i>
        <span>首页 > 新闻管理</span>
    </div>
    <div class="select-text">
        <div class="button-area">
            <button type="button" class="btn btn-danger" data-toggle="modal" id="delete_many_news_btn">
                <i class="iconfont icon-shanchu"></i>批量删除
            </button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-news">
                <i class="iconfont icon-tianjia"></i>新增新闻
            </button>
        </div>
    </div>

    <div class="data-text">
        <table data-toggle="table" id="news-table" style="table-layout: fixed;">
        </table>
    </div>
</div>
</body>

<!-- 编辑新闻模态框-->
<div class="modal fade topmodal" id="editor-news" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" style="width: 1030px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title">
                    编辑新闻
                </h4>
            </div>

            <div class="modal-body">
                <div>
                    <label class="col-lg-2 col-lg-offset-1 control-label"
                           style="text-align: right;padding-top: 7px">标题</label>
                    <div class="col-lg-9" style="margin-bottom: 15px">
                        <input type="text" class="form-control" style="width: 70%;" id="title">
                    </div>
                </div>
                <div>
                    <label class="col-lg-2 col-lg-offset-1 control-label"
                           style="text-align: right;padding-top: 7px">作者</label>
                    <div class="col-lg-9" style="margin-bottom: 15px">
                        <input type="text" class="form-control col-lg-8" style="width: 70%;" id="author">
                    </div>
                </div>
                <div class="clear"></div>
                <!--style给定宽度可以影响编辑器的最终宽度-->
                <script type="text/plain" id="myEditor">
                    <p></p>
                </script>

                <div class= "clear" > </div>
                    </div>

                    <div class = "modal-footer" >
                    <button type = "button" class = "btn btn-primary" data-dismiss = "modal" id = "editor_confirm_btn" > 确认 </button>
                    <button type = "button" class = "btn btn-default" data-dismiss = "modal" > 关闭 </button>
                    </div>
                    </div><!-- /.modal-content -->
                    </div>
                    </div>

                    <!-- 新增新闻模态框-->
                    <div class = "modal fade topmodal"  id = "add-news"  tabindex = "-1" role = "dialog"  aria-labelledby = "myModalLabel"  aria-hidden = "true" >
                    <div class = "modal-dialog" style = "width: 1030px" >
                    <div class = "modal-content" >
                    <div class = "modal-header" >
                    <button type = "button" class = "close"  data-dismiss = "modal" aria-hidden = "true" >  &times; </button>
                <h4 class = "modal-title" > 新增新闻 </h4>
                    </div>

                    <div class = "modal-body" > <div>
                    <label class = "col-lg-2 col-lg-offset-1 control-label" style = "text-align: right;padding-top: 7px" > 标题 </label>

                    <div class = "col-lg-9" style = "margin-bottom: 15px">
                    <input type = "text" class = "form-control" style = "width: 70%;" id = "add_title" >
                    </div>
                    </div>
                    <div >
                    <label class = "col-lg-2 col-lg-offset-1 control-label" style = "text-align: right;padding-top: 7px" > 作者 </label>
                    <div class = "col-lg-9" style = "margin-bottom: 15px" >
                    <input type = "text" class = "form-control col-lg-8" style = "width: 70%;" id = "add_author" >
                    </div>
                    </div>
                    <div class = "clear" > </div>
                    <!--style给定宽度可以影响编辑器的最终宽度-->
                    <script type = "text/plain" id = "add_news_editor">
                    <p> </p>
                </script>

                <div class="clear"></div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="add_news_btn">
                    确认
                </button>
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>

<!-- 查看ip模态框（Modal） -->
<div class="modal fade" id="ip" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title">
                    查看访问者ip
                </h4>
            </div>
            <div class="modal-body">
                <div class="change-personal-psd">
                    <iframe src="logs/ip.txt" width="100%" frameborder="0" height="240px"></iframe>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="delete_news_confirm_btn" data-dismiss="modal">
                    确认
                </button>
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>

<!-- 批量删除新闻模态框（Modal） -->
<div class="modal fade" id="delete-many-news" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" style="width: 240px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title">
                    删除新闻
                </h4>
            </div>
            <div class="modal-body">
                <div class="change-personal-psd">
                    确定要删除这些新闻吗？
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="delete_news_confirm_btn" data-dismiss="modal">
                    确认
                </button>
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<!-- 删除新闻模态框（Modal） -->
<div class="modal fade" id="delete-news" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 240px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title">
                    删除新闻
                </h4>
            </div>
            <div class="modal-body">
                <div class="change-personal-psd">
                    确定要删除该新闻吗？
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="delete_news_btn">
                    确认
                </button>
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>

<!-- 更改密码 -->
<div class="modal fade" id="change-password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    更改账号密码
                </h4>
            </div>
            <div class="modal-body">
                <div class="change-personal-psd">
                    <form class="form-horizontal" action="" method="" id="change-password-form" role="form">
                        <div class="form-group">
                            <label class="col-lg3 col-md-3  control-label">原密码</label>
                            <div class="col-lg-6 col-md-6 ">
                                <input type="password" class="form-control" id="old-psw" required placeholder="请输入原密码">
                            </div>
                            <span class="promptSpan col-lg-3 old-password"
                                  style="line-height: 32px;color: #a94442;font-size: 14px;padding: 0" id="span1"></span>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 col-md-3 control-label">新密码</label>
                            <div class="col-lg-6 col-md-6 ">
                                <input type="password" class="form-control" id="new-psw" required
                                       placeholder="不允许输入特殊字符">
                            </div>
                            <span class="promptSpan col-lg-3 old-password"
                                  style="line-height: 32px;color: #a94442;font-size: 14px;padding: 0" id="span2"></span>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 col-md-3  control-label">密码确认</label>
                            <div class="col-lg-6 col-md-6">
                                <input type="password" class="form-control" id="confirm-psw" required>
                            </div>
                            <span class="promptSpan col-lg-3 old-password"
                                  style="line-height: 32px;color: #a94442;font-size: 14px;padding: 0" id="span3"></span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" id="change_psd_btn">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="关闭" id="close_btn">
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>

<!-- 添加账号 -->
<div class="modal fade"  id="add-account-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    添加账号
                </h4>
            </div>
            <div class="modal-body">
                <div class="change-personal-psd">
                    <form class="form-horizontal" action="" method="" id="change-password-form" role="form">
                        <div class="form-group">
                            <label class="col-lg3 col-md-3  control-label">账户名</label>
                            <div class="col-lg-6 col-md-6 ">
                                <input type="text" class="form-control" id="account_name" required placeholder="请输入账户名">
                            </div>
                            <span class="promptSpan col-lg-3 old-password"
                                  style="line-height: 32px;color: #a94442;font-size: 14px;padding: 0" id="span4"></span>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 col-md-3 control-label">密码</label>
                            <div class="col-lg-6 col-md-6 ">
                                <input type="password" class="form-control" id="account-psw" required
                                       placeholder="不允许输入特殊字符">
                            </div>
                            <span class="promptSpan col-lg-3 old-password"
                                  style="line-height: 32px;color: #a94442;font-size: 14px;padding: 0" id="span5"></span>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 col-md-3  control-label">密码确认</label>
                            <div class="col-lg-6 col-md-6">
                                <input type="password" class="form-control" id="account-confirm-psw">
                            </div>
                            <span class="promptSpan col-lg-3 old-password" style="line-height: 32px;color: #a94442;font-size: 14px;padding: 0" id="span6"></span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" id="add-account-btn">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="关闭" id="close_btn">
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>

<!-- 选择新闻提示框（Modal） -->
<div class="modal fade" id="select-news" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 303px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title">
                    请选择新闻
                </h4>
            </div>
            <div class="modal-body">
                <div class="change-personal-psd" style="overflow: hidden">
                    <img src="img/mark.png" style="width: 100px;float: left;display: block">
                    <div style="float: right;margin-top: 31px;width: 152px;">您还未选择任何新闻，请返回重新选择！</div>
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

<!-- 错误提示框（Modal） -->
<div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                    <div style="float: right;margin-top: 31px;width: 152px;">抱歉，该操作出错了，请返回重新操作！</div>
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

<!-- 帮助模态框（Modal） -->
<div class="modal fade" id="help-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 440px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title">
                    帮助
                </h4>
            </div>
            <div class="modal-body">
                <div class="change-personal-psd">
                    本系统是渲一科技官方网站的后台管理系统，主要有新闻管理、留言板管理、账号管理等功能。
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>

<!-- 上传客户端文件 -->
<div class="modal fade"  id="upload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    上传客户端文件
                </h4>
            </div>
            <div class="modal-body">
                <div class="change-personal-psd">
                    <form class="form-horizontal" action="upload.php" method="post" id="change-password-form" role="form">
                        <div class="form-group">
                            <label class="col-lg3 col-md-3  control-label">文件名</label>
                            <div class="col-lg-6 col-md-6 ">
                                <input type="text" class="form-control" id="account_name" required placeholder="请输入文件名">
                            </div>
                            <span class="promptSpan col-lg-3 old-password"
                                  style="line-height: 32px;color: #a94442;font-size: 14px;padding: 0" id="span4"></span>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 col-md-3 control-label">客户端版本</label>
                            <div class="col-lg-6 col-md-6 ">
                                <input type="password" class="form-control" id="account-psw" required
                                       placeholder="请输入客户端版本">
                            </div>
                            <span class="promptSpan col-lg-3 old-password"
                                  style="line-height: 32px;color: #a94442;font-size: 14px;padding: 0" id="span5"></span>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 col-md-3  control-label">文件</label>
                            <div class="col-lg-6 col-md-6">
                                <input type="file" class="form-control" id="account-confirm-psw">
                            </div>
                            <span class="promptSpan col-lg-3 old-password" style="line-height: 32px;color: #a94442;font-size: 14px;padding: 0" id="span6"></span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" id="add-account-btn" value="上传">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="关闭" id="close_btn">
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-table.js"></script>
<script src="js/bootstrap-table-zh-CN.min.js"></script>
<script src="js/home.js"></script>
<script src="js/all.js"></script>
<script src="third-party/template.min.js"></script>
<script charset="utf-8" src="umeditor.config.js"></script>
<script charset="utf-8" src="umeditor.min.js"></script>
<script src="lang/zh-cn/zh-cn.js"></script>
<script src="js/editor.js"></script>
<script src="js/homepage.js"></script>
</html>