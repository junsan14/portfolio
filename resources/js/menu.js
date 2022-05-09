
function disableScroll(event) {
  event.preventDefault();
}

export function smartMenu(){
	 $('.smart-menu').on('click', function(){
    	$(this).toggleClass('active');
    	$(this).siblings('.menu').toggleClass('active');
        $('body').toggleClass('no-scroll');
        if($('body').hasClass('no-scroll')){
            document.addEventListener('touchmove', disableScroll, { passive: false });
        }else{
            document.removeEventListener('touchmove', disableScroll, { passive: false });

        }
    })
    $('.menu-item').on('click', function(){
    	$('.menu').removeClass('active');
    	$('.smart-menu').removeClass('active');
    })

    $('.menu-item').hover(function(){
    	$(this).children('.sub-menu').slideDown('500', ()=>{$('.sub-menu').stop(false,true)});
    },function(){
    	$(this).children('.sub-menu').slideUp('500', ()=>{$('.sub-menu').stop(false,true)});

    })

    $('.accordion-btn').on('click',function(){
        let that = $(this);

        if(!that.hasClass('active')){
            that.addClass('active');
            that.siblings('.accordion-content').slideDown(500)
        }else{
            that.removeClass('active');
            that.siblings('.accordion-content').slideUp(500);

        }
      
    })
}


