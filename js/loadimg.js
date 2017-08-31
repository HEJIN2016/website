var $img = $(".imgload");
var $window = $(window);
$window .scroll(function(){
    $img.each(function(){
        if ($(this).attr('data-url')){
            if ($(this).offset().top < ($window.height() + $window.scrollTop()) + 20){
                $(this).css('background-image',$(this).attr('data-url'));
            }
        }
    })
})