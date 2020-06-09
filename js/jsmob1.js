$('.slider').slick({
	speed: 300,
	arrows:false
});
$('.slider').on('afterChange', function() {
    var dataId = $('.slick-current').attr("data-slick-index");  
    console.log(dataId);
    if (dataId == 1){
    	$('.slider-indicator__item_firsr').addClass('slider-indicator__item_active');
    	$('.slider-indicator__item_third').removeClass('slider-indicator__item_active');
    	$('.slider-indicator__item_second').removeClass('slider-indicator__item_active');
    	dataId = null;
    }else if(dataId == 2){
    	$('.slider-indicator__item_second').addClass('slider-indicator__item_active');
    	$('.slider-indicator__item_firsr').removeClass('slider-indicator__item_active');
    	$('.slider-indicator__item_third').removeClass('slider-indicator__item_active');
    	dataId = null;
    }else if(dataId == 0){
    	$('.slider-indicator__item_firsr').removeClass('slider-indicator__item_active');
    	$('.slider-indicator__item_second').removeClass('slider-indicator__item_active');
    	$('.slider-indicator__item_third').addClass('slider-indicator__item_active');
    	dataId = null;
    }
});