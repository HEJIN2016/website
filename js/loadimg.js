var $img = $(".imgload");
var $window = $(window);
$window .scroll(function(){
    $img.each(function(){
        if ($(this).attr('background-url')){
            if ($(this).offset().top < $window.height() + $window.scrollTop()){
                $(this).css('background-image',$(this).attr('data-url'));
            }
        }
    })
})