/*homepage主页*/
$(".menu-list li .slidebar").click(function(event) {
	if($(this).siblings('ul').css('display')=="none"){
	    $(this).siblings('ul').slideDown('1s');
	    // $(this).children('i').eq(1).css('transform','rotate(180deg)');
	    $(this).children('i').eq(1).css('animation','rotateDiv1 1s forwards');
	    $(this).parent().siblings('li').children('ul').slideUp('1s');
	    // $(this).parent().siblings('li').find('i').eq(1).css('transform','rotate(0)');
	    $(this).parent().siblings('li').find('i').eq(1).css('animation','rotateDiv2 1s forwards');
	    for(var i = 0;i < $(this).parent().siblings('li').length;i++){
            var items = $(this).parent().siblings('li').eq(i);
            if(items.children('ul').css('display')!="none"&&items!=$(this)){
	     		items.children('ul').slideUp('1s');
	     		items.find('.icon-arrowdown').css('animation','rotateDiv2 1s forwards');
	     	}
	    }
	}
	else{
		$(this).siblings('ul').slideUp('1s');
	    $(this).children('i').eq(1).css('animation','rotateDiv2 1s forwards');
	}
});

// var divHeight = $(".center-div").height() + parseInt($(".center-div").css("paddingTop")) + parseInt($(".center-div").css("paddingBottom"));
// var height = document.body.scrollHeight;
// var nav_height = $("nav").height();
// $(".center-div").css('margin-top',(height-nav_height-divHeight)/2);
$(".payoff").click(function(event) {
	$(this).children('.after').show();
	$(this).css('borderColor','#7f0');
	$(this).siblings('.payoff').children('.after').hide();
	$(this).siblings('.payoff').css('borderColor','#dedede');
});

var select = 0;
// $(".check-all").get(0).setAttribute('checked',true);
$(".check-all").click(function(event) {
	if (!select) {
		$(".check-all").parents('thead').siblings('tbody').find('input').attr('checked',true);
		select = 1;
	}
	else{
		$(".check-all").parents('thead').siblings('tbody').find('input').attr('checked',false);
		select = 0;
	}
	console.log('123');
	/* Act on the event */
});