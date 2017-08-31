$(function(){
    //Initiat WOW JS
    new WOW().init();
    $("#leaveWord").submit(function(){return false;})
    $("#submit").click(function(){
        var reg =  /(\d{11})|^((\d{7,8})|(\d{4}|\d{3})-(\d{7,8})|(\d{4}|\d{3})-(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1})|(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1}))$/;
        if (!reg.test($("#tel").val())){
            $("#content").html("请输入正确的固定电话或手机号码");
            $("#error-modal").modal('show');
            $("#tel").focus();
        }
        else{
            var date = new Date();
            $(".span-notice").css('display','none');
            $.ajax({
                url: 'leaveword.php',
                type: 'post',
                data: {
                    phone: $("#tel").val() + "",
                    name: $("#name").val() + "",
                    word: $("#word").val() + "",
                    time: curentDateTime()
                },
                success: function(data){
                    if (data==1){
                        $("#success-modal").modal('show');
                    }
                    else{ 
					    $("#content").html("留言失败，请重新操作");
                        $("#error-modal").modal('show');
					}                
                },
                error: function(){
                    $("#content").html("留言失败，请重新操作");
                        $("#error-modal").modal('show');                  
                }
            })
        }
    })
});
