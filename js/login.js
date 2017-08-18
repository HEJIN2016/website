/*登录页js*/

/*记住密码*/

if($("#remember").get(0).checked){
	
}

$("#login").submit(function(event) {
    return false;
});

$("#loginbtn").click(function () {
	if ($("#username").val()&&$("#password").val) {
        $.ajax({
            url: 'login.php',
            type: 'POST',
            data: {
                'username': $("#username").val(),
                'password': md5($("#password").val() + 'admin')
            }
        })
            .done(function (data) {
                console.log(md5($("#password").val()));
                console.log($("#username").val());
                console.log(data);
                setcookie("username", $("#username").val(), 30);
                setcookie("password", $("#password").val(), 30);
                $("html").append("<script>" + data + "</script>");
                return false;
            })
            .fail(function () {
                console.log("error");
                return false;
            })
            .always(function () {
                console.log("complete");
            });
    }
})

$(function(){
	var user = getcookie('username');
	var pass = getcookie('password');
	if(user&&pass){
		$("#username").val(user);
		$("#password").val(pass);
	}
})

// $("#username").keyup(function(){
//     $(this).val($(this).val().replace(/[^\w\.\/]/ig,''));
// })

