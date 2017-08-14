<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta author="hejin">
	<title>fastRender主页</title>
<!-- <link rel="stylesheet" type="text/css" href="lib/css/jquery-ui.min.css"> -->
	<link href="themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/editor.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="font/iconfont.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.css">
</head>
<body>
	<nav class="nav-bar">
	    <img class="logo" src="img/render-logo.png">
	    <ul class="nav-right">
	        <li>
	            <a href="">帮助</a>
	            <i class="iconfont icon-bangzhu"></i>
	        </li>
	        <li>
	            <a href="">下载</a>
	            <i class="iconfont icon-xiazai"></i>
	        </li>
	        <li class="user">
	            <a href="javascript:;">admin</a>
	            <i class="iconfont icon-arrowdown"></i>
	            <ul class="userlist">
	            	<li>
	            		<a href="info.html">个人信息</a>
	            	</li>
	            	<li>
	            		<a href="changePass.html">修改密码</a>
	            	</li>
	            	<li>
	            		<a href="login.html">注销账号</a>
	            	</li>
	            </ul>
	        </li>
	        <li>
	            <a href="javascript:;" class="peeling" >换肤
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
						<a href="#">查看新闻</a>
					</li>
					<li>
						<a href="#">添加新闻</a>
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
						<a href="#">修改密码</a>
					</li>
					<li>
						<a href="#">添加账号</a>
					</li>
				</ul>
			</li>
			<li>
				<div class="slidebar">
					<i class="iconfont icon-liuyan"></i>
					<span>查看留言</span>
				</div>
			</li>
		</ul>
	</aside>

	<div class="center-page">
		<div class="nav">
			<i class="iconfont icon-shouyexian"></i>
			<span>首页 > 新闻管理</span>
		</div>
		<div class="select-text">
			<div class="button-area">
				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-many-news">
					<i class="iconfont icon-shanchu"></i>批量删除
				</button>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-news">
					<i class="iconfont icon-tianjia"></i>新增新闻
				</button>
			</div>
			<!--<span>日期范围</span>-->
			<!--<input type="text"  id="start-date" class="date">-->
			<!--<span> - </span>-->
			<!--<input type="text" id="end-date" class="date">-->
			<!--<input type="text" placeholder="输入子账号账户名或手机号码" id="input-text">-->
			<!--<button class="btn btn-success search"><i class="iconfont icon-sousuo"></i>搜用户</button>-->
		</div>

		<div class="data-text">
			<table data-toggle="table"    id="news-table">

			</table>

			<!--<div class="table-info">-->
				<!--<div class="number-info">-->
					<!--显示1到-->
					<!--<span class="total">6</span>-->
					<!--,共-->
					<!--<span class="total">10</span>-->
					<!--条-->
				<!--</div>-->

				<!--<div class="turn-page">-->
					<!--<ul class="pagination">-->
						<!--<li><a href="#">上一页</a></li>-->
						<!--<li><a href="#">1</a></li>-->
						<!--<li><a href="#">2</a></li>-->
						<!--<li><a href="#">3</a></li>-->
						<!--<li><a href="#">4</a></li>-->
						<!--<li><a href="#">5</a></li>-->
						<!--<li><a href="#">下一页</a></li>-->
					<!--</ul>-->
				<!--</div>6-->
			<!--</div>-->
		</div>
	</div>
</body>

<!-- 编辑新闻模态框-->
<div class="modal fade" id="editor-news" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
				<!--style给定宽度可以影响编辑器的最终宽度-->
<!--				<script type="text/plain" id="myEditor" style="width:1000px;height:240px">-->
<!--					<p></p>-->
<!--				</script>-->

				<div class="clear"></div>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-primary">
					确认
				</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭
				</button>
			</div>
		</div><!-- /.modal-content -->
	</div>
</div>

<!-- 批量删除新闻模态框（Modal） -->
<div class="modal fade" id="delete-many-news" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                <button type="button" class="btn btn-primary">
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
                <button type="button" class="btn btn-primary">
                    确认
                </button>
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<!--<script src="js/bootstrap-table.min.js"></script>-->
<script src="js/bootstrap-table.js"></script>
<script src="js/home.js"></script>
<script src="js/all.js"></script>
<!--<script src="third-party/template.min.js"></script>-->
<!--<script charset="utf-8" src="umeditor.config.js"></script>-->
<!--<script charset="utf-8" src="umeditor.min.js"></script>-->
<!--<script src="lang/zh-cn/zh-cn.js"></script>-->
<!--<script src="js/editor.js"></script>-->
<script>
    var newsObject;
    var datas;
    $.ajax({
        url: 'data.php',
        type: 'POST',
        async: false
    })
        .done(function(data){
            newsObject = jQuery.parseJSON(data);
            for(var i = 0;i < arrayCount(newsObject);i++){
                newsObject[i].firstline = getString(newsObject[i].content,25) + '...';
            }
            datas = $.parseJSON(JSON.stringify(newsObject));
            console.log('success');
        })
        .fail(function(){
            console.log('error!');
        });

    $("#news-table").bootstrapTable({
        columns:[{
            field: 'state',
			checkbox: true
		},{
            field: 'number',
            title: '编号',
			align: 'center',
            width: 48
        },{
            field: 'title',
            title: '标题'
        },{
            field: 'time',
            title: '时间',
            align: 'center'
        },{
            field: 'author',
            title: '作者',
            align: 'center'
        },{
            field: 'firstline',
            title: '内容',
            align: 'center'
        },{
            field: 'opt',
            title: '操作',
			align: 'center',
			formatter: function(value,row,index){
                return ['<a href="#"  class="editor" title="编辑" data-toggle="modal" data-target="#editor-news"><i class="iconfont icon-bianji"></i></a>\n','<a href="#" title="删除" data-toggle="modal" data-target="#delete-news" class="delete"><i class="iconfont icon-shanchu"></i></a>'].join('');
			}
		}],
        data: datas
    });
</script>
</html>