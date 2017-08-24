$(function(){
    //Initiat WOW JS
    new WOW().init();
    $("#leaveWord").submit(function(){
        var reg =  /(\d{11})|^((\d{7,8})|(\d{4}|\d{3})-(\d{7,8})|(\d{4}|\d{3})-(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1})|(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1}))$/;
        if (!reg.test($("#tel").val())){
            $(".span-notice").css('display','block');
            $("#tel").focus();
            return false;
        }
        else{
            var date = new Date();
            $(".span-notice").css('display','none');
            $.ajax({
                url: 'leaveword.php',
                type: 'post',
                data: {
                    ip: "<?php echo ($_SERVER["REMOTE_ADDR"])?>",
                    phone: $("#tel").val(),
                    name: $("#name").val(),
                    word: $("#word").val(),
                    time: curentDateTime()
                },
                success: function(data){
                    if (data==1){
                        alert('留言成功');
                    }
                    else alert("留言失败,请输入正确的数据格式");
                    return false;

                },
                error: function(){
                    alert("留言失败,请输入正确的数据格式");
                    return false;
                }
            })
            return false;
        }
    })
});
