<?php
session_start();
if ((!(isset($_SESSION["username"])))||(empty($_SESSION["username"])))
    header("Location:login");
?>
<!DOCTYPE html>
<html lang="en">
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
	            <a href="javascript:;"><?php echo $_SESSION["username"] ?></a>
	            <i class="iconfont icon-arrowdown"></i>
	            <ul class="userlist">
	            	<li>
	            		<a href="info.html">个人信息</a>
	            	</li>
	            	<li>
	            		<a href="changePass.html">修改密码</a>
	            	</li>
	            	<li>
	            		<a href="logout.php">注销账号</a>
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
<div class="modal fade topmodal" id="editor-news" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                    <label class="col-lg-2 col-lg-offset-1 control-label" style="text-align: right;padding-top: 7px">标题</label>
                    <div class="col-lg-9" style="margin-bottom: 15px">
                        <input type="text" class="form-control" style="width: 70%;" id="title">
                    </div>
                </div>
                <div>
                    <label class="col-lg-2 col-lg-offset-1 control-label" style="text-align: right;padding-top: 7px">作者</label>
                    <div class="col-lg-9" style="margin-bottom: 15px">
                        <input type="text" class="form-control col-lg-8" style="width: 70%;" id="author">
                    </div>
                </div>
                <div class="clear"></div>
				<!--style给定宽度可以影响编辑器的最终宽度-->
				<script type="text/plain" id="myEditor" style="width:1000px;height:240px">
					<p></p>
				</script>

				<div class="clear"></div>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal" id="editor_confirm_btn">
					确认
				</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭
				</button>
			</div>
		</div><!-- /.modal-content -->
	</div>
</div>

<!-- 新增新闻模态框-->
<div class="modal fade topmodal" id="add-news" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="width: 1030px">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">
					新增新闻
				</h4>
			</div>

			<div class="modal-body">
                <div>
                    <label class="col-lg-2 col-lg-offset-1 control-label" style="text-align: right;padding-top: 7px">标题</label>
                    <div class="col-lg-9" style="margin-bottom: 15px">
                        <input type="text" class="form-control" style="width: 70%;" id="add_title">
                    </div>
                </div>
                <div>
                    <label class="col-lg-2 col-lg-offset-1 control-label" style="text-align: right;padding-top: 7px">作者</label>
                    <div class="col-lg-9" style="margin-bottom: 15px">
                        <input type="text" class="form-control col-lg-8" style="width: 70%;" id="add_author">
                    </div>
                </div>
                <div class="clear"></div>
				<!--style给定宽度可以影响编辑器的最终宽度-->
				<script type="text/plain" id="add_news_editor" style="width:1000px;height:240px">
					<p></p>
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
<script>
    var $table = $("#news-table");
    $table.bootstrapTable({
        height: 575,
        url: 'dataNum.php',
        method: 'post',
        search: true,
        showRefresh: true,
        escape: true,
        toolbar: '#toolbar',                //工具按钮用哪个容器
        striped: true,                      //是否显示行间隔色
        cache: false,                       //是否使用缓存，默认为true，所以一般情况下需要设置一下这个属性（*）
        pagination: true,                   //是否显示分页（*）
        sortable: false,                     //是否启用排序
        sidePagination: "client",           //分页方式：client客户端分页，server服务端分页（*）
        pageNumber:1,                       //初始化加载第一页，默认第一页
        pageSize: 10,                       //每页的记录行数（*）
        pageList: [10, 25, 50, 100],        //可供选择的每页的行数（*）
        search: true,                       //是否显示表格搜索，此搜索是客户端搜索，不会进服务端
        strictSearch: true,
        showColumns: true,                  //是否显示所有的列
        showRefresh: true,                  //是否显示刷新按钮
        minimumCountColumns: 0,
        clickToSelect: true,                //是否启用点击选中行
        uniqueId: "number",                     //每一行的唯一标识，一般为主键列
        showToggle:true,                    //是否显示详细视图和列表视图的切换按钮
        columns:[{
            field: '',
			checkbox: true
		},{
            field: 'number',
            title: '编号',
			align: 'center',
            width: 70
        },{
            field: 'title',
            title: '标题'
        },{
            field: 'time',
            title: '时间',
            align: 'center',
            width: 150
        },{
            field: 'author',
            title: '作者',
            align: 'center',
            width: 150
        },{
            field: 'firstline',
            title: '内容',
            align: 'center'
        },{
            field: 'opt',
            width: 150,
            title: '操作',
			align: 'center',
			formatter: function(value,row,index){
                return ['<a href="#"  class="editor" title="编辑" data-toggle="modal" data-target="#editor-news"><i class="iconfont icon-bianji"></i></a>\n','<a href="#" title="删除" data-toggle="modal" data-target="#delete-news" class="delete"> <i class="iconfont icon-shanchu"></i></a>'].join('');
			},
            events: {
			    'click .editor': function (event,value,row,index) {
                    console.log('123');
                    console.log(index);
                    console.log(row);
                    console.log(value);
                    $("#title").val(row.title);
                    $("#author").val(row.author);
                    UM.getEditor('myEditor').setContent(row.content);
                    $("body").unbind('click').on('click', '#editor_confirm_btn', function (events) {
                        $.ajax({
                            url: 'editor.php',
                            type: 'POST',
                            data: {
                                title: $("#title").val(),
                                author: $("#author").val(),
                                content: UM.getEditor('myEditor').getContent(),
                                number: row.number
                            }
                        })
                            .done(function (data) {
                                if (data == 1) {
                                    console.log('success editor');
                                    $table.bootstrapTable('refresh',{
                                        silent: true
                                    })
                                }
                                else
                                    console.log('error!');
                            })
                            .fail(function () {
                                console.log('editor news error!')
                                $("#error-modal").modal('show');
                            })
                    });
                },
                'click .delete':function(event,value,row,index){
			        console.log('456');
			        $("body").unbind('click').on('click','#delete_news_btn',function(){
                        $.ajax({
                            url: 'deleteNews.php',
                            type: 'POST',
                            data: {
                                number: row.number
                            },
                            success: function (data) {
                                if (data) {
                                    console.log('delete news success!');
                                    $table.bootstrapTable('remove',{
                                        field: 'number',
                                        values: row.number
                                    });
                                }
                                else console.log('delete news error!')
                            },
                            fail:function () {
                                console.log('delete news error!');
                                $("#error-modal").modal('show');
                            }
                        })
                    })
                 }
            }
		}]
    });

    $("html").on('click','#add_news_btn',function (events) {
        var date = new Date();
        var content = deleteBlank(UM.getEditor('add_news_editor').getContent());
        var txt = UM.getEditor('add_news_editor').getContentTxt();
        console.log(txt);
        $.ajax({
            url: 'addNews.php',
            type: 'POST',
            data: {
                title: $("#add_title").val() + "",
                author: $("#add_author").val() + "",
                time: curentTime(new Date()) + "",
                content: content + "",
                firstline: txt.substring(0,150)
            },
            success: function(data){
                if(data==1){
                    console.log('add news success!');
                    $table.bootstrapTable('refresh',{
                        silent: true
                    })
                }
                else{
                    console.log('add news error!');
                    $("#error-modal").modal('show');
                }
            },
            error: function(){
                console.log('add news error!');
                $("#error-modal").modal('show');
            }
        })
    });

    $("html").on("click","#delete_many_news_btn",function(){
        if (!$table.bootstrapTable('getSelections').length){
            $("#select-news").modal('show');
        }
        else {
            $("#delete-many-news").modal('show');
        }
        //$("html").off('click');
    })

    $("html").on("click","#delete_news_confirm_btn",function(){
        $.ajax({
            url: 'deleteManyNews.php',
            type: 'post',
            data: {
                number: function(){
                    var array = new Array();
                    for (var i = 0;l = $table.bootstrapTable('getSelections').length,i < l; i++){
                        array.push($table.bootstrapTable('getSelections')[i].number);
                    }
                    return array;
                }
            },
            success: function(data){
                if (data){
                    console.log('delete news success!');
                    var ids = $.map($table.bootstrapTable('getSelections'),function(row){
                        return row.number;
                    });
                    $table.bootstrapTable('remove',{
                        field: 'number',
                        values: ids
                    });
                }
                else{
                    $("#error-modal").modal('show');
                }
            },
            error:function () {
                $("#error-modal").modal('show');
            }
        });
        //$("html").off('click');
    })
</script>
</html>