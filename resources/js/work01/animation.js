
export function slideChange(){
	let sliderItems = document.getElementsByClassName('js-slider-item');
	let currentSlideNum = 0;
	console.log(sliderItems.length);
	function change(){
		if(currentSlideNum === sliderItems.length-1){
			sliderItems[currentSlideNum].classList.remove('show');
			sliderItems[0].classList.add('show');
			currentSlideNum = 0;
		}else{
			sliderItems[currentSlideNum].classList.remove('show');
			sliderItems[currentSlideNum+1].classList.add('show');
			currentSlideNum++;
		
		}
		

	}
	let changeInterval = setInterval(change, 4000);
	setInterval(changeInterval, 5000);

}

export function swipeFind(){
  $('.js-click-slider-item').on('touchstart', onTouchStart); //指が触れたか検知
  $('.js-click-slider-item').on('touchmove', onTouchMove); //指が動いたか検知
  $('.js-click-slider-item').on('touchend', onTouchEnd); //指が離れたか検知
  var direction, position;
  let $sliderItems = $('.js-click-slider-item');
  let currentSlideNum = 0;
  let $slideItemNum = $('.js-click-slider-item').length;
  let $slideNumShow= $('.js-slide-num');
  let $next = $('.js-click-next');
  let $prev = $('.js-click-prev');

  //スワイプ開始時の横方向の座標を格納
  function onTouchStart(event) {
    position = getPosition(event);
    direction = ''; //一度リセットする
  }

  //スワイプの方向（left／right）を取得
  function onTouchMove(event) {
    if (position - getPosition(event) > 70) { // 70px以上移動しなければスワイプと判断しない
      direction = 'left'; //左と検知
    } else if (position - getPosition(event) < -70){  // 70px以上移動しなければスワイプと判断しない
      direction = 'right'; //右と検知
    }
  }

  function onTouchEnd(event) {
    if (direction == 'right'){
      //alert('右だよ');
      if(currentSlideNum>0){
			currentSlideNum--;
			$($sliderItems[currentSlideNum+1]).removeClass('show');
			$($sliderItems[currentSlideNum]).addClass('show');
			$slideNumShow.text(currentSlideNum+1 + '/' + $slideItemNum);
		}

    } else if (direction == 'left'){
      // alert('左だよ');
       if(currentSlideNum<$slideItemNum-1){
			currentSlideNum++;
			$($sliderItems[currentSlideNum-1]).removeClass('show');
			$($sliderItems[currentSlideNum]).addClass('show');
			$slideNumShow.text(currentSlideNum+1 + '/' + $slideItemNum);
		}
    }
  }
  //横方向の座標を取得
  function getPosition(event) {
    return event.originalEvent.touches[0].pageX;
  }
}


export function clickSlide(){

	let $sliderItems = $('.js-click-slider-item');
	let currentSlideNum = 0;
	let $slideItemNum = $('.js-click-slider-item').length;
	let $slideNumShow= $('.js-slide-num');
	let $next = $('.js-click-next');
	let $prev = $('.js-click-prev');
	$next.on('click', function(){
		if(currentSlideNum<$slideItemNum-1){
			currentSlideNum++;
			$($sliderItems[currentSlideNum-1]).removeClass('show');
			$($sliderItems[currentSlideNum]).addClass('show');
			$slideNumShow.text(currentSlideNum+1 + '/' + $slideItemNum);
		}
		
	})
	$prev.on('click', function(){
		if(currentSlideNum>0){
			currentSlideNum--;
			$($sliderItems[currentSlideNum+1]).removeClass('show');
			$($sliderItems[currentSlideNum]).addClass('show');
			$slideNumShow.text(currentSlideNum+1 + '/' + $slideItemNum);
		}
		
	})
}

export function showSlider(e){
	let $slider = $('.js-click-slider');
	let $modal_bg = $('.js-modal-bg');
	let $close_button = $('.js-close-modal');
	let $open_button = $('.js-slider-button');
	let speed = 400;
	function disableScroll(event) {
		  event.preventDefault();
		}
	$($open_button).on('click', function(){

		$modal_bg.fadeIn(speed);
		$slider.fadeIn(speed);
		$('body').addClass('no-scroll');
		document.addEventListener('touchmove', disableScroll, { passive: false });

	})
	$($close_button).on('click', function(){

		$modal_bg.fadeOut(speed);
		$slider.fadeOut(speed);
		$('body').removeClass('no-scroll');
		document.removeEventListener('touchmove', disableScroll, { passive: false });

	})
	$($modal_bg).on('click', function(e){
		if($(e.target).hasClass('js-modal-bg')){
			
			$modal_bg.fadeOut(speed);
			$slider.fadeOut(speed);
			$('body').removeClass('no-scroll');
			document.removeEventListener('touchmove', disableScroll, { passive: false });


		}else{
			return;
			

		}
	
	})

}



