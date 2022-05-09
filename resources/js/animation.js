export function slideFadeIn(){
	let content = $('.js-fadeIn');
	
	function fade(){
		let currentScroll = window.scrollY;
			for(let i=0; i<content.length; i++){
				let contentHeight = window.pageYOffset + content[i].getBoundingClientRect().top*(i+1);
				if(currentScroll*2>contentHeight){
				content[i].classList.add('show');
			}
		}				
	}

	window.addEventListener('scroll', fade);
}



export function fadeOut(){
	$('.js-flash-message').fadeOut(4000);

}

export function slideChange(){
	let sliders = $('.js-slider');
	let currentSlideNum = [0,0];
	
	sliders.each((i,ele)=>{
		let sliderItems = ele.children;

		function change(){
			if(currentSlideNum[i] === sliderItems.length-1){
			sliderItems[currentSlideNum[i]].classList.remove('show');
				sliderItems[0].classList.add('show');
				currentSlideNum[i] = 0;
			}else{
				sliderItems[currentSlideNum[i]].classList.remove('show');
				sliderItems[currentSlideNum[i]+1].classList.add('show');
				currentSlideNum[i]++;
			}
		}
	let changeInterval = setInterval(change, 4000);
	setInterval(changeInterval, 5000);
	})

}

export function confirmCheck(){
	let confirm_btn= $('.confirm-btn');
	confirm_btn.on('click', function(){
		if(window.confirm('本当に削除していいですか?')){
			console.log(true);
			return true;
		}else{
			window.alert('削除中止しました');
			console.log(false);
			return false;
		}
		
	})
}



