(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		 $(".sc-progetti-showcase").lightSlider({
            item: 3,
            auto:true,
            loop:true,
             responsive : [
                {
                    breakpoint:800,
                    settings: {
                        item:2,
                        slideMove:1,
                        slideMargin:6,
                      }
                },
                 {
                    breakpoint:600,
                    settings: {
                        item:1,
                        slideMove:1,
                        slideMargin:6,
                      }
                }
            ]
         });
        
        $(".sc-news-block").lightSlider({
            item: 1,
            auto:true,
            pause:5000,
            loop:true,
            adaptiveHeight:false
         });
        
        $('#nav-icon3').click(function(){
            //$(this).addClass('open');
            $('body').addClass('nav-open');
            return false;
        });
        
        $('.mobile-nav-close').click(function(){
            $('body').removeClass('nav-open');
            return false;
        });
		
	});
	
})(jQuery, this);
