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
            $span4.text('用户名长度不能少于6位')
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


    $confirmPsw.change(function () {
        if (!$confirmPsw.val()) {
            $span6.text('此项不能为空');
            state6 = 0;
            $confirmPsw.focus();
        }
        else if (checkStr($accountConfirmPsw.val())) {
            $span6.text('禁止输入特殊字符');
            $confirmPsw.focus();
            state6 = 0;
        }
        else if ($accountConfirmPsw.val() != $accountPsw.val()) {
            $span6.text('两次新密码不一致');
            $accountPsw.focus();
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
                    $span4.text('添加账号失败');
                }
            })
        }
    })

