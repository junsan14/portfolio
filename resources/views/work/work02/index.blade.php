@extends('layouts.work02')
@section('content')

<div class="top row">
	<div class="slider col-sm-8">
		<div class="js-slider-item slider-item show">
			<img src="{{asset('images/portfolio/port03.jpeg')}}">
		</div>
		<div class="js-slider-item slider-item">
			<img src="{{asset('images/portfolio/port06.jpeg')}}">
		</div>
		<div class="js-slider-item slider-item">
			<img src="{{asset('images/portfolio/port08.jpeg')}}">
		</div>
		<div class="js-slider-item slider-item">
			<img src="{{asset('images/portfolio/port09.jpeg')}}">
		</div>
		<div class="js-slider-item slider-item">
			<img src="{{asset('images/portfolio/port10.jpeg')}}">
		</div>


	</div>
	<div class="col-sm-4 top-desc">
	<h2 class="top-title">お店のタイトル</h2>
	お店のキャッチコピー<br>お店のコメント<br>
	お店のコメントお店のコメントお店のコメントお店のコメント<br>

	</div>
</div>


@endsection
