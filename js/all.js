String.prototype.deleteBlank = function (){
    return this.replace(/\s/g, '');
}//删除字符串空格
function arrayCount(myArray)
{
    var n=0;
    for(var i in myArray) {
        n++;
    }
    return n;
}
function getString(s,n){
    s =  deleteHtml(s).deleteBlank();  //html替换
    if(s.length > n){
        return s.substring(0,n);
    }
    return s;
}

function deleteHtml(str) {
    str = str.replace(/<\/?[^>]*>/g,''); //去除HTML tag
    str.value = str.replace(/[ | ]*\n/g,'\n'); //去除行尾空白
    str = str.replace(/\n[\s| | ]*\r/g,'\n'); //去除多余空行
    return str;
}

function delHtmlTag(str)
{
    return str.replace(/<[^>]+>/g,"");//去掉所有的html标记
}

function curentTime()
{
    var now = new Date();

    var year = now.getFullYear();       //年
    var month = now.getMonth() + 1;     //月
    var day = now.getDate();            //日

    var clock = year + "-";

    if(month < 10)
        clock += "0";

    clock += month + "-";

    if(day < 10)
        clock += "0";
    clock += day;
    return(clock);
}