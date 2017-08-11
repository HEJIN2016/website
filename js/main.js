$(function(){
	var filterList={
		init: function(){
			$("#picture_list").mixitup({
				targetSelector: '.works-picture',
				filterSelector: '.link',
				effects: ['fade'],
				easing: 'snap',
				onMixEnd:  filterList.hoverEffect()
			});
		},

		hoverEffect: function(){

		}
	};

	filterList.init();
});