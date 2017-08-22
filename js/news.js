
$(function(){
    //Initiat WOW JS
    new WOW().init();
    $.ajax({
        url: 'data.php',
        type: 'GET'
    })
    .done(function(data){
        var newsdata = jQuery.parseJSON(data);
        console.log(typeof(newsdata));
        var index = arrayCount(newsdata);
        console.log(index);
        for(var i =0 ;i < index ; i++){
            var url;
            try {
                url = newsdata[i].content.split("<img src=\"")[1].split("\"")[0];
            }
            catch (e){
                url = "img/news/none.jpg";
            }
           // var url = (!newsdata[i].content.split("<img src=\"")[1].split("\"")[0])?("img/news/none.jpg"):(newsdata[i].content.split("<img src=\"")[1].split("\"")[0]);
            console.log(url);
            var html = "<li onclick=\"javascript:window.location.href='newsdetail.php?number="+ i +"'\">" + "<h3>" + newsdata[i].title + "</h3>" +"<div class='col-lg-9 left-word'><div class='info'><span>" + newsdata[i].author + "</span>" + "<span>"+ newsdata[i].time +"</span>" + "</div><p>" + newsdata[i].firstline + "</p><button class='btn'>Details</button></div><div class='col-lg-3 right-img' style='background:url("+ url +");background-size: cover\'></div><div style='clear: both'></div></li>";
            $(".news-list").append(html);
            //console.log('1');
        }
    })
    .fail(function(){
        alert('抱歉，暂没有相关信息！');
    })
});
