(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		 $(".sc-progetti-showcase").lightSlider({
            item: 3,
            auto:true,
            loop:true
         });
        
        $(".sc-news-block").lightSlider({
            item: 1,
            auto:true,
            pause:5000,
            loop:true,
            adaptiveHeight:false
         });
		
	});
	
})(jQuery, this);
