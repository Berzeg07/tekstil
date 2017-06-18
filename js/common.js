$(document).ready(function(){

	// Мобильное меню 
	$(".fa-bars").click(function(m){
		m.preventDefault();
		$(".main-menu").slideToggle(500);
	});
	// Конец Мобильное меню

    // Fancybox
    $("a[rel=group]").fancybox({
        'transitionIn' : 'none',
        'transitionOut' : 'none',
        'titlePosition' : 'over',
        'titleFormat' : function(title, currentArray, currentIndex, currentOpts) {
            return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
        }
    });



    //slider product + tab

    var owlcart = $(".owl-product-carousel");
    owlcart.owlCarousel({
        loop:true,
        nav:true,
        autoplay:false,
        smartSpeed:1000,
        margin:0,
        mouseDrag:false,
        touchDrag: false,
        center:false,
        navText:['<span class="prev-left"></span>','<span class="next-right"></span>'],
        responsive:{
            0:{
                items:1
            },
            320:{
                items:1
            },
            750:{
                items:1
            },
            1200:{
                items:1
            }
        }
    });
    $('.product__tabs a').on('click', function (e) {
        e.preventDefault();
        $('.product__tabs a').removeClass('product__activetab');
        $(this).addClass('product__activetab');
        var tab = $(this).attr('href');
        tab = '.' + tab;
        $('.product__tab-block').not(tab).css({'height':'0'});
        $(tab).css({'height':'auto'});
    });
/////////////////






});//END READY
