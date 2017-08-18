var $table = $("#news-table");
var $word_table = $("#words-table");
$table.bootstrapTable({
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
    pageNumber: 1,                       //初始化加载第一页，默认第一页
    pageSize: 10,                       //每页的记录行数（*）
    pageList: [10, 25, 50, 100],        //可供选择的每页的行数（*）
    search: true,                       //是否显示表格搜索，此搜索是客户端搜索，不会进服务端
    strictSearch: true,
    showColumns: true,                  //是否显示所有的列
    showRefresh: true,                  //是否显示刷新按钮
    minimumCountColumns: 0,
    clickToSelect: true,                //是否启用点击选中行
    uniqueId: "number",                     //每一行的唯一标识，一般为主键列
    showToggle: true,                    //是否显示详细视图和列表视图的切换按钮
    columns: [{
        field: '',
        checkbox: true
    }, {
        field: 'number',
        title: '编号',
        align: 'center',
        width: 70
    }, {
        field: 'title',
        title: '标题'
    }, {
        field: 'time',
        title: '时间',
        align: 'center',
        width: 150
    }, {
        field: 'author',
        title: '作者',
        align: 'center',
        width: 150
    }, {
        field: 'firstline',
        title: '内容',
        align: 'center'
    }, {
        field: 'opt',
        width: 150,
        title: '操作',
        align: 'center',
        formatter: function (value, row, index) {
            return ['<a href="#"  class="editor" title="编辑" data-toggle="modal" data-target="#editor-news"><i class="iconfont icon-bianji"></i></a>\n', '<a href="#" title="删除" data-toggle="modal" data-target="#delete-news" class="delete"> <i class="iconfont icon-shanchu"></i></a>'].join('');
        },
        events: {
            'click .editor': function (event, value, row, index) {
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
                                $table.bootstrapTable('refresh', {
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
            'click .delete': function (event, value, row, index) {
                $("body").unbind('click').on('click', '#delete_news_btn', function () {
                    $.ajax({
                        url: 'deleteNews.php',
                        type: 'POST',
                        data: {
                            number: row.number
                        },
                        success: function (data) {
                            if (data) {
                                console.log('delete news success!');
                                $table.bootstrapTable('remove', {
                                    field: 'number',
                                    values: row.number
                                });
                                $table.bootstrapTable('refresh', {
                                    silent: true
                                })
                            }
                            else console.log('delete news error!')
                        },
                        fail: function () {
                            console.log('delete news error!');
                            $("#error-modal").modal('show');
                        }
                    })
                })
            }
        }
    }]
});

$word_table.bootstrapTable({
    url: 'getWord.php',
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
    pageNumber: 1,                       //初始化加载第一页，默认第一页
    pageSize: 10,                       //每页的记录行数（*）
    pageList: [10, 25, 50, 100],        //可供选择的每页的行数（*）
    search: true,                       //是否显示表格搜索，此搜索是客户端搜索，不会进服务端
    strictSearch: true,
    showColumns: true,                  //是否显示所有的列
    showRefresh: true,                  //是否显示刷新按钮
    minimumCountColumns: 0,
    clickToSelect: true,                //是否启用点击选中行
    showToggle: true,                    //是否显示详细视图和列表视图的切换按钮
    columns: [{
        field: '',
        checkbox: true,
        align: 'center',
        width: 30
    }, {
        field: 'number',
        title: '编号',
        align: 'center',
        width: 100
    },{
        field: 'ip',
        title: 'IP地址',
        align: 'center',
        width: 200
    }, {
        field: 'name',
        title: '姓名',
        width: 100,
        align: 'center'
    }, {
        field: 'time',
        title: '时间',
        align: 'center',
        width: 200
    }, {
        field: 'phone',
        title: '联系电话',
        align: 'center',
        width: 160
    }, {
        field: 'word',
        title: '内容',
        align: 'center'
    }, {
        field: 'opt',
        width: 150,
        title: '操作',
        align: 'center',
        formatter: function (value, row, index) {
            return [ '<a href="#" title="删除" data-toggle="modal" data-target="#delete-word" class="delete-word"> <i class="iconfont icon-shanchu"></i></a>'].join('');
        },
        events: {
            'click .delete-word': function (event, value, row, index) {
                console.log(row.number);
                $("body").unbind('click').on('click', '#delete_word_btn', function () {
                    $.ajax({
                        url: 'deleteWord.php',
                        type: 'POST',
                        data: {
                            number: row.number
                        },
                        success: function (data) {
                            if (data) {
                                console.log('delete word success!');
                                $word_table.bootstrapTable('remove', {
                                    field: 'number',
                                    values: row.number
                                });
                                $word_table.bootstrapTable('refresh', {
                                    silent: true
                                })
                            }
                            else console.log('delete word error!')
                        },
                        fail: function () {
                            console.log('delete word error!');
                            $("#error-modal").modal('show');
                        }
                    })
                })
            }
        }
    }]
});

$("html").on('click', '#add_news_btn', function (events) {
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
            firstline: txt.substring(0, 150)
        },
        success: function (data) {
            if (data == 1) {
                console.log('add news success!');
                $table.bootstrapTable('refresh', {
                    silent: true
                })
            }
            else {
                console.log('add news error!');
                $("#error-modal").modal('show');
            }
        },
        error: function () {
            console.log('add news error!');
            $("#error-modal").modal('show');
        }
    })
});

$("html").on("click", "#delete_many_news_btn", function () {
    if (!$table.bootstrapTable('getSelections').length) {
        $("#select-news").modal('show');
    }
    else {
        $("#delete-many-news").modal('show');
    }
    //$("html").off('click');
})

$("html").on("click", "#delete_news_confirm_btn", function () {
    $.ajax({
        url: 'deleteManyNews.php',
        type: 'post',
        data: {
            number: function () {
                var array = new Array();
                for (var i = 0; l = $table.bootstrapTable('getSelections').length, i < l; i++) {
                    array.push($table.bootstrapTable('getSelections')[i].number);
                }
                return array;
            }
        },
        success: function (data) {
            if (data) {
                console.log('delete news success!');
                var ids = $.map($table.bootstrapTable('getSelections'), function (row) {
                    return row.number;
                });
                $table.bootstrapTable('remove', {
                    field: 'number',
                    values: ids
                });
            }
            else {
                $("#error-modal").modal('show');
            }
        },
        error: function () {
            $("#error-modal").modal('show');
        }
    });
    //$("html").off('click');
});

$("html").on("click", "#delete_words_btn", function () {
    if (!$word_table.bootstrapTable('getSelections').length) {
        $("#select-words").modal('show');
    }
    else {
        $("#delete-words").modal('show');
    }
    //$("html").off('click');
})

$("html").on("click", "#delete_words_confirm_btn", function () {
    $.ajax({
        url: 'deleteWords.php',
        type: 'post',
        data: {
            number: function () {
                var array = new Array();
                for (var i = 0; l = $word_table.bootstrapTable('getSelections').length, i < l; i++) {
                    array.push($word_table.bootstrapTable('getSelections')[i].number);
                }
                return array;
            }
        },
        success: function (data) {
            if (data) {
                console.log('delete words success!');
                var ids = $.map($word_table.bootstrapTable('getSelections'), function (row) {
                    return row.number;
                });
                $word_table.bootstrapTable('remove', {
                    field: 'number',
                    values: ids
                });
            }
            else {
                $("#error-modal").modal('show');
            }
        },
        error: function () {
            $("#error-modal").modal('show');
        }
    });
    //$("html").off('click');
});

$oldPsw = $("#old-psw");
$newPsw = $("#new-psw");
$confirmPsw = $("#confirm-psw");
$span1 = $("#span1");
$span2 = $("#span2");
$span3 = $("#span3");
$("#change-psd-link").click(function () {
    $("#change-password").modal('show');
    $newPsw.focus();
});
var state1 = 0;
var state2 = 0;
var state3 = 0;
$oldPsw.change(function () {
    if (!$oldPsw.val()) {
        $span1.text('此项不能为空');
        state1 = 0;
        $oldPsw.focus();
    }
    else if ($oldPsw.val().length < 8) {
        $span1.text('密码长度不能少于8位')
        $oldPsw.focus();
        state1 = 0;
    }
    else if (checkStr($oldPsw.val())) {
        $span1.text('禁止输入特殊字符');
        $oldPsw.focus();
        state1 = 0;
    }
    else {
        $span1.text('');
        state1 = 1;
    }
})

$newPsw.change(function () {
    if (!$newPsw.val()) {
        $span2.text('此项不能为空');
        state2 = 0;
        $newPsw.focus();
    }
    else if ($newPsw.val().length < 8) {
        $span2.text('密码长度不能少于8位')
        $newPsw.focus();
        state2 = 0;
    }
    else if (checkStr($newPsw.val())) {
        $span2.text('禁止输入特殊字符');
        $newPsw.focus();
        state2 = 0;
    }
    else {
        $span2.text('');
        state2 = 1;
    }
})


$confirmPsw.change(function () {
    if (!$confirmPsw.val()) {
        $span3.text('此项不能为空');
        state3 = 0;
        $confirmPsw.focus();
    }
    else if (checkStr($confirmPsw.val())) {
        $span3.text('禁止输入特殊字符');
        $confirmPsw.focus();
        state3 = 0;
    }
    else if ($newPsw.val() != $confirmPsw.val()) {
        $span3.text('两次新密码不一致');
        $newPsw.focus();
        state3 = 0;
    }
    else {
        $span3.text('');
        state3 = 1;
        console.log(state3);
    }
})
$("#change_psd_btn").click(function () {
    if (state1 && state2 && state3) {
        $.ajax({
            url: 'changePsd.php',
            type: 'post',
            data: {
                username: getcookie("username"),
                new_password: md5($confirmPsw.val() + 'admin'),
                old_password: md5($oldPsw.val() + 'admin')
            },
            success: function (data) {
                $span3.text(data);
            },
            fail: function () {
                $oldPsw.focus();
                $span1.text('原密码输入有误');
            }
        })
    }
})

$accountName = $("#account_name");
$accountPsw = $("#account-psw");
$accountConfirmPsw= $("#account-confirm-psw");
$span4 = $("#span4");
$span5 = $("#span5");
$span6 = $("#span6");
$("#add-account").click(function () {
    $("#add-account-modal").modal('show');
    $accountName.focus();
});
var state4 = 0;
var state5 = 0;
var state6 = 0;
$accountName.change(function () {
    if (!$accountName.val()) {
        $span4.text('此项不能为空');
        state4 = 0;
        $accountName.focus();
    }
    else if ($accountName.val().length < 6) {
        $span4.text('账户长度不能少于6位')
        $accountName.focus();
        state4 = 0;
    }
    else if (checkStr($accountName.val())) {
        $span4.text('禁止输入特殊字符');
        $accountName.focus();
        state4 = 0;
    }
    else {
        $span4.text('');
        state4 = 1;
    }
})

$accountPsw.change(function () {
    if (!$accountPsw.val()) {
        $span5.text('此项不能为空');
        state5 = 0;
        $accountPsw.focus();
    }
    else if ($accountPsw.val().length < 8) {
        $span5.text('密码长度不能少于8位')
        $accountPsw.focus();
        state5 = 0;
    }
    else if (checkStr($accountPsw.val())) {
        $span5.text('禁止输入特殊字符');
        $accountPsw.focus();
        state5 = 0;
    }
    else {
        $span5.text('');
        state5 = 1;
    }
})


$accountConfirmPsw.change(function () {
    if (!$accountConfirmPsw.val()) {
        $span6.text('此项不能为空');
        state6 = 0;
        $accountConfirmPsw.focus();
    }
    else if (checkStr($accountConfirmPsw.val())) {
        $span6.text('禁止输入特殊字符');
        $accountConfirmPsw.focus();
        state6 = 0;
    }
    else if ($accountConfirmPsw.val() != $accountPsw.val()) {
        $span6.text('两次输入的密码不一致');
        state6 = 0;
    }
    else {
        $span6.text('');
        state6 = 1;
        console.log(state6);
    }
})
$("#add-account-btn").click(function () {
    if (state4 && state5 && state6) {
        $.ajax({
            url: 'addAccount.php',
            type: 'post',
            data: {
                username: $accountName.val(),
                password: md5($accountConfirmPsw.val() + 'admin')
            },
            success: function (data) {
                $span6.text(data);
            },
            fail: function () {
                $accountName.focus();
                $span6.text('添加账号失败');
            }
        })
    }
})

$('#change-password,#add-account-modal').on('hidden.bs.modal', function (e) {
    console.log('123');
    $(this).find('form').get(0).reset();
    $(this).find('span.promptSpan').text('');
})

