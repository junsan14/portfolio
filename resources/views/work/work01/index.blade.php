@extends('layouts.work01')

@section('content')

			

		<div class="row top">
		  <div class="col-sm-6">
	        <div class="slider js-slider col-content">
				<div class="slider-item js-slider-item show">
					<img src="{{asset('images/portfolio/port01.jpeg')}}">
				</div>
				<div class="slider-item js-slider-item">
					<img src="{{asset('images/portfolio/port02.jpeg')}}">
				</div>
				
				<div class="slider-item js-slider-item">
					<img src="{{asset('images/portfolio/port03.jpeg')}}">
				</div>
				<div class="slider-item js-slider-item">
					<img src="{{asset('images/portfolio/port04.jpeg')}}">
				</div>
				<div class="slider-item js-slider-item">
					<img src="{{asset('images/portfolio/port05.jpeg')}}">
				</div>
			</div>
			<div class="shop-smart">			
					<h2 class="shop-name"> お店の名前お店の名前 </h2>
					<h4 class="shop-desc"> サブタイトルサブタイトル </h4>
				</div>
		  </div>

			  <div class="col-sm-6">
		        <div class="col-content shop">			
					<h2 class="shop-name">  お店の名前お店の名前  </h2>
					<h4 class="shop-desc"> サブタイトルサブタイトル </h4>
				</div>
			  </div>

		</div>


		<div class="row" id="about">
		  <div class="col-sm-5">
	        <div class="col-content js-fadeIn">
				
				<h2 class="col-title"> ABOUT </h2><br>

				<div class="col-desc">
					
					お店の情報お店の情報お店の情報お店の情報<br>
					お店の情報お店の情報お店の情報お店の情報<br><br>
					
					<h5>お店の情報お店の情報お店の情報お店の情報</h5>

					
					お店の情報お店の情報お店の情報お店の情報

				</div>

				<div class="profile">
					<div class="profile-person">
						<img src="{{asset('images/profile.jpg')}}" class="profile-image">
						<div class="profile-desc">
							プロフィール情報<br>
							プロフィール情報<br>
						</div>
					</div>

				</div>

			</div>
		  </div>	
		  <div class="col-sm-6">
		 	<div class="col-pic left js-fadeIn">
	        	<img src="{{asset('images/portfolio/land01.jpeg')}}" alt="">
	        </div>
	        <div class="col-pic right js-fadeIn">
	        	<img src="{{asset('images/portfolio/land02.jpeg')}}" alt="">
	    	</div>
		  </div>

		</div>

		<div class="row" id="menu" style="flex-direction: row-reverse;">

		  <div class="col-sm-5">
	        <div class="col-content js-fadeIn">
				
				<h2 class="col-title"> MENU </h2><br>
				<table>LUNCH
					<tr><td>メニュー名1</td><td>¥1,380</td><td></td>
					<tr><td>メニュー名2</td><td>¥1,080</td><td>
					<tr><td>メニュー名3</td><td>¥980</td>	
					<tr><td>メニュー名4</td><td>¥1,380</td>					
				</table>
				<table >TAKE OUT
					<tr><td>メニュー名1</td><td>¥580〜</td><td></td>
					<tr><td>メニュー名2</td><td>¥650〜</td><td>
					<tr><td>メニュー名3</td><td>¥680〜</td>	
					<tr><td>メニュー名4</td><td>¥750〜</td>					
				</table>
				<table>DINNER
					<tr><td>メニュー名1</td><td>¥580〜</td><td></td>
					<tr><td>メニュー名2</td><td>¥580〜</td>
					<tr><td>メニュー名3</td><td>¥750〜</td><td>
					<tr><td>メニュー名4</td><td>¥1,280〜</td>	
										
				</table>
				
					<div class="js-slider-button slider-button">MORE-></div>

			</div>
		  </div>
		  <div class="js-modal-bg modal-bg">
		  			<div class="js-click-prev click-prev"><</div>
					<div class="js-click-slider click-slider">
						<div class="js-close-modal close-modal">×</div>
						<img class="js-click-slider-item click-slider-item show" src="{{asset('images/portfolio/land07.jpeg')}}" alt="">
						<img class="js-click-slider-item click-slider-item" src="{{asset('images/portfolio/land08.jpeg')}}" alt="">
						<img class="js-click-slider-item click-slider-item" src="{{asset('images/portfolio/land09.jpeg')}}" alt="">
						<img class="js-click-slider-item click-slider-item" src="{{asset('images/portfolio/land10.jpeg')}}" alt="">
						
						<div class="js-slide-num slide-num">1/4</div>
					</div>
					<div class="js-click-next click-next">></div>
						
			</div>
		  <div class="col-sm-7">
		 	<div class="col-pic left js-fadeIn">
	        	<img src="{{asset('images/portfolio/land04.jpeg')}}" alt="">
	        </div>
	        <div class="col-pic right js-fadeIn">
	        	<img src="{{asset('images/portfolio/land05.jpeg')}}" alt="">
	    	</div>
		  </div>

		  
		</div>

		<div class="row"  id="location">
		  <div class="col-sm-5">
	        <div class="col-content js-fadeIn">
				<h2 class="col-title"> LOCATION </h2><br>
				<table>
					<tr><td>ADDRESS</td><td>〒110-0005 東京都台東区上野７丁目</td></tr>
					<tr><td>TEL</td><td>0120-111-111</td></tr>
					<tr><td>OPEN</td><td>11:00～21:00</td></tr>
					<tr><td>CLOSE</td><td>不定休</td></tr>
					

				</table>
			</div>
		  </div>
		  <div class="col-sm-7 js-fadeIn">
		 	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12958.287764465273!2d139.76265314999998!3d35.71215005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188e9e93d3060b%3A0x6c89b36d7b4f9244!2z5LiK6YeO6aeF!5e0!3m2!1sja!2sjp!4v1652155598951!5m2!1sja!2sjp" width="100%" height="400px" style="border:0;filter:grayscale(100%);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		  </div>
		</div>
	
		<div class="row contact js-fadeIn"  id="contact">

		<h2 class="col-title"> CONTACT </h2><br>
		<form method="POST" action="{{ route('contact.confirm') }}">
	    @csrf
	    	<div class="mb-3">
			  <label for="exampleFormControlInput1" class="form-label">TITLE</label>
			  <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="{{old('title')}}">
			</div>
	    	<div class="mb-3">
			  <label for="exampleFormControlInput1" class="form-label">Email address</label>
			  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" value="{{old('email')}}">
			</div>

			<div class="mb-3">
			  <label for="exampleFormControlTextarea1" class="form-label">内容</label>
			  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body">{{old('body')}}</textarea>
			</div>
			<div class="col-auto">
			    <button type="submit" class="btn btn-primary mb-3" style="float: right;">内容を確認</button>
			 </div>
	    </form>
		  
		</div>



@endsection