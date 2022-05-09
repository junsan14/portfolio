@extends('layouts.work02')
@section('content')

<div class="top row">
	<div class="slider col-sm-8">
		<div class="js-slider-item slider-item show">
			<img src="{{asset('images/work02/top.jpeg')}}">
		</div>
		<div class="js-slider-item slider-item">
			<img src="{{asset('images/work02/03.jpeg')}}">
		</div>


	</div>
	<div class="col-sm-4 top-desc">
	<h2 class="top-title">長崎コーヒー</h2>
	鉄製の手廻し焙煎機で焙煎した、<br>珈琲豆を販売しています。<br>
	少量ずつ丁寧に焙煎した新鮮な珈琲豆を、<br>どうぞお楽しみください。

	</div>
</div>


@endsection
