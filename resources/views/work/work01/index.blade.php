@extends('layouts.work01')

@section('content')

			

		<div class="row top">
		  <div class="col-sm-6">
	        <div class="slider js-slider col-content">
				<div class="slider-item js-slider-item show">
					<img src="{{asset('images/work01/top01.jpeg')}}">
				</div>
				<div class="slider-item js-slider-item">
					<img src="{{asset('images/work01/top02.jpeg')}}">
				</div>
				
				<div class="slider-item js-slider-item">
					<img src="{{asset('images/work01/top03.jpeg')}}">
				</div>
				<div class="slider-item js-slider-item">
					<img src="{{asset('images/work01/top04.jpeg')}}">
				</div>
				<div class="slider-item js-slider-item">
					<img src="{{asset('images/work01/top05.jpeg')}}">
				</div>
			</div>
			<div class="shop-smart">			
					<h2 class="shop-name"> 韓国惣菜BANCHAN </h2>
					<h4 class="shop-desc"> 路地裏の小さな韓国 </h4>
				</div>
		  </div>

			  <div class="col-sm-6">
		        <div class="col-content shop">			
					<h2 class="shop-name"> 韓国惣菜BANCHAN </h2>
					<h4 class="shop-desc"> 路地裏の小さな韓国 </h4>
				</div>
			  </div>

		</div>


		<div class="row" id="about">
		  <div class="col-sm-5">
	        <div class="col-content js-fadeIn">
				
				<h2 class="col-title"> ABOUT </h2><br>

				<div class="col-desc">
					
					美味しいもの食べたいけど作る元気がない..<br>
					ママ友とたまには美味しいものを食べたい！<br><br>
					
					<h5>そんな時はバンチャンに<br>おまかせください！</h5>

					
					多国籍夫婦がアットホームな韓国料理をお届けします

				</div>

				<div class="profile">
					<div class="profile-person">
						<img src="{{asset('images/work01/profile_person01.jpg')}}" class="profile-image">
						<div class="profile-desc">
							As an American<br>
						Former resort hotel cheff<br>
						</div>
					</div>
					<div class="profile-person">
						<img src="{{asset('images/work01/profile_person02.jpg')}}" class="profile-image">
						<div class="profile-desc">
							As a Korean<br>
							Former resort hotel staff<br>
						</div>
					</div>

				</div>

			</div>
		  </div>	
		  <div class="col-sm-6">
		 	<div class="col-pic left js-fadeIn">
	        	<img src="{{asset('images/work01/profile02.jpeg')}}" alt="">
	        </div>
	        <div class="col-pic right js-fadeIn">
	        	<img src="{{asset('images/work01/profile01.jpeg')}}" alt="">
	    	</div>
		  </div>

		</div>

		<div class="row" id="menu" style="flex-direction: row-reverse;">

		  <div class="col-sm-5">
	        <div class="col-content js-fadeIn">
				
				<h2 class="col-title"> MENU </h2><br>
				<table>LUNCH
					<tr><td>BANCHAN定食</td><td>¥1,380</td><td></td>
					<tr><td>プルコギ定食</td><td>¥1,080</td><td>
					<tr><td>豚の甘辛定食</td><td>¥980</td>	
					<tr><td>サムゲタン定食</td><td>¥1,380</td>					
				</table>
				<table >TAKE OUT
					<tr><td>キンパ</td><td>¥580〜</td><td></td>
					<tr><td>どんぶり</td><td>¥650〜</td><td>
					<tr><td>一品</td><td>¥680〜</td>	
					<tr><td>スープ</td><td>¥750〜</td>					
				</table>
				<table>DINNER
					<tr><td>チヂミ</td><td>¥580〜</td><td></td>
					<tr><td>キンパ</td><td>¥580〜</td>
					<tr><td>ビビンバ</td><td>¥750〜</td><td>
					<tr><td>サムゲタン</td><td>¥1,280〜</td>	
										
				</table>
				
					<div class="js-slider-button slider-button">MORE-></div>

			</div>
		  </div>
		  <div class="js-modal-bg modal-bg">
		  			<div class="js-click-prev click-prev"><</div>
					<div class="js-click-slider click-slider">
						<div class="js-close-modal close-modal">×</div>
						<img class="js-click-slider-item click-slider-item show" src="{{asset('images/work01/menu01.jpg')}}" alt="">
						<img class="js-click-slider-item click-slider-item" src="{{asset('images/work01/menu02.jpg')}}" alt="">
						<img class="js-click-slider-item click-slider-item" src="{{asset('images/work01/menu04.jpg')}}" alt="">
						<img class="js-click-slider-item click-slider-item" src="{{asset('images/work01/menu03.jpg')}}" alt="">
						
						<div class="js-slide-num slide-num">1/4</div>
					</div>
					<div class="js-click-next click-next">></div>
						
			</div>
		  <div class="col-sm-7">
		 	<div class="col-pic left js-fadeIn">
	        	<img src="{{asset('images/work01/menutop01.jpg')}}" alt="">
	        </div>
	        <div class="col-pic right js-fadeIn">
	        	<img src="{{asset('images/work01/menutop02.jpg')}}" alt="">
	    	</div>
		  </div>

		  
		</div>

		<div class="row"  id="location">
		  <div class="col-sm-5">
	        <div class="col-content js-fadeIn">
				<h2 class="col-title"> LOCATION </h2><br>
				<table>
					<tr><td>ADDRESS</td><td>神奈川県川崎市麻生区百合ヶ丘2-3-6</td></tr>
					<tr><td>TEL</td><td>044-299-9162</td></tr>
					<tr><td>OPEN</td><td>11:00～21:00</td></tr>
					<tr><td>CLOSE</td><td>日,月（まれに不定休有）</td></tr>
					<tr><td>OTHERS</td><td>三和百合ヶ丘店駐車場2時間無料</td></tr>

				</table>
			</div>
		  </div>
		  <div class="col-sm-7 js-fadeIn">
		 	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d816.5859148135522!2d139.5126406689355!3d35.60845857933962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018fa6e6580d98b%3A0x1aa95a49f180caa8!2z55m-5ZCI44O25LiY6aeF!5e0!3m2!1sja!2sjp!4v1651402376412!5m2!1sja!2sjp" width="100%" height="350" style="border:0;　filter:grayscale(100%);-webkit-filter:grayscale(100%);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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