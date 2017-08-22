$(function(){
	var version = "V1.0.0.0";
        var client = "fastrender.exe";
        var address = "http://www.fastrender.cn/";
        var file = "download/";
        var time = "2017/08/15";
        $("a.download").attr("href",address+file+version+'/'+client);
        $("p.version").text("最新版本："+ version + "( " + time + "）");
});