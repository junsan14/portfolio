

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
		console.log(currentSlideNum);
		

	}
	let changeInterval = setInterval(change, 4000);
	setInterval(changeInterval, 5000);

}
