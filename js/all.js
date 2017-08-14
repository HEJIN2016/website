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