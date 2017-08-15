function arrayCount(myArray)
{
    var n=0;
    for(var i in myArray) {
        n++;
    }
    return n;
}
function getString(s,n){
    s =  delHtmlTag(s);  //html替换
    if(s.length > n){
        return s.substring(0,n);
    }
    return s;
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